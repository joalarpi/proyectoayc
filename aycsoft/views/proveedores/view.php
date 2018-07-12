<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Proveedores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedores-view">
<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>LISTAR PROVEEDOR</h3>
<p><p><p><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success'])?></p></p></p>
    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ProveedoresId',
            'ProveedoresRUT',
            'ProveedoresNombreComercial',
            'ProveedoresNombreLegal',
            'ProveedoresDireccion',
            'ProveedoresTelefono',
            'ProveedoresCelular',
            'ProveedoresEmail:email',
           // 'PaisesId',
            ///'Paises.Nombre',
           // 'PaisesNombre',
           // 'DepartamentosId',
           // 'DepartamentosNombre',
            
            //'CiudadesId',
            //'CiudadesNombre',
           // 'BarriosId',
           // 'BarriosNombre',

            'barrios.Nombre',
            'ciudades.Nombre',
            'departamentos.Nombre',
            'paises.Nombre',
        ],
    ]) ?>

</div>
