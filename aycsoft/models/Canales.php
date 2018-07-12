<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "canales".
 *
 * @property int $Id
 * @property string $Nombre
 */
class Canales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'canales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required'],
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
}
