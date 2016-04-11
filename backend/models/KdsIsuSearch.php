<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KdsIsu;

/**
 * KdsIsuSearch represents the model behind the search form about `backend\models\KdsIsu`.
 */
class KdsIsuSearch extends KdsIsu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'kod_isu', 'kod_kawasan', 'tarikh', 'masa', 'hari', 'nama', 'no_kad_pengenalan', 'no_kad_pengenalan_lama', 'jantina', 'agama', 'bangsa', 'status_perkahwinan', 'adakah_anda_tergolong_dalam_orang_kurang_upaya', 'alamat', 'poskod', 'no_telefon', 'kategori_isu', 'laporan_isu', 'tindakan_pengadu', 'cadangan', 'dilaporkan_oleh', 'disaksikan_oleh', 'diterima_oleh', 'status_isu', 'state_id', 'bahagian_id', 'mukim_id', 'district_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe'],
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
        $query = KdsIsu::find();

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
            ->andFilterWhere(['like', 'kod_isu', $this->kod_isu])
            ->andFilterWhere(['like', 'kod_kawasan', $this->kod_kawasan])
            ->andFilterWhere(['like', 'tarikh', $this->tarikh])
            ->andFilterWhere(['like', 'masa', $this->masa])
            ->andFilterWhere(['like', 'hari', $this->hari])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_kad_pengenalan', $this->no_kad_pengenalan])
            ->andFilterWhere(['like', 'no_kad_pengenalan_lama', $this->no_kad_pengenalan_lama])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'bangsa', $this->bangsa])
            ->andFilterWhere(['like', 'status_perkahwinan', $this->status_perkahwinan])
            ->andFilterWhere(['like', 'adakah_anda_tergolong_dalam_orang_kurang_upaya', $this->adakah_anda_tergolong_dalam_orang_kurang_upaya])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'poskod', $this->poskod])
            ->andFilterWhere(['like', 'no_telefon', $this->no_telefon])
            ->andFilterWhere(['like', 'kategori_isu', $this->kategori_isu])
            ->andFilterWhere(['like', 'laporan_isu', $this->laporan_isu])
            ->andFilterWhere(['like', 'tindakan_pengadu', $this->tindakan_pengadu])
            ->andFilterWhere(['like', 'cadangan', $this->cadangan])
            ->andFilterWhere(['like', 'dilaporkan_oleh', $this->dilaporkan_oleh])
            ->andFilterWhere(['like', 'disaksikan_oleh', $this->disaksikan_oleh])
            ->andFilterWhere(['like', 'diterima_oleh', $this->diterima_oleh])
            ->andFilterWhere(['like', 'status_isu', $this->status_isu])
            ->andFilterWhere(['like', 'state_id', $this->state_id])
            ->andFilterWhere(['like', 'bahagian_id', $this->bahagian_id])
            ->andFilterWhere(['like', 'mukim_id', $this->mukim_id])
            ->andFilterWhere(['like', 'district_id', $this->district_id])
            ->andFilterWhere(['like', 'sub_base_id', $this->sub_base_id])
            ->andFilterWhere(['like', 'cluster_id', $this->cluster_id])
            ->andFilterWhere(['like', 'kampung_id', $this->kampung_id])
            ->andFilterWhere(['like', 'date_enter', $this->date_enter])
            ->andFilterWhere(['like', 'enter_by', $this->enter_by])
            ->andFilterWhere(['like', 'date_update', $this->date_update])
            ->andFilterWhere(['like', 'update_by', $this->update_by]);

        return $dataProvider;
    }
}
