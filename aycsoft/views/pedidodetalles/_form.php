<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use app\models\Productos;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidodetalles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidodetalles-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <?= $form->field($model, 'ProductosId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Productos::find()->all(), 'ProductosId','ProductosNombre'), 'options'=>['placeholder'=>'Buscar Producto', 'ProductosNombre'=>'ProductosId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 

    <?= $form->field($model, 'ProductosCodigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProductosNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cantidad')->textInput() ?>

    <?= $form->field($model, 'ValorUnitario')->textInput() ?>

    <?= $form->field($model, 'TotalProducto')->textInput() ?>

    <?= $form->field($model, 'TotalPedido')->textInput() ?>

    <?= $form->field($model, 'Valorenvio')->textInput() ?>

    <?= $form->field($model, 'ImpuestosId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ImpuestosPorcentaje')->textInput() ?>

    <?= $form->field($model, 'Observaciones')->textArea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
