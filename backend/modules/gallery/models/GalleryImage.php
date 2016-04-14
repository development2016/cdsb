<?php

namespace backend\modules\gallery\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "gallery_image".
 *
 * @property integer $id
 * @property integer $state_id
 * @property string $image
 * @property string $caption1
 * @property string $caption2
 * @property string $date_enter
 * @property integer $enter_by
 * @property string $date_update
 * @property string $update_by
 * @property string $program
 */
class GalleryImage extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'enter_by'], 'integer'],
            [['image'], 'string', 'max' => 200],
            [['caption1', 'caption2'], 'string', 'max' => 250],
            [['date_enter', 'date_update', 'update_by'], 'string', 'max' => 50],
            [['program'], 'string', 'max' => 150],
            [['file'],'file','skipOnEmpty' => false, 'extensions' => 'png, jpg']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_id' => 'State ID',
            'image' => 'Image',
            'caption1' => 'Caption1',
            'caption2' => 'Caption2',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
            'date_update' => 'Date Update',
            'update_by' => 'Update By',
            'program' => 'Program',
            'file'=>'Upload Image',
        ];
    }
}
