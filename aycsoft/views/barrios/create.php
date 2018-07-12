<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Barrios */

$this->title = Yii::t('app', 'Crear Barrio');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Barrios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barrios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
