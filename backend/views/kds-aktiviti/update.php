<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsAktiviti */

$this->title = 'Update Kds Aktiviti: ' . ' ' . $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Kds Aktivitis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kds-aktiviti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
