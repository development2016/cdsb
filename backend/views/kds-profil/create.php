<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\KdsProfil */

$this->title = 'Create Kds Profil';
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-profil-create">
    <?php if(Yii::$app->session->hasFlash('create')):?>
        <div class="alert alert-success profil-alert" id="profil-alert">
            <button type="button" class="close" data-dismiss="alert"></button>
             <?php echo  Yii::$app->session->getFlash('create'); ?>
        </div>
    <?php endif; ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'kawasan_perlaksanaan' => $kawasan_perlaksanaan,
        'models' => (empty($models)) ? [new KdsProfil] : $models,

    ]) ?>

</div>
