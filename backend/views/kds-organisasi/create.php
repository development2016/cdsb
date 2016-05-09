<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\KdsOrganisasi */

$this->title = 'Create Kds Organisasi';
$this->params['breadcrumbs'][] = ['label' => 'Kds Organisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-organisasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
