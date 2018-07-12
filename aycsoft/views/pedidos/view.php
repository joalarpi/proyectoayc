<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pedidos */

//$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pedidos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidos-view">
<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>LISTAR PEDIDO</h3>
<p><p><p><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success'])?></p></p></p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'estados.Nombre',
            'Id',
            'Fecha',
            'encabezados.Espacio', 
            'encabezados.Cliente', 
            'encabezados.Espacio', 
            'cliente.DNI',
            'cliente.PrimerNombre',
            'cliente.PrimerApellido',
            'cliente.Direccion',
            'cliente.Telefono',
            'cliente.Celular',
            'apodo',
            'Calificacion',

            'encabezados.Espacio', 
            'encabezados.Vendedores', 
            'encabezados.Espacio', 
            //'VendedoresId',
            'vendedores.DNI',
            'vendedores.PrimerNombre',
            'vendedores.PrimerApellido',

            'encabezados.Espacio', 
            'encabezados.DetallesVenta', 
            'encabezados.Espacio', 
            //'CanalventaId',
            'canalventa.Nombre',
            //'MedipagoId',
            'medipago.Nombre',
            'Idcompra',
            'IdPago',

            'encabezados.Espacio', 
            'encabezados.DetallesEntrega', 
            'encabezados.Espacio', 
            'agencia.Nombre',
            'FechaEntrega',
            'Lugarentrega',

            'encabezados.Espacio', 
            'encabezados.DetallesProductos', 
            'encabezados.Espacio', 
            'ProductosId',
            //'ProductosCodigo',
            'productos.ProductosCodigo',
            //'ProductosNombre',
            'productos.ProductosNombre',
            'Cantidad',
            
            'productos.ProductosPrecioSinIva',
            'productos.ImpuestosPorcentaje',
            'ValorUnitario'=>'productos.ProductosPrecioVenta',

           // 'productos.ProductosPrecioVenta',
            'TotalProducto',

            //'ImpuestosId',
            //'productos.ImpuestosId',
            //'ImpuestosPorcentaje',
            'Valorenvio',
            'TotalPedido',


            'encabezados.Espacio', 
            'encabezados.Otros', 
            'encabezados.Espacio', 
            'Observaciones',
        ],
    ]) ?>

</div>
