<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model app\models\Tipodocumentos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tipodocumentos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Prefijo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Modulo')->textInput(['maxlength' => true]) ?>
    

    <?= $form->field($model, 'Tipo')->dropDownList(
			['E' => 'Entrada', 'S' => 'Salida']
			); ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
