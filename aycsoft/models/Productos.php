<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property string $ProductosId
 * @property string $ProveedoresId
 * @property string $BodegasId
 * @property string $FamiliasId
 * @property string $GruposId
 * @property string $CategoriasId
 * @property string $ProductosCodigo
 * @property string $ProductosReferencia
 * @property string $ProductosEan
 * @property string $ProductosNombre
 * @property string $PresentacionId
 * @property string $PresentacionNombre
 * @property string $ProductosDimensiones
 * @property double $ProductosPeso
 * @property double $ProductosCantidad
 * @property double $ProductosCosto
 * @property double $ProductosUtilidad
 * @property double $ProductosPrecioVenta
 * @property string $ImpuestosId
 * @property string $ImpuestosNombre
 * @property double $ImpuestosPorcentaje
 * @property double $ProductoStock
 * @property string $ProductoFecha
 *
 * @property Ingresodocumentos[] $ingresodocumentos
 * @property Pedidodetalles[] $pedidodetalles
 * @property Pedidos[] $pedidos
 * @property Proveedores $proveedores
 * @property Bodegas $bodegas
 * @property Familias $familias
 * @property Grupos $grupos
 * @property Categorias $categorias
 * @property Presentacion $presentacion
 * @property Impuestos $impuestos
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [


            [['ProveedoresId'], 'required'],
            [['BodegasId'], 'required'],
            [['FamiliasId'], 'required'],    
            [['GruposId'], 'required'],
            [['CategoriasId'], 'required'],

            [['ProductosCodigo'], 'required'],
            [['ProductosCodigo'], 'unique'],




            //VESTO ES NUEVO
          //  [['Telefono'], 'match', 'pattern' => "/^[0-9(+)]+$/i", 'message' => 'El numero debe tener el formato (+ind)numero'],
            [['ProductosCodigo'], 'match', 'pattern' => '/^[A-Za-z]{3}[0-9]{4}$/i', 'message' => 'El Codigo del producto debe  tener 3 letras y 4 numeros, ejm: MUE1789'],








            [['ProductosCodigo'], 'match', 'pattern' => "/^.{7,10}$/", 'message' => 'El Codigo del producto debe  tener Mínimo 7 y máximo 10 caracteres, ejm: MUE1789'],

            [['ProductosNombre'], 'required'],
            [['ProductosNombre'], 'unique'],
            [['ProductosNombre'], 'match', 'pattern' => "/^.{4,50}$/", 'message' => 'El Nombre del producto debe  tener Mínimo 4 y máximo 50 caracteres'],

            [['PresentacionId'], 'required'],
            [['ProductosCosto'], 'required'],
            //[['ImpuestosId'], 'required'],

            [['ProductosUtilidad'], 'required'],
            [['ProductosUtilidad'],'number','min'=>0,'max'=>100, 'message' => 'La utilidad esta en % por tanto no debe ser mayor a 100'],
            [['ProductosPrecioVenta'], 'required'],
            [['ProductoFecha'], 'required'],
            [['ProductosCantidad'], 'required'],
            [['ProductosPrecioVenta'], 'required'],

            [['ProductosEan'], 'unique'],

            [['ProductosPeso'],'number','min'=>0,'max'=>200],
            [['ProductosDimensiones'], 'match', 'pattern' => "/^[0-9X]+$/i", 'message' => 'Las dimensiones deben tener el formato 110X120.'],

            [['ImpuestosPorcentaje'], 'required', 'message' => 'El % Impuesto no debe estar vacío'],
            [['ImpuestosPorcentaje'], 'match', 'pattern' => "/^[0-9-]+$/i", 'message' => 'El % impuesto debe ser un valor numérico.'],
            [['ImpuestosPorcentaje'],'number','min'=>0,'max'=>100, 'message' => 'El Impuesto esta en % por tanto no debe ser mayor a 100'],





            [['ProveedoresId', 'BodegasId', 'FamiliasId', 'GruposId', 'CategoriasId', 'PresentacionId', 'ImpuestosId'], 'integer'],
            [['ProductosPeso', 'ProductosCantidad', 'ProductosCosto', 'ProductosUtilidad', 'ProductosPrecioVenta', 'ImpuestosPorcentaje', 'ProductoStock'], 'number'],
            [['ProductoFecha'], 'safe'],
            [['ProductosCodigo'], 'string', 'max' => 10],
            [['ProductosReferencia', 'ProductosNombre', 'PresentacionNombre', 'ImpuestosNombre'], 'string', 'max' => 50],
            [['ProductosEan'], 'string', 'max' => 20],
            [['ProductosDimensiones'], 'string', 'max' => 9],
            [['ProveedoresId'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedores::className(), 'targetAttribute' => ['ProveedoresId' => 'ProveedoresId']],
            [['BodegasId'], 'exist', 'skipOnError' => true, 'targetClass' => Bodegas::className(), 'targetAttribute' => ['BodegasId' => 'Id']],
            [['FamiliasId'], 'exist', 'skipOnError' => true, 'targetClass' => Familias::className(), 'targetAttribute' => ['FamiliasId' => 'Id']],
            [['GruposId'], 'exist', 'skipOnError' => true, 'targetClass' => Grupos::className(), 'targetAttribute' => ['GruposId' => 'Id']],
            [['CategoriasId'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['CategoriasId' => 'Id']],
            [['PresentacionId'], 'exist', 'skipOnError' => true, 'targetClass' => Presentacion::className(), 'targetAttribute' => ['PresentacionId' => 'Id']],
            [['ImpuestosId'], 'exist', 'skipOnError' => true, 'targetClass' => Impuestos::className(), 'targetAttribute' => ['ImpuestosId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ProductosId' => Yii::t('app', 'Productos ID'),
            'ProveedoresId' => Yii::t('app', 'Proveedor'),
            'BodegasId' => Yii::t('app', 'Bodega'),
            'FamiliasId' => Yii::t('app', 'Familia'),
            'GruposId' => Yii::t('app', 'Grupos ID'),
            'CategoriasId' => Yii::t('app', 'Categoria'),
            'ProductosCodigo' => Yii::t('app', 'Codigo'),
            'ProductosReferencia' => Yii::t('app', 'Referencia'),
            'ProductosEan' => Yii::t('app', 'Ean'),
            'ProductosNombre' => Yii::t('app', 'Nombre'),
            'PresentacionId' => Yii::t('app', 'Presentacion'),
            'PresentacionNombre' => Yii::t('app', 'Presentacion Nombre'),
            'ProductosDimensiones' => Yii::t('app', 'Dimensiones'),
            'ProductosPeso' => Yii::t('app', 'Peso'),
            'ProductosCantidad' => Yii::t('app', 'Cantidad'),
            'ProductosCosto' => Yii::t('app', 'Costo'),
            'ProductosUtilidad' => Yii::t('app', 'Utilidad'),
            'ProductosPrecioVenta' => Yii::t('app', 'Precio Venta'),
            'ImpuestosId' => Yii::t('app', 'Id Impuesto'),
            'ImpuestosNombre' => Yii::t('app', 'Impuestos Nombre'),
            'ImpuestosPorcentaje' => Yii::t('app', '% Impuesto'),
            'ProductoStock' => Yii::t('app', 'Stock'),
            'ProductoFecha' => Yii::t('app', 'Fecha'),

            'proveedores.ProveedoresRUT' => Yii::t('app', 'Rut'),
            'proveedores.ProveedoresNombreComercial' => Yii::t('app', 'Nombre'),
            'presentacion.Nombre' => Yii::t('app', 'Presentación'),
            'impuestos.Nombre' => Yii::t('app', 'Nombre de impuesto'),
            'impuestos.Porcentaje' => Yii::t('app', '% de Impuesto'),

            

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIngresodocumentos()
    {
        return $this->hasMany(Ingresodocumentos::className(), ['ProductosId' => 'ProductosId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidodetalles()
    {
        return $this->hasMany(Pedidodetalles::className(), ['ProductosId' => 'ProductosId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['ProductosId' => 'ProductosId']);
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
    public function getBodegas()
    {
        return $this->hasOne(Bodegas::className(), ['Id' => 'BodegasId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFamilias()
    {
        return $this->hasOne(Familias::className(), ['Id' => 'FamiliasId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasOne(Grupos::className(), ['Id' => 'GruposId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategorias()
    {
        return $this->hasOne(Categorias::className(), ['Id' => 'CategoriasId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresentacion()
    {
        return $this->hasOne(Presentacion::className(), ['Id' => 'PresentacionId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImpuestos()
    {
        return $this->hasOne(Impuestos::className(), ['Id' => 'ImpuestosId']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncabezados()
    {
        return $this->hasOne(Encabezados::className(), ['Id' => 'ProductosId']);
    }
}
