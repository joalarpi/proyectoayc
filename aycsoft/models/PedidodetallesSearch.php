<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedidodetalles;

/**
 * PedidodetallesSearch represents the model behind the search form of `app\models\Pedidodetalles`.
 */
class PedidodetallesSearch extends Pedidodetalles
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'ProductosId', 'ImpuestosId'], 'integer'],
            [['ProductosCodigo', 'ProductosNombre', 'Observaciones'], 'safe'],
            [['Cantidad', 'ValorUnitario', 'TotalProducto', 'TotalPedido', 'Valorenvio', 'ImpuestosPorcentaje'], 'number'],
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
        $query = Pedidodetalles::find();

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
            'ProductosId' => $this->ProductosId,
            'Cantidad' => $this->Cantidad,
            'ValorUnitario' => $this->ValorUnitario,
            'TotalProducto' => $this->TotalProducto,
            'TotalPedido' => $this->TotalPedido,
            'Valorenvio' => $this->Valorenvio,
            'ImpuestosId' => $this->ImpuestosId,
            'ImpuestosPorcentaje' => $this->ImpuestosPorcentaje,
        ]);

        $query->andFilterWhere(['like', 'ProductosCodigo', $this->ProductosCodigo])
            ->andFilterWhere(['like', 'ProductosNombre', $this->ProductosNombre])
            ->andFilterWhere(['like', 'Observaciones', $this->Observaciones]);

        return $dataProvider;
    }
}
