<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\bimbing\models\BimbingMaklumatStaff */

$this->title = 'Create Bimbing Maklumat Staff';
$this->params['breadcrumbs'][] = ['label' => 'Bimbing Maklumat Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bimbing-maklumat-staff-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
