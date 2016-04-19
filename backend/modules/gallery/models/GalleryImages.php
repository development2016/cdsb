<?php

namespace backend\modules\gallery\models;

use Yii;

/**
 * This is the model class for collection "gallery-images".
 *
 * @property \MongoId|string $_id
 * @property mixed $state_id
 * @property mixed $gallery
 * @property mixed $program
 * @property mixed $description
 * @property mixed $date_enter
 * @property mixed $enter_by
 * @property mixed $update_date
 * @property mixed $update_by
 */
class GalleryImages extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'gallery-images';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'state_id',
            'gallery',
            'program',
            'description',
            'date_enter',
            'enter_by',
            'update_date',
            'update_by',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state_id', 'gallery', 'program', 'description', 'date_enter', 'enter_by', 'update_date', 'update_by'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'state_id' => 'State ID',
            'gallery' => 'Gallery',
            'program' => 'Program',
            'description' => 'Description',
            'date_enter' => 'Date Enter',
            'enter_by' => 'Enter By',
            'update_date' => 'Update Date',
            'update_by' => 'Update By',
        ];
    }
}
