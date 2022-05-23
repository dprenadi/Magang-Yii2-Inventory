<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jenisbarang;

/**
 * JenisbarangSearch represents the model behind the search form of `app\models\Jenisbarang`.
 */
class JenisbarangSearch extends Jenisbarang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_barang', 'nama_barang', 'satuan', 'merek', 'kd_kategori', 'gol_inventory', 'keterangan'], 'safe'],
            [['umur_ekonomi', 'hps'], 'number'],
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
        $query = Jenisbarang::find();

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
            'umur_ekonomi' => $this->umur_ekonomi,
            'hps' => $this->hps,
        ]);

        $query->andFilterWhere(['like', 'kd_barang', $this->kd_barang])
            ->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'merek', $this->merek])
            ->andFilterWhere(['like', 'kd_kategori', $this->kd_kategori])
            ->andFilterWhere(['like', 'gol_inventory', $this->gol_inventory])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
