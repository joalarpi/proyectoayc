<?php

use yii\helpers\Html;
use yii\widgets\DetailView;



/* @var $this yii\web\View */
/* @var $model app\models\Ingresodocumentos */

//$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ingresodocumentos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingresodocumentos-view">
<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>LISTAR TRANSACCION INVENTARIO</h3>
<p><p><p><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success'])?></p></p></p>
    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Fecha',
            'tipodocumento.Prefijo',
            'Id',
            'DocOficial',
            'Numerointerno',
            //'TipodocumentoId',
            'tipodocumento.Nombre',
            'tipodocumento.Tipo',
            //'TipodocumentosNombre',
            //'BodegasId',
            'bodegas.Nombre',
            //'BodegasNombre',
            
           // 'ProveedoresId',
            //'ProveedoresNombreComercial',
            'proveedores.ProveedoresRUT',
            'proveedores.ProveedoresNombreComercial',
            //'productos.ProductosId',
           // 'ProductosCodigo',
            'productos.ProductosCodigo',
            //'ProductosNombre',
            'productos.ProductosNombre',
            'Cantidad',
            'ValorUnitario',
            'productos.ProductosPrecioSinIva',
            //'productos.ImpuestosPorcentaje',
            'productos.ProductosPrecioVenta',
            'TotalProducto',



           // 'ValorUnitario',
           // 'TotalProducto',
            'TotalPedido',
           // 'ImpuestosId',
           // 'ImpuestosPorcentaje',
            'Observaciones',












        ],
    ]) ?>

</div>
