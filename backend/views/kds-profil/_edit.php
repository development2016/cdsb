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
use common\models\LookupKategoriOku;
use common\models\LookupPerkahwinan;
use common\models\LookupAgama;
use common\models\LookupBangsa;
use common\models\LookupHousehold;
use common\models\LookupHubungan;
use common\models\LookupEduLevel;
use dosamigos\datepicker\DatePicker;
use wbraganca\dynamicform\DynamicFormWidget;
use backend\models\KdsProfil;

$js = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Pasangan: " + (index + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Pasangan: " + (index + 1))
    });
});


jQuery(".dynamicform_wrapper_tanggungan").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper_tanggungan .panel-title-tanggungan").each(function(index) {
        jQuery(this).html("Tanggungan: " + (index + 1))
    });
});

jQuery(".dynamicform_wrapper_tanggungan").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper_tanggungan .panel-title-tanggungan").each(function(index) {
        jQuery(this).html("Tanggungan: " + (index + 1))
    });
});


';

$this->registerJs($js);


$kategori_oku = ArrayHelper::map(LookupKategoriOku::find()->asArray()->all(), 'id', 'kategori_oku');
$status_perkahwinan = ArrayHelper::map(LookupPerkahwinan::find()->asArray()->all(), 'id', 'status_perkahwinan');
$agama = ArrayHelper::map(LookupAgama::find()->asArray()->all(), 'id', 'agama');
$bangsa = ArrayHelper::map(LookupBangsa::find()->asArray()->all(), 'id', 'bangsa');
$household = ArrayHelper::map(LookupHousehold::find()->asArray()->all(), 'id', 'household');
$tahap_pendidikan = ArrayHelper::map(LookupEduLevel::find()->asArray()->all(), 'id', 'edu_level');
$hubungan = ArrayHelper::map(LookupHubungan::find()->asArray()->all(), 'id', 'hubungan');
/* @var $this yii\web\View */
/* @var $model backend\models\KdsProfil */
/* @var $form yii\widgets\ActiveForm */
//$kawasan_perlaksanaan = json_decode($kawasan_perlaksanaan);

?>


