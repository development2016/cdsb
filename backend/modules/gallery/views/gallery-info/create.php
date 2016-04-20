<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\gallery\models\GalleryInfo */

$this->title = 'Create Gallery Info';
$this->params['breadcrumbs'][] = ['label' => 'Gallery Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'models' => (empty($models)) ? [new GalleryImages] : $models,
    ]) ?>

</div>
