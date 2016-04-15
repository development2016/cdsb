<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\gallery\models\GalleryImage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-image-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'state_id')->textInput() ?>


    <table border="1">
        <tr>
            <td>
                <?= $form->field($model, 'file')->fileInput() ?>

                <?= $form->field($model, 'caption1')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'caption2')->textInput(['maxlength' => true]) ?>

            </td>
            <td> <div id="image-holder"></div></td>
        </tr>
    </table>


    

    <?= $form->field($model, 'date_enter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enter_by')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'program')->textInput(['maxlength' => true]) ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
