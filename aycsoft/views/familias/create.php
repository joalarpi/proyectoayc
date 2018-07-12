<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Familias */

$this->title = Yii::t('app', 'Crear Familias');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Familias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
