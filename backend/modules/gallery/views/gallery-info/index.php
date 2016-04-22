<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\gallery\models\GalleryInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallery Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gallery Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'state_id',
            'program_id',
            'date_enter',
            'enter_by',
            // 'date_update',
            // 'update_by',

            //['class' => 'yii\grid\ActionColumn'],

            [
                'header' => 'Tindakan',
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{galeri}  |  {lihat}  |  {kemaskini}  |  {buang}',
                    'buttons' => [
                        'galeri' => function ($url, $model) {
                            return Html::a('Galeri', 
                                    $url,['title'=> Yii::t('app','Galeri')]);

                        },
                        'lihat' => function ($url, $model) {
                            return Html::a('Lihat', 
                                    $url,['title'=> Yii::t('app','Lihat')]);

                        },
                        'kemaskini' => function ($url, $model) {
                            return Html::a('Edit', $url, [
                                        'title' => Yii::t('app', 'Kemaskini'),
                            ]);
                        },

                        'buang' => function ($url, $model) {
                            return Html::a('Buang', $url, [
                                        'title' => Yii::t('app', 'Buang'),
                            ]);

                        },

                    ],
                    'urlCreator' => function ($action, $model, $key, $index) {
                        if ($action === 'galeri') {
                            $url = ['gallery-info/gallery','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'lihat') {
                            $url = ['gallery-info/view','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'kemaskini') {
                            $url = ['gallery-info/update','id'=>$model->id];
                            return $url;
                        }
                        if ($action === 'buang') {
                            $url = ['gallery-info/delete','id'=>$model->id];
                            return $url;
                        }
                    }
                ],



        ],
    ]); ?>

</div>
