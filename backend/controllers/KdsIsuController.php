<?php

namespace backend\controllers;

use Yii;
use backend\models\KdsIsu;
use backend\models\KdsIsuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KdsIsuController implements the CRUD actions for KdsIsu model.
 */
class KdsIsuController extends Controller
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

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }
    /**
     * Lists all KdsIsu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KdsIsuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KdsIsu model.
     * @param integer $_id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new KdsIsu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        if ($id == 'isu') {

            $kawasan_perlaksanaan = json_encode($_POST);

            $model = new KdsIsu();

            if ($model->load(Yii::$app->request->post())) {
                $kawasan_perlaksanaan = json_encode($_POST);

                if ($_POST['state_id'] == 21) {

                    $model->state_id = $_POST['state_id'];
                    $model->bahagian_id = $_POST['bahagian_id'];
                    $model->district_id = $_POST['district_id'];
                    $model->sub_base_id = $_POST['sub_base_id'];
                    $model->cluster_id = $_POST['cluster_id'];
                    $model->kampung_id = $_POST['kampung_id'];
                    $model->status_isu = "Aktif";
                    $model->date_enter = date('d/m/Y');
                    $model->save();

                } elseif ($_POST['state_id'] == 22) {

                    $model->state_id = $_POST['state_id'];
                    $model->district_id = $_POST['district_id'];
                    $model->mukim_id = $_POST['mukim_id'];
                    $model->sub_base_id = $_POST['sub_base_id'];
                    $model->cluster_id = $_POST['cluster_id'];
                    $model->kampung_id = $_POST['kampung_id'];
                    $model->status_isu = "Aktif";
                    $model->date_enter = date('d/m/Y');
                    $model->save();

                } else {

                    $model->state_id = $_POST['state_id'];
                    $model->district_id = $_POST['district_id'];
                    $model->sub_base_id = $_POST['sub_base_id'];
                    $model->cluster_id = $_POST['cluster_id'];
                    $model->kampung_id = $_POST['kampung_id'];
                    $model->status_isu = "Aktif";
                    $model->date_enter = date('d/m/Y');
                    $model->save();  

                }


                Yii::$app->getSession()->setFlash('create', 'Maklumat Isu <b>('.$model->nama.')</b> Berjaya Di Simpan');
                return $this->render('create',['model'=>$model,'kawasan_perlaksanaan'=>$kawasan_perlaksanaan]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'kawasan_perlaksanaan' => $kawasan_perlaksanaan,
                ]);
            }

        } else {

            throw new NotFoundHttpException('The requested page does not exist.');
        }

    }

    /**
     * Updates an existing KdsIsu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $_id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => (string)$model->_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing KdsIsu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $_id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KdsIsu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $_id
     * @return KdsIsu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = KdsIsu::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
