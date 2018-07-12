<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pedidocliente */

$this->title = Yii::t('app', 'Crear pedido cliente');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pedidoclientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidocliente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
