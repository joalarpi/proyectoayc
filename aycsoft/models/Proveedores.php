<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedores".
 *
 * @property string $ProveedoresId
 * @property string $ProveedoresRUT
 * @property string $ProveedoresNombreComercial
 * @property string $ProveedoresNombreLegal
 * @property string $ProveedoresDireccion
 * @property string $ProveedoresTelefono
 * @property double $ProveedoresCelular
 * @property string $ProveedoresEmail
 * @property int $PaisesId
 * @property string $PaisesNombre
 * @property string $DepartamentosId
 * @property string $DepartamentosNombre
 * @property string $CiudadesId
 * @property string $CiudadesNombre
 * @property string $BarriosId
 * @property string $BarriosNombre
 *
 * @property Productos[] $productos
 * @property Paises $paises
 * @property Departamentos $departamentos
 * @property Ciudades $ciudades
 * @property Barrios $barrios
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ProveedoresRUT'], 'unique'],
            [['ProveedoresRUT'], 'required'],
            [['PaisesId'], 'required'],
            [['DepartamentosId'], 'required'],
            [['CiudadesId'], 'required'],
            [['ProveedoresNombreComercial'], 'required'],
            [['ProveedoresNombreComercial'], 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'El Nombre Comercial debe  tener Mínimo 3 y máximo 50 caracteres'],
            [['ProveedoresNombreLegal'], 'required'],
            [['ProveedoresNombreLegal'], 'match', 'pattern' => "/^.{3,50}$/", 'message' => 'El Nombre Legal debe  tener Mínimo 3 y máximo 50 caracteres'],

            [['ProveedoresDireccion'], 'required'],
            [['ProveedoresDireccion'], 'match', 'pattern' => "/^.{6,255}$/", 'message' => 'La Direccion debe  tener Mínimo 6 y máximo 255 caracteres'],

            [['ProveedoresEmail'], 'required'],
            [['ProveedoresEmail'], 'email', 'message' => 'Formato no válido'],

            [['ProveedoresTelefono'], 'match', 'pattern' => "/^[0-9(+)]+$/i", 'message' => 'El numero debe tener el formato (+ind)numero'],

            [['ProveedoresCelular'], 'match', 'pattern' => "/^[0-9(+)]+$/i", 'message' => 'El numero debe tener el formato (+ind)numero'],

            [['PaisesId', 'DepartamentosId', 'CiudadesId', 'BarriosId'], 'integer'],
            [['ProveedoresCelular', 'ProveedoresTelefono'], 'string', 'max' => 30],
            [['ProveedoresRUT', 'ProveedoresNombreComercial', 'ProveedoresNombreLegal', 'PaisesNombre', 'DepartamentosNombre', 'CiudadesNombre', 'BarriosNombre'], 'string', 'max' => 50],
            [['ProveedoresDireccion', 'ProveedoresEmail'], 'string', 'max' => 255],
            [['PaisesId'], 'exist', 'skipOnError' => true, 'targetClass' => Paises::className(), 'targetAttribute' => ['PaisesId' => 'Id']],
            [['DepartamentosId'], 'exist', 'skipOnError' => true, 'targetClass' => Departamentos::className(), 'targetAttribute' => ['DepartamentosId' => 'Id']],
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
            'ProveedoresId' => Yii::t('app', 'Id'),
            'ProveedoresRUT' => Yii::t('app', 'Rut'),
            'ProveedoresNombreComercial' => Yii::t('app', 'Nombre Comercial'),
            'ProveedoresNombreLegal' => Yii::t('app', 'Nombre Legal'),
            'ProveedoresDireccion' => Yii::t('app', 'Dirección'),
            'ProveedoresTelefono' => Yii::t('app', 'Teléfono'),
            'ProveedoresCelular' => Yii::t('app', 'Celular'),
            'ProveedoresEmail' => Yii::t('app', 'Email'),
            'PaisesId' => Yii::t('app', 'País'),
            'PaisesNombre' => Yii::t('app', 'Paises Nombre'),
            'DepartamentosId' => Yii::t('app', 'Departamento'),
            'DepartamentosNombre' => Yii::t('app', 'Departamentos Nombre'),
            'CiudadesId' => Yii::t('app', 'Ciudad'),
            'CiudadesNombre' => Yii::t('app', 'Ciudades Nombre'),
            'BarriosId' => Yii::t('app', 'Barrio'),
            //'BarriosNombre' => Yii::t('app', 'Barrios Nombre'),
            'BarriosNombre' => null,
            'paises.Nombre' => Yii::t('app', 'País'),
            'departamentos.Nombre' => Yii::t('app', 'Departamento'),
            'ciudades.Nombre' => Yii::t('app', 'Ciudad'),
            'barrios.Nombre' => Yii::t('app', 'Barrio'),
                    ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::className(), ['ProveedoresId' => 'ProveedoresId']);
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
    public function getDepartamentos()
    {
        return $this->hasOne(Departamentos::className(), ['Id' => 'DepartamentosId']);
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
}