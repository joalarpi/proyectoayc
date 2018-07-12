<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidocliente */

$this->title = Yii::t('app', 'Actualizar pedido cliente: ' . $model->Id, [
    'nameAttribute' => '' . $model->Id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pedidoclientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pedidocliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
