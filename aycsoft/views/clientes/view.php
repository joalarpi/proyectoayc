<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clientes */

//$this->title = $model->DNI;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-view">
<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>LISTAR CLIENTE</h3>
<p><p><p><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success'])?></p></p></p>
    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Fecha',
            'DNI',
            'PrimerNombre',
            'SegundoNombre',
            'PrimerApellido',
            'SegundoApellido',
            'Direccion',
            'Telefono',
            'Celular',
            
            'barrios.Nombre',
            'ciudades.Nombre',
            'departamentos.Nombre',
            'paises.Nombre',
            [    
                'label' => 'Estado',
                
                    'value' => function($model)
                    {
                      return ($model->Estado == 1)? 'Activo':'Inactivo';
                    }
                
            ],
            //'Estado',
            'Puntos',
        ],
    ]) ?>

</div>
