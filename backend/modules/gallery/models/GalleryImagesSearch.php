<?php

namespace backend\modules\gallery\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\gallery\models\GalleryImages;

/**
 * GalleryImagesSearch represents the model behind the search form about `backend\modules\gallery\models\GalleryImages`.
 */
class GalleryImagesSearch extends GalleryImages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'state_id', 'gallery', 'program', 'description', 'date_enter', 'enter_by', 'update_date', 'update_by'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = GalleryImages::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'state_id', $this->state_id])
            ->andFilterWhere(['like', 'gallery', $this->gallery])
            ->andFilterWhere(['like', 'program', $this->program])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'date_enter', $this->date_enter])
            ->andFilterWhere(['like', 'enter_by', $this->enter_by])
            ->andFilterWhere(['like', 'update_date', $this->update_date])
            ->andFilterWhere(['like', 'update_by', $this->update_by]);

        return $dataProvider;
    }
}
