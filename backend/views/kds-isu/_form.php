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
        : <?= Html::a('Kemaskini', FALSE, ['value'=>Url::to(['/dropdown/isu']),'class' => 'btn btn-success','id'=>'update-isu']) ?>
       
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
        : <?= Html::a('Kemaskini', FALSE, ['value'=>Url::to(['/dropdown/isu']),'class' => 'btn btn-success','id'=>'update-isu']) ?>

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
        : <?= Html::a('Kemaskini', FALSE, ['value'=>Url::to(['/dropdown/isu']),'class' => 'btn btn-success','id'=>'update-isu']) ?>

    </div>
<?php } ?>

<div class="kds-isu-form">

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

    <?= $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya[tergolong]')->radioList(['Ya'=>'Ya','Tidak'=>'Tidak'],['itemOptions' => ['class' =>'radio-inline adakah_anda_tergolong_dalam_orang_kurang_upaya']]); ?>

    <div class="tergolong-oku" >

        <?= $form->field($model, 'adakah_anda_tergolong_dalam_orang_kurang_upaya[kategori_oku]')->checkboxList($kategori_oku)->label('Kategori OKU'); ?>

    </div>

    <?= $form->field($model, 'alamat')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'poskod') ?>

    <?= $form->field($model, 'no_telefon') ?>

    <?= $form->field($model, 'kategori_isu[oku]')->checkboxList($kategori_isu)->label('Kategori Isu'); ?>

    <?= $form->field($model, 'laporan_isu')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'tindakan_pengadu')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'cadangan')->textArea(['rows' => '6']) ?>

    <?= $form->field($model, 'dilaporkan_oleh') ?>

    <?= $form->field($model, 'disaksikan_oleh') ?>

    <?= $form->field($model, 'diterima_oleh') ?>

 
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
