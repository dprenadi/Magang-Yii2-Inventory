<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventbarang;

/**
 * InventbarangSearch represents the model behind the search form of `app\models\Inventbarang`.
 */
class InventbarangSearch extends Inventbarang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_inventaris', 'kd_barang', 'tgl_beli', 'harga', 'kondisi', 'status_barang', 'unit', 'kd_lokasi', 'no_po', 'tgl_po', 'sumber_dana', 'no_spk', 'id_vendor'], 'safe'],
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
        $query = Inventbarang::find();

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
            'tgl_beli' => $this->tgl_beli,
            'tgl_po' => $this->tgl_po,
        ]);

        $query->andFilterWhere(['like', 'kd_inventaris', $this->kd_inventaris])
            ->andFilterWhere(['like', 'kd_barang', $this->kd_barang])
            ->andFilterWhere(['like', 'harga', $this->harga])
            ->andFilterWhere(['like', 'kondisi', $this->kondisi])
            ->andFilterWhere(['like', 'status_barang', $this->status_barang])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'kd_lokasi', $this->kd_lokasi])
            ->andFilterWhere(['like', 'no_po', $this->no_po])
            ->andFilterWhere(['like', 'sumber_dana', $this->sumber_dana])
            ->andFilterWhere(['like', 'no_spk', $this->no_spk])
            ->andFilterWhere(['like', 'id_vendor', $this->id_vendor]);

        return $dataProvider;
    }
}
