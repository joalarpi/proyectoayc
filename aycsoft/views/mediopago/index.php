<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\gridview;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MediopagoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Mediopagos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mediopago-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'floatHeader'=>true,
        'resizableColumns'=>true,
        'hover'=>true,
        //'showPageSummary' => true,

        'panel' => [
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES MEDIOS DE PAGO</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],

        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],

            //'Id',
            'Nombre',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
