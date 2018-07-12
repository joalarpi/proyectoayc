<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProveedoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ProveedoresId') ?>

    <?= $form->field($model, 'ProveedoresRUT') ?>

    <?= $form->field($model, 'ProveedoresNombreComercial') ?>

    <?= $form->field($model, 'ProveedoresNombreLegal') ?>

    <?= $form->field($model, 'ProveedoresDireccion') ?>

    <?php // echo $form->field($model, 'ProveedoresTelefono') ?>

    <?php // echo $form->field($model, 'ProveedoresCelular') ?>

    <?php // echo $form->field($model, 'ProveedoresEmail') ?>

    <?php // echo $form->field($model, 'PaisesId') ?>

    <?php // echo $form->field($model, 'PaisesNombre') ?>

    <?php // echo $form->field($model, 'DepartamentosId') ?>

    <?php // echo $form->field($model, 'DepartamentosNombre') ?>

    <?php // echo $form->field($model, 'CiudadesId') ?>

    <?php // echo $form->field($model, 'CiudadesNombre') ?>

    <?php // echo $form->field($model, 'BarriosId') ?>

    <?php // echo $form->field($model, 'BarriosNombre') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
