<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KdsAktiviti;

/**
 * KdsAktivitiSearch represents the model behind the search form about `backend\models\KdsAktiviti`.
 */
class KdsAktivitiSearch extends KdsAktiviti
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'aktiviti', 'objektif', 'state_id', 'bahagian_id', 'district_id', 'mukim_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'aktiviti_date_start', 'aktiviti_date_end', 'aktiviti_time_start', 'aktiviti_time_end', 'participant_volume', 'cost', 'fund_needed', 'status_aktiviti', 'nota', 'program_id', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe'],
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
        $query = KdsAktiviti::find();

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
            ->andFilterWhere(['like', 'aktiviti', $this->aktiviti])
            ->andFilterWhere(['like', 'objektif', $this->objektif])
            ->andFilterWhere(['like', 'state_id', $this->state_id])
            ->andFilterWhere(['like', 'bahagian_id', $this->bahagian_id])
            ->andFilterWhere(['like', 'district_id', $this->district_id])
            ->andFilterWhere(['like', 'mukim_id', $this->mukim_id])
            ->andFilterWhere(['like', 'sub_base_id', $this->sub_base_id])
            ->andFilterWhere(['like', 'cluster_id', $this->cluster_id])
            ->andFilterWhere(['like', 'kampung_id', $this->kampung_id])
            ->andFilterWhere(['like', 'aktiviti_date_start', $this->aktiviti_date_start])
            ->andFilterWhere(['like', 'aktiviti_date_end', $this->aktiviti_date_end])
            ->andFilterWhere(['like', 'aktiviti_time_start', $this->aktiviti_time_start])
            ->andFilterWhere(['like', 'aktiviti_time_end', $this->aktiviti_time_end])
            ->andFilterWhere(['like', 'participant_volume', $this->participant_volume])
            ->andFilterWhere(['like', 'cost', $this->cost])
            ->andFilterWhere(['like', 'fund_needed', $this->fund_needed])
            ->andFilterWhere(['like', 'status_aktiviti', $this->status_aktiviti])
            ->andFilterWhere(['like', 'nota', $this->nota])
            ->andFilterWhere(['like', 'program_id', $this->program_id])
            ->andFilterWhere(['like', 'date_enter', $this->date_enter])
            ->andFilterWhere(['like', 'enter_by', $this->enter_by])
            ->andFilterWhere(['like', 'date_update', $this->date_update])
            ->andFilterWhere(['like', 'update_by', $this->update_by]);

        return $dataProvider;
    }
}
