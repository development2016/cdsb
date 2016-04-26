<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KdsProgram;

/**
 * KdsProgramSearch represents the model behind the search form about `backend\models\KdsProgram`.
 */
class KdsProgramSearch extends KdsProgram
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'nama_program', 'organisasi_id', 'sector_id', 'field_id', 'program_milestone', 'program_status', 'date_enter', 'enter_by', 'date_update', 'update_by', 'tarikh_pendaftaran', 'nota'], 'safe'],
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
        $query = KdsProgram::find();

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
            ->andFilterWhere(['like', 'nama_program', $this->nama_program])
            ->andFilterWhere(['like', 'organisasi_id', $this->organisasi_id])
            ->andFilterWhere(['like', 'sector_id', $this->sector_id])
            ->andFilterWhere(['like', 'field_id', $this->field_id])
            ->andFilterWhere(['like', 'program_milestone', $this->program_milestone])
            ->andFilterWhere(['like', 'program_status', $this->program_status])
            ->andFilterWhere(['like', 'date_enter', $this->date_enter])
            ->andFilterWhere(['like', 'enter_by', $this->enter_by])
            ->andFilterWhere(['like', 'date_update', $this->date_update])
            ->andFilterWhere(['like', 'update_by', $this->update_by])
            ->andFilterWhere(['like', 'tarikh_pendaftaran', $this->tarikh_pendaftaran])
            ->andFilterWhere(['like', 'nota', $this->nota]);

        return $dataProvider;
    }
}
