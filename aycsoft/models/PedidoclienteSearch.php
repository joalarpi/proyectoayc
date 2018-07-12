<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedidocliente;

/**
 * PedidoclienteSearch represents the model behind the search form of `app\models\Pedidocliente`.
 */
class PedidoclienteSearch extends Pedidocliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id'], 'integer'],
            [['Fecha', 'DNI', 'ClienteNombre', 'ClienteDireccion', 'ClienteTelefono', 'ClienteCelular', 'apodo', 'Calificacion'], 'safe'],
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
        $query = Pedidocliente::find();

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
            'Id' => $this->Id,
            'Fecha' => $this->Fecha,
        ]);

        $query->andFilterWhere(['like', 'DNI', $this->DNI])
            ->andFilterWhere(['like', 'ClienteNombre', $this->ClienteNombre])
            ->andFilterWhere(['like', 'ClienteDireccion', $this->ClienteDireccion])
            ->andFilterWhere(['like', 'ClienteTelefono', $this->ClienteTelefono])
            ->andFilterWhere(['like', 'ClienteCelular', $this->ClienteCelular])
            ->andFilterWhere(['like', 'apodo', $this->apodo])
            ->andFilterWhere(['like', 'Calificacion', $this->Calificacion]);

        return $dataProvider;
    }
}
