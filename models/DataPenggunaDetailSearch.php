<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataPenggunaDetail;

/**
 * DataPenggunaDetailSearch represents the model behind the search form of `app\models\DataPenggunaDetail`.
 */
class DataPenggunaDetailSearch extends DataPenggunaDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PENGGUNA_DETAIL', 'ID_PENGGUNA', 'ID_REGION', 'ID_UNIT', 'JENIS_PEKERJAAN'], 'safe'],
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
        $query = DataPenggunaDetail::find();

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
        $query->andFilterWhere(['like', 'ID_PENGGUNA_DETAIL', $this->ID_PENGGUNA_DETAIL])
            ->andFilterWhere(['like', 'ID_PENGGUNA', $this->ID_PENGGUNA])
            ->andFilterWhere(['like', 'ID_REGION', $this->ID_REGION])
            ->andFilterWhere(['like', 'ID_UNIT', $this->ID_UNIT])
            ->andFilterWhere(['like', 'JENIS_PEKERJAAN', $this->JENIS_PEKERJAAN]);

        return $dataProvider;
    }
}
