<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsOrganisasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kds-organisasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organisasi_name') ?>

    <?= $form->field($model, 'registeration_no') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'poskod') ?>

    <?= $form->field($model, 'contact_person') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'mobile_no') ?>

    <?= $form->field($model, 'office_no') ?>

    <?= $form->field($model, 'fax_no') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'sector_id') ?>

    <?= $form->field($model, 'field_id') ?>

    <?= $form->field($model, 'about_organisasi') ?>

    <?= $form->field($model, 'gambar') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
