<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\bimbing\models\BimbingMaklumatStaff */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Bimbing Maklumat Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bimbing-maklumat-staff-view">

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
            'nama',
            'no_kad_pengenalan',
            'alamat',
            'no_telefon',
            'email',
            'centre',
            'state_id',
            'maklumat_pasangan',
            'maklumat_akademik',
            'pekerjaan_sekarang',
            'tahun_berkhidmat',
            'pengalaman_bekerja',
            'akaun_staff',
        ],
    ]) ?>

</div>
