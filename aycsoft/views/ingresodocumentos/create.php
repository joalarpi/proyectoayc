<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ingresodocumentos */

$this->title = Yii::t('app', 'Transacciones Inventario');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ingresodocumentos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingresodocumentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
