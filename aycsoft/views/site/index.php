<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
$this->title = 'SOFTWARE AHORRO Y COMPRAS.';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
            <h2>TERMINAR PEDIDOS</h2>
            <h2>Parámetros</h2>
            <table border="0" >
            <tr> <td bgcolor="#e8edff">           1</td><td bgcolor="#e8edff">2</td><td bgcolor="#e8edff">3</td>
            </tr>
            </table>


            <table border="1" cellpadding="12" cellspacing="12">
            <caption>GENERALES</caption>

            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Sucursales', ['/sucursales'])?></td>
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Países', ['/paises'])?></td> 
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Departamentos', ['/departamentos'])?></td>
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Ciudades', ['/ciudades'])?></td> 
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Barrios', ['/barrios'])?></td> 
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Impuestos', ['/impuestos'])?></td> 
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Tipos de documentos', ['/tipodocumentos'])?></td> 
            </tr>
            </table>
            
            
            
            <table border="1" cellpadding="12" cellspacing="12">
            <caption>PRODUCTOS</caption>

                <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Bodegas', ['/bodegas'])?></td>
                </tr>
                <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Familias', ['/familias'])?></td> 
                </tr>
                <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Grupos', ['/grupos'])?></td>
                </tr>
                <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Categorías', ['/categorias'])?></td> 
                </tr>
                <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Presentación producto', ['/presentacion'])?></td> 
                </tr>    
            </table>



            <table border="1" cellpadding="12" cellspacing="12">
            <caption>PEDIDOS</caption>

            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Canales de venta', ['/canales'])?></td>
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Medios de pago', ['/mediopago'])?></td> 
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Estados pedidos', ['/estadosp'])?></td>
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Agencias transporte', ['/agencias'])?></td> 
            </tr>
            </table>

            



            <h2>Transacciones</h2>
            <table border="1" cellpadding="12" cellspacing="12">
            <caption>MOVIMIENTOS</caption>

            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Clientes', ['/clientes'])?></td>
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Vendedores', ['/vendedores'])?></td> 
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Proveedores', ['/proveedores'])?></td>
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Productos', ['/productos'])?></td> 
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Pedidos', ['/pedidos'])?></td> 
            </tr>
            <tr> <td bgcolor="#e8edff"><?=  Html::a('<i class="glyphicon glyphicon-plus"></i> Ingresodocumentos', ['/ingresodocumentos'])?></td> 
            </tr>
            </table>
        </div>

    </div>
</div>



