<?php

namespace frontend\models\searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\database\Ganado;

/**
 * GanadoSearch represents the model behind the search form of `common\database\Ganado`.
 */
class GanadoSearch extends Ganado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['raza', 'alimento_tipo', 'f_ingreso', 'f_egreso'], 'safe'],
            [['peso_ingreso', 'peso_egreso', 'alimento_cantidad'], 'number'],
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
        $query = Ganado::find();

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
            'peso_ingreso' => $this->peso_ingreso,
            'peso_egreso' => $this->peso_egreso,
            'alimento_cantidad' => $this->alimento_cantidad,
            'f_ingreso' => $this->f_ingreso,
            'f_egreso' => $this->f_egreso,
        ]);

        $query->andFilterWhere(['like', 'raza', $this->raza])
            ->andFilterWhere(['like', 'alimento_tipo', $this->alimento_tipo]);

        return $dataProvider;
    }
}
