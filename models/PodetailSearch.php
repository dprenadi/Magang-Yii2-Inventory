<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Podetail;

/**
 * PodetailSearch represents the model behind the search form of `app\models\Podetail`.
 */
class PodetailSearch extends Podetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nopo', 'item', 'jenispengadaan'], 'safe'],
            [['unit'], 'integer'],
            [['harga'], 'number'],
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
        $query = Podetail::find();

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
            'unit' => $this->unit,
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'nopo', $this->nopo])
            ->andFilterWhere(['like', 'item', $this->item])
            ->andFilterWhere(['like', 'jenispengadaan', $this->jenispengadaan]);

        return $dataProvider;
    }
}
