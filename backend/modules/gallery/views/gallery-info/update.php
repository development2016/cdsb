<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gallery\models\GalleryInfo */

$this->title = 'Update Gallery Info: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gallery Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gallery-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
