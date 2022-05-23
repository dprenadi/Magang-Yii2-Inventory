<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Po;

/**
 * PoSearch represents the model behind the search form of `app\models\Po`.
 */
class PoSearch extends Po
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nopo', 'nokp', 'nokon', 'tglpo', 'idvendor', 'idpejabat', 'sapproval', 'dateapproval', 'spo'], 'safe'],
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
        $query = Po::find();

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
            'tglpo' => $this->tglpo,
            'dateapproval' => $this->dateapproval,
        ]);

        $query->andFilterWhere(['like', 'nopo', $this->nopo])
            ->andFilterWhere(['like', 'nokp', $this->nokp])
            ->andFilterWhere(['like', 'nokon', $this->nokon])
            ->andFilterWhere(['like', 'idvendor', $this->idvendor])
            ->andFilterWhere(['like', 'idpejabat', $this->idpejabat])
            ->andFilterWhere(['like', 'sapproval', $this->sapproval])
            ->andFilterWhere(['like', 'spo', $this->spo]);

        return $dataProvider;
    }
}
