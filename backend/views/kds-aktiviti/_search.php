<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsAktivitiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kds-aktiviti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'aktiviti') ?>

    <?= $form->field($model, 'objektif') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'bahagian_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'mukim_id') ?>

    <?php // echo $form->field($model, 'sub_base_id') ?>

    <?php // echo $form->field($model, 'cluster_id') ?>

    <?php // echo $form->field($model, 'kampung_id') ?>

    <?php // echo $form->field($model, 'aktiviti_date_start') ?>

    <?php // echo $form->field($model, 'aktiviti_date_end') ?>

    <?php // echo $form->field($model, 'aktiviti_time_start') ?>

    <?php // echo $form->field($model, 'aktiviti_time_end') ?>

    <?php // echo $form->field($model, 'participant_volume') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'fund_needed') ?>

    <?php // echo $form->field($model, 'status_aktiviti') ?>

    <?php // echo $form->field($model, 'nota') ?>

    <?php // echo $form->field($model, 'program_id') ?>

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
