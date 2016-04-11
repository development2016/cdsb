<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsIsu */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Isu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-isu-view">

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
            'kod_isu',
            'kod_kawasan',
            'tarikh',
            'masa',
            'hari',
            'nama',
            'no_kad_pengenalan',
            'no_kad_pengenalan_lama',
            'jantina',
            'agamas.agama',
            'bangsas.bangsa',
            'perkahwinans.status_perkahwinan',
            //'adakah_anda_tergolong_dalam_orang_kurang_upaya',
            'alamat',
            'poskod',
            'no_telefon',
            //'kategori_isu',
            'laporan_isu',
            'tindakan_pengadu',
            'cadangan',
            'dilaporkan_oleh',
            'disaksikan_oleh',
            'diterima_oleh',
            'status_isu',
            'states.state',
            'bahagians.bahagian',
            'districts.district',
            'mukims.mukim',
            'subBases.sub_base',
            'clusters.cluster',
            'kampungs.kampung',
            'date_enter',
            'enter_by',
            'date_update',
            'update_by',
        ],
    ]) ?>

    <?php 





    echo "adakah_anda_tergolong_dalam_orang_kurang_upaya";
    echo "<br>";
    $adakah_anda_tergolong_dalam_orang_kurang_upaya = json_encode($model->adakah_anda_tergolong_dalam_orang_kurang_upaya,JSON_PRETTY_PRINT);
    echo "<b>".$adakah_anda_tergolong_dalam_orang_kurang_upaya."</b>";


    echo "<br>";
    echo "Kategori Isu";
    echo "<br>";
    $kategori_isu = json_encode($model->kategori_isu,JSON_PRETTY_PRINT);
    echo "<b>".$kategori_isu."</b>";
     ?>







</div>
