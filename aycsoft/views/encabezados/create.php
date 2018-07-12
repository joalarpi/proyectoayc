<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Encabezados */

$this->title = Yii::t('app', 'Create Encabezados');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Encabezados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encabezados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