<div class="kds-profil-form">



    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'nama_samaran') ?>

    <?= $form->field($model, 'no_kad_pengenalan') ?>

    <?= $form->field($model, 'no_kad_pengenalan_lama') ?>

    <?= $form->field($model, 'tarikh_lahir')->widget(
        DatePicker::className(), [
            'inline' => true, 
            'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd/mm/yyyy'
            ]
    ]);?>

    <?= $form->field($model, 'alamat')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'poskod') ?>

    <?= $form->field($model, 'jantina')->dropDownList(['Lelaki' => 'Lelaki', 'Perempuan' => 'Perempuan'],['prompt'=>'--Sila Pilih--'])->label('Jantina') ?>

    <?= $form->field($model, 'agama')->dropDownList($agama,['prompt'=>'--Sila Pilih--'])->label('Agama') ?>

    <?= $form->field($model, 'bangsa')->dropDownList($bangsa,['prompt'=>'--Sila Pilih--'])->label('Bangsa') ?>

    <?= $form->field($model, 'status_perkahwinan')->dropDownList($status_perkahwinan,['prompt'=>'--Sila Pilih--'])->label('Status Perkahwinan') ?>

    <?= $form->field($model, 'kewarganegaraan')->dropDownList(['Warganegara' => 'Warganegara', 'Bukan Warganegara' => 'Bukan Warganegara', 'Penduduk Tetap' => 'Penduduk Tetap'],['prompt'=>'--Sila Pilih--'])->label('Kewarganegaraan') ?>

    <?= $form->field($model, 'no_telefon') ?>

    <?= $form->field($model, 'no_telefon_rumah') ?>

    <?= $form->field($model, 'email') ?>

    <div class="bilangan-anak">

        <?= $form->field($model, 'bilangan_anak') ?>

    </div>

    <?= $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya[tergolong]')->radioList(['Ya'=>'Ya','Tidak'=>'Tidak'],['itemOptions' => ['class' =>'radio-inline adakah_anda_tergolong_dalam_orang_kurang_upaya_profil']]); ?>

    <div class="tergolong-oku-profil" >

        <?= $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya[no_pendaftaran]')->label('No Pendaftaran') ?>

        <?= $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya[kategori_oku]')->checkboxList($kategori_oku)->label('Kategori OKU'); ?>

        <?= $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya[bantuan_yang_di_terima]')->label('Bantuan Yang Di Terima') ?>

    </div> 
    <?= $form->field($model, 'pekerjaan[info]')->radioList(['Bekerja'=>'Bekerja','Tidak Bekerja'=>'Tidak Bekerja'],['itemOptions' => ['class' =>'radio-inline pekerjaan-profil']]); ?>

    <div class="sektor-pekerjaan">

        <?= $form->field($model, 'pekerjaan[sektor]')->dropDownList(['Sektor Kerajaan' => 'Sektor Kerajaan', 'Sektor Swasta' => 'Sektor Swasta', 'Kerja Sendiri' => 'Kerja Sendiri'],['prompt'=>'--Sila Pilih--'])->label('Sektor') ?>

        <?= $form->field($model, 'pekerjaan[pekerjaan_sampingan]')->label('Pekerjaan Sampingan') ?>

    </div>

    <?= $form->field($model, 'pendapatan')->dropDownList($household,['prompt'=>'--Sila Pilih--'])->label('Pendapatan') ?>

    <?= $form->field($model, 'perbelanjaan')->dropDownList($household,['prompt'=>'--Sila Pilih--'])->label('Perbelanjaan') ?>

    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items-pasangan', // required: css class selector
        'widgetItem' => '.item-pasangan', // required: css class
        'limit' => 4, // the maximum times, an element can be cloned (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item-pasangan', // css class
        'deleteButton' => '.remove-item-pasangan', // css class
        'model' => $models[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'maklumat_pasangan',
           
        ],
    ]); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-envelope"></i> Maklumat Pasangan
            <button type="button" class="pull-right add-item-pasangan btn btn-success btn-xs" id="add-item-pasangan"><span class="glyphicon glyphicon-plus"></span></button>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body container-items-pasangan"><!-- widgetContainer -->
            <?php foreach ($models as $index => $modelPasangan): ?>

                <?php if (empty($modelPasangan->maklumat_pasangan)) { ?>

                        <div class="item-pasangan panel panel-default" ><!-- widgetBody -->
                            <div class="panel-heading">
                                <span class="panel-title-address">Pasangan: <?= ($index + 1) ?></span>
                                <button type="button" class="pull-right remove-item-pasangan btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"></span></button>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">

                                <?= $form->field($modelPasangan, "maklumat_pasangan[{$index}][nama]")->label('Nama')->textInput(['maxlength' => true]) ?>

                            </div>
                        </div>

                <?php } else { ?>

                    <?php foreach ((array) $modelPasangan->maklumat_pasangan as $key => $value) { ?>

                        <div class="item-pasangan panel panel-default"><!-- widgetBody -->
                            <div class="panel-heading">
                                <span class="panel-title-address">Pasangan: <?= ($key + 1) ?></span>
                                <button type="button" class="pull-right remove-item-pasangan btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"></span></button>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">

                                <?= $form->field($modelPasangan, "maklumat_pasangan[{$key}][nama]")->label('Nama')->textInput(['maxlength' => true]) ?>

                            </div>
                        </div>
                       
                    <?php } ?>

                <?php } ?>

            <?php endforeach; ?>

        </div>
    </div>
    <?php DynamicFormWidget::end(); ?>

    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper_tanggungan', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items-tanggungan', // required: css class selector
        'widgetItem' => '.item-tanggungan', // required: css class
        'limit' => 4, // the maximum times, an element can be cloned (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item-tanggungan', // css class
        'deleteButton' => '.remove-item-tanggungan', // css class
        'model' => $models[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'maklumat_tanggungan',
           

        ],
    ]); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-envelope"></i> Maklumat Tanggungan
            <button type="button" class="pull-right add-item-tanggungan btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span></button>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body container-items-tanggungan"><!-- widgetContainer -->


            <?php foreach ($models as $indexs => $modelTanggungan): ?>

                <?php if (empty($modelTanggungan->maklumat_tanggungan)) { ?>

                        <div class="item-tanggungan panel panel-default" ><!-- widgetBody -->
                            <div class="panel-heading">
                                <span class="panel-title-tanggungan">Tanggungan: <?= ($indexs + 1) ?></span>
                                <button type="button" class="pull-right remove-item-tanggungan btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"></span></button>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">

                                <?= $form->field($modelPasangan, "maklumat_tanggungan[{$indexs}][nama]")->label('Nama')->textInput(['maxlength' => true]) ?>

                            </div>
                        </div>

                <?php } else { ?>

                    <?php foreach ((array) $modelTanggungan->maklumat_tanggungan as $keys => $value) { ?>

                        <div class="item-tanggungan panel panel-default"><!-- widgetBody -->
                            <div class="panel-heading">
                                <span class="panel-title-tanggungan">Tanggungan: <?= ($keys + 1) ?></span>
                                <button type="button" class="pull-right remove-item-tanggungan btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"></span></button>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">

                                <?= $form->field($modelPasangan, "maklumat_tanggungan[{$keys}][nama]")->label('Nama')->textInput(['maxlength' => true]) ?>

                            </div>
                        </div>
                       
                    <?php } ?>

                <?php } ?>

            <?php endforeach; ?>


        </div>
    </div>
    <?php DynamicFormWidget::end(); ?>

    <?= $form->field($model, 'maklumat_tambahan') ?>

    <?= $form->field($model, 'maklumat_tanggungan_oku') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
