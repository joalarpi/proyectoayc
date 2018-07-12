<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedidoempresa;

/**
 * PedidoempresaSearch represents the model behind the search form of `app\models\Pedidoempresa`.
 */
class PedidoempresaSearch extends Pedidoempresa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'VendedoresId', 'MedipagoId', 'CanalventaId', 'AgenciaId', 'EstadoId'], 'integer'],
            [['VendedoresDNI', 'MedipagoNombre', 'CanalventaNombre', 'Idcompra', 'IdPago', 'FechaEntrega', 'Lugarentrega'], 'safe'],
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
        $query = Pedidoempresa::find();

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
            'VendedoresId' => $this->VendedoresId,
            'MedipagoId' => $this->MedipagoId,
            'CanalventaId' => $this->CanalventaId,
            'AgenciaId' => $this->AgenciaId,
            'FechaEntrega' => $this->FechaEntrega,
            'EstadoId' => $this->EstadoId,
        ]);

        $query->andFilterWhere(['like', 'VendedoresDNI', $this->VendedoresDNI])
            ->andFilterWhere(['like', 'MedipagoNombre', $this->MedipagoNombre])
            ->andFilterWhere(['like', 'CanalventaNombre', $this->CanalventaNombre])
            ->andFilterWhere(['like', 'Idcompra', $this->Idcompra])
            ->andFilterWhere(['like', 'IdPago', $this->IdPago])
            ->andFilterWhere(['like', 'Lugarentrega', $this->Lugarentrega]);

        return $dataProvider;
    }
}
