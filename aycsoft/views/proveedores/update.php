<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */

$this->title = Yii::t('app', 'Actualizar Proveedor: ' . $model->ProveedoresId, [
    'nameAttribute' => '' . $model->ProveedoresId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Proveedores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProveedoresId, 'url' => ['view', 'id' => $model->ProveedoresId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="proveedores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
