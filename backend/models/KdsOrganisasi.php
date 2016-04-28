<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "kds_organisasi".
 *
 * @property \MongoId|string $_id
 * @property mixed $organisasi_name
 * @property mixed $registeration_no
 * @property mixed $alamat
 * @property mixed $poskod
 * @property mixed $contact_person
 * @property mixed $state_id
 * @property mixed $mobile_no
 * @property mixed $office_no
 * @property mixed $fax_no
 * @property mixed $email
 * @property mixed $sector_id
 * @property mixed $field_id
 * @property mixed $about_organisasi
 * @property mixed $gambar
 * @property mixed $date_enter
 * @property mixed $enter_by
 * @property mixed $date_update
 * @property mixed $update_by
 */
class KdsOrganisasi extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'kds_organisasi';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'organisasi_name',
            'registeration_no',
            'alamat',
            'poskod',
            'contact_person',
            'state_id',
            'mobile_no',
            'office_no',
            'fax_no',
            'email',
            'sector_id',
            'field_id',
            'about_organisasi',
            'gambar',
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
            [['organisasi_name', 'registeration_no', 'alamat', 'poskod', 'contact_person', 'state_id', 'mobile_no', 'office_no', 'fax_no', 'email', 'sector_id', 'field_id', 'about_organisasi', 'gambar', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'organisasi_name' => 'Organisasi Name',
            'registeration_no' => 'Registeration No',
            'alamat' => 'Alamat',
            'poskod' => 'Poskod',
            'contact_person' => 'Contact Person',
            'state_id' => 'State ID',
            'mobile_no' => 'Mobile No',
            'office_no' => 'Office No',
            'fax_no' => 'Fax No',
            'email' => 'Email',
            'sector_id' => 'Sector ID',
            'field_id' => 'Field ID',
            'about_organisasi' => 'About Organisasi',
            'gambar' => 'Gambar',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
            'date_update' => 'Date Update',
            'update_by' => 'Update By',
        ];
    }
}
