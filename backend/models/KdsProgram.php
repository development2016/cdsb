<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "kds_program".
 *
 * @property \MongoId|string $_id
 * @property mixed $nama_program
 * @property mixed $organisasi_id
 * @property mixed $sector_id
 * @property mixed $field_id
 * @property mixed $program_milestone
 * @property mixed $program_status
 * @property mixed $date_enter
 * @property mixed $enter_by
 * @property mixed $date_update
 * @property mixed $update_by
 * @property mixed $tarikh_pendaftaran
 * @property mixed $nota
 */
class KdsProgram extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'kds_program';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'nama_program',
            'organisasi_id',
            'sector_id',
            'field_id',
            'program_milestone',
            'program_status',
            'date_enter',
            'enter_by',
            'date_update',
            'update_by',
            'tarikh_pendaftaran',
            'nota',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_program', 'organisasi_id', 'sector_id', 'field_id', 'program_milestone', 'program_status', 'date_enter', 'enter_by', 'date_update', 'update_by', 'tarikh_pendaftaran', 'nota'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'nama_program' => 'Nama Program',
            'organisasi_id' => 'Organisasi ID',
            'sector_id' => 'Sector ID',
            'field_id' => 'Field ID',
            'program_milestone' => 'Program Milestone',
            'program_status' => 'Program Status',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
            'date_update' => 'Date Update',
            'update_by' => 'Update By',
            'tarikh_pendaftaran' => 'Tarikh Pendaftaran',
            'nota' => 'Nota',
        ];
    }
}
