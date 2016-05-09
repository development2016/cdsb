<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KdsOrganisasi;

/**
 * KdsOrganisasiSearch represents the model behind the search form about `backend\models\KdsOrganisasi`.
 */
class KdsOrganisasiSearch extends KdsOrganisasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'organisasi_name', 'registeration_no', 'alamat', 'poskod', 'contact_person', 'state_id', 'mobile_no', 'office_no', 'fax_no', 'email', 'sector_id', 'field_id', 'about_organisasi', 'gambar', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe'],
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
        $query = KdsOrganisasi::find();

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
            ->andFilterWhere(['like', 'organisasi_name', $this->organisasi_name])
            ->andFilterWhere(['like', 'registeration_no', $this->registeration_no])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'poskod', $this->poskod])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'state_id', $this->state_id])
            ->andFilterWhere(['like', 'mobile_no', $this->mobile_no])
            ->andFilterWhere(['like', 'office_no', $this->office_no])
            ->andFilterWhere(['like', 'fax_no', $this->fax_no])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'sector_id', $this->sector_id])
            ->andFilterWhere(['like', 'field_id', $this->field_id])
            ->andFilterWhere(['like', 'about_organisasi', $this->about_organisasi])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'date_enter', $this->date_enter])
            ->andFilterWhere(['like', 'enter_by', $this->enter_by])
            ->andFilterWhere(['like', 'date_update', $this->date_update])
            ->andFilterWhere(['like', 'update_by', $this->update_by]);

        return $dataProvider;
    }
}
