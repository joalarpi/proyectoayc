<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "impuestos".
 *
 * @property string $Id
 * @property string $Nombre
 * @property double $Porcentaje
 *
 * @property Ingresodocumentos[] $ingresodocumentos
 * @property Pedidodetalles[] $pedidodetalles
 * @property Pedidos[] $pedidos
 * @property Productos[] $productos
 */
class Impuestos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'impuestos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required', 'message' => 'El Nombre del Impuesto no puede estar vacío'],
            [['Porcentaje'], 'required', 'message' => 'El Porcentaje del Impuesto no puede estar vacío'],
            [['Porcentaje'],'number','min'=>0,'max'=>100],
            [['Porcentaje'], 'number'],
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
            'Porcentaje' => Yii::t('app', 'Porcentaje'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngresodocumentos()
    {
        return $this->hasMany(Ingresodocumentos::className(), ['ImpuestosId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidodetalles()
    {
        return $this->hasMany(Pedidodetalles::className(), ['ImpuestosId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['ImpuestosId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['ImpuestosId' => 'Id']);
    }
}
