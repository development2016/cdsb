<?php

namespace backend\modules\gallery\models;

use Yii;

/**
 * This is the model class for table "gallery_images".
 *
 * @property integer $id
 * @property string $path
 * @property integer $size
 * @property string $type
 * @property string $caption_1
 * @property string $caption_2
 */
class GalleryImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['size','gallery_info_id'], 'integer'],
            [['path', 'caption_1', 'caption_2'], 'string', 'max' => 225],
            [['type'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'size' => 'Size',
            'type' => 'Type',
            'caption_1' => 'Caption 1',
            'caption_2' => 'Caption 2',
            'gallery_info_id' => 'gallery_info_id'
        ];
    }
}
