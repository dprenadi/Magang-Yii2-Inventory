<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengajuandetail;

/**
 * PengajuandetailSearch represents the model behind the search form of `app\models\Pengajuandetail`.
 */
class PengajuandetailSearch extends Pengajuandetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['kd_pengajuan', 'item', 'unit', 'harga'], 'safe'],
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
        $query = Pengajuandetail::find();

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
        ]);

        $query->andFilterWhere(['like', 'kd_pengajuan', $this->kd_pengajuan])
            ->andFilterWhere(['like', 'item', $this->item])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'harga', $this->harga]);

        return $dataProvider;
    }
}
