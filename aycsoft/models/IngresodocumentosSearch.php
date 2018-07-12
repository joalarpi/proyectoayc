<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ingresodocumentos;

/**
 * IngresodocumentosSearch represents the model behind the search form of `app\models\Ingresodocumentos`.
 */
class IngresodocumentosSearch extends Ingresodocumentos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'DocOficial', 'TipodocumentoId', 'BodegasId', 'ProveedoresId', 'ProductosId', 'ImpuestosId'], 'integer'],
            [['Fecha', 'TipodocumentosNombre', 'BodegasNombre', 'Numerointerno', 'Prefijo', 'ProveedoresNombreComercial', 'ProductosCodigo', 'ProductosNombre', 'Observaciones'], 'safe'],
            [['Cantidad', 'ValorUnitario', 'TotalProducto', 'TotalPedido', 'ImpuestosPorcentaje'], 'number'],
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
        $query = Ingresodocumentos::find();

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
            'DocOficial' => $this->DocOficial,
            'TipodocumentoId' => $this->TipodocumentoId,
            'BodegasId' => $this->BodegasId,
            'ProveedoresId' => $this->ProveedoresId,
            'ProductosId' => $this->ProductosId,
            'Cantidad' => $this->Cantidad,
            'ValorUnitario' => $this->ValorUnitario,
            'TotalProducto' => $this->TotalProducto,
            'TotalPedido' => $this->TotalPedido,
            'ImpuestosId' => $this->ImpuestosId,
            'ImpuestosPorcentaje' => $this->ImpuestosPorcentaje,
        ]);

        $query->andFilterWhere(['like', 'TipodocumentosNombre', $this->TipodocumentosNombre])
            ->andFilterWhere(['like', 'BodegasNombre', $this->BodegasNombre])
            ->andFilterWhere(['like', 'Numerointerno', $this->Numerointerno])
            ->andFilterWhere(['like', 'Prefijo', $this->Prefijo])
            ->andFilterWhere(['like', 'ProveedoresNombreComercial', $this->ProveedoresNombreComercial])
            ->andFilterWhere(['like', 'ProductosCodigo', $this->ProductosCodigo])
            ->andFilterWhere(['like', 'ProductosNombre', $this->ProductosNombre])
            ->andFilterWhere(['like', 'Observaciones', $this->Observaciones]);

        return $dataProvider;
    }
}
