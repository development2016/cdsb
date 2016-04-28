<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "kds_aktiviti".
 *
 * @property \MongoId|string $_id
 * @property mixed $aktiviti
 * @property mixed $objektif
 * @property mixed $state_id
 * @property mixed $bahagian_id
 * @property mixed $district_id
 * @property mixed $mukim_id
 * @property mixed $sub_base_id
 * @property mixed $cluster_id
 * @property mixed $kampung_id
 * @property mixed $aktiviti_date_start
 * @property mixed $aktiviti_date_end
 * @property mixed $aktiviti_time_start
 * @property mixed $aktiviti_time_end
 * @property mixed $participant_volume
 * @property mixed $cost
 * @property mixed $fund_needed
 * @property mixed $status_aktiviti
 * @property mixed $nota
 * @property mixed $program_id
 * @property mixed $date_enter
 * @property mixed $enter_by
 * @property mixed $date_update
 * @property mixed $update_by
 */
class KdsAktiviti extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'kds_aktiviti';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'aktiviti',
            'objektif',
            'state_id',
            'bahagian_id',
            'district_id',
            'mukim_id',
            'sub_base_id',
            'cluster_id',
            'kampung_id',
            'aktiviti_date_start',
            'aktiviti_date_end',
            'aktiviti_time_start',
            'aktiviti_time_end',
            'participant_volume',
            'cost',
            'fund_needed',
            'status_aktiviti',
            'nota',
            'program_id',
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
            [['aktiviti', 'objektif', 'state_id', 'bahagian_id', 'district_id', 'mukim_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'aktiviti_date_start', 'aktiviti_date_end', 'aktiviti_time_start', 'aktiviti_time_end', 'participant_volume', 'cost', 'fund_needed', 'status_aktiviti', 'nota', 'program_id', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'aktiviti' => 'Aktiviti',
            'objektif' => 'Objektif',
            'state_id' => 'State ID',
            'bahagian_id' => 'Bahagian ID',
            'district_id' => 'District ID',
            'mukim_id' => 'Mukim ID',
            'sub_base_id' => 'Sub Base ID',
            'cluster_id' => 'Cluster ID',
            'kampung_id' => 'Kampung ID',
            'aktiviti_date_start' => 'Aktiviti Date Start',
            'aktiviti_date_end' => 'Aktiviti Date End',
            'aktiviti_time_start' => 'Aktiviti Time Start',
            'aktiviti_time_end' => 'Aktiviti Time End',
            'participant_volume' => 'Participant Volume',
            'cost' => 'Cost',
            'fund_needed' => 'Fund Needed',
            'status_aktiviti' => 'Status Aktiviti',
            'nota' => 'Nota',
            'program_id' => 'Program ID',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
            'date_update' => 'Date Update',
            'update_by' => 'Update By',
        ];
    }
}
