<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KdsSukarelawan;

/**
 * KdsSukarelawanSearch represents the model behind the search form about `backend\models\KdsSukarelawan`.
 */
class KdsSukarelawanSearch extends KdsSukarelawan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'kod_sukarelawan', 'kod_kawasan', 'tarikh', 'hari', 'masa', 'nama', 'no_kad_pengenalan', 'alamat', 'poskod', 'no_telefon', 'no_telefon_rumah', 'email', 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan', 'program_sukarelawan_yang_ingin_disertai', 'bahasa_yang_ditutur', 'adakah_anda_memiliki_kenderaan', 'waktu_ketika_diperlukan', 'sumbangan_yang_boleh_diberikan',  'state_id', 'bahagian_id','mukim_id', 'district_id', 'sub_base_id', 'cluster_id', 'kampung_id', 'date_enter', 'enter_by', 'date_update', 'update_by'], 'safe'],
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
        $query = KdsSukarelawan::find();

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
            ->andFilterWhere(['like', 'kod_sukarelawan', $this->kod_sukarelawan])
            ->andFilterWhere(['like', 'kod_kawasan', $this->kod_kawasan])
            ->andFilterWhere(['like', 'tarikh', $this->tarikh])
            ->andFilterWhere(['like', 'hari', $this->hari])
            ->andFilterWhere(['like', 'masa', $this->masa])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_kad_pengenalan', $this->no_kad_pengenalan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'poskod', $this->poskod])
            ->andFilterWhere(['like', 'no_telefon', $this->no_telefon])
            ->andFilterWhere(['like', 'no_telefon_rumah', $this->no_telefon_rumah])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan', $this->adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan])
            ->andFilterWhere(['like', 'program_sukarelawan_yang_ingin_disertai', $this->program_sukarelawan_yang_ingin_disertai])
            ->andFilterWhere(['like', 'bahasa_yang_ditutur', $this->bahasa_yang_ditutur])
            ->andFilterWhere(['like', 'adakah_anda_memiliki_kenderaan', $this->adakah_anda_memiliki_kenderaan])
            ->andFilterWhere(['like', 'waktu_ketika_diperlukan', $this->waktu_ketika_diperlukan])
            ->andFilterWhere(['like', 'sumbangan_yang_boleh_diberikan', $this->sumbangan_yang_boleh_diberikan])
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
