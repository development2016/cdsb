<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KdsAktivitiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kds Aktivitis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-aktiviti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kds Aktiviti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aktiviti',
            'objektif',
            'state_id',
            'bahagian_id',
            // 'district_id',
            // 'mukim_id',
            // 'sub_base_id',
            // 'cluster_id',
            // 'kampung_id',
            // 'aktiviti_date_start',
            // 'aktiviti_date_end',
            // 'aktiviti_time_start',
            // 'aktiviti_time_end',
            // 'participant_volume',
            // 'cost',
            // 'fund_needed',
            // 'status_aktiviti',
            // 'nota',
            // 'program_id',
            // 'date_enter',
            // 'enter_by',
            // 'date_update',
            // 'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
