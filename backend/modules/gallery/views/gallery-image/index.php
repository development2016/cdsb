<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\gallery\models\GalleryImageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gallery Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-image-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gallery Image', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'state_id',
            'image',
            'caption1',
            'caption2',
            // 'date_enter',
            // 'enter_by',
            // 'date_update',
            // 'update_by',
            // 'program',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
