<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsOrganisasi */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Kds Organisasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-organisasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => (string)$model->_id], [
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
            '_id',
            'organisasi_name',
            'registeration_no',
            'alamat',
            'poskod',
            'contact_person',
            'state_id',
            'mobile_no',
            'office_no',
            'fax_no',
            'email',
            'sector_id',
            'field_id',
            'about_organisasi',
            'gambar',
            'date_enter',
            'enter_by',
            'date_update',
            'update_by',
        ],
    ]) ?>

</div>
