<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property string $Id
 * @property string $Fecha
 * @property string $DNI
 * @property string $PrimerNombre
 * @property string $SegundoNombre
 * @property string $PrimerApellido
 * @property string $SegundoApellido
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Celular
 * @property int $PaisesId
 * @property string $DepartamentosId
 * @property string $CiudadesId
 * @property string $BarriosId
 * @property int $Puntos
 *
 * @property Departamentos $departamentos
 * @property Paises $paises
 * @property Ciudades $ciudades
 * @property Barrios $barrios
 * @property Pedidocliente $pedidocliente
 * @property Pedidos[] $pedidos
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DNI'], 'required'],
            [['DNI'], 'unique'],

            [['PrimerNombre'], 'required'],
            [['PrimerNombre'], 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'El Nombre debe  tener Mínimo 3 y máximo 50 caracteres'],

            [['PrimerApellido'], 'required'],
            [['PrimerApellido'], 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'El Primer Apellido debe  tener Mínimo 3 y máximo 50 caracteres'],

            [['Direccion'], 'required'],
            [['Direccion'], 'match', 'pattern' => "/^.{6,255}$/", 'message' => 'La Direccion debe  tener Mínimo 6 y máximo 255 caracteres'],

            [['Fecha'], 'required'],

            [['Telefono'], 'match', 'pattern' => "/^[0-9(+)]+$/i", 'message' => 'El numero debe tener el formato (+ind)numero'],
            [['Telefono'], 'match', 'pattern' => "/^.{8,50}$/", 'message' => 'El Telefono debe  tener Mínimo 8 y máximo 30 caracteres'],

            [['Celular'], 'match', 'pattern' => "/^[0-9(+)]+$/i", 'message' => 'El numero debe tener el formato (+ind)numero'],
            [['Celular'], 'match', 'pattern' => "/^.{8,50}$/", 'message' => 'El Telefono debe  tener Mínimo 8 y máximo 30 caracteres'],

            [['PaisesId'], 'required'],
            [['DepartamentosId'], 'required'],
            [['CiudadesId'], 'required'],
            [['Estado'], 'required'],


            [['Fecha'], 'safe'],
            [['PaisesId', 'DepartamentosId', 'CiudadesId', 'BarriosId', 'Puntos', 'Estado'], 'integer'],
            [['DNI', 'PrimerNombre', 'SegundoNombre', 'PrimerApellido', 'SegundoApellido'], 'string', 'max' => 50],
            [['Direccion'], 'string', 'max' => 255],
            [['Telefono', 'Celular'], 'string', 'max' => 30],
            [['DepartamentosId'], 'exist', 'skipOnError' => true, 'targetClass' => Departamentos::className(), 'targetAttribute' => ['DepartamentosId' => 'Id']],
            [['PaisesId'], 'exist', 'skipOnError' => true, 'targetClass' => Paises::className(), 'targetAttribute' => ['PaisesId' => 'Id']],
            [['CiudadesId'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudades::className(), 'targetAttribute' => ['CiudadesId' => 'Id']],
            [['BarriosId'], 'exist', 'skipOnError' => true, 'targetClass' => Barrios::className(), 'targetAttribute' => ['BarriosId' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Fecha' => Yii::t('app', 'Fecha'),
            'DNI' => Yii::t('app', 'DNI'),
            'PrimerNombre' => Yii::t('app', 'Primer Nombre'),
            'SegundoNombre' => Yii::t('app', 'Segundo Nombre'),
            'PrimerApellido' => Yii::t('app', 'Primer Apellido'),
            'SegundoApellido' => Yii::t('app', 'Segundo Apellido'),
            'Direccion' => Yii::t('app', 'Direccion'),
            'Telefono' => Yii::t('app', 'Telefono'),
            'Celular' => Yii::t('app', 'Celular'),
            'PaisesId' => Yii::t('app', 'País'),
            'DepartamentosId' => Yii::t('app', 'Departamento'),
            'CiudadesId' => Yii::t('app', 'Ciudad'),
            'BarriosId' => Yii::t('app', 'Barrio'),
            'Puntos' => Yii::t('app', 'Puntos'),
            'Estado' => Yii::t('app', 'Estado'),

            'paises.Nombre' => Yii::t('app', 'País'),
            'departamentos.Nombre' => Yii::t('app', 'Departamento'),
            'ciudades.Nombre' => Yii::t('app', 'Ciudad'),
            'barrios.Nombre' => Yii::t('app', 'Barrio'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentos()
    {
        return $this->hasOne(Departamentos::className(), ['Id' => 'DepartamentosId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaises()
    {
        return $this->hasOne(Paises::className(), ['Id' => 'PaisesId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCiudades()
    {
        return $this->hasOne(Ciudades::className(), ['Id' => 'CiudadesId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarrios()
    {
        return $this->hasOne(Barrios::className(), ['Id' => 'BarriosId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidocliente()
    {
        return $this->hasOne(Pedidocliente::className(), ['Id' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['ClienteId' => 'Id']);
    }
}
