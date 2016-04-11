<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsIsuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kds-isu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'kod_isu') ?>

    <?= $form->field($model, 'kod_kawasan') ?>

    <?= $form->field($model, 'tarikh') ?>

    <?= $form->field($model, 'masa') ?>

    <?php // echo $form->field($model, 'hari') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'no_kad_pengenalan') ?>

    <?php // echo $form->field($model, 'no_kad_pengenalan_lama') ?>

    <?php // echo $form->field($model, 'jantina') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'bangsa') ?>

    <?php // echo $form->field($model, 'status_perkahwinan') ?>

    <?php // echo $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'poskod') ?>

    <?php // echo $form->field($model, 'no_telefon') ?>

    <?php // echo $form->field($model, 'kategori_isu') ?>

    <?php // echo $form->field($model, 'laporan_isu') ?>

    <?php // echo $form->field($model, 'tindakan_pengadu') ?>

    <?php // echo $form->field($model, 'cadangan') ?>

    <?php // echo $form->field($model, 'dilaporkan_oleh') ?>

    <?php // echo $form->field($model, 'disaksikan_oleh') ?>

    <?php // echo $form->field($model, 'diterima_oleh') ?>

    <?php // echo $form->field($model, 'status_isu') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'bahagian_id') ?>

    <?php // echo $form->field($model, 'mukim_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'sub_base_id') ?>

    <?php // echo $form->field($model, 'cluster_id') ?>

    <?php // echo $form->field($model, 'kampung_id') ?>

    <?php // echo $form->field($model, 'date_enter') ?>

    <?php // echo $form->field($model, 'enter_by') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <?php // echo $form->field($model, 'update_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
