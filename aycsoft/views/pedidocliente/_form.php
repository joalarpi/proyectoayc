<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use app\models\Clientes;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidocliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidocliente-form">

    <?php $form = ActiveForm::begin(); ?>



     <?= $form->field($model, 'Id')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Clientes::find()->all(), 'Id','DNI'), 'options'=>['placeholder'=>'Buscar cliente', 'Id'=>'DNI'], 
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
   

    <?= $form->field($model, 'apodo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Calificacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
