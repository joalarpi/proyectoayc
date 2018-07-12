<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VendedoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendedores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'DNI') ?>

    <?= $form->field($model, 'PrimerNombre') ?>

    <?= $form->field($model, 'SegundoNombre') ?>

    <?= $form->field($model, 'PrimerApellido') ?>

    <?php // echo $form->field($model, 'SegundoApellido') ?>

    <?php // echo $form->field($model, 'Direccion') ?>

    <?php // echo $form->field($model, 'Sucursal') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Celular') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Estado') ?>

    <?php // echo $form->field($model, 'ActivaComision') ?>

    <?php // echo $form->field($model, 'PorcentajeComision') ?>

    <?php // echo $form->field($model, 'Fechac') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
