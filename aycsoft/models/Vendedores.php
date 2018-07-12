<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendedores".
 *
 * @property string $Id
 * @property string $DNI
 * @property string $PrimerNombre
 * @property string $SegundoNombre
 * @property string $PrimerApellido
 * @property string $SegundoApellido
 * @property string $Direccion
 * @property int $Sucursal
 * @property string $Telefono
 * @property double $Celular
 * @property string $Email
 * @property int $Estado
 * @property string $ActivaComision
 * @property double $PorcentajeComision
 * @property string $Fechac
 *
 * @property Estadosc $estado
 * @property Sucursales $sucursal
 */
class Vendedores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Sucursal'], 'required'],
            [['Estado'], 'required'],
            [['DNI'], 'required'],
            [['DNI'], 'unique'],

            [['PrimerNombre'], 'required'],
            [['PrimerNombre'], 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'El Nombre debe  tener Mínimo 3 y máximo 50 caracteres'],
            
            [['PrimerApellido'], 'required'],
            [['PrimerApellido'], 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'El Primer Apellido debe  tener Mínimo 3 y máximo 50 caracteres'],
            
            [['Direccion'], 'required'],
            [['Direccion'], 'match', 'pattern' => "/^.{6,255}$/", 'message' => 'La Direccion debe  tener Mínimo 6 y máximo 255 caracteres'],
            
            [['Email'], 'required'],
            [['Email'], 'email', 'message' => 'Formato no válido'],

            [['Fechac'], 'required'],
            [['ActivaComision'], 'required'],

            [['Telefono'], 'match', 'pattern' => "/^[0-9(+)]+$/i", 'message' => 'El numero debe tener el formato (+ind)numero'],

            [['Celular'], 'match', 'pattern' => "/^[0-9(+)]+$/i", 'message' => 'El numero debe tener el formato (+ind)numero'],


            [['PorcentajeComision'],'number','min'=>0,'max'=>100],

            [['Sucursal', 'Estado'], 'integer'],

            [['Celular', 'Telefono'], 'string', 'max' => 30],

            [['PorcentajeComision'], 'number'],
            [['DNI', 'PrimerNombre', 'SegundoNombre', 'PrimerApellido', 'SegundoApellido'], 'string', 'max' => 50],
            [['Direccion', 'Email'], 'string', 'max' => 255],
            [['ActivaComision'], 'string', 'max' => 3],
            [['Fechac'], 'string', 'max' => 30],
            [['Estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estadosc::className(), 'targetAttribute' => ['Estado' => 'Id']],
            [['Sucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursales::className(), 'targetAttribute' => ['Sucursal' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'DNI' => Yii::t('app', 'Dni'),
            'PrimerNombre' => Yii::t('app', 'Primer Nombre'),
            'SegundoNombre' => Yii::t('app', 'Segundo Nombre'),
            'PrimerApellido' => Yii::t('app', 'Primer Apellido'),
            'SegundoApellido' => Yii::t('app', 'Segundo Apellido'),
            'Direccion' => Yii::t('app', 'Direccion'),
            'Sucursal' => Yii::t('app', 'Sucursal'),
            'Telefono' => Yii::t('app', 'Telefono'),
            'Celular' => Yii::t('app', 'Celular'),
            'Email' => Yii::t('app', 'Email'),
            'Estado' => Yii::t('app', 'Estado'),
            'ActivaComision' => Yii::t('app', 'Activa Comision'),
            'PorcentajeComision' => Yii::t('app', 'Porcentaje Comision'),
            'Fechac' => Yii::t('app', 'Fecha Creación'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estadosc::className(), ['Id' => 'Estado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSucursal()
    {
        return $this->hasOne(Sucursales::className(), ['Id' => 'Sucursal']);
    }
}
