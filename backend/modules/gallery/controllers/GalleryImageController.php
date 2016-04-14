<?php

namespace backend\modules\gallery\controllers;

use Yii;
use backend\modules\gallery\models\GalleryImage;
use backend\modules\gallery\models\GalleryImageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Json;
/**
 * GalleryImageController implements the CRUD actions for GalleryImage model.
 */
class GalleryImageController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all GalleryImage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GalleryImageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GalleryImage model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new GalleryImage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GalleryImage();

        if ($model->load(Yii::$app->request->post())) {
            $model->date_enter = date('d/m/Y');
            $imagename = $model->state_id;
            $model->file = UploadedFile::getInstance($model,'file');
            
            $model->image = 'uploads/'.$imagename.'.'.$model->file->extension;

            if($model->save()){
                $model->file->saveAs('uploads/'.$imagename.'.'.$model->file->extension);
                
                return $this->redirect(['view', 'id' => $model->id]);
            }

            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing GalleryImage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing GalleryImage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GalleryImage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return GalleryImage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GalleryImage::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionUpload()
{
    $imageFile = UploadedFile::getInstanceByName('GalleryImage[image]');
    $directory = \Yii::getAlias('uploads/') . DIRECTORY_SEPARATOR . Yii::$app->session->id . DIRECTORY_SEPARATOR;
    if (!is_dir($directory)) {
        mkdir($directory);
    }
    if ($imageFile) {
        $uid = uniqid(time(), true);
        $fileName = $uid . '.' . $imageFile->extension;
        $filePath = $directory . $fileName;
        if ($imageFile->saveAs($filePath)) {
            $path = 'uploads/' . Yii::$app->session->id . DIRECTORY_SEPARATOR . $fileName;
           return Json::encode([
                'files' => [[
                    'name' => $fileName,
                    'size' => $imageFile->size,
                    "url" => $path,
                    "thumbnailUrl" => $path,
                    "deleteUrl" => 'padam?name=' . $fileName, 
                    "deleteType" => "POST"
                ]]
            ]);
        }
    }
    return '';
}
public function actionPadam($name)
{
    $directory = \Yii::getAlias('uploads/') . DIRECTORY_SEPARATOR . Yii::$app->session->id;
    if (is_file($directory . DIRECTORY_SEPARATOR . $name)) {
        unlink($directory . DIRECTORY_SEPARATOR . $name);
    }
    $files = FileHelper::findFiles($directory);
    $output = [];
    foreach ($files as $file){
        $path = 'uploads/' . Yii::$app->session->id . DIRECTORY_SEPARATOR . basename($file);
        $output['files'][] = [
            'name' => basename($file),
            'size' => filesize($file),
            "url" => $path,
            "thumbnailUrl" => $path,
            "deleteUrl" => 'uploads/' . basename($file),
            "deleteType" => "POST"
        ];
    }
    return Json::encode($output);
}
}
