<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vendedores */

$this->title = Yii::t('app', 'Crear Vendedor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vendedores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendedores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
