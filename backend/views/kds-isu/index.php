<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\KdsIsuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Isu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-isu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah', FALSE, ['value'=>Url::to(['/dropdown/isu']),'class' => 'btn btn-success','id'=>'create-isu']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'_id',
            //'kod_isu',
            //'kod_kawasan',
            'tarikh',
            //'masa',
            // 'hari',
            'nama',
            'no_kad_pengenalan',
            // 'no_kad_pengenalan_lama',
            // 'jantina',
            // 'agama',
            // 'bangsa',
            // 'status_perkahwinan',
            // 'adakah_anda_tergolong_dalam_orang_kurang_upaya',
            // 'alamat',
            // 'poskod',
            // 'no_telefon',
            // 'kategori_isu',
            // 'laporan_isu',
            // 'tindakan_pengadu',
            // 'cadangan',
            // 'dilaporkan_oleh',
            // 'disaksikan_oleh',
            // 'diterima_oleh',
            'status_isu',
            'states.state',
            'bahagians.bahagian',
            'districts.district',
            'mukims.mukim',
            'subBases.sub_base',
            'clusters.cluster',
            'kampungs.kampung',
            // 'date_enter',
            // 'enter_by',
            // 'date_update',
            // 'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
