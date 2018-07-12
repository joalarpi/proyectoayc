<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paises".
 *
 * @property int $Id
 * @property string $Iso
 * @property string $Nombre
 *
 * @property Clientes[] $clientes
 * @property Proveedores[] $proveedores
 */
class Paises extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paises';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required', 'message' => 'El Nombre del País no puede estar vacío'],
            [['Iso'], 'required', 'message' => 'El codigo ISO del País no puede estar vacío'],
            [['Iso'], 'string', 'max' => 2],
            [['Nombre'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => Yii::t('app', 'ID'),
            'Iso' => Yii::t('app', 'Iso'),
            'Nombre' => Yii::t('app', 'Nombre'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['PaisesId' => 'Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedores()
    {
        return $this->hasMany(Proveedores::className(), ['PaisesId' => 'Id']);
    }
}
