<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $Id
 * @property string $DNI
 * @property string $PrimerNombre
 * @property string $SegundoNombre
 * @property string $PrimerApellido
 * @property string $SegundoApellido
 * @property string $Usuario
 * @property string $Clave
 * @property string $Email
 * @property string $Fechac
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
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
            [['PrimerApellido'], 'required'],
            [['Fechac'], 'required'],
            [['Usuario'], 'required'],
            [['Clave'], 'required'],
            [['Email'], 'required'],
            [['Fechac'], 'safe'],
            [['DNI', 'PrimerNombre', 'SegundoNombre', 'PrimerApellido', 'SegundoApellido'], 'string', 'max' => 50],
            [['Usuario'], 'string', 'max' => 60],
            [['Clave', 'Email'], 'string', 'max' => 255],
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
            'Usuario' => Yii::t('app', 'Usuario'),
            'Clave' => Yii::t('app', 'Clave'),
            'Email' => Yii::t('app', 'Email'),
            'Fechac' => Yii::t('app', 'Fecha creación'),
        ];
    }
}
