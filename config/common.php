<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'language' => 'hy', // Set the language here

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@public' => '@app/public',
        '@admin' => '@app/admin',
    ],

    'bootstrap' => [
        'log'
    ],

    'basePath' => dirname(__DIR__),

    'components' => [

        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],

        'urlManager' => [
            "class" => yii\web\UrlManager::class,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
//            'hostInfo' => '',
            'rules' => [
            ],
        ],

        'i18n' => [
            'translations' => [
                'yii' => [
                    'class' => yii\i18n\PhpMessageSource::class,
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'yii' => 'yii.php',
                        //'app/error' => 'error.php',
                    ],
                ]
            ],
        ],
        'session' => [
            'class' => yii\web\DbSession::class,
            'db' => 'db',
            'sessionTable' => '{{%session}}',
        ],

        'request' => [
            'cookieValidationKey' => 'ML30sdxBrUTxtL9y52Jy_2viXiYa-OmR',
        ],
        'cache' => [
            'class' => yii\caching\FileCache::class,
//            'class' => yii\caching\ApcCache::class,
        ],

        'user' => [
            'identityClass' => app\models\User::class,
            'loginUrl' => ['user/security/login'],
            'enableAutoLogin' => true,
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'authManager' => [
            'class' => dektrium\rbac\components\DbManager::class,
            'defaultRoles' => ['guest'],
        ],
    ],
    'modules' => [
        'config' => [
            'class' => diazoxide\yii2config\Module::class,
            'app_ids' => [
                'admin' => "Admin",
                'public' => "Public",
            ]
        ],
        'rbac' => dektrium\rbac\RbacWebModule::class,
        'user' => [
            'class' => dektrium\user\Module::class,
            'enableUnconfirmedLogin' => true,
            'enableConfirmation' => false,
            'enableRegistration' => false,
            'admins' => ['sahara', 'eyehollow'],
            'modelMap' => [
                'User' => app\models\User::class,
            ],
        ],

    ],
    'params' => $params,
];


if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.1.1.0', '*'],
    ];
    // configuration adjustments for 'dev' environment
    $config['components']['assetManager']['forceCopy'] = true;
}

return $config;
