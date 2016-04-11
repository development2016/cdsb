<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsSukarelawanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kds-sukarelawan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'kod_sukarelawan') ?>

    <?= $form->field($model, 'kod_kawasan') ?>

    <?= $form->field($model, 'tarikh') ?>

    <?= $form->field($model, 'hari') ?>

    <?php // echo $form->field($model, 'masa') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'no_kad_pengenalan') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'poskod') ?>

    <?php // echo $form->field($model, 'no_telefon') ?>

    <?php // echo $form->field($model, 'no_telefon_rumah') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan') ?>

    <?php // echo $form->field($model, 'program_sukarelawan_yang_ingin_disertai') ?>

    <?php // echo $form->field($model, 'bahasa_yang_ditutur') ?>

    <?php // echo $form->field($model, 'adakah_anda_memiliki_kenderaan') ?>

    <?php // echo $form->field($model, 'waktu_ketika_diperlukan') ?>

    <?php // echo $form->field($model, 'sumbangan_yang_boleh_diberikan') ?>

    <?php // echo $form->field($model, 'negeri') ?>

    <?php // echo $form->field($model, 'bahagian') ?>

    <?php // echo $form->field($model, 'daerah') ?>

    <?php // echo $form->field($model, 'subbase') ?>

    <?php // echo $form->field($model, 'cluster') ?>

    <?php // echo $form->field($model, 'kampung') ?>

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
