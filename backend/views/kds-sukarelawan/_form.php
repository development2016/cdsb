<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\LookupState;
use common\models\LookupBahagian;
use common\models\LookupDistrict;
use common\models\LookupMukim;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;
use dosamigos\datepicker\DatePicker;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsSukarelawan */

$kawasan_perlaksanaan = json_decode($kawasan_perlaksanaan);

?>
<?php if ($kawasan_perlaksanaan->state_id == 21) { ?>

    <div class="alert alert-info">
        <?php 
        $states = LookupState::findOne($kawasan_perlaksanaan->state_id);
        $bahagians = LookupBahagian::findOne($kawasan_perlaksanaan->bahagian_id);
        $districts = LookupDistrict::findOne($kawasan_perlaksanaan->district_id);
        $subbases = LookupSubBase::findOne($kawasan_perlaksanaan->sub_base_id);
        $clusters = LookupCluster::findOne($kawasan_perlaksanaan->cluster_id);
        $kampungs = LookupKampung::findOne($kawasan_perlaksanaan->kampung_id);

        echo $states->state.' - '.$bahagians->bahagian.' - '.$districts->district.' - '.$subbases->sub_base.' - '.$clusters->cluster.' - '.$kampungs->kampung;?> 
        : <?= Html::a('Kemaskini', FALSE, ['value'=>Url::to(['/dropdown/sukarelawan']),'class' => 'btn btn-success','id'=>'update-sukarelawan']) ?>
       
    </div>

<?php } elseif ($kawasan_perlaksanaan->state_id == 22) { ?>
    <div class="alert alert-info">
        <?php

        $states = LookupState::findOne($kawasan_perlaksanaan->state_id);
        $districts = LookupDistrict::findOne($kawasan_perlaksanaan->district_id);
        $mukims = LookupMukim::findOne($kawasan_perlaksanaan->mukim_id);
        $subbases = LookupSubBase::findOne($kawasan_perlaksanaan->sub_base_id);
        $clusters = LookupCluster::findOne($kawasan_perlaksanaan->cluster_id);
        $kampungs = LookupKampung::findOne($kawasan_perlaksanaan->kampung_id);

        echo $states->state.' - '.$districts->district.' - '.$mukims->mukim.' - '.$subbases->sub_base.' - '.$clusters->cluster.' - '.$kampungs->kampung;?>
        : <?= Html::a('Kemaskini', FALSE, ['value'=>Url::to(['/dropdown/sukarelawan']),'class' => 'btn btn-success','id'=>'update-sukarelawan']) ?>

    </div>
<?php } else { ?>
    <div class="alert alert-info">
        <?php 

        $states = LookupState::findOne($kawasan_perlaksanaan->state_id); 
        $districts = LookupDistrict::findOne($kawasan_perlaksanaan->district_id);
        $subbases = LookupSubBase::findOne($kawasan_perlaksanaan->sub_base_id);
        $clusters = LookupCluster::findOne($kawasan_perlaksanaan->cluster_id);
        $kampungs = LookupKampung::findOne($kawasan_perlaksanaan->kampung_id);

        echo $states->state.' - '.$districts->district.' - '.$subbases->sub_base.' - '.$clusters->cluster.' - '.$kampungs->kampung;?>
        : <?= Html::a('Kemaskini', FALSE, ['value'=>Url::to(['/dropdown/sukarelawan']),'class' => 'btn btn-success','id'=>'update-sukarelawan']) ?>

    </div>
<?php } ?>



<div class="kds-sukarelawan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if ($kawasan_perlaksanaan->state_id == 21) { 
        echo Html::hiddenInput('state_id', $kawasan_perlaksanaan->state_id, ['class' => 'form-control']);
        echo Html::hiddenInput('bahagian_id', $kawasan_perlaksanaan->bahagian_id, ['class' => 'form-control']);
        echo Html::hiddenInput('district_id', $kawasan_perlaksanaan->district_id, ['class' => 'form-control']);
        echo Html::hiddenInput('sub_base_id', $kawasan_perlaksanaan->sub_base_id, ['class' => 'form-control']);
        echo Html::hiddenInput('cluster_id', $kawasan_perlaksanaan->cluster_id, ['class' => 'form-control']);
        echo Html::hiddenInput('kampung_id', $kawasan_perlaksanaan->kampung_id, ['class' => 'form-control']);

    } elseif ($kawasan_perlaksanaan->state_id == 22) {
        echo Html::hiddenInput('state_id', $kawasan_perlaksanaan->state_id, ['class' => 'form-control']);
        echo Html::hiddenInput('district_id', $kawasan_perlaksanaan->district_id, ['class' => 'form-control']);
        echo Html::hiddenInput('mukim_id', $kawasan_perlaksanaan->mukim_id, ['class' => 'form-control']);
        echo Html::hiddenInput('sub_base_id', $kawasan_perlaksanaan->sub_base_id, ['class' => 'form-control']);
        echo Html::hiddenInput('cluster_id', $kawasan_perlaksanaan->cluster_id, ['class' => 'form-control']);
        echo Html::hiddenInput('kampung_id', $kawasan_perlaksanaan->kampung_id, ['class' => 'form-control']);
    } else {
        echo Html::hiddenInput('state_id', $kawasan_perlaksanaan->state_id, ['class' => 'form-control']);
        echo Html::hiddenInput('district_id', $kawasan_perlaksanaan->district_id, ['class' => 'form-control']);
        echo Html::hiddenInput('sub_base_id', $kawasan_perlaksanaan->sub_base_id, ['class' => 'form-control']);
        echo Html::hiddenInput('cluster_id', $kawasan_perlaksanaan->cluster_id, ['class' => 'form-control']);
        echo Html::hiddenInput('kampung_id', $kawasan_perlaksanaan->kampung_id, ['class' => 'form-control']);
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

    <?= $form->field($model, 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan[nama_persatuan]')->label('Nama Persatuan'); ?>

    <?= $form->field($model, 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan[jawatan]')->label('Jawatan di Sandang'); ?>

    <?= $form->field($model, 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan[tempoh]')->label('Tempoh'); ?>

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
    <div class='row'>
        <div class='col-sm-4'>
            <input type='checkbox' id='perakuan' />
        </div>
        <div class='col-sm-12'>
            <p>Saya mengaku bahawa semua maklumat yang diberikan dalam dokumen ini adalah betul dan benar mengikut pengetahuan saya.Saya faham bahawa sebarang kenyataan 
            yang palsu boleh menyebabkan data dan profil peribadi saya di dalam sistem ditolak untuk pengesahan.</p>
        </div>
        
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','id'=>'able','disabled'=>'disabled']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>

