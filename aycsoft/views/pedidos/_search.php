<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PedidosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'ClienteId') ?>

    <?= $form->field($model, 'ClienteNombre') ?>

    <?= $form->field($model, 'ClienteDireccion') ?>

    <?php // echo $form->field($model, 'ClienteTelefono') ?>

    <?php // echo $form->field($model, 'ClienteCelular') ?>

    <?php // echo $form->field($model, 'VendedoresId') ?>

    <?php // echo $form->field($model, 'VendedoresDNI') ?>

    <?php // echo $form->field($model, 'MedipagoId') ?>

    <?php // echo $form->field($model, 'MedipagoNombre') ?>

    <?php // echo $form->field($model, 'CanalventaId') ?>

    <?php // echo $form->field($model, 'CanalventaNombre') ?>

    <?php // echo $form->field($model, 'apodo') ?>

    <?php // echo $form->field($model, 'Calificacion') ?>

    <?php // echo $form->field($model, 'Idcompra') ?>

    <?php // echo $form->field($model, 'IdPago') ?>

    <?php // echo $form->field($model, 'AgenciaId') ?>

    <?php // echo $form->field($model, 'FechaEntrega') ?>

    <?php // echo $form->field($model, 'Lugarentrega') ?>

    <?php // echo $form->field($model, 'ProductosId') ?>

    <?php // echo $form->field($model, 'ProductosCodigo') ?>

    <?php // echo $form->field($model, 'ProductosNombre') ?>

    <?php // echo $form->field($model, 'Cantidad') ?>

    <?php // echo $form->field($model, 'ValorUnitario') ?>

    <?php // echo $form->field($model, 'TotalProducto') ?>

    <?php // echo $form->field($model, 'TotalPedido') ?>

    <?php // echo $form->field($model, 'Valorenvio') ?>

    <?php // echo $form->field($model, 'ImpuestosId') ?>

    <?php // echo $form->field($model, 'ImpuestosPorcentaje') ?>

    <?php // echo $form->field($model, 'Observaciones') ?>

    <?php // echo $form->field($model, 'EstadoId') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
