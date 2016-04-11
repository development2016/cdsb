<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lookup_household".
 *
 * @property integer $id
 * @property string $income
 */
class LookupHousehold extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup_household';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['household'], 'string', 'max' => 225]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'household' => 'household',
        ];
    }
}
