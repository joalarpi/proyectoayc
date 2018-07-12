<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Agencias */

$this->title = Yii::t('app', 'Crear Agencia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Agencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agencias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
