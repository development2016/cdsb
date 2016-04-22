<?php 
use yii\helpers\Html;

$this->title = 'Update gallery: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'gallery', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => (string)$model->id]];
$this->params['breadcrumbs'][] = 'Update';

?>
<div class="gallery-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'models' => (empty($models)) ? [new GalleryImages] : $models,
    ]) ?>

</div>
