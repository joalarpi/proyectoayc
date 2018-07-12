<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pedidoempresa */

$this->title = Yii::t('app', 'Create Pedidoempresa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pedidoempresas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidoempresa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
