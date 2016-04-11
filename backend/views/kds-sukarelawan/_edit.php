<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use dosamigos\datetimepicker\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\KdsSukarelawan */


?>

<div class="kds-sukarelawan-form">

    <?php $form = ActiveForm::begin(); ?>


    <?php if ($model->state_id == 21) { 
        echo $form->field($model, 'state_id');
        echo $form->field($model, 'bahagian_id');
        echo $form->field($model, 'district_id');
        echo $form->field($model, 'sub_base_id');
        echo $form->field($model, 'cluster_id');
        echo $form->field($model, 'kampung_id');

    } elseif ($model->state_id == 22) {
        echo $form->field($model, 'state_id');
        echo $form->field($model, 'district_id');
        echo $form->field($model, 'mukim_id');
        echo $form->field($model, 'sub_base_id');
        echo $form->field($model, 'cluster_id');
        echo $form->field($model, 'kampung_id');
    } else {
        echo $form->field($model, 'state_id');
        echo $form->field($model, 'district_id');
        echo $form->field($model, 'sub_base_id');
        echo $form->field($model, 'cluster_id');
        echo $form->field($model, 'kampung_id');
    } ?>

    <?= $form->field($model, 'kod_sukarelawan') ?>

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

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_kad_pengenalan') ?>

    <?= $form->field($model, 'alamat')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'poskod') ?>

    <?= $form->field($model, 'no_telefon') ?>

    <?= $form->field($model, 'no_telefon_rumah') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan[terlibat]')->radioList(['Ya'=>'Ya','Tidak'=>'Tidak'],['itemOptions' => ['class' =>'radio-inline adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan']]); ?>

    <div class="kerja-sukarelawan" >

    <?= $form->field($model, 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan[nama_persatuan]')->textInput(['class' => 'form-control nama_persatuan'])->label('Nama Persatuan'); ?>

    <?= $form->field($model, 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan[jawatan]')->textInput(['class' => 'form-control jawatan'])->label('Jawatan di Sandang'); ?>

    <?= $form->field($model, 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan[tempoh]')->textInput(['class' => 'form-control tempoh'])->label('Tempoh'); ?>

    </div>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[program_kanak_kanak]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Program Kanak Kanak');; ?>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[program_kemasyarakatan]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Program Kemasyarakatan');; ?>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[program_kemasyarakatan]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Program Kemasyarakatan') ?>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[program_warga_emas]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Program Warga Emas') ?>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[program_oku]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Program OKU') ?>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[Aktiviti_rekreasi]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Aktiviti Rekreasi') ?>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[program_kesihatan]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Program Kesihatan') ?>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[program_akademik]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Program Akademik') ?>

    <?= $form->field($model, 'program_sukarelawan_yang_ingin_disertai[lain_lain]')->label('Lain - lain') ?>

    <?= $form->field($model, 'bahasa_yang_ditutur[bahasa_melayu]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Bahasa Melayu') ?>

    <?= $form->field($model, 'bahasa_yang_ditutur[bahasa_inggeris]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Bahasa Inggeris') ?>

    <?= $form->field($model, 'bahasa_yang_ditutur[bahasa_tamil]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Bahasa Tamil') ?>

    <?= $form->field($model, 'bahasa_yang_ditutur[bahasa_cina]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Bahasa Cina') ?>
 
    <?= $form->field($model, 'bahasa_yang_ditutur[lain_lain]')->label('Lain - lain') ?>

    <?= $form->field($model, 'adakah_anda_memiliki_kenderaan')->radioList(['Ya'=>'Ya','Tidak'=>'Tidak']); ?>

    <?= $form->field($model, 'waktu_ketika_diperlukan[mingguan]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Mingguan') ?>

    <?= $form->field($model, 'waktu_ketika_diperlukan[setiap_hari]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Setiap Hari') ?>

    <?= $form->field($model, 'waktu_ketika_diperlukan[cuti_am]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Cuti AM') ?>

    <?= $form->field($model, 'sumbangan_yang_boleh_diberikan[fasilitator]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Fasilitator') ?>

    <?= $form->field($model, 'sumbangan_yang_boleh_diberikan[fotografi]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Fotografi') ?>

    <?= $form->field($model, 'sumbangan_yang_boleh_diberikan[tenega]')->dropDownList(['Ya' => 'Ya', 'Tidak' => 'Tidak'],['prompt'=>'--Sila Pilih--'])->label('Tenaga') ?>

    <?= $form->field($model, 'sumbangan_yang_boleh_diberikan[lain_lain]')->label('Lain - lain') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
