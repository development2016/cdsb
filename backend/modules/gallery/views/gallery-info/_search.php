<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\gallery\models\GalleryInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'program_id') ?>

    <?= $form->field($model, 'date_enter') ?>

    <?= $form->field($model, 'enter_by') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <?php // echo $form->field($model, 'update_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
