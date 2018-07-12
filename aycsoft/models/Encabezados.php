<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encabezados".
 *
 * @property int $Id
 * @property string $Cliente
 * @property string $Vendedores
 * @property string $DetallesVenta
 * @property string $DetallesEntrega
 * @property string $DetallesProductos
 * @property string $Otros
 * @property string $Espacio
 * @property string $DetallesProveedor
 * @property string $CodificacionProducto
 */
class Encabezados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'encabezados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Cliente', 'Vendedores', 'DetallesVenta', 'DetallesEntrega', 'DetallesProductos', 'Otros', 'Espacio', 'DetallesProveedor', 'CodificacionProducto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Cliente' => Yii::t('app', 'DETALLES DE CLIENTE'),
            'Vendedores' => Yii::t('app', 'DETALLES DE VENDEDOR'),
            'DetallesVenta' => Yii::t('app', 'DETALLES DE VENTA'),
            'DetallesEntrega' => Yii::t('app', 'DETALLES DE ENTREGA'),
            'DetallesProductos' => Yii::t('app', 'DETALLES DE PRODUCTO(S)'),
            'Otros' => Yii::t('app', 'OTROS'),
            'Espacio' => Yii::t('app', ''),
            'DetallesProveedor' => Yii::t('app', 'DETALLES DE PROVEEDOR'),
            'CodificacionProducto' => Yii::t('app', 'CODIFICACION DE PRODUCTO'),
        ];
    }
}
