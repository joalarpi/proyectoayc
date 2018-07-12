<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Estadosc */

$this->title = $model->Nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Estados Clientes/Proveedores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosc-view">
<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>LISTAR ESTADO CLIENTES/PEDIDOS</h3>
<p><p><p><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success'])?></p></p></p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'Id',
            'Nombre',
        ],
    ]) ?>

</div>
