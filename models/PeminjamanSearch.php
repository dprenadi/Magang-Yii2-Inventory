<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Peminjaman;

/**
 * PeminjamanSearch represents the model behind the search form of `app\models\Peminjaman`.
 */
class PeminjamanSearch extends Peminjaman
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_peminjaman', 'tgl_peminjaman', 'tgl_akan_kembali', 'tgl_kembali', 'kd_pegawai', 'keterangan', 'status_kembali', 'kd_petugas'], 'safe'],
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
        $query = Peminjaman::find();

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
            'tgl_peminjaman' => $this->tgl_peminjaman,
            'tgl_akan_kembali' => $this->tgl_akan_kembali,
            'tgl_kembali' => $this->tgl_kembali,
        ]);

        $query->andFilterWhere(['like', 'no_peminjaman', $this->no_peminjaman])
            ->andFilterWhere(['like', 'kd_pegawai', $this->kd_pegawai])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'status_kembali', $this->status_kembali])
            ->andFilterWhere(['like', 'kd_petugas', $this->kd_petugas]);

        return $dataProvider;
    }
}
