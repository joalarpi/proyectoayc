<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedidos".
 *
 * @property int $Id
 * @property string $Fecha
 * @property string $ClienteId
 * @property string $ClienteNombre
 * @property string $ClienteDireccion
 * @property string $ClienteTelefono
 * @property string $ClienteCelular
 * @property string $VendedoresId
 * @property string $VendedoresDNI
 * @property int $MedipagoId
 * @property string $MedipagoNombre
 * @property int $CanalventaId
 * @property string $CanalventaNombre
 * @property string $apodo
 * @property string $Calificacion
 * @property string $Idcompra
 * @property string $IdPago
 * @property int $AgenciaId
 * @property string $FechaEntrega
 * @property string $Lugarentrega
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
 * @property string $EstadoId
 *
 * @property Clientes $cliente
 * @property Vendedores $vendedores
 * @property Mediopago $medipago
 * @property Canales $canalventa
 * @property Agencias $agencia
 * @property Productos $productos
 * @property Impuestos $impuestos
 */
class Pedidos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedidos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ClienteId'], 'required', 'message' => 'Debe elegir un cliente. Bùsquelo por su DNI'],
            [['Fecha'], 'required'],

            [['ProductosId'], 'required', 'message' => 'Debe elegir un producto'],
            [['Cantidad'], 'required'],
            [['Cantidad'], 'match', 'pattern' => "/^[0-9-]+$/i", 'message' => 'La cantidad debe ser un valor nùmerico.'],
            [['Cantidad'],'number','min'=>0, 'message' => 'Cantidad no puede ser inferior a cero'],

            [['VendedoresId'], 'required', 'message' => 'Debe elegir un vendedor'],
            [['MedipagoId'], 'required', 'message' => 'Debe elegir un medio de pago'],
            [['CanalventaId'], 'required', 'message' => 'Debe elegir un canal de venta'],
            [['AgenciaId'], 'required', 'message' => 'Debe elegir una agencia'],
            [['EstadoId'], 'required', 'message' => 'Debe elegir un estado de pedido'],
            [['FechaEntrega'], 'required', 'message' => 'Debe elegir una fecha de entrega'],
            [['Lugarentrega'], 'required', 'message' => 'Debe elegir un lugar de entrega'],


            [['Fecha', 'FechaEntrega'], 'safe'],
            [['ClienteId', 'VendedoresId', 'MedipagoId', 'CanalventaId', 'AgenciaId', 'ProductosId', 'ImpuestosId', 'EstadoId'], 'integer'],
            [['Cantidad', 'ValorUnitario', 'TotalProducto', 'TotalPedido', 'Valorenvio', 'ImpuestosPorcentaje'], 'number'],
            [['ClienteNombre', 'ClienteDireccion', 'ClienteTelefono', 'ClienteCelular', 'VendedoresDNI', 'MedipagoNombre', 'CanalventaNombre', 'ProductosNombre'], 'string', 'max' => 50],
            [['apodo', 'Idcompra', 'IdPago', 'Lugarentrega', 'Observaciones'], 'string', 'max' => 255],
            [['Calificacion'], 'string', 'max' => 60],
            [['ProductosCodigo'], 'string', 'max' => 10],
            [['ClienteId'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['ClienteId' => 'Id']],
            [['VendedoresId'], 'exist', 'skipOnError' => true, 'targetClass' => Vendedores::className(), 'targetAttribute' => ['VendedoresId' => 'Id']],
            [['MedipagoId'], 'exist', 'skipOnError' => true, 'targetClass' => Mediopago::className(), 'targetAttribute' => ['MedipagoId' => 'Id']],
            [['CanalventaId'], 'exist', 'skipOnError' => true, 'targetClass' => Canales::className(), 'targetAttribute' => ['CanalventaId' => 'Id']],
            [['AgenciaId'], 'exist', 'skipOnError' => true, 'targetClass' => Agencias::className(), 'targetAttribute' => ['AgenciaId' => 'Id']],
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
            'ClienteId' => Yii::t('app', 'Cliente'),
            'ClienteNombre' => Yii::t('app', 'Cliente Nombre'),
            'ClienteDireccion' => Yii::t('app', 'Cliente Direccion'),
            'ClienteTelefono' => Yii::t('app', 'Cliente Telefono'),
            'ClienteCelular' => Yii::t('app', 'Cliente Celular'),
            'VendedoresId' => Yii::t('app', 'Vendedor'),
            'VendedoresDNI' => Yii::t('app', 'Vendedores Dni'),
            'MedipagoId' => Yii::t('app', 'Medio de Pago'),
            'MedipagoNombre' => Yii::t('app', 'Medipago Nombre'),
            'CanalventaId' => Yii::t('app', 'Canal de venta'),
            'CanalventaNombre' => Yii::t('app', 'Canalventa Nombre'),
            'apodo' => Yii::t('app', 'Apodo'),
            'Calificacion' => Yii::t('app', 'Calificacion'),
            'Idcompra' => Yii::t('app', 'Cod. compra'),
            'IdPago' => Yii::t('app', 'Num. Pago o Transacción'),
            'AgenciaId' => Yii::t('app', 'Agencia o Transportista'),
            'FechaEntrega' => Yii::t('app', 'Fecha de Entrega'),
            'Lugarentrega' => Yii::t('app', 'Lugar de entrega'),
            'ProductosId' => Yii::t('app', 'Producto1'),
            'ProductosCodigo' => Yii::t('app', 'Productos Codigo'),
            'ProductosNombre' => Yii::t('app', 'Productos Nombre'),
            'Cantidad' => Yii::t('app', 'Cantidad'),
            'ValorUnitario' => Yii::t('app', 'Valor Unitario'),
            'TotalProducto' => Yii::t('app', 'Total Producto'),
            'TotalPedido' => Yii::t('app', 'Total Pedido'),
            'Valorenvio' => Yii::t('app', 'Valor de envio'),
            'ImpuestosId' => Yii::t('app', 'Impuestos ID'),
            'ImpuestosPorcentaje' => Yii::t('app', 'Impuestos Porcentaje'),
            'Observaciones' => Yii::t('app', 'Observaciones'),
            'EstadoId' => Yii::t('app', 'Estado Pedido'),

            'estados.Nombre' => Yii::t('app', 'Estado Pedido'),
            'cliente.DNI' => Yii::t('app', 'DNI'),
            'vendedores.DNI' => Yii::t('app', 'DNI'),

            'canalventa.Nombre' => Yii::t('app', 'Canal de Venta'),
            'medipago.Nombre' => Yii::t('app', 'Medio de pago'),

            'agencia.Nombre' => Yii::t('app', 'Agencia o Transportista'),

            'productos.ProductosNombre' => Yii::t('app', 'Nombre Producto'),
            'productos.ProductosPrecioSinIva' => Yii::t('app', 'Producto sin IVA'),



        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Clientes::className(), ['Id' => 'ClienteId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVendedores()
    {
        return $this->hasOne(Vendedores::className(), ['Id' => 'VendedoresId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedipago()
    {
        return $this->hasOne(Mediopago::className(), ['Id' => 'MedipagoId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCanalventa()
    {
        return $this->hasOne(Canales::className(), ['Id' => 'CanalventaId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgencia()
    {
        return $this->hasOne(Agencias::className(), ['Id' => 'AgenciaId']);
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
     /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstados()
    {
        return $this->hasOne(Estadosp::className(), ['Id' => 'EstadoId']);
    }
         /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncabezados()
    {
        return $this->hasOne(Encabezados::className(), ['Id' => 'Id']);
    }
}
