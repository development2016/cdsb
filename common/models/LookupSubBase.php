<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lookup_sub_base".
 *
 * @property integer $sub_base_id
 * @property string $sub_base
 * @property string $sub_base_code
 * @property integer $mukim_id
 * @property integer $district_id
 * @property integer $state_id
 * @property integer $bahagian_id
 */
class LookupSubBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup_sub_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mukim_id', 'district_id', 'state_id', 'bahagian_id'], 'integer'],
            [['sub_base'], 'string', 'max' => 225],
            [['sub_base_code'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_base_id' => 'Sub Base ID',
            'sub_base' => 'Sub Base',
            'sub_base_code' => 'Sub Base Code',
            'mukim_id' => 'Mukim ID',
            'district_id' => 'District ID',
            'state_id' => 'State ID',
            'bahagian_id' => 'Bahagian ID',
        ];
    }
}
