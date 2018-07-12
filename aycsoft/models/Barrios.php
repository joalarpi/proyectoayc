<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barrios".
 *
 * @property string $Id
 * @property string $Nombre
 *
 * @property Clientes[] $clientes
 * @property Proveedores[] $proveedores
 */
class Barrios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barrios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required', 'message' => 'El Nombre del Barrio no puede estar vacío'],
            [['Nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['BarriosId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedores()
    {
        return $this->hasMany(Proveedores::className(), ['BarriosId' => 'Id']);
    }
}
