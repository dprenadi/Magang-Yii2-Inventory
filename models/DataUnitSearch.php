<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataUnit;

/**
 * DataUnitSearch represents the model behind the search form of `app\models\DataUnit`.
 */
class DataUnitSearch extends DataUnit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_UNIT', 'ID_REGION', 'NAMA_UNIT', 'SINGKATAN', 'KETERANGAN'], 'safe'],
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
        $query = DataUnit::find();

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
        $query->andFilterWhere(['like', 'ID_UNIT', $this->ID_UNIT])
            ->andFilterWhere(['like', 'ID_REGION', $this->ID_REGION])
            ->andFilterWhere(['like', 'NAMA_UNIT', $this->NAMA_UNIT])
            ->andFilterWhere(['like', 'SINGKATAN', $this->SINGKATAN])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN]);

        return $dataProvider;
    }
}
