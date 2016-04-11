<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\LookupKategoriOku;
use common\models\LookupKategoriIsu;
use common\models\LookupPerkahwinan;
use common\models\LookupAgama;
use common\models\LookupBangsa;
use dosamigos\datepicker\DatePicker;
use dosamigos\datetimepicker\DateTimePicker;
$kategori_oku = ArrayHelper::map(LookupKategoriOku::find()->asArray()->all(), 'id', 'kategori_oku');
$kategori_isu = ArrayHelper::map(LookupKategoriIsu::find()->asArray()->all(), 'id', 'kategori_isu');
$status_perkahwinan = ArrayHelper::map(LookupPerkahwinan::find()->asArray()->all(), 'id', 'status_perkahwinan');
$agama = ArrayHelper::map(LookupAgama::find()->asArray()->all(), 'id', 'agama');
$bangsa = ArrayHelper::map(LookupBangsa::find()->asArray()->all(), 'id', 'bangsa');
/* @var $this yii\web\View */
/* @var $model backend\models\KdsIsu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kds-isu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kod_isu') ?>

    <?= $form->field($model, 'kod_kawasan') ?>

    <?= $form->field($model, 'tarikh')->widget(
        DatePicker::className(), [
            'inline' => true, 
            'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd/mm/yyyy'
            ]
    ]);?>

    <?= $form->field($model, 'masa')->widget(DateTimePicker::className(), [

        'size' => 'ms',
        'template' => '{input}',
        'pickButtonIcon' => 'glyphicon glyphicon-time',
        'inline' => true,
        'clientOptions' => [
            'startView' => 1,
            'minView' => 0,
            'maxView' => 1,
            'autoclose' => true,
            'linkFormat' => 'HH:ii p', // if inline = true
            // 'format' => 'HH:ii P', // if inline = false
            'todayBtn' => true
        ]
    ]);?>


    <?= $form->field($model, 'hari')->dropDownList(
    [
        'Isnin' => 'Isnin',
        'Selasa' => 'Selasa',
        'Rabu' => 'Rabu',
        'Khamis' => 'Khamis',
        'Jumaat' => 'Jumaat',
        'Sabtu' => 'Sabtu',
        'Ahad' => 'Ahad',
    ],
    ['prompt'=>'--Sila Pilih--'])->label('Hari') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_kad_pengenalan') ?>

    <?= $form->field($model, 'no_kad_pengenalan_lama') ?>

    <?= $form->field($model, 'jantina')->dropDownList(['Lelaki' => 'Lelaki', 'Perempuan' => 'Perempuan'],['prompt'=>'--Sila Pilih--'])->label('Jantina') ?>

    <?= $form->field($model, 'agama')->dropDownList($agama,['prompt'=>'--Sila Pilih--'])->label('Agama') ?>

    <?= $form->field($model, 'bangsa')->dropDownList($bangsa,['prompt'=>'--Sila Pilih--'])->label('Bangsa') ?>

    <?= $form->field($model, 'status_perkahwinan')->dropDownList($status_perkahwinan,['prompt'=>'--Sila Pilih--'])->label('Status Perkahwinan') ?>

    <?= $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya[tergolong]')->radioList(['Ya'=>'Ya','Tidak'=>'Tidak'],['itemOptions' => ['class' =>'radio-inline adakah_anda_tergolong_dalam_orang_kurang_upaya' ]]); ?>

    <div class="tergolong-oku" >

        <?= $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya[kategori_oku]')->checkboxList($kategori_oku)->label('Kategori OKU'); ?>

    </div>


    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'poskod') ?>

    <?= $form->field($model, 'no_telefon') ?>

    <?= $form->field($model, 'kategori_isu[oku]')->checkboxList($kategori_isu)->label('Kategori Isu'); ?>

    <?= $form->field($model, 'laporan_isu')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'tindakan_pengadu')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'cadangan')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'dilaporkan_oleh') ?>

    <?= $form->field($model, 'disaksikan_oleh') ?>

    <?= $form->field($model, 'diterima_oleh') ?>

    <?= $form->field($model, 'status_isu') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
