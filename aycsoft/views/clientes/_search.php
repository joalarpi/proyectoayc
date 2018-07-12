<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'DNI') ?>

    <?= $form->field($model, 'PrimerNombre') ?>

    <?= $form->field($model, 'SegundoNombre') ?>

    <?php // echo $form->field($model, 'PrimerApellido') ?>

    <?php // echo $form->field($model, 'SegundoApellido') ?>

    <?php // echo $form->field($model, 'Direccion') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Celular') ?>

    <?php // echo $form->field($model, 'PaisesId') ?>

    <?php // echo $form->field($model, 'DepartamentosId') ?>

    <?php // echo $form->field($model, 'CiudadesId') ?>

    <?php // echo $form->field($model, 'BarriosId') ?>

    <?php // echo $form->field($model, 'Puntos') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
