<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use kartik\widgets\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Estadosc;
use app\models\Sucursales;
use app\models\Opcionescom;
use kartik\select2\Select2;
use kartik\checkbox\CheckboxX;
use kartik\depdrop\Depdrop;

/* @var $this yii\web\View */
/* @var $model app\models\Vendedores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendedores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DNI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimerNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SegundoNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimerApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SegundoApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sucursal')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Sucursales::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione Sucursal', 'Nombre'=>'Sucursal'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>

    <?= $form->field($model, 'Telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Celular')->textInput() ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Estado')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Estadosc::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione Estado', 'id'=>'Estado'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>

    <?= $form->field($model, 'ActivaComision')->widget(CheckboxX::classname(), [])?>    

    <?= $form->field($model, 'PorcentajeComision')->textInput() ?>

    <?= $form->field($model, 'Fechac')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
]);
?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
