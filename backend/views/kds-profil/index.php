<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use backend\models\KdsProfil;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\KdsProfilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profil';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="kds-profil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah', FALSE, ['value'=>Url::to(['/dropdown/profil']),'class' => 'btn btn-success','id'=>'create-profil']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'_id',
            'nama',
            //'nama_samaran',
            'no_kad_pengenalan',
            //'no_kad_pengenalan_lama',
            // 'tarikh_lahir',
            // 'alamat',
            // 'poskod',
            // 'jantina',
            // 'bangsa',
            // 'agama',
            // 'status_perkahwinan',
            // 'kewarganegaraan',
            // 'no_telefon',
            // 'no_telefon_rumah',
            // 'email',
            // 'bilangan_anak',
            // 'adakah_anda_tergolong_dalam_orang_kurang_upaya',
            // 'pekerjaan',
            // 'pendapatan',
            // 'perbelanjaan',
            // 'maklumat_pasangan',
            // 'maklumat_tanggungan',
            // 'maklumat_tambahan',
            // 'maklumat_tanggungan_oku',
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
