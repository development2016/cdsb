<?php

namespace backend\modules\bimbing\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\bimbing\models\BimbingMaklumatStaff;

/**
 * BimbingMaklumatStaffSearch represents the model behind the search form about `backend\modules\bimbing\models\BimbingMaklumatStaff`.
 */
class BimbingMaklumatStaffSearch extends BimbingMaklumatStaff
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id', 'nama', 'no_kad_pengenalan', 'alamat', 'no_telefon', 'email', 'centre', 'state_id', 'maklumat_pasangan', 'maklumat_akademik', 'pekerjaan_sekarang', 'tahun_berkhidmat', 'pengalaman_bekerja', 'akaun_staff'], 'safe'],
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
        $query = BimbingMaklumatStaff::find();

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
            ->andFilterWhere(['like', 'no_kad_pengenalan', $this->no_kad_pengenalan])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_telefon', $this->no_telefon])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'centre', $this->centre])
            ->andFilterWhere(['like', 'state_id', $this->state_id])
            ->andFilterWhere(['like', 'maklumat_pasangan', $this->maklumat_pasangan])
            ->andFilterWhere(['like', 'maklumat_akademik', $this->maklumat_akademik])
            ->andFilterWhere(['like', 'pekerjaan_sekarang', $this->pekerjaan_sekarang])
            ->andFilterWhere(['like', 'tahun_berkhidmat', $this->tahun_berkhidmat])
            ->andFilterWhere(['like', 'pengalaman_bekerja', $this->pengalaman_bekerja])
            ->andFilterWhere(['like', 'akaun_staff', $this->akaun_staff]);

        return $dataProvider;
    }
}
