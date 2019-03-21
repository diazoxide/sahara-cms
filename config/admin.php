<?php
$config = require __DIR__ . '/common.php';

$config['id']='admin';

$config['modules']['blog']['controllerNamespace'] = 'diazoxide\blog\controllers\backend';

$config['components']['request']['baseUrl'] ='/admin';
$config['components']['urlManager']['scriptUrl'] ='/admin/index.php';

$config['layout']="admin";
$config['defaultRoute']='/blog';



if (YII_ENV_DEV) {
    $config['components']['assetManager']['forceCopy'] = true;

    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*', '::1'],
    ];
}

return $config;