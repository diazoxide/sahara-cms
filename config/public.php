<?php
$config = require __DIR__ . '/common.php';
$config['id']='public';
$config['defaultRoute']='/blog';
$config['modules']['blog']['enableComments'] = true;
$config['modules']['blog']['schemaOrg'] =  [ // empty array [] by default!
    'publisher' => [
        'logo' => '/img/logo/header.png',
        'logoWidth' => 191,
        'logoHeight' => 74,
        'name' => 'Irakanum.am',
        'phone' => '+1 800 488 80 85',
        'address' => 'City, street, house'
    ]
];

if (YII_ENV_DEV) {
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
        'allowedIPs' => ["*"],
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

    $config['components']['assetManager']['forceCopy'] = true;

}
return $config;

