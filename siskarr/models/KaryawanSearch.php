<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Karyawan;

/**
 * KaryawanSearch represents the model behind the search form of `app\models\Karyawan`.
 */
class KaryawanSearch extends Karyawan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'kode_bagian', 'alamat', 'golongan'], 'safe'],
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
        $query = Karyawan::find();

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
        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'kode_bagian', $this->kode_bagian])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'golongan', $this->golongan]);

        return $dataProvider;
    }
}
