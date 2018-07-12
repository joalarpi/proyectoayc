<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedidoempresa".
 *
 * @property int $Id
 * @property string $VendedoresId
 * @property string $VendedoresDNI
 * @property int $MedipagoId
 * @property string $MedipagoNombre
 * @property int $CanalventaId
 * @property string $CanalventaNombre
 * @property string $Idcompra
 * @property string $IdPago
 * @property int $AgenciaId
 * @property string $FechaEntrega
 * @property string $Lugarentrega
 * @property string $EstadoId
 *
 * @property Vendedores $vendedores
 * @property Mediopago $medipago
 * @property Canales $canalventa
 * @property Agencias $agencia
 * @property Estadosp $estado
 */
class Pedidoempresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedidoempresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['VendedoresDNI'], 'required', 'message' => 'Debe elegir un vendedor'],
            [['MedipagoId'], 'required', 'message' => 'Debe elegir un medio de pago'],
            [['CanalventaId'], 'required', 'message' => 'Debe elegir un canal de venta'],
            [['AgenciaId'], 'required', 'message' => 'Debe elegir una agencia'],
            [['EstadoId'], 'required', 'message' => 'Debe elegir un estado de pedido'],
            [['FechaEntrega'], 'required', 'message' => 'Debe elegir una fecha de entrega'],
            [['Lugarentrega'], 'required', 'message' => 'Debe elegir un lugar de entrega'],


            [['VendedoresId', 'MedipagoId', 'CanalventaId', 'AgenciaId', 'EstadoId'], 'integer'],
            [['FechaEntrega'], 'safe'],
            [['VendedoresDNI', 'MedipagoNombre', 'CanalventaNombre'], 'string', 'max' => 50],
            [['Idcompra', 'IdPago', 'Lugarentrega'], 'string', 'max' => 255],
            [['VendedoresId'], 'exist', 'skipOnError' => true, 'targetClass' => Vendedores::className(), 'targetAttribute' => ['VendedoresId' => 'Id']],
            [['MedipagoId'], 'exist', 'skipOnError' => true, 'targetClass' => Mediopago::className(), 'targetAttribute' => ['MedipagoId' => 'Id']],
            [['CanalventaId'], 'exist', 'skipOnError' => true, 'targetClass' => Canales::className(), 'targetAttribute' => ['CanalventaId' => 'Id']],
            [['AgenciaId'], 'exist', 'skipOnError' => true, 'targetClass' => Agencias::className(), 'targetAttribute' => ['AgenciaId' => 'Id']],
            [['EstadoId'], 'exist', 'skipOnError' => true, 'targetClass' => Estadosp::className(), 'targetAttribute' => ['EstadoId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'VendedoresId' => Yii::t('app', 'Vendedores ID'),
            'VendedoresDNI' => Yii::t('app', 'DNI Vendedor'),
            'MedipagoId' => Yii::t('app', 'Medio de pago'),
            'MedipagoNombre' => Yii::t('app', ''),
            'CanalventaId' => Yii::t('app', 'Canal de venta'),
            'CanalventaNombre' => Yii::t('app', ''),
            'Idcompra' => Yii::t('app', 'Código compra'),
            'IdPago' => Yii::t('app', 'Código Pago o Transacción'),
            'AgenciaId' => Yii::t('app', 'Agencia'),
            'FechaEntrega' => Yii::t('app', 'Fecha de Entrega'),
            'Lugarentrega' => Yii::t('app', 'Lugar de entrega'),
            'EstadoId' => Yii::t('app', 'Estado'),
        ];
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
    public function getEstado()
    {
        return $this->hasOne(Estadosp::className(), ['Id' => 'EstadoId']);
    }
}
