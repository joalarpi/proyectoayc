<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Proveedores;

/**
 * ProveedoresSearch represents the model behind the search form of `app\models\Proveedores`.
 */
class ProveedoresSearch extends Proveedores
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ProveedoresId', 'ProveedoresTelefono', 'PaisesId', 'DepartamentosId', 'CiudadesId', 'BarriosId'], 'integer'],
            [['ProveedoresRUT', 'ProveedoresNombreComercial', 'ProveedoresNombreLegal', 'ProveedoresDireccion', 'ProveedoresEmail', 'PaisesNombre', 'DepartamentosNombre', 'CiudadesNombre', 'BarriosNombre'], 'safe'],
            [['ProveedoresCelular'], 'number'],
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
        $query = Proveedores::find();

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
            'ProveedoresId' => $this->ProveedoresId,
            'ProveedoresTelefono' => $this->ProveedoresTelefono,
            'ProveedoresCelular' => $this->ProveedoresCelular,
            'PaisesId' => $this->PaisesId,
            'DepartamentosId' => $this->DepartamentosId,
            'CiudadesId' => $this->CiudadesId,
            'BarriosId' => $this->BarriosId,
        ]);

        $query->andFilterWhere(['like', 'ProveedoresRUT', $this->ProveedoresRUT])
            ->andFilterWhere(['like', 'ProveedoresNombreComercial', $this->ProveedoresNombreComercial])
            ->andFilterWhere(['like', 'ProveedoresNombreLegal', $this->ProveedoresNombreLegal])
            ->andFilterWhere(['like', 'ProveedoresDireccion', $this->ProveedoresDireccion])
            ->andFilterWhere(['like', 'ProveedoresEmail', $this->ProveedoresEmail])
            ->andFilterWhere(['like', 'PaisesNombre', $this->PaisesNombre])
            ->andFilterWhere(['like', 'DepartamentosNombre', $this->DepartamentosNombre])
            ->andFilterWhere(['like', 'CiudadesNombre', $this->CiudadesNombre])
            ->andFilterWhere(['like', 'BarriosNombre', $this->BarriosNombre]);

        return $dataProvider;
    }
}
