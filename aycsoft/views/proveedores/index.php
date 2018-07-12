<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\gridview;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProveedoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Proveedores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedores-index">

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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES PROVEEDORES</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],
        
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],

            //'ProveedoresId',
            'ProveedoresRUT',
            'ProveedoresNombreComercial',
            'ProveedoresNombreLegal',
            'ProveedoresDireccion',
            'ProveedoresTelefono',
            'ProveedoresCelular',
            'ProveedoresEmail:email',
           
            [
                'attribute' => 'BarriosId',
                'value' => 'barrios.Nombre',
            ],
            //'BarriosId',
            //'BarriosNombre',
            [
                'attribute' => 'CiudadesId',
                'value' => 'ciudades.Nombre',
            ],
            //'CiudadesId',
            //'CiudadesNombre',

            [
                'attribute' => 'DepartamentosId',
                'value' => 'departamentos.Nombre',
            ],
            //'DepartamentosId',
            //'DepartamentosNombre',

             [
                'attribute' => 'PaisesId',
                'value' => 'paises.Nombre',
            ],
            //'PaisesId',
            //'PaisesNombre',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
