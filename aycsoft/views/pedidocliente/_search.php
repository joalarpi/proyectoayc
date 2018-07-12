<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PedidoclienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidocliente-search">

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

    <?= $form->field($model, 'ClienteNombre') ?>

    <?= $form->field($model, 'ClienteDireccion') ?>

    <?= $form->field($model, 'ClienteTelefono') ?>

    <?php // echo $form->field($model, 'ClienteCelular') ?>

    <?php // echo $form->field($model, 'apodo') ?>

    <?php // echo $form->field($model, 'Calificacion') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
