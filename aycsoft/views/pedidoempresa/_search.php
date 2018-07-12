<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PedidoempresaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedidoempresa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'VendedoresId') ?>

    <?= $form->field($model, 'VendedoresDNI') ?>

    <?= $form->field($model, 'MedipagoId') ?>

    <?= $form->field($model, 'MedipagoNombre') ?>

    <?php // echo $form->field($model, 'CanalventaId') ?>

    <?php // echo $form->field($model, 'CanalventaNombre') ?>

    <?php // echo $form->field($model, 'Idcompra') ?>

    <?php // echo $form->field($model, 'IdPago') ?>

    <?php // echo $form->field($model, 'AgenciaId') ?>

    <?php // echo $form->field($model, 'FechaEntrega') ?>

    <?php // echo $form->field($model, 'Lugarentrega') ?>

    <?php // echo $form->field($model, 'EstadoId') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
