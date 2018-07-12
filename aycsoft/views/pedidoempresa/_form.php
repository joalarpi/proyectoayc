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


/* @var $this yii\web\View */
/* @var $model app\models\Pedidoempresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidoempresa-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'VendedoresId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Vendedores::find()->all(), 'Id','Id'), 'options'=>['placeholder'=>'Buscar Vendedor por ID', 'id'=>'VendedoresId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    
    <?= $form->field($model, 'VendedoresDNI')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Vendedores::find()->all(), 'Id','DNI'), 'options'=>['placeholder'=>'Buscar vendedor por DNI', 'DNI'=>'VendedoresDNI'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    
    <?= $form->field($model, 'MedipagoId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Mediopago::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija medio de pago', 'Nombre'=>'MedipagoId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    <?= $form->field($model, 'MedipagoNombre')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'CanalventaId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Canales::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija canal de venta', 'Nombre'=>'CanalventaId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    <?= $form->field($model, 'CanalventaNombre')->textInput(['maxlength' => true]) ?>

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


    <?= $form->field($model, 'EstadoId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Estadosp::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Elija estado', 'Nombre'=>'EstadoId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
