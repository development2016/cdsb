<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lookup_cluster".
 *
 * @property integer $cluster_id
 * @property string $cluster
 * @property string $cluster_code
 * @property integer $sub_base_id
 * @property integer $mukim_id
 * @property integer $district_id
 * @property integer $state_id
 * @property integer $bahagian_id
 */
class LookupCluster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup_cluster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_base_id', 'mukim_id', 'district_id', 'state_id', 'bahagian_id'], 'integer'],
            [['cluster'], 'string', 'max' => 225],
            [['cluster_code'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cluster_id' => 'Cluster ID',
            'cluster' => 'Cluster',
            'cluster_code' => 'Cluster Code',
            'sub_base_id' => 'Sub Base ID',
            'mukim_id' => 'Mukim ID',
            'district_id' => 'District ID',
            'state_id' => 'State ID',
            'bahagian_id' => 'Bahagian ID',
        ];
    }
}
