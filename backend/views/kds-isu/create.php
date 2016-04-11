<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\KdsIsu */

$this->title = 'Create Isu';
$this->params['breadcrumbs'][] = ['label' => 'Isu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-isu-create">
    <?php if(Yii::$app->session->hasFlash('create')):?>
        <div class="alert alert-success isu-alert" id="isu-alert">
            <button type="button" class="close" data-dismiss="alert"></button>
             <?php echo  Yii::$app->session->getFlash('create'); ?>
        </div>
    <?php endif; ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'kawasan_perlaksanaan' => $kawasan_perlaksanaan,
    ]) ?>

</div>
