<?php

use yii\helpers\Html;
use kartik\grid\gridview;
//use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\IngresodocumentosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Transacciones Inventario');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingresodocumentos-index">

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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES INVENTARIO</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],

        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],

            'Fecha',
            'Id',
            'DocOficial',
            'Numerointerno',
            'TipodocumentoId',
            [
                'attribute' => '',
                'value' => 'tipodocumento.Nombre',
            ],
            'tipodocumento.Tipo',
            //'TipodocumentosNombre',
            'BodegasId',
            [
                'attribute' => '',
                'value' => 'bodegas.Nombre',
            ],
            //'BodegasNombre',
            
            'tipodocumento.Prefijo',
           // 'ProveedoresId',
            [
                'attribute' => 'ProveedoresId',
                'value' => 'proveedores.ProveedoresRUT',
            ],
            [
                'attribute' => '',
                'value' => 'proveedores.ProveedoresNombreComercial',
            ],
            //'ProveedoresNombreComercial',
            'ProductosId',
            [
                'attribute' => 'Cod. Producto',
                'value' => 'productos.ProductosCodigo',
            ],
           // 'ProductosCodigo',
           // 'ProductosNombre',
            [
                'attribute' => 'Nombre Producto',
                'value' => 'productos.ProductosNombre',
            ],
            'Cantidad',
            'ValorUnitario',
            //'ValorUnitario',
            'productos.ProductosPrecioSinIva',

            'TotalProducto',

            
            'TotalPedido',
            //'ImpuestosId',
            //'ImpuestosPorcentaje',
         
            'Observaciones',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
