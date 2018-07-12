<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\datecontrol;
//use kartik\datecontrol\DateControl;
use kartik\widgets\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DNI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimerNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SegundoNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimerApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SegundoApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Clave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    







    <?= $form->field($model, 'Fechac')->widget(DateControl::classname(), [
    'type' => 'date',
    'ajaxConversion' => true,
    'autoWidget' => true,
    'widgetClass' => '',
    'displayFormat' => 'php:d-F-Y',
    'saveFormat' => 'php:Y-m-d',
    'saveTimezone' => 'UTC',
    'displayTimezone' => 'Asia/Kolkata',
    'saveOptions' => [
       // 'label' => 'Input saved as: ',
      //  'type' => 'text',
        'readonly' => true,
        'class' => 'hint-input text-muted'
    ],
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'php:d-F-Y'
        ]
    ]
]);?>








    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
