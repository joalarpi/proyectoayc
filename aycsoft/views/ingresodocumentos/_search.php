<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IngresodocumentosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ingresodocumentos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'DocOficial') ?>

    <?= $form->field($model, 'TipodocumentoId') ?>

    <?= $form->field($model, 'TipodocumentosNombre') ?>

    <?php // echo $form->field($model, 'BodegasId') ?>

    <?php // echo $form->field($model, 'BodegasNombre') ?>

    <?php // echo $form->field($model, 'Numerointerno') ?>

    <?php // echo $form->field($model, 'Prefijo') ?>

    <?php // echo $form->field($model, 'ProveedoresId') ?>

    <?php // echo $form->field($model, 'ProveedoresNombreComercial') ?>

    <?php // echo $form->field($model, 'ProductosId') ?>

    <?php // echo $form->field($model, 'ProductosCodigo') ?>

    <?php // echo $form->field($model, 'ProductosNombre') ?>

    <?php // echo $form->field($model, 'Cantidad') ?>

    <?php // echo $form->field($model, 'ValorUnitario') ?>

    <?php // echo $form->field($model, 'TotalProducto') ?>

    <?php // echo $form->field($model, 'TotalPedido') ?>

    <?php // echo $form->field($model, 'ImpuestosId') ?>

    <?php // echo $form->field($model, 'ImpuestosPorcentaje') ?>

    <?php // echo $form->field($model, 'Observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
