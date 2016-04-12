<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\bimbing\models\BimbingMaklumatStaff */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bimbing-maklumat-staff-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_kad_pengenalan') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'no_telefon') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'centre') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'maklumat_pasangan') ?>

    <?= $form->field($model, 'maklumat_akademik') ?>

    <?= $form->field($model, 'pekerjaan_sekarang') ?>

    <?= $form->field($model, 'tahun_berkhidmat') ?>

    <?= $form->field($model, 'pengalaman_bekerja') ?>

    <?= $form->field($model, 'akaun_staff') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
