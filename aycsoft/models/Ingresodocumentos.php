<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingresodocumentos".
 *
 * @property int $Id
 * @property string $Fecha
 * @property string $DocOficial
 * @property string $TipodocumentoId
 * @property string $TipodocumentosNombre
 * @property string $BodegasId
 * @property string $BodegasNombre
 * @property string $Numerointerno
 * @property string $Prefijo
 * @property string $ProveedoresId
 * @property string $ProveedoresNombreComercial
 * @property string $ProductosId
 * @property string $ProductosCodigo
 * @property string $ProductosNombre
 * @property double $Cantidad
 * @property double $ValorUnitario
 * @property double $TotalProducto
 * @property double $TotalPedido
 * @property string $ImpuestosId
 * @property double $ImpuestosPorcentaje
 * @property string $Observaciones
 *
 * @property Tipodocumentos $tipodocumento
 * @property Bodegas $bodegas
 * @property Proveedores $proveedores
 * @property Productos $productos
 * @property Impuestos $impuestos
 */
class Ingresodocumentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingresodocumentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['Fecha'], 'required'],
            [['TipodocumentoId'], 'required'],
            [['BodegasId'], 'required'],
            [['ProveedoresId'], 'required'],
            [['ProductosId'], 'required'],
            [['Cantidad'], 'required'],
            [['Cantidad'],'number','min'=>0],



            [['Fecha'], 'safe'],
            [['DocOficial', 'TipodocumentoId', 'BodegasId', 'ProveedoresId', 'ProductosId', 'ImpuestosId'], 'integer'],
            [['Cantidad', 'ValorUnitario', 'TotalProducto', 'TotalPedido', 'ImpuestosPorcentaje'], 'number'],
            [['TipodocumentosNombre', 'BodegasNombre', 'Prefijo', 'ProveedoresNombreComercial', 'ProductosNombre'], 'string', 'max' => 50],
            [['Numerointerno'], 'string', 'max' => 30],
            [['ProductosCodigo'], 'string', 'max' => 10],
            [['Observaciones'], 'string', 'max' => 255],
            [['TipodocumentoId'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodocumentos::className(), 'targetAttribute' => ['TipodocumentoId' => 'Id']],
            [['BodegasId'], 'exist', 'skipOnError' => true, 'targetClass' => Bodegas::className(), 'targetAttribute' => ['BodegasId' => 'Id']],
            [['ProveedoresId'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedores::className(), 'targetAttribute' => ['ProveedoresId' => 'ProveedoresId']],
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
            'Id' => Yii::t('app', 'Documento No.'),
            'Fecha' => Yii::t('app', 'Fecha'),
            'DocOficial' => Yii::t('app', 'Doc Oficial'),
            'TipodocumentoId' => Yii::t('app', 'Tipo documento'),
            'TipodocumentosNombre' => Yii::t('app', 'Tipodocumentos Nombre'),
            'BodegasId' => Yii::t('app', 'Bodega'),
            'BodegasNombre' => Yii::t('app', 'Bodegas Nombre'),
            'Numerointerno' => Yii::t('app', 'Num. interno'),
            'Prefijo' => Yii::t('app', 'Prefijo'),
            'ProveedoresId' => Yii::t('app', 'Proveedor'),
            'ProveedoresNombreComercial' => Yii::t('app', 'Proveedores Nombre Comercial'),
            'ProductosId' => Yii::t('app', 'Producto ID'),
            'ProductosCodigo' => Yii::t('app', 'Codigo Producto'),
            'ProductosNombre' => Yii::t('app', 'Nombre Producto'),
            'Cantidad' => Yii::t('app', 'Cantidad'),
            'ValorUnitario' => Yii::t('app', 'Costo'),
            'TotalProducto' => Yii::t('app', 'Total Producto'),
            'TotalPedido' => Yii::t('app', 'Total'),
            'ImpuestosId' => Yii::t('app', 'Impuesto'),
            'ImpuestosPorcentaje' => Yii::t('app', 'Impuestos Porcentaje'),
            'Observaciones' => Yii::t('app', 'Observaciones'),

            'tipodocumento.Nombre' => Yii::t('app', 'Clase de Documento'),
            'bodegas.Nombre' => Yii::t('app', 'Bodega'),
            'proveedores.ProveedoresNombreComercial' => Yii::t('app', 'Proveedor'),
            'productos.ProductosNombre' => Yii::t('app', 'Producto'),
            'productos.ProductosPrecioSinIva' => Yii::t('app', 'Precio sin IVA'),
            'tipodocumento.Prefijo' => Yii::t('app', 'Prefijo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipodocumento()
    {
        return $this->hasOne(Tipodocumentos::className(), ['Id' => 'TipodocumentoId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBodegas()
    {
        return $this->hasOne(Bodegas::className(), ['Id' => 'BodegasId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedores()
    {
        return $this->hasOne(Proveedores::className(), ['ProveedoresId' => 'ProveedoresId']);
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
