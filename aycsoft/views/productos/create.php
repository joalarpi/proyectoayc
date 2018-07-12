<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Productos */

$this->title = Yii::t('app', 'Crear Producto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
