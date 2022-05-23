<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengajuan;

/**
 * PengajuanSearch represents the model behind the search form of `app\models\Pengajuan`.
 */
class PengajuanSearch extends Pengajuan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pengajuan', 'tgl_pengajuan', 'pengaju', 'pelaksana', 'lokasikirim', 'alamat', 'no_spk', 'no_add', 'unit', 'idpejabat', 'tglapproval', 'status'], 'safe'],
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
        $query = Pengajuan::find();

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
            'tgl_pengajuan' => $this->tgl_pengajuan,
            'tglapproval' => $this->tglapproval,
        ]);

        $query->andFilterWhere(['like', 'kd_pengajuan', $this->kd_pengajuan])
            ->andFilterWhere(['like', 'pengaju', $this->pengaju])
            ->andFilterWhere(['like', 'pelaksana', $this->pelaksana])
            ->andFilterWhere(['like', 'lokasikirim', $this->lokasikirim])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_spk', $this->no_spk])
            ->andFilterWhere(['like', 'no_add', $this->no_add])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'idpejabat', $this->idpejabat])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
