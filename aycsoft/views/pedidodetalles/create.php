<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pedidodetalles */

$this->title = Yii::t('app', 'Crear Detalles Pedido');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pedidodetalles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidodetalles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
