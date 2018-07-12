<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ProductosId') ?>

    <?= $form->field($model, 'ProveedoresId') ?>

    <?= $form->field($model, 'BodegasId') ?>

    <?= $form->field($model, 'FamiliasId') ?>

    <?= $form->field($model, 'GruposId') ?>

    <?php // echo $form->field($model, 'CategoriasId') ?>

    <?php // echo $form->field($model, 'ProductosCodigo') ?>

    <?php // echo $form->field($model, 'ProductosReferencia') ?>

    <?php // echo $form->field($model, 'ProductosEan') ?>

    <?php // echo $form->field($model, 'ProductosNombre') ?>

    <?php // echo $form->field($model, 'PresentacionId') ?>

    <?php // echo $form->field($model, 'PresentacionNombre') ?>

    <?php // echo $form->field($model, 'ProductosDimensiones') ?>

    <?php // echo $form->field($model, 'ProductosPeso') ?>

    <?php // echo $form->field($model, 'ProductosCantidad') ?>

    <?php // echo $form->field($model, 'ProductosCosto') ?>

    <?php // echo $form->field($model, 'ProductosUtilidad') ?>

    <?php // echo $form->field($model, 'ProductosPrecioVenta') ?>

    <?php // echo $form->field($model, 'ImpuestosId') ?>

    <?php // echo $form->field($model, 'ImpuestosNombre') ?>

    <?php // echo $form->field($model, 'ImpuestosPorcentaje') ?>

    <?php // echo $form->field($model, 'ProductoStock') ?>

    <?php // echo $form->field($model, 'ProductoFecha') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
