<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\KdsAktiviti */

$this->title = 'Create Kds Aktiviti';
$this->params['breadcrumbs'][] = ['label' => 'Kds Aktivitis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-aktiviti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
