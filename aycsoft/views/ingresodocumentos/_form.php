<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use app\models\Productos;
use app\models\Bodegas;
use app\models\Tipodocumentos;
use app\models\Proveedores;
use app\models\Impuestos;


/* @var $this yii\web\View */
/* @var $model app\models\Ingresodocumentos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ingresodocumentos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
]);?>


    <?= $form->field($model, 'DocOficial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Numerointerno')->textInput(['maxlength' => true]) ?>


     <?= $form->field($model, 'TipodocumentoId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Tipodocumentos::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija un documento', 'Nombre'=>'TipodocumentoId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>
    

    <?= $form->field($model, 'BodegasId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Bodegas::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija una bodega', 'Nombre'=>'BodegasId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>



    <?= $form->field($model, 'ProveedoresId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Proveedores::find()->all(), 'ProveedoresId','ProveedoresNombreComercial'), 'options'=>['placeholder'=>'Elija un Proveedor', 'ProveedoresNombreComercial'=>'ProveedoresId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>


    <?= $form->field($model, 'ProductosId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Productos::find()->all(), 'ProductosId','ProductosNombre'), 'options'=>['placeholder'=>'Elija un Producto', 'ProductosNombre'=>'ProductosId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>


    <?= $form->field($model, 'Cantidad')->textInput() ?>
    <?= $form->field($model, 'ValorUnitario')->textInput() ?>


  

    <?= $form->field($model, 'TotalPedido')->textInput() ?>


    <?= $form->field($model, 'Observaciones')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
