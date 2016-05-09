<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsAktiviti */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Kds Aktivitis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-aktiviti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => (string)$model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'aktiviti',
            'objektif',
            'state_id',
            'bahagian_id',
            'district_id',
            'mukim_id',
            'sub_base_id',
            'cluster_id',
            'kampung_id',
            'aktiviti_date_start',
            'aktiviti_date_end',
            'aktiviti_time_start',
            'aktiviti_time_end',
            'participant_volume',
            'cost',
            'fund_needed',
            'status_aktiviti',
            'nota',
            'program_id',
            'date_enter',
            'enter_by',
            'date_update',
            'update_by',
        ],
    ]) ?>

</div>
