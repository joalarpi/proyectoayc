<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agencias".
 *
 * @property int $Id
 * @property string $Nombre
 *
 * @property Pedidoempresa[] $pedidoempresas
 * @property Pedidos[] $pedidos
 */
class Agencias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agencias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidoempresas()
    {
        return $this->hasMany(Pedidoempresa::className(), ['AgenciaId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['AgenciaId' => 'Id']);
    }
}
