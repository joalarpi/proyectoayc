<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\gridview;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Clientes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-index">

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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES CLIENTES</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],            

        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],

           // 'Id',
           // 'Fecha',
            'DNI',
            'PrimerNombre',
            'SegundoNombre',
            'PrimerApellido',
            'SegundoApellido',
            'Direccion',
            'Telefono',
            'Celular',
            //'BarriosId',
            [
                'attribute' => 'BarriosId',
                'value' => 'barrios.Nombre',
            ],
            //'CiudadesId',
            [
                'attribute' => 'CiudadesId',
                'value' => 'ciudades.Nombre',
            ],
            //'DepartamentosId',
            [
                'attribute' => 'DepartamentosId',
                'value' => 'departamentos.Nombre',
            ],
           // 'PaisesId',
            [
                'attribute' => 'PaisesId',
                'value' => 'paises.Nombre',
            ],
            'Puntos',
            [    
                'label' => 'Estado',
                
                    'value' => function($model)
                    {
                      return ($model->Estado == 1)? 'Activo':'Inactivo';
                    }
                
                ],
            //'Estado'

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
