<?php

namespace backend\modules\bimbing\models;

use Yii;

/**
 * This is the model class for collection "bimbing_maklumat_staff".
 *
 * @property \MongoId|string $_id
 * @property mixed $nama
 * @property mixed $no_kad_pengenalan
 * @property mixed $alamat
 * @property mixed $no_telefon
 * @property mixed $email
 * @property mixed $centre
 * @property mixed $state_id
 * @property mixed $maklumat_pasangan
 * @property mixed $maklumat_akademik
 * @property mixed $pekerjaan_sekarang
 * @property mixed $tahun_berkhidmat
 * @property mixed $pengalaman_bekerja
 * @property mixed $akaun_staff
 */
class BimbingMaklumatStaff extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'bimbing_maklumat_staff';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'nama',
            'no_kad_pengenalan',
            'alamat',
            'no_telefon',
            'email',
            'centre',
            'state_id',
            'maklumat_pasangan',
            'maklumat_akademik',
            'pekerjaan_sekarang',
            'tahun_berkhidmat',
            'pengalaman_bekerja',
            'akaun_staff',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'no_kad_pengenalan', 'alamat', 'no_telefon', 'email', 'centre', 'state_id', 'maklumat_pasangan', 'maklumat_akademik', 'pekerjaan_sekarang', 'tahun_berkhidmat', 'pengalaman_bekerja', 'akaun_staff'], 'safe']
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
            'no_kad_pengenalan' => 'No Kad Pengenalan',
            'alamat' => 'Alamat',
            'no_telefon' => 'No Telefon',
            'email' => 'Email',
            'centre' => 'Centre',
            'state_id' => 'State ID',
            'maklumat_pasangan' => 'Maklumat Pasangan',
            'maklumat_akademik' => 'Maklumat Akademik',
            'pekerjaan_sekarang' => 'Pekerjaan Sekarang',
            'tahun_berkhidmat' => 'Tahun Berkhidmat',
            'pengalaman_bekerja' => 'Pengalaman Bekerja',
            'akaun_staff' => 'Akaun Staff',
        ];
    }
}
