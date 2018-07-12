<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Encabezados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encabezados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Cliente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Vendedores')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DetallesVenta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DetallesEntrega')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DetallesProductos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Otros')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Espacio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DetallesProveedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CodificacionProducto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
