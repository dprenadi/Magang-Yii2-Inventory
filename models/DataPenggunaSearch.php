<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DataPengguna;

/**
 * DataPenggunaSearch represents the model behind the search form of `app\models\DataPengguna`.
 */
class DataPenggunaSearch extends DataPengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_PENGGUNA', 'username', 'password', 'NAMA_PENGGUNA', 'JABATAN_PENGGUNA', 'ALAMAT_PENGGUNA', 'NO_TELP_PENGGUNA', 'EMAIL_PENGGUNA', 'JENIS_USER', 'STATUS_USER', 'accessToken', 'authKey'], 'safe'],
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
        $query = DataPengguna::find();

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
        $query->andFilterWhere(['like', 'ID_PENGGUNA', $this->ID_PENGGUNA])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'NAMA_PENGGUNA', $this->NAMA_PENGGUNA])
            ->andFilterWhere(['like', 'JABATAN_PENGGUNA', $this->JABATAN_PENGGUNA])
            ->andFilterWhere(['like', 'ALAMAT_PENGGUNA', $this->ALAMAT_PENGGUNA])
            ->andFilterWhere(['like', 'NO_TELP_PENGGUNA', $this->NO_TELP_PENGGUNA])
            ->andFilterWhere(['like', 'EMAIL_PENGGUNA', $this->EMAIL_PENGGUNA])
            ->andFilterWhere(['like', 'JENIS_USER', $this->JENIS_USER])
            ->andFilterWhere(['like', 'STATUS_USER', $this->STATUS_USER])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken])
            ->andFilterWhere(['like', 'authKey', $this->authKey]);

        return $dataProvider;
    }
}
