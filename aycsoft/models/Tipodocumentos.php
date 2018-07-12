<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipodocumentos".
 *
 * @property string $Id
 * @property string $Nombre
 * @property string $Modulo
 */
class Tipodocumentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipodocumentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required'],
            [['Modulo'], 'required'],
            [['Tipo'], 'required'],
            [['Prefijo'], 'required'],
            [['Nombre'], 'string', 'max' => 50],
            [['Prefijo'], 'string', 'max' => 8],
            [['Modulo'], 'string', 'max' => 3],
            [['Tipo'], 'string', 'max' => 1],  
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
            'Prefijo' => Yii::t('app', 'Prefijo'),
            'Modulo' => Yii::t('app', 'Modulo'),
            'Tipo' => Yii::t('app', 'Tipo'),
        ];
    }
}
