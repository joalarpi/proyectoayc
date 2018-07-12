<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use app\models\Proveedores;
use app\models\Bodegas;
use app\models\Familias;
use app\models\Grupos;
use app\models\Categorias;
use app\models\Presentacion;
use app\models\Impuestos;
/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductoFecha')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
]);?>

    <?= $form->field($model, 'ProveedoresId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Proveedores::find()->all(), 'ProveedoresId','ProveedoresNombreComercial'), 'options'=>['placeholder'=>'Elija Proveedor', 'ProveedoresNombreComercial'=>'ProveedoresId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    <?= $form->field($model, 'BodegasId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Bodegas::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija Bodega', 'Nombre'=>'BodegasId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 


    <?= $form->field($model, 'FamiliasId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Familias::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija Familia', 'Nombre'=>'FamiliasId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 


    <?= $form->field($model, 'GruposId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Grupos::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija Grupo', 'Nombre'=>'GruposId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 


    <?= $form->field($model, 'CategoriasId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Categorias::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija Categoria', 'Nombre'=>'CategoriasId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    <?= $form->field($model, 'ProductosCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductosReferencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductosEan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductosNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PresentacionId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Presentacion::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija Presentacion', 'Nombre'=>'PresentacionId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    <?= $form->field($model, 'ProductosDimensiones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductosPeso')->textInput() ?>

    <?= $form->field($model, 'ProductosUtilidad')->textInput() ?>

    <?= $form->field($model, 'ProductosCantidad')->textInput() ?>

    <?= $form->field($model, 'ProductosCosto')->textInput() ?>

    <?= $form->field($model, 'ImpuestosPorcentaje')->textInput() ?>

    <?= $form->field($model, 'ProductosPrecioVenta')->textInput() ?>

    <?= $form->field($model, 'ProductoStock')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
