<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KdsProfil;

/**
 * KdsProfilSearch represents the model behind the search form about `backend\models\KdsProfil`.
 */
class KdsProfilSearch extends KdsProfil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'nama', 'nama_samaran', 'no_kad_pengenalan', 'no_kad_pengenalan_lama', 'tarikh_lahir', 'alamat', 'poskod', 'jantina', 'bangsa', 'agama', 'status_perkahwinan', 'kewarganegaraan', 'no_telefon', 'no_telefon_rumah', 'email', 'bilangan_anak', 'adakah_anda_tergolong_dalam_orang_kurang_upaya', 'pekerjaan', 'pendapatan', 'perbelanjaan', 'maklumat_pasangan', 'maklumat_tanggungan', 'maklumat_tambahan', 'maklumat_tanggungan_oku', 'state_id', 'district_id', 'bahagian_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe'],
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
        $query = KdsProfil::find();

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
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nama_samaran', $this->nama_samaran])
            ->andFilterWhere(['like', 'no_kad_pengenalan', $this->no_kad_pengenalan])
            ->andFilterWhere(['like', 'no_kad_pengenalan_lama', $this->no_kad_pengenalan_lama])
            ->andFilterWhere(['like', 'tarikh_lahir', $this->tarikh_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'poskod', $this->poskod])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'bangsa', $this->bangsa])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'status_perkahwinan', $this->status_perkahwinan])
            ->andFilterWhere(['like', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['like', 'no_telefon', $this->no_telefon])
            ->andFilterWhere(['like', 'no_telefon_rumah', $this->no_telefon_rumah])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'bilangan_anak', $this->bilangan_anak])
            ->andFilterWhere(['like', 'adakah_anda_tergolong_dalam_orang_kurang_upaya', $this->adakah_anda_tergolong_dalam_orang_kurang_upaya])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'pendapatan', $this->pendapatan])
            ->andFilterWhere(['like', 'perbelanjaan', $this->perbelanjaan])
            ->andFilterWhere(['like', 'maklumat_pasangan', $this->maklumat_pasangan])
            ->andFilterWhere(['like', 'maklumat_tanggungan', $this->maklumat_tanggungan])
            ->andFilterWhere(['like', 'maklumat_tambahan', $this->maklumat_tambahan])
            ->andFilterWhere(['like', 'maklumat_tanggungan_oku', $this->maklumat_tanggungan_oku])
            ->andFilterWhere(['like', 'state_id', $this->state_id])
            ->andFilterWhere(['like', 'district_id', $this->district_id])
            ->andFilterWhere(['like', 'bahagian_id', $this->bahagian_id])
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
