<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mediopago */

$this->title = Yii::t('app', 'Crear Medio de Pago');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mediopagos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediopago-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
