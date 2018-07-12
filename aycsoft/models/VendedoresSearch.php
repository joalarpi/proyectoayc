<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendedores;

/**
 * VendedoresSearch represents the model behind the search form of `app\models\Vendedores`.
 */
class VendedoresSearch extends Vendedores
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Sucursal', 'Telefono', 'Estado'], 'integer'],
            [['DNI', 'PrimerNombre', 'SegundoNombre', 'PrimerApellido', 'SegundoApellido', 'Email'], 'safe'],
            [['Celular'], 'number'],
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
        $query = Vendedores::find();

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
            'Sucursal' => $this->Sucursal,
            'Telefono' => $this->Telefono,
            'Celular' => $this->Celular,
            'Estado' => $this->Estado,
            'PorcentajeComision' => $this->PorcentajeComision,
        ]);

        $query->andFilterWhere(['like', 'DNI', $this->DNI])
            ->andFilterWhere(['like', 'PrimerNombre', $this->PrimerNombre])
            ->andFilterWhere(['like', 'SegundoNombre', $this->SegundoNombre])
            ->andFilterWhere(['like', 'PrimerApellido', $this->PrimerApellido])
            ->andFilterWhere(['like', 'SegundoApellido', $this->SegundoApellido])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'ActivaComision', $this->ActivaComision])
            ->andFilterWhere(['like', 'Fechac', $this->Fechac]);

        return $dataProvider;
    }
}
