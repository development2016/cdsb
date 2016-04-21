<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\gallery\models\GalleryInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gallery Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'state_id',
            'program_id',
            'date_enter',
            'enter_by',
            'date_update',
            'update_by',
        ],
    ]) ?>




        <?php foreach ($models as $key => $value) { ?>

        <div class="image">

              <?= Html::img($value['path'],['class'=>'imgshow']);?>

              <p class="caption_1"><?php echo $value['caption_1'] ?></p>
              <p class="caption_2"><?php echo $value['caption_2'] ?></p>

        </div>
        <?php } ?>



</div>
