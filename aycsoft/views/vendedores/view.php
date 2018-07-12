<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vendedores */

//$this->title = $model->DNI;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vendedores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendedores-view">



<p><p><p><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success'])?></p></p></p>
<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>LISTAR VENDEDOR</h3><h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'DNI',
            'PrimerNombre',
            'SegundoNombre',
            'PrimerApellido',
            'SegundoApellido',
            'Direccion',
            'Sucursal',
            'Telefono',
            'Celular',
            'Email:email',
             [    
                'label' => 'Estado',
                
                    'value' => function($model)
                    {
                      return ($model->Estado == 1)? 'Activo':'Inactivo';
                    }
                
                ],
           // 'Estado',
           // 'ActivaComision',
                [    
                'label' => 'Activa Comision',
                
                    'value' => function($model)
                    {
                      return ($model->ActivaComision == 0)? 'NO':'SI';
                    }
                
                ],
            'PorcentajeComision',
            'Fechac',
        ],
    ]) ?>

</div>
