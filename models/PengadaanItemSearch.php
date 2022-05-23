<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PengadaanItem;

/**
 * PengadaanItemSearch represents the model behind the search form of `app\models\PengadaanItem`.
 */
class PengadaanItemSearch extends PengadaanItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'harga_beli', 'jumlah'], 'integer'],
            [['no_pengadaan', 'kd_barang', 'deskripsi'], 'safe'],
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
        $query = PengadaanItem::find();

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
            'id' => $this->id,
            'harga_beli' => $this->harga_beli,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'no_pengadaan', $this->no_pengadaan])
            ->andFilterWhere(['like', 'kd_barang', $this->kd_barang])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}
