<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\KdsProgram;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\KdsAktiviti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kds-aktiviti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aktiviti') ?>

    <?= $form->field($model, 'objektif') ?>

    <?= $form->field($model, 'aktiviti_date_start') ?>

    <?= $form->field($model, 'aktiviti_date_end') ?>

    <?= $form->field($model, 'aktiviti_time_start') ?>

    <?= $form->field($model, 'aktiviti_time_end') ?>

    <?= $form->field($model, 'participant_volume') ?>

    <?= $form->field($model, 'cost') ?>

    <?= $form->field($model, 'fund_needed') ?>

    <?= $form->field($model, 'status_aktiviti') ?>

    <?= $form->field($model, 'nota')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'program_id')->dropDownList(
        ArrayHelper::map(
            KdsProgram::find()->all(),
            function ($model) {
                return $model->_id->{'$id'};
            },
            'nama_program'
        ), ['prompt'=>'[Sila Pilih]']) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
