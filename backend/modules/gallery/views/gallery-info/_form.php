<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use wbraganca\dynamicform\DynamicFormWidget;
use common\models\LookupState;
use backend\models\KdsProgram;
/* @var $this yii\web\View */
/* @var $model backend\modules\gallery\models\GalleryInfo */
/* @var $form yii\widgets\ActiveForm */
$js = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Gambar: " + (index + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .panel-title-address").each(function(index) {
        jQuery(this).html("Gambar: " + (index + 1))
    });
});

';

$this->registerJs($js);

$state = ArrayHelper::map(LookupState::find()->where(['kawasan_perlaksanaan'=>'Ya'])->asArray()->all(), 'state_id', 'state');



?>

<div class="gallery-info-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','id' => 'dynamic-form']]); ?>

    <?= $form->field($model, 'state_id')->dropDownList($state, ['prompt'=>'[Sila Pilih]']); ?>


    <?= $form->field($model, 'program_id')->dropDownList(
        ArrayHelper::map(
            KdsProgram::find()->all(),
            function ($model) {
                return $model->_id->{'$id'};
            },
            'nama_program'
        ), ['prompt'=>'[Sila Pilih]']) ?>

    <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items-image', // required: css class selector
        'widgetItem' => '.item-image', // required: css class
        'limit' => 4, // the maximum times, an element can be cloned (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item-image', // css class
        'deleteButton' => '.remove-item-image', // css class
        'model' => $models[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'path',
           
        ],
    ]); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-envelope"></i> Maklumat Gambar
            <button type="button" class="pull-right add-item-image btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span></button>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body container-items-image"><!-- widgetContainer -->
            <?php foreach ($models as $index => $modelPasangan): ?>
                <div class="item-image panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <span class="panel-title-address">Gambar: <?= ($index + 1) ?></span>
                        <button type="button" class="pull-right remove-item-image btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"></span></button>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">

                         <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($modelPasangan, "path[{$index}][path]")->label('Gambar')->fileInput(['class'=>'img-path']) ?>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($modelPasangan, "path[{$index}][caption_1]")->label('Caption 1')->textInput() ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($modelPasangan, "path[{$index}][caption_2]")->label('Caption 2')->textInput() ?>
                            </div>
                        </div>               
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php DynamicFormWidget::end(); ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
