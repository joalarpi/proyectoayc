<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedidodetalles".
 *
 * @property int $Id
 * @property string $ProductosId
 * @property string $ProductosCodigo
 * @property string $ProductosNombre
 * @property double $Cantidad
 * @property double $ValorUnitario
 * @property double $TotalProducto
 * @property double $TotalPedido
 * @property double $Valorenvio
 * @property string $ImpuestosId
 * @property double $ImpuestosPorcentaje
 * @property string $Observaciones
 *
 * @property Productos $productos
 * @property Impuestos $impuestos
 */
class Pedidodetalles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedidodetalles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ProductosId'], 'required', 'message' => 'Debe elegir un producto'],
            [['Cantidad'], 'required'],
            [['Cantidad'], 'match', 'pattern' => "/^[0-9-]+$/i", 'message' => 'La cantidad debe ser un valor nùmerico.'],
            [['Cantidad'],'number','min'=>0, 'message' => 'Cantidad no puede ser inferior a cero'],

            [['ProductosId', 'ImpuestosId'], 'integer'],
            [['Cantidad', 'ValorUnitario', 'TotalProducto', 'TotalPedido', 'Valorenvio', 'ImpuestosPorcentaje'], 'number'],
            [['ProductosCodigo'], 'string', 'max' => 10],
            [['ProductosNombre'], 'string', 'max' => 50],
            [['Observaciones'], 'string', 'max' => 255],
            [['ProductosId'], 'exist', 'skipOnError' => true, 'targetClass' => Productos::className(), 'targetAttribute' => ['ProductosId' => 'ProductosId']],
            [['ImpuestosId'], 'exist', 'skipOnError' => true, 'targetClass' => Impuestos::className(), 'targetAttribute' => ['ImpuestosId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'ProductosId' => Yii::t('app', 'Productos ID'),
            'ProductosCodigo' => Yii::t('app', 'Productos Codigo'),
            'ProductosNombre' => Yii::t('app', 'Productos Nombre'),
            'Cantidad' => Yii::t('app', 'Cantidad'),
            'ValorUnitario' => Yii::t('app', 'Valor Unitario'),
            'TotalProducto' => Yii::t('app', 'Total Producto'),
            'TotalPedido' => Yii::t('app', 'Total Pedido'),
            'Valorenvio' => Yii::t('app', 'Valorenvio'),
            'ImpuestosId' => Yii::t('app', 'Impuestos ID'),
            'ImpuestosPorcentaje' => Yii::t('app', 'Impuestos Porcentaje'),
            'Observaciones' => Yii::t('app', 'Observaciones'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasOne(Productos::className(), ['ProductosId' => 'ProductosId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImpuestos()
    {
        return $this->hasOne(Impuestos::className(), ['Id' => 'ImpuestosId']);
    }
}
