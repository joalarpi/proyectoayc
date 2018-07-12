<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EncabezadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encabezados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Cliente') ?>

    <?= $form->field($model, 'Vendedores') ?>

    <?= $form->field($model, 'DetallesVenta') ?>

    <?= $form->field($model, 'DetallesEntrega') ?>

    <?php // echo $form->field($model, 'DetallesProductos') ?>

    <?php // echo $form->field($model, 'Otros') ?>

    <?php // echo $form->field($model, 'Espacio') ?>

    <?php // echo $form->field($model, 'DetallesProveedor') ?>

    <?php // echo $form->field($model, 'CodificacionProducto') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
