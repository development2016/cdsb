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
use common\models\LookupKategoriIsu;
use common\models\LookupPerkahwinan;
use common\models\LookupAgama;
use common\models\LookupBangsa;
/**
 * This is the model class for collection "kds_isu".
 *
 * @property \MongoId|string $_id
 * @property mixed $kod_isu
 * @property mixed $kod_kawasan
 * @property mixed $tarikh
 * @property mixed $masa
 * @property mixed $hari
 * @property mixed $nama
 * @property mixed $no_kad_pengenalan
 * @property mixed $no_kad_pengenalan_lama
 * @property mixed $jantina
 * @property mixed $agama
 * @property mixed $bangsa
 * @property mixed $status_perkahwinan
 * @property mixed $adakah_anda_tergolong_dalam_orang_kurang_upaya
 * @property mixed $alamat
 * @property mixed $poskod
 * @property mixed $no_telefon
 * @property mixed $kategori_isu
 * @property mixed $laporan_isu
 * @property mixed $tindakan_pengadu
 * @property mixed $cadangan
 * @property mixed $dilaporkan_oleh
 * @property mixed $disaksikan_oleh
 * @property mixed $diterima_oleh
 * @property mixed $status_isu
 * @property mixed $state_id
 * @property mixed $bahagian_id
 * @property mixed $mukim_id
 * @property mixed $district_id
 * @property mixed $sub_base_id
 * @property mixed $cluster_id
 * @property mixed $kampung_id
 * @property mixed $date_enter
 * @property mixed $enter_by
 * @property mixed $date_update
 * @property mixed $update_by
 */
class KdsIsu extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'kds_isu';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
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
            'agama',
            'bangsa',
            'status_perkahwinan',
            'adakah_anda_tergolong_dalam_orang_kurang_upaya',
            'alamat',
            'poskod',
            'no_telefon',
            'kategori_isu',
            'laporan_isu',
            'tindakan_pengadu',
            'cadangan',
            'dilaporkan_oleh',
            'disaksikan_oleh',
            'diterima_oleh',
            'status_isu',
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
            [['kod_isu', 'kod_kawasan', 'tarikh', 'masa', 'hari', 'nama', 'no_kad_pengenalan', 'no_kad_pengenalan_lama', 'jantina', 'agama', 'bangsa', 'status_perkahwinan', 'adakah_anda_tergolong_dalam_orang_kurang_upaya', 'alamat', 'poskod', 'no_telefon', 'kategori_isu', 'laporan_isu', 'tindakan_pengadu', 'cadangan', 'dilaporkan_oleh', 'disaksikan_oleh', 'diterima_oleh', 'status_isu', 'state_id', 'bahagian_id', 'mukim_id', 'district_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe'],
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
            'kod_isu' => 'Kod Isu',
            'kod_kawasan' => 'Kod Kawasan',
            'tarikh' => 'Tarikh',
            'masa' => 'Masa',
            'hari' => 'Hari',
            'nama' => 'Nama',
            'no_kad_pengenalan' => 'No Kad Pengenalan',
            'no_kad_pengenalan_lama' => 'No Kad Pengenalan Lama',
            'jantina' => 'Jantina',
            'agama' => 'Agama',
            'bangsa' => 'Bangsa',
            'status_perkahwinan' => 'Status Perkahwinan',
            'adakah_anda_tergolong_dalam_orang_kurang_upaya' => 'Adakah Anda Tergolong Dalam Orang Kurang Upaya (OKU) ?',
            'alamat' => 'Alamat',
            'poskod' => 'Poskod',
            'no_telefon' => 'No Telefon',
            'kategori_isu' => 'Kategori Isu',
            'laporan_isu' => 'Laporan Isu / Permasalahan',
            'tindakan_pengadu' => 'Tindakan Pengadu / Analisis Isu',
            'cadangan' => 'Cadangan penyelesaian yang dipersetujui bersama (komuniti dengang KAOU) dan pelan tindakan susulan (KAOU)',
            'dilaporkan_oleh' => 'Dilaporkan Oleh',
            'disaksikan_oleh' => 'Disaksikan Oleh',
            'diterima_oleh' => 'Diterima Oleh',
            'status_isu' => 'Status',
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


    public function getKategoriisus()
    {
        return $this->hasOne(LookupKategoriIsu::className(), ['id' => 'kategori_isu']);
    }
    public function getKategoriokus()
    {
        return $this->hasOne(LookupKategoriOku::className(), ['id' => 'adakah_anda_tergolong_dalam_orang_kurang_upaya']);
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
