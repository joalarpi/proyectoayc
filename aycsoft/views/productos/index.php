<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\gridview;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Productos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-index">

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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES PRODUCTOS</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],

           // 'ProductosId',
            //'ProveedoresId',
             [
                'attribute' => 'ProveedoresId',
                'value' => 'proveedores.ProveedoresRUT',
            ],
            [
                'attribute' => '',
                'value' => 'proveedores.ProveedoresNombreComercial',
            ],
            'BodegasId',
            [
                'attribute' => '',
                'value' => 'bodegas.Nombre',
            ],
            'FamiliasId',
            [
                'attribute' => '',
                'value' => 'familias.Nombre',
            ],
            'GruposId',
            [
                'attribute' => '',
                'value' => 'grupos.Nombre',
            ],
            'CategoriasId',
            [
                'attribute' => '',
                'value' => 'categorias.Nombre',
            ],
            'ProductosCodigo',
            'ProductosReferencia',
            'ProductosEan',
            'ProductosNombre',
           // 'PresentacionId',
            [
                'attribute' => 'PresentacionId',
                'value' => 'presentacion.Nombre',
            ],
            //'PresentacionNombre',
            'ProductosDimensiones',
            'ProductosPeso',
            'ProductosUtilidad',
            'ProductosCantidad',
            'ProductosCosto',
            'ImpuestosPorcentaje',
            'ProductosPrecioVenta',
            //'ImpuestosId',
            //'ImpuestosNombre',
            
            'ProductoStock',
            'ProductoFecha',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
