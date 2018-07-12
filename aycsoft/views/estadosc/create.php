<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Estadosc */

$this->title = Yii::t('app', 'Crear Estados Clientes/Proveedores');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Estadoscs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
