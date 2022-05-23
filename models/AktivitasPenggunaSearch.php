<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AktivitasPengguna;

/**
 * AktivitasPenggunaSearch represents the model behind the search form of `app\models\AktivitasPengguna`.
 */
class AktivitasPenggunaSearch extends AktivitasPengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_AKTIVITAS', 'username', 'MODEL', 'KETERANGAN'], 'safe'],
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
        $query = AktivitasPengguna::find();

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
        $query->andFilterWhere(['like', 'ID_AKTIVITAS', $this->ID_AKTIVITAS])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'MODEL', $this->MODEL])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN]);

        return $dataProvider;
    }
}
