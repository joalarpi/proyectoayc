<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Canales */

$this->title = Yii::t('app', 'Crear Canal de Venta');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Canales de Venta'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
