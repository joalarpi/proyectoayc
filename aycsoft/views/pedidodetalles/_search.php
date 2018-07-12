<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PedidodetallesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidodetalles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'ProductosId') ?>

    <?= $form->field($model, 'ProductosCodigo') ?>

    <?= $form->field($model, 'ProductosNombre') ?>

    <?= $form->field($model, 'Cantidad') ?>

    <?php // echo $form->field($model, 'ValorUnitario') ?>

    <?php // echo $form->field($model, 'TotalProducto') ?>

    <?php // echo $form->field($model, 'TotalPedido') ?>

    <?php // echo $form->field($model, 'Valorenvio') ?>

    <?php // echo $form->field($model, 'ImpuestosId') ?>

    <?php // echo $form->field($model, 'ImpuestosPorcentaje') ?>

    <?php // echo $form->field($model, 'Observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
