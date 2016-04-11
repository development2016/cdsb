<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\bimbing\models\BimbingMaklumatStaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bimbing Maklumat Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bimbing-maklumat-staff-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bimbing Maklumat Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'nama',
            'no_kad_pengenalan',
            'alamat',
            'no_telefon',
            // 'email',
            // 'centre',
            // 'state_id',
            // 'maklumat_pasangan',
            // 'maklumat_akademik',
            // 'pekerjaan_sekarang',
            // 'tahun_berkhidmat',
            // 'pengalaman_bekerja',
            // 'akaun_staff',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
