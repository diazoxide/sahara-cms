<?php
$config = require __DIR__ . '/common.php';

$config['id']='admin';
$config['modules']['config']['controllerNamespace'] = 'diazoxide\yii2config\controllers\backend';
//
//$config['modules']['blog']['controllerNamespace'] = 'diazoxide\blog\controllers\backend';

$config['components']['request']['baseUrl'] ='/admin';
$config['components']['urlManager']['scriptUrl'] ='/admin/index.php';

$config['layout']="admin";
$config['defaultRoute']='/blog';


if (YII_ENV_DEV) {

    $config['bootstrap'][] = 'gii';

    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1','*', '::1'],
        'generators' => [
            'migrik' => [
                'class' => \insolita\migrik\gii\StructureGenerator::class,
                'templates' => [
                    'custom' => '@app/gii/templates/migrator_schema',
                ],
            ],
            'migrikdata' => [
                'class' => \insolita\migrik\gii\DataGenerator::class,
                'templates' => [
                    'custom' => '@app/gii/templates/migrator_data',
                ],
            ],
        ],
    ];
}

return $config;