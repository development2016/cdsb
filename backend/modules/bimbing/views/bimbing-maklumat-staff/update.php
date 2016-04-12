<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\bimbing\models\BimbingMaklumatStaff */

$this->title = 'Update Bimbing Maklumat Staff: ' . ' ' . $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Bimbing Maklumat Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bimbing-maklumat-staff-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
