<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use app\models\Vendedores;
use app\models\Mediopago;
use app\models\Canales;
use app\models\Agencias;
use app\models\Estadosp;
use app\models\Productos;
use app\models\Clientes;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EstadoId')->widget(Select2::classname(), [
            'language'=>'en',
            'data' => ArrayHelper::map(Estadosp::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija estado', 'Nombre'=>'EstadoId'], 
            'pluginOptions' => ['allowClear'=>true],
        ]); ?>

    <?= $form->field($model, 'Fecha')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
    ]);?>

    <?= $form->field($model, 'ClienteId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Clientes::find()->all(), 'Id','DNI'), 'options'=>['placeholder'=>'Buscar cliente', 'DNI'=>'ClienteDNI'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 


    <?= $form->field($model, 'apodo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Calificacion')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'VendedoresId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Vendedores::find()->all(), 'Id','DNI'), 'options'=>['placeholder'=>'Buscar Vendedor', 'id'=>'DNI'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 


    <?= $form->field($model, 'CanalventaId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Canales::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija canal de venta', 'Nombre'=>'CanalventaId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

   
    <?= $form->field($model, 'MedipagoId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Mediopago::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija medio de pago', 'Nombre'=>'MedipagoId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    <?= $form->field($model, 'Idcompra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IdPago')->textInput(['maxlength' => true]) ?>

   
    <?= $form->field($model, 'AgenciaId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Agencias::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija agencia', 'Nombre'=>'AgenciaId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>


    <?= $form->field($model, 'FechaEntrega')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]
]);?>

    <?= $form->field($model, 'Lugarentrega')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductosId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Productos::find()->all(), 'ProductosId','ProductosNombre'), 'options'=>['placeholder'=>'Buscar Producto', 'ProductosNombre'=>'ProductosId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 



    <?= $form->field($model, 'Cantidad')->textInput() ?>
    <?= $form->field($model, 'Valorenvio')->textInput() ?>

    <?= $form->field($model, 'TotalPedido')->textInput() ?>

    <?= $form->field($model, 'Observaciones')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
