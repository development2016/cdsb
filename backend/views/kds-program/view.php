<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsProgram */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Kds Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-program-view">

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
            'nama_program',
            'organisasi_id',
            'sector_id',
            'field_id',
            'program_milestone',
            'program_status',
            'date_enter',
            'enter_by',
            'date_update',
            'update_by',
            'tarikh_pendaftaran',
            'nota',
        ],
    ]) ?>

</div>
