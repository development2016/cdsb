<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\KdsSukarelawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sukarelawan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kds-sukarelawan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah', FALSE, ['value'=>Url::to(['/dropdown/sukarelawan']),'class' => 'btn btn-success','id'=>'create-sukarelawan']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'kod_sukarelawan',
            //'kod_kawasan',
            //'tarikh',
            //'hari',
            // 'masa',
            'nama',
            'no_kad_pengenalan',
            // 'alamat',
            // 'poskod',
            // 'no_telefon',
            // 'no_telefon_rumah',
            // 'email',
            // 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan',
            // 'program_sukarelawan_yang_ingin_disertai',
            // 'bahasa_yang_ditutur',
            // 'adakah_anda_memiliki_kenderaan',
            // 'waktu_ketika_diperlukan',
            // 'sumbangan_yang_boleh_diberikan',
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
