<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsProgram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kds-program-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_program') ?>

    <?= $form->field($model, 'organisasi_id') ?>

    <?= $form->field($model, 'sector_id') ?>

    <?= $form->field($model, 'field_id') ?>

    <?= $form->field($model, 'program_milestone') ?>

    <?= $form->field($model, 'program_status') ?>

    <?= $form->field($model, 'tarikh_pendaftaran') ?>

    <?= $form->field($model, 'nota') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
