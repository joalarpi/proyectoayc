<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Paises;
use app\models\Departamentos;
use app\models\Ciudades;
use app\models\Barrios;
use app\models\Proveedores;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProveedoresRUT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProveedoresNombreComercial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProveedoresNombreLegal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProveedoresDireccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProveedoresTelefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProveedoresCelular')->textInput() ?>

    <?= $form->field($model, 'ProveedoresEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BarriosId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Barrios::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione Barrio', 'Nombre'=>'BarriosId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>

    <?= $form->field($model, 'CiudadesId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Ciudades::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione ciudad', 'Nombre'=>'CiudadesId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>

    <?= $form->field($model, 'DepartamentosId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Departamentos::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione departamento', 'Nombre'=>'DepartamentosId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?>    

    <?= $form->field($model, 'PaisesId')->widget(Select2::classname(), [
        'language'=>'en',
        'data' => ArrayHelper::map(Paises::find()->all(), 'Id','Nombre'), 'options'=>['placeholder'=>'Seleccione país', 'Nombre'=>'PaisesId'], 
        'pluginOptions' => ['allowClear'=>true],
    ]); ?> 


    
    



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
