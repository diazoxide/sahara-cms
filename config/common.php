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

        'i18n' => [
            'translations' => [
                'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
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
            'class' => 'yii\\web\\DbSession',
            'db' => 'db',
            'sessionTable' => '{{%session}}',
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ML30sdxBrUTxtL9y52Jy_2viXiYa-OmR',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
//            'class' => 'yii\caching\ApcCache',
        ],

        'user' => [
            'identityClass' => app\models\User::class,
            'enableAutoLogin' => true,
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
//
//        'mailer' => [
//            'class' => 'yii\swiftmailer\Mailer',
//            // send all mails to a file by default. You have to set
//            // 'useFileTransport' to false and configure a transport
//            // for the mailer to send real emails.
//            'useFileTransport' => true,
//        ],

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

//        'urlManager' => [
//            "class" => yii\web\UrlManager::class,
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'hostInfo' => 'https://norlur.am',
//            'rules' => [
//            ],
//        ],

//        'formatter' => [
//            'class' => 'yii\i18n\Formatter',
//            'defaultTimeZone' => 'Asia/Yerevan',
//            'timeZone' => 'Asia/Yerevan',
//
//            'decimalSeparator' => '.',
//            'thousandSeparator' => ' ',
//            'currencyCode' => 'AMD',
////            'timeZone' => 'Asia/Yerevan',
//            'dateFormat' => 'php:Y-m-d',
//            'datetimeFormat' => 'php:Y-m-d H:i:s'
//
//        ],

        'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager',
            'defaultRoles' => ['guest'],
        ],
    ],
    'modules' => [
        'config' => [
            'class' => "diazoxide\yii2config\Module",
        ],
        'rbac' => 'dektrium\rbac\RbacWebModule',
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'enableConfirmation' => false,
            'enableRegistration' => false,
            'admins' => ['sahara', 'eyehollow'],
            'modelMap' => [
                'User' => 'app\models\User',
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
        'allowedIPs' => ['185.21.254.227', '*'],
    ];
    // configuration adjustments for 'dev' environment
//    $config['components']['assetManager']['forceCopy'] = true;
}

return $config;
