<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\KdsSukarelawan */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Senarai Sukarelawan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-sukarelawan-view">

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
            'kod_sukarelawan',
            'kod_kawasan',
            'tarikh',
            'hari',
            'masa',
            'nama',
            'no_kad_pengenalan',
            'alamat',
            'poskod',
            'no_telefon',
            'no_telefon_rumah',
            'email',
            //'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan',
            //'program_sukarelawan_yang_ingin_disertai',
            //'bahasa_yang_ditutur',
            'adakah_anda_memiliki_kenderaan',
            //'waktu_ketika_diperlukan',
            //'sumbangan_yang_boleh_diberikan',
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
    echo "adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan";
    echo "<br>";
    $adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan = json_encode($model->adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan,JSON_PRETTY_PRINT);
    echo "<b>".$adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan."</b>";
    echo "<br>";
    echo "<br>";
    echo "program_sukarelawan_yang_ingin_disertai";
    echo "<br>";
    $program_sukarelawan_yang_ingin_disertai = json_encode($model->program_sukarelawan_yang_ingin_disertai,JSON_PRETTY_PRINT);
    echo "<b>".$program_sukarelawan_yang_ingin_disertai."</b>";
    echo "<br>";
    echo "<br>";
    echo "bahasa_yang_ditutur";
    echo "<br>";
    $bahasa_yang_ditutur = json_encode($model->bahasa_yang_ditutur,JSON_PRETTY_PRINT);
    echo "<b>".$bahasa_yang_ditutur."</b>";

    echo "<br>";
    echo "<br>";
    echo "waktu_ketika_diperlukan";
    echo "<br>";
    $waktu_ketika_diperlukan = json_encode($model->waktu_ketika_diperlukan,JSON_PRETTY_PRINT);
    echo "<b>".$waktu_ketika_diperlukan."</b>";
        echo "<br>";
    echo "<br>";
    echo "sumbangan_yang_boleh_diberikan";
    echo "<br>";
    $sumbangan_yang_boleh_diberikan = json_encode($model->sumbangan_yang_boleh_diberikan,JSON_PRETTY_PRINT);
    echo "<b>".$sumbangan_yang_boleh_diberikan."</b>";

    ?>



</div>
