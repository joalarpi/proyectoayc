<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedidos;

/**
 * PedidosSearch represents the model behind the search form of `app\models\Pedidos`.
 */
class PedidosSearch extends Pedidos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'ClienteId', 'VendedoresId', 'MedipagoId', 'CanalventaId', 'AgenciaId', 'ProductosId', 'ImpuestosId', 'EstadoId'], 'integer'],
            [['Fecha', 'ClienteNombre', 'ClienteDireccion', 'ClienteTelefono', 'ClienteCelular', 'VendedoresDNI', 'MedipagoNombre', 'CanalventaNombre', 'apodo', 'Calificacion', 'Idcompra', 'IdPago', 'FechaEntrega', 'Lugarentrega', 'ProductosCodigo', 'ProductosNombre', 'Observaciones'], 'safe'],
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
        $query = Pedidos::find();

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
            'ClienteId' => $this->ClienteId,
            'VendedoresId' => $this->VendedoresId,
            'MedipagoId' => $this->MedipagoId,
            'CanalventaId' => $this->CanalventaId,
            'AgenciaId' => $this->AgenciaId,
            'FechaEntrega' => $this->FechaEntrega,
            'ProductosId' => $this->ProductosId,
            'Cantidad' => $this->Cantidad,
            'ValorUnitario' => $this->ValorUnitario,
            'TotalProducto' => $this->TotalProducto,
            'TotalPedido' => $this->TotalPedido,
            'Valorenvio' => $this->Valorenvio,
            'ImpuestosId' => $this->ImpuestosId,
            'ImpuestosPorcentaje' => $this->ImpuestosPorcentaje,
            'EstadoId' => $this->EstadoId,
        ]);

        $query->andFilterWhere(['like', 'ClienteNombre', $this->ClienteNombre])
            ->andFilterWhere(['like', 'ClienteDireccion', $this->ClienteDireccion])
            ->andFilterWhere(['like', 'ClienteTelefono', $this->ClienteTelefono])
            ->andFilterWhere(['like', 'ClienteCelular', $this->ClienteCelular])
            ->andFilterWhere(['like', 'VendedoresDNI', $this->VendedoresDNI])
            ->andFilterWhere(['like', 'MedipagoNombre', $this->MedipagoNombre])
            ->andFilterWhere(['like', 'CanalventaNombre', $this->CanalventaNombre])
            ->andFilterWhere(['like', 'apodo', $this->apodo])
            ->andFilterWhere(['like', 'Calificacion', $this->Calificacion])
            ->andFilterWhere(['like', 'Idcompra', $this->Idcompra])
            ->andFilterWhere(['like', 'IdPago', $this->IdPago])
            ->andFilterWhere(['like', 'Lugarentrega', $this->Lugarentrega])
            ->andFilterWhere(['like', 'ProductosCodigo', $this->ProductosCodigo])
            ->andFilterWhere(['like', 'ProductosNombre', $this->ProductosNombre])
            ->andFilterWhere(['like', 'Observaciones', $this->Observaciones]);

        return $dataProvider;
    }
}
