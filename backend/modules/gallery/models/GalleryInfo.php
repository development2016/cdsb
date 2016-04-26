<?php

namespace backend\modules\gallery\models;

use Yii;
use backend\models\KdsProgram;
use common\models\LookupState;
/**
 * This is the model class for table "gallery_info".
 *
 * @property integer $id
 * @property integer $state_id
 * @property integer $program_id
 * @property string $date_enter
 * @property integer $enter_by
 * @property string $date_update
 * @property integer $update_by
 */
class GalleryInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'enter_by', 'update_by'], 'integer'],
            [['date_enter', 'date_update','program_id'], 'string', 'max' => 50],
            ['state_id', 'required', 'message' => 'Sila Pilih Negeri'],
            ['program_id', 'required', 'message' => 'Sila Pilih Program'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_id' => 'Negeri',
            'program_id' => 'Program',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
            'date_update' => 'Date Update',
            'update_by' => 'Update By',
        ];
    }

    public function getPrograms()
    {
        return $this->hasOne(KdsProgram::className(), ['_id' => 'program_id']);
    }
    public function getStates()
    {
        return $this->hasOne(LookupState::className(), ['state_id' => 'state_id']);
    }
}
