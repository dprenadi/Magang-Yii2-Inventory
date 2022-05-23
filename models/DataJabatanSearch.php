<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataJabatan;

/**
 * DataJabatanSearch represents the model behind the search form of `app\models\DataJabatan`.
 */
class DataJabatanSearch extends DataJabatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idjabatan', 'nama', 'gedung', 'ruang', 'divisi', 'bidang', 'level', 'foto'], 'safe'],
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
        $query = DataJabatan::find();

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
        $query->andFilterWhere(['like', 'idjabatan', $this->idjabatan])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'gedung', $this->gedung])
            ->andFilterWhere(['like', 'ruang', $this->ruang])
            ->andFilterWhere(['like', 'divisi', $this->divisi])
            ->andFilterWhere(['like', 'bidang', $this->bidang])
            ->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
