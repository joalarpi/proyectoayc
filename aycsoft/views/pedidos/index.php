<?php

use yii\helpers\Html;
use kartik\grid\gridview;
//use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PedidosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Pedidos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'floatHeader'=>false,
        'resizableColumns'=>false,
        'hover'=>true,
        'showPageSummary' => true,
        'summary'=>'Mostrar todo / Exportar',
        //'showFooter'=>true,
        //'showHeader' => true,

        'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES PEDIDO</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],

        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],

            [
                'attribute' => 'Estado',
                'value' => 'estados.Nombre',
            ],
            'Id',
            'Fecha',
            'ClienteId',
            [
                'attribute' => 'DNI',
                'value' => 'cliente.DNI',
            ],
           // 'ClienteNombre',
            [
                'attribute' => 'ClienteNombre',
                'value' => 'cliente.PrimerNombre',
            ],

            [
                'attribute' => 'ClienteApellido',
                'value' => 'cliente.PrimerApellido',
            ],
           // 'ClienteDireccion',
            [
                'attribute' => 'ClienteDireccion',
                'value' => 'cliente.Direccion',
            ],
            //'ClienteTelefono',
            [
                'attribute' => 'ClienteTelefono',
                'value' => 'cliente.Telefono',
            ],
            //'ClienteCelular',
            [
                'attribute' => 'ClienteCelular',
                'value' => 'cliente.Celular',
            ],
            'apodo',
            'Calificacion',
            'VendedoresId',
            //'VendedoresDNI',
            [
                'attribute' => 'VendedoresDNI',
                'value' => 'vendedores.DNI',
            ],
            [
                'attribute' => 'VendedoresNombre',
                'value' => 'vendedores.PrimerNombre',
            ],
            [
                'attribute' => 'VendedoresApellido',
                'value' => 'vendedores.PrimerApellido',
            ],
             'CanalventaId',
          // 'CanalventaNombre',
            [
                'attribute' => 'CanalventaNombre',
                'value' => 'canalventa.Nombre',
            ],
            'MedipagoId',
            //'MedipagoNombre',ç
            [
                'attribute' => 'MedipagoNombre',
                'value' => 'medipago.Nombre',
            ],
            'Idcompra',
            'IdPago',
            'AgenciaId',
            [
                'attribute' => '',
                'value' => 'agencia.Nombre',
            ],
            'FechaEntrega',
            'Lugarentrega',
            'Cantidad',
            'ProductosId',
          // 'ProductosCodigo',
            [
                'attribute' => 'Código',
                'value' => 'productos.ProductosCodigo',
            ],
           // 'ProductosNombre',
            [
                'attribute' => 'Nombre',
                'value' => 'productos.ProductosNombre',
            ],
            
            //'ValorUnitario',
            'productos.ProductosPrecioSinIva',
            
            [
                'attribute' => '% IVA',
                'value' => 'productos.ImpuestosPorcentaje',
            ],

            [
                'attribute' => 'ValorUnitario',
                'value' => 'productos.ProductosPrecioVenta',
            ],
            
            'TotalProducto',

            
            'Valorenvio',
            'TotalPedido',
            //'ImpuestosId',
            //'ImpuestosPorcentaje',
            'Observaciones',
            //'EstadoId',
            


          // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>