<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\grid\gridview;

/* @var $this yii\web\View */
/* @var $model app\models\Bodegas */

$this->title = Yii::t('app', 'Actualizar Bodega: ' . $model->Id, [
    'nameAttribute' => '' . $model->Id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bodegas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="bodegas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
