<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsProfil */

$this->title = 'Update: ' . ' ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kds-profil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_edit', [
        'model' => $model,
        'models' => $models
    ]) ?>

</div>
