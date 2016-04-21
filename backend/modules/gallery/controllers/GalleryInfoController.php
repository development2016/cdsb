<?php

namespace backend\modules\gallery\controllers;

use Yii;
use backend\modules\gallery\models\GalleryInfo;
use backend\modules\gallery\models\GalleryImages;
use backend\modules\gallery\models\GalleryInfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GalleryInfoController implements the CRUD actions for GalleryInfo model.
 */
class GalleryInfoController extends Controller
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
     * Lists all GalleryInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GalleryInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GalleryInfo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $models = GalleryImages::find()->where(['gallery_info_id'=>$id])->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'models' => $models,
        ]);
    }

    /**
     * Creates a new GalleryInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GalleryInfo();
        $models = [new GalleryImages];

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {

                $last_id = Yii::$app->db->getLastInsertID();

                $count = count($_POST['GalleryImages']['path']);

                for ($i=0; $i < $count; $i++) { 

                    $models = new GalleryImages();
                    $file = UploadedFile::getInstanceByName('GalleryImages[path]['.$i.'][path]');
                    $models->path = 'uploads/'.$file->name;
                    $file->saveAs('uploads/' . $file->name . '.' . $file->extension);
                    $models->size  = $file->size;
                    $models->type  = $file->type;
                    $models->caption_1 = $_POST['GalleryImages']['path'][$i]['caption_1'];
                    $models->caption_2 = $_POST['GalleryImages']['path'][$i]['caption_2'];
                    $models->gallery_info_id = $last_id;
                    $models->save();
     
                }
            }




            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'models' => (empty($models)) ? [new GalleryImages] : $models,
            ]);
        }
    }

    /**
     * Updates an existing GalleryInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */

    public function actionUpdate($id)
    {
        $this->layout = 'gallery';
        $models = GalleryImages::find()->where(['gallery_info_id'=>$id])->all();
        return $this->render('update', [
            'models' => $models,
        ]);
    }





    /*public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    } */

    /**
     * Deletes an existing GalleryInfo model.
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
     * Finds the GalleryInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return GalleryInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GalleryInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
