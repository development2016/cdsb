<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KdsProgramSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kds Programs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-program-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kds Program', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'nama_program',
            'organisasi_id',
            'sector_id',
            'field_id',
            // 'program_milestone',
            // 'program_status',
            // 'date_enter',
            // 'enter_by',
            // 'date_update',
            // 'update_by',
            // 'tarikh_pendaftaran',
            // 'nota',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
