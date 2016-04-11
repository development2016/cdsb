<?php

namespace backend\models;

use Yii;
use common\models\LookupState;
use common\models\LookupBahagian;
use common\models\LookupDistrict;
use common\models\LookupMukim;
use common\models\LookupSubBase;
use common\models\LookupCluster;
use common\models\LookupKampung;
use common\models\LookupKategoriOku;
use common\models\LookupPerkahwinan;
use common\models\LookupAgama;
use common\models\LookupBangsa;
/**
 * This is the model class for collection "kds_profil".
 *
 * @property \MongoId|string $_id
 * @property mixed $nama
 * @property mixed $nama_samaran
 * @property mixed $no_kad_pengenalan
 * @property mixed $no_kad_pengenalan_lama
 * @property mixed $tarikh_lahir
 * @property mixed $alamat
 * @property mixed $poskod
 * @property mixed $jantina
 * @property mixed $bangsa
 * @property mixed $agama
 * @property mixed $status_perkahwinan
 * @property mixed $kewarganegaraan
 * @property mixed $no_telefon
 * @property mixed $no_telefon_rumah
 * @property mixed $email
 * @property mixed $bilangan_anak
 * @property mixed $adakah_anda_tergolong_dalam_orang_kurang_upaya
 * @property mixed $pekerjaan
 * @property mixed $pendapatan
 * @property mixed $perbelanjaan
 * @property mixed $maklumat_pasangan
 * @property mixed $maklumat_tanggungan
 * @property mixed $maklumat_tambahan
 * @property mixed $maklumat_tanggungan_oku
 * @property mixed $state_id
 * @property mixed $district_id
 * @property mixed $bahagian_id
 * @property mixed $sub_base_id
 * @property mixed $cluster_id
 * @property mixed $kampung_id
 * @property mixed $date_enter
 * @property mixed $enter_by
 * @property mixed $date_update
 * @property mixed $update_by
 */
class KdsProfil extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'kds_profil';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'nama',
            'nama_samaran',
            'no_kad_pengenalan',
            'no_kad_pengenalan_lama',
            'tarikh_lahir',
            'alamat',
            'poskod',
            'jantina',
            'bangsa',
            'agama',
            'status_perkahwinan',
            'kewarganegaraan',
            'no_telefon',
            'no_telefon_rumah',
            'email',
            'bilangan_anak',
            'adakah_anda_tergolong_dalam_orang_kurang_upaya',
            'pekerjaan',
            'pendapatan',
            'perbelanjaan',
            'maklumat_pasangan',
            'maklumat_tanggungan',
            'maklumat_tambahan',
            'maklumat_tanggungan_oku',
            'state_id',
            'district_id',
            'bahagian_id',
            'mukim_id',
            'sub_base_id',
            'cluster_id',
            'kampung_id',
            'date_enter',
            'enter_by',
            'date_update',
            'update_by',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'nama_samaran', 'no_kad_pengenalan', 'no_kad_pengenalan_lama', 'tarikh_lahir', 'alamat', 'poskod', 'jantina', 'bangsa', 'agama', 'status_perkahwinan', 'kewarganegaraan', 'no_telefon', 'no_telefon_rumah', 'email', 'bilangan_anak', 'adakah_anda_tergolong_dalam_orang_kurang_upaya', 'pekerjaan', 'pendapatan', 'perbelanjaan', 'maklumat_pasangan', 'maklumat_tanggungan', 'maklumat_tambahan', 'maklumat_tanggungan_oku', 'state_id', 'district_id', 'bahagian_id', 'mukim_id','sub_base_id', 'cluster_id', 'kampung_id', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'nama' => 'Nama',
            'nama_samaran' => 'Nama Samaran',
            'no_kad_pengenalan' => 'No Kad Pengenalan',
            'no_kad_pengenalan_lama' => 'No Kad Pengenalan Lama',
            'tarikh_lahir' => 'Tarikh Lahir',
            'alamat' => 'Alamat',
            'poskod' => 'Poskod',
            'jantina' => 'Jantina',
            'bangsa' => 'Bangsa',
            'agama' => 'Agama',
            'status_perkahwinan' => 'Status Perkahwinan',
            'kewarganegaraan' => 'Kewarganegaraan',
            'no_telefon' => 'No Telefon [HP]',
            'no_telefon_rumah' => 'No Telefon Rumah [R]',
            'email' => 'Email',
            'bilangan_anak' => 'Bilangan Anak',
            'adakah_anda_tergolong_dalam_orang_kurang_upaya' => 'Adakah Anda Tergolong Dalam Orang Kurang Upaya?',
            'pekerjaan' => 'Pekerjaan',
            'pendapatan' => 'Pendapatan',
            'perbelanjaan' => 'Perbelanjaan',
            'maklumat_pasangan' => 'Maklumat Pasangan',
            'maklumat_tanggungan' => 'Maklumat Tanggungan',
            'maklumat_tambahan' => 'Maklumat Tambahan',
            'maklumat_tanggungan_oku' => 'Maklumat Tanggungan Oku',
            'state_id' => 'Negeri',
            'bahagian_id' => 'Bahagian',
            'mukim_id' => 'Mukim',
            'district_id' => 'Daerah',
            'sub_base_id' => 'Sub Base',
            'cluster_id' => 'Cluster',
            'kampung_id' => 'Kampung',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
            'date_update' => 'Date Update',
            'update_by' => 'Update By',
        ];
    }

    public function getStates()
    {
        return $this->hasOne(LookupState::className(), ['state_id' => 'state_id']);
    }
    public function getBahagians()
    {
        return $this->hasOne(LookupBahagian::className(), ['bahagian_id' => 'bahagian_id']);
    }
    public function getDistricts()
    {
        return $this->hasOne(LookupDistrict::className(), ['district_id' => 'district_id']);
    }
    public function getMukims()
    {
        return $this->hasOne(LookupMukim::className(), ['mukim_id' => 'mukim_id']);
    }
    public function getSubBases()
    {
        return $this->hasOne(LookupSubBase::className(), ['sub_base_id' => 'sub_base_id']);
    }
    public function getClusters()
    {
        return $this->hasOne(LookupCluster::className(), ['cluster_id' => 'cluster_id']);
    }
    public function getKampungs()
    {
        return $this->hasOne(LookupKampung::className(), ['kampung_id' => 'kampung_id']);
    }


    public function getPerkahwinans()
    {
        return $this->hasOne(LookupPerkahwinan::className(), ['id' => 'status_perkahwinan']);
    }
    public function getAgamas()
    {
        return $this->hasOne(LookupAgama::className(), ['id' => 'agama']);
    }
    public function getBangsas()
    {
        return $this->hasOne(LookupBangsa::className(), ['id' => 'bangsa']);
    }



}
