<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
// in your module configuration you can have 'gridviewKrajee' as another module
'modules' => [
   'gridview' =>  [
        'class' => '\kartik\grid\Module',
        // your other grid module settings
    ],
   'gridviewKrajee' =>  [
        'class' => '\kartik\grid\Module',
        // your other grid module settings
    ],
    /*'datecontrol' =>  [
        'class' => '\kartik\datecontrol\Module'
    ]*/

    'datecontrol' => [
    'class' => 'kartik\datecontrol\Module',
    'displaySettings' => [
    'date' => 'php:d-m-Y',
    'time' => 'php:H:i:s A',
    'datetime' => 'php:d-m-Y H:i',
    ],
    'saveSettings' => [
    'date' => 'php:Y-m-d', 
    'time' => 'php:H:i:s',
    'datetime' => 'php:Y-m-d H:i:s',
    ],
    // automatically use kartikwidgets for each of the above formats
    'autoWidget' => true,
    ]
],














/*// elsewhere in your view rendering the GridView widget
echo GridView::widget([
    'moduleId' => 'gridviewKrajee', // change the module identifier to use the respective module's settings
    'dataProvider' => $dataProvider,
    'columns' => $columns,
// other widget settings
*/










    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'language'=>'es', // Este es el lenguaje en el que querés que muestre las cosas
    //'sourceLanguage'=>'en',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [

      /* 'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
             ],
         ],
    ],

    'assetManager' => [
        'bundles' => [
            'dmstr\web\AdminLteAsset' => [
                'skin' => 'skin-blue',
            ],
        ],
    ],
    */

        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],        */





/*descomentar esto para url limpias
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => true,
            'rules' => [
               // 'product/'   => 'producto/getProducto',
                //'urlformat'      => 'path',
                'contact'        => 'site/contact',
                'login'          => 'site/login',
                'about'          => 'site/about',
                'home'           => 'site/index',
                'gii'            => 'gii',          
            ],
        ],

*/







    /*'urlManager' => [
           'enablePrettyUrl' => true,
           'showScriptName' => false,
           'rules' => [
               '' => 'site/index',
               '<action>'=>'site/<action>',
           ],
       ],*/
  //  ],








   /* 'urlManager' =>[ 
    'class' => 'yii\web\UrlManager', //clase UrlManager
    'showScriptName' => false, //eliminar index.php
    'enablePrettyUrl' => true //urls amigables
    ], */





        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'yk5eMNxPYivNfD5RFKfPzS56puCxOaO2',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
       /* 
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
       */ 
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
  /*  // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];*/

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
