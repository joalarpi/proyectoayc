<?php

use yii\helpers\Html;
use kartik\grid\gridview;
//use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PedidoclienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Pedidoclientes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidocliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'floatHeader'=>true,
        'resizableColumns'=>true,
        'hover'=>true,
        'showPageSummary' => true,
        'summary'=>'Mostrar todo / Exportar',
        //'showFooter'=>true,
        //'showHeader' => true,

        'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES PEDIDO: DATOS CLIENTE</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],

        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],

            'Fecha',
            'Id',
           // 'DNI',
            [
                'attribute' => 'DNI',
                'value' => 'id.DNI',
            ],
           // 'ClienteNombre',
            [
                'attribute' => 'ClienteNombre',
                'value' => 'id.PrimerNombre',
            ],
           // 'ClienteDireccion',
            [
                'attribute' => 'ClienteDireccion',
                'value' => 'id.Direccion',
            ],
            //'ClienteTelefono',
            [
                'attribute' => 'ClienteTelefono',
                'value' => 'id.Telefono',
            ],
           // 'ClienteCelular',
            [
                'attribute' => 'ClienteCelular',
                'value' => 'id.Celular',
            ],

            'apodo',
            'Calificacion',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>