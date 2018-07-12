<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\gridview;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VendedoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Vendedores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendedores-index">

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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES VENDEDORES</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],

            //'Id',
            'DNI',
            'PrimerNombre',
            'SegundoNombre',
            'PrimerApellido',
            'SegundoApellido',
            'Direccion',
            'Sucursal',
            [
                'attribute' => '',
                'value' => 'sucursal.Nombre',
            ],
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
                'label' => 'ActivaComision',
                
                    'value' => function($model)
                    {
                      return ($model->ActivaComision == 1)? 'Si':'No';
                    }
                
                ],
            'PorcentajeComision',
            'Fechac',

          //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
