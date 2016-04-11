<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\bimbing\models\BimbingMaklumatStaffSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bimbing-maklumat-staff-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_kad_pengenalan') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'no_telefon') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'centre') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'maklumat_pasangan') ?>

    <?php // echo $form->field($model, 'maklumat_akademik') ?>

    <?php // echo $form->field($model, 'pekerjaan_sekarang') ?>

    <?php // echo $form->field($model, 'tahun_berkhidmat') ?>

    <?php // echo $form->field($model, 'pengalaman_bekerja') ?>

    <?php // echo $form->field($model, 'akaun_staff') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
