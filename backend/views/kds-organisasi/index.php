<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KdsOrganisasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kds Organisasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-organisasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kds Organisasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'organisasi_name',
            'registeration_no',
            'contact_person',
            'state_id',
            'mobile_no',
            'office_no',
            // 'fax_no',
            'email',
            'sector_id',
            'field_id',
            // 'about_organisasi',
            // 'gambar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
