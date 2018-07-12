<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedidocliente".
 *
 * @property string $Id
 * @property string $Fecha
 * @property string $ClienteNombre
 * @property string $ClienteDireccion
 * @property string $ClienteTelefono
 * @property string $ClienteCelular
 * @property string $apodo
 * @property string $Calificacion
 *
 * @property Clientes $id
 */
class Pedidocliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedidocliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

          //  [['DNI'], 'required'],
           // [['DNI'], 'unique'],


            [['Id'], 'required', 'message' => 'Debe elegir un cliente. Bùsquelo por su DNI'],
            [['Fecha'], 'required'],



            [['Fecha'], 'safe'],
            [['DNI', 'ClienteNombre', 'ClienteDireccion', 'ClienteTelefono', 'ClienteCelular'], 'string', 'max' => 50],
            [['apodo'], 'string', 'max' => 255],
            [['Calificacion'], 'string', 'max' => 60],
            [['Id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['Id' => 'Id']],
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
            'DNI' => Yii::t('app', 'Dni'),
            'ClienteNombre' => Yii::t('app', 'Cliente Nombre'),
            'ClienteDireccion' => Yii::t('app', 'Cliente Direccion'),
            'ClienteTelefono' => Yii::t('app', 'Cliente Telefono'),
            'ClienteCelular' => Yii::t('app', 'Cliente Celular'),
            'apodo' => Yii::t('app', 'Apodo'),
            'Calificacion' => Yii::t('app', 'Calificacion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId()
    {
        return $this->hasMany(Clientes::className(), ['Id' => 'Id']);
    }
}
