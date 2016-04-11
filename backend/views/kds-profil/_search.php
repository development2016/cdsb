<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsProfilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kds-profil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '_id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'nama_samaran') ?>

    <?= $form->field($model, 'no_kad_pengenalan') ?>

    <?= $form->field($model, 'no_kad_pengenalan_lama') ?>

    <?php // echo $form->field($model, 'tarikh_lahir') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'poskod') ?>

    <?php // echo $form->field($model, 'jantina') ?>

    <?php // echo $form->field($model, 'bangsa') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'status_perkahwinan') ?>

    <?php // echo $form->field($model, 'kewarganegaraan') ?>

    <?php // echo $form->field($model, 'no_telefon') ?>

    <?php // echo $form->field($model, 'no_telefon_rumah') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'bilangan_anak') ?>

    <?php // echo $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <?php // echo $form->field($model, 'pendapatan') ?>

    <?php // echo $form->field($model, 'perbelanjaan') ?>

    <?php // echo $form->field($model, 'maklumat_pasangan') ?>

    <?php // echo $form->field($model, 'maklumat_tanggungan') ?>

    <?php // echo $form->field($model, 'maklumat_tambahan') ?>

    <?php // echo $form->field($model, 'maklumat_tanggungan_oku') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'bahagian_id') ?>

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
