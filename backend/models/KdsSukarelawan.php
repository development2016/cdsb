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

/**
 * This is the model class for collection "kds_sukarelawan".
 *
 * @property \MongoId|string $_id
 * @property mixed $kod_sukarelawan
 * @property mixed $kod_kawasan
 * @property mixed $tarikh
 * @property mixed $hari
 * @property mixed $masa
 * @property mixed $nama
 * @property mixed $no_kad_pengenalan
 * @property mixed $alamat
 * @property mixed $poskod
 * @property mixed $no_telefon
 * @property mixed $no_telefon_rumah
 * @property mixed $email
 * @property mixed $adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan
 * @property mixed $program_sukarelawan_yang_ingin_disertai
 * @property mixed $bahasa_yang_ditutur
 * @property mixed $adakah_anda_memiliki_kenderaan
 * @property mixed $waktu_ketika_diperlukan
 * @property mixed $sumbangan_yang_boleh_diberikan
 * @property mixed $negeri
 * @property mixed $bahagian
 * @property mixed $daerah
 * @property mixed $subbase
 * @property mixed $cluster
 * @property mixed $kampung
 * @property mixed $date_enter
 * @property mixed $enter_by
 * @property mixed $date_update
 * @property mixed $update_by
 */
class KdsSukarelawan extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'kds_sukarelawan';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
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
            'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan',
            'program_sukarelawan_yang_ingin_disertai',
            'bahasa_yang_ditutur',
            'adakah_anda_memiliki_kenderaan',
            'waktu_ketika_diperlukan',
            'sumbangan_yang_boleh_diberikan',
            'state_id',
            'bahagian_id',
            'mukim_id',
            'district_id',
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
            [['kod_sukarelawan', 'kod_kawasan', 'tarikh', 'hari', 'masa', 'nama', 'no_kad_pengenalan', 'alamat', 'poskod', 'no_telefon', 'no_telefon_rumah', 'email', 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan', 'program_sukarelawan_yang_ingin_disertai', 'bahasa_yang_ditutur', 'adakah_anda_memiliki_kenderaan', 'waktu_ketika_diperlukan', 'sumbangan_yang_boleh_diberikan', 'state_id', 'bahagian_id','mukim_id', 'district_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe'],
            ['no_kad_pengenalan', 'required', 'message' => 'Sila Isi No Kad Pengenalan'],
            ['nama', 'required', 'message' => 'Sila Masukkan Nama Sukarelawan'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'kod_sukarelawan' => 'Kod Sukarelawan',
            'kod_kawasan' => 'Kod Kawasan',
            'tarikh' => 'Tarikh',
            'hari' => 'Hari',
            'masa' => 'Masa',
            'nama' => 'Nama',
            'no_kad_pengenalan' => 'No Kad Pengenalan',
            'alamat' => 'Alamat',
            'poskod' => 'Poskod',
            'no_telefon' => 'No Telefon [HP]',
            'no_telefon_rumah' => 'No Telefon [R]',
            'email' => 'Email',
            'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan' => 'Adakah Anda Terlibat Dengan Kerja Kerja Sukarelawan?',
            'program_sukarelawan_yang_ingin_disertai' => 'Program Sukarelawan Yang Ingin Disertai',
            'bahasa_yang_ditutur' => 'Bahasa Yang Ditutur',
            'adakah_anda_memiliki_kenderaan' => 'Adakah Anda Memiliki Kenderaan?',
            'waktu_ketika_diperlukan' => 'Waktu Ketika Diperlukan',
            'sumbangan_yang_boleh_diberikan' => 'Sumbangan Yang Boleh Diberikan',
            'state_id' => 'Negeri',
            'bahagian_id' => 'Bahagian',
            'mukim_id' => 'Mukim',
            'district_id' => 'Daerah',
            'sub_base_id' => 'Subbase',
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
}
