<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */

$this->title = Yii::t('app', 'Actualizar Productos: ' . $model->ProductosId, [
    'nameAttribute' => '' . $model->ProductosId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProductosId, 'url' => ['view', 'id' => $model->ProductosId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="productos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
