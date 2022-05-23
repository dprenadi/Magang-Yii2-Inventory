<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengadaan;

/**
 * PengadaanSearch represents the model behind the search form of `app\models\Pengadaan`.
 */
class PengadaanSearch extends Pengadaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengadaan', 'tgl_pengadaan', 'kd_supplier', 'jenis_pengadaan', 'keterangan', 'kd_petugas'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Pengadaan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'tgl_pengadaan' => $this->tgl_pengadaan,
        ]);

        $query->andFilterWhere(['like', 'no_pengadaan', $this->no_pengadaan])
            ->andFilterWhere(['like', 'kd_supplier', $this->kd_supplier])
            ->andFilterWhere(['like', 'jenis_pengadaan', $this->jenis_pengadaan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'kd_petugas', $this->kd_petugas]);

        return $dataProvider;
    }
}
