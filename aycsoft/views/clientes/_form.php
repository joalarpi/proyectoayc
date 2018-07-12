<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Paises;
use app\models\Departamentos;
use app\models\Ciudades;
use app\models\Barrios;
use kartik\select2\Select2;
use kartik\datecontrol\DateControl;
use app\models\Estadosc;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

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

    <?= $form->field($model, 'DNI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimerNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SegundoNombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PrimerApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SegundoApellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PaisesId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Paises::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione país', 'Nombre'=>'PaisesId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 




   
    <?= $form->field($model, 'DepartamentosId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Departamentos::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione departamento', 'Nombre'=>'DepartamentosId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>  






    
    <?= $form->field($model, 'CiudadesId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Ciudades::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione ciudad', 'Nombre'=>'CiudadesId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>

    
    <?= $form->field($model, 'BarriosId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Barrios::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione Barrio', 'Nombre'=>'BarriosId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>


    <?= $form->field($model, 'Estado')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Estadosc::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione Estado', 'id'=>'Estado'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>

    <?= $form->field($model, 'Puntos')->textInput() ?>

    

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
