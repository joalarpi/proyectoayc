<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Productos;

/**
 * ProductosSearch represents the model behind the search form of `app\models\Productos`.
 */
class ProductosSearch extends Productos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ProductosId', 'ProveedoresId', 'BodegasId', 'FamiliasId', 'GruposId', 'CategoriasId', 'PresentacionId', 'ImpuestosId'], 'integer'],
            [['ProductosCodigo', 'ProductosReferencia', 'ProductosEan', 'ProductosNombre', 'PresentacionNombre', 'ProductosDimensiones', 'ImpuestosNombre', 'ProductoFecha'], 'safe'],
            [['ProductosPeso', 'ProductosCantidad', 'ProductosCosto', 'ProductosUtilidad', 'ProductosPrecioVenta', 'ImpuestosPorcentaje', 'ProductoStock'], 'number'],
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
        $query = Productos::find();

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
            'ProductosId' => $this->ProductosId,
            'ProveedoresId' => $this->ProveedoresId,
            'BodegasId' => $this->BodegasId,
            'FamiliasId' => $this->FamiliasId,
            'GruposId' => $this->GruposId,
            'CategoriasId' => $this->CategoriasId,
            'PresentacionId' => $this->PresentacionId,
            'ProductosPeso' => $this->ProductosPeso,
            'ProductosCantidad' => $this->ProductosCantidad,
            'ProductosCosto' => $this->ProductosCosto,
            'ProductosUtilidad' => $this->ProductosUtilidad,
            'ProductosPrecioVenta' => $this->ProductosPrecioVenta,
            'ImpuestosId' => $this->ImpuestosId,
            'ImpuestosPorcentaje' => $this->ImpuestosPorcentaje,
            'ProductoStock' => $this->ProductoStock,
            'ProductoFecha' => $this->ProductoFecha,
        ]);

        $query->andFilterWhere(['like', 'ProductosCodigo', $this->ProductosCodigo])
            ->andFilterWhere(['like', 'ProductosReferencia', $this->ProductosReferencia])
            ->andFilterWhere(['like', 'ProductosEan', $this->ProductosEan])
            ->andFilterWhere(['like', 'ProductosNombre', $this->ProductosNombre])
            ->andFilterWhere(['like', 'PresentacionNombre', $this->PresentacionNombre])
            ->andFilterWhere(['like', 'ProductosDimensiones', $this->ProductosDimensiones])
            ->andFilterWhere(['like', 'ImpuestosNombre', $this->ImpuestosNombre]);

        return $dataProvider;
    }
}
