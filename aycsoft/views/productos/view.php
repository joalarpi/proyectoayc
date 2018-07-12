<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */

//$this->title = $model->ProductosNombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Productos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-view">
<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>LISTAR PRODUCTO</h3>
<p><p><p><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success'])?></p></p></p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'ProductosId',
            'ProductoFecha',

            'encabezados.Espacio',
            'encabezados.DetallesProveedor', 
            'encabezados.Espacio', 
            //'ProveedoresId',
            'proveedores.ProveedoresRUT',
            'proveedores.ProveedoresNombreComercial',

            'encabezados.Espacio',
            'encabezados.CodificacionProducto', 
            'encabezados.Espacio', 

            'BodegasId',
            'bodegas.Nombre',
            'FamiliasId',
            'familias.Nombre',
            'GruposId',
            'grupos.Nombre',
            'CategoriasId',
            'categorias.Nombre',

            'encabezados.Espacio',
            'encabezados.DetallesProductos', 
            'encabezados.Espacio', 

            'ProductosCodigo',
            'ProductosReferencia',
            'ProductosEan',
            'ProductosNombre',
            //'PresentacionId',
            'presentacion.Nombre',
            //'PresentacionNombre',
            'ProductosDimensiones',
            'ProductosPeso',
            'ProductosCantidad',
            'ProductosCosto',
            'ProductosUtilidad',
            'ProductosPrecioVenta',

            'encabezados.Espacio',
            'encabezados.Otros', 
            'encabezados.Espacio', 
           // 'ImpuestosId',
            //'impuestos.Nombre',
            //'impuestos.Porcentaje',
            //'ImpuestosNombre',
            'ImpuestosPorcentaje',
            'encabezados.Espacio',
            'ProductoStock',
        ],
    ]) ?>

</div>
