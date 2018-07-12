<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mediopago */

$this->title = Yii::t('app', 'Actualizar Medio de Pago: ' . $model->Id, [
    'nameAttribute' => '' . $model->Id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mediopagos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="mediopago-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
