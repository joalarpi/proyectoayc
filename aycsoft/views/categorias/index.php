<?php

use yii\helpers\Html;
use kartik\grid\gridview;
//use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Categorias');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categorias-index">

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
        'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i>TRANSACCIONES CATEGORIAS</h3>',
        'type'=>'success',
        'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Crear', ['create'], ['class' => 'btn btn-success']),
        'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Resetear Grid', ['index'], ['class' => 'btn btn-info']),
        'footer'=>false
        ],


        'columns' => [
            ['class' => '\kartik\grid\SerialColumn'],
            ['class' => '\kartik\grid\ActionColumn'],
           // ['class' => 'yii\grid\SerialColumn'],

           // 'Id',
            'Nombre',

          //  ['class' => 'yii\grid\ActionColumn'],
        ],
        
    ]); ?>
    <?php Pjax::end(); ?>
</div>
