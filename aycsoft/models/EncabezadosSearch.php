<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Encabezados;

/**
 * EncabezadosSearch represents the model behind the search form of `app\models\Encabezados`.
 */
class EncabezadosSearch extends Encabezados
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id'], 'integer'],
            [['Cliente', 'Vendedores', 'DetallesVenta', 'DetallesEntrega', 'DetallesProductos', 'Otros', 'Espacio', 'DetallesProveedor', 'CodificacionProducto'], 'safe'],
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
        $query = Encabezados::find();

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
        ]);

        $query->andFilterWhere(['like', 'Cliente', $this->Cliente])
            ->andFilterWhere(['like', 'Vendedores', $this->Vendedores])
            ->andFilterWhere(['like', 'DetallesVenta', $this->DetallesVenta])
            ->andFilterWhere(['like', 'DetallesEntrega', $this->DetallesEntrega])
            ->andFilterWhere(['like', 'DetallesProductos', $this->DetallesProductos])
            ->andFilterWhere(['like', 'Otros', $this->Otros])
            ->andFilterWhere(['like', 'Espacio', $this->Espacio])
            ->andFilterWhere(['like', 'DetallesProveedor', $this->DetallesProveedor])
            ->andFilterWhere(['like', 'CodificacionProducto', $this->CodificacionProducto]);

        return $dataProvider;
    }
}
