<?php
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'language' => 'hy', // Set the language here

    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'basePath' => dirname(__DIR__),
    'components' => [

        'i18n' => [
            'translations' => [
                'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'yii' => 'yii.php',
                        //'app/error' => 'error.php',
                    ],

                ],
                'yii2mod.comments' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2mod/comments/messages',
                ],
            ],
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ML30sdxBrUTxtL9y52Jy_2viXiYa-OmR',
        ],
        'opengraph' => [
            'class' => 'app\components\OpenGraph',
        ],
        'cache' => [
//            'class' => 'yii\caching\FileCache',
            'class' => 'yii\caching\ApcCache',

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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'hostInfo' => 'https://new.irakanum.am',
            'rules' => [
                '/category/<slug>' => '/blog/default/archive',
                '/archive' => '/blog/default/archive',
                [
                    'pattern' => '<year:\d{4}>/<month:\d{2}>/<day:\d{2}>/<slug>',
                    'route' => '/blog/default/view',
                    'suffix' => '/'
                ],
                '<year:\d{4}>/<month:\d{2}>/<day:\d{2}>/<slug>' => '/blog/default/view',

            ],
        ],
        'formatter' => [
//            'dateFormat' => 'dd MM Y',
//            'datetimeFormat' => 'php:d F Y H:i:s',
            'decimalSeparator' => '.',
            'thousandSeparator' => ' ',
            'currencyCode' => 'AMD',
        ],
        'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager',
            'defaultRoles' => ['guest'],
        ],
    ],
    'modules' => [
        'social' => [
            // the module class
            'class' => 'kartik\social\Module',

            // the global settings for the disqus widget
            'disqus' => [
                'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // default settings
            ],

            // the global settings for the facebook plugins widget
            'facebook' => [
                'appId' => '440598006382886',
                'app_secret' => '528d7aa278399d3d5719a64b2f137e5e',
            ],

            // the global settings for the google plugins widget
            'google' => [
                'clientId' => 'GOOGLE_API_CLIENT_ID',
                'pageId' => 'GOOGLE_PLUS_PAGE_ID',
                'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
            ],

            // the global settings for the google analytic plugin widget
            'googleAnalytics' => [
                'id' => 'UA-114602186-1',
                'domain' => 'new.irakanum.am',
            ],

            // the global settings for the twitter plugins widget
            'twitter' => [
                'screenName' => 'TWITTER_SCREEN_NAME'
            ],
        ],
        'blog' => [
            'class' => "diazoxide\blog\Module",
            'urlManager' => 'urlManager',// 'urlManager' by default, or maybe you can use own component urlManagerFrontend
            'imgFilePath' => __DIR__ . '/../public/uploads/img/blog/',
            'imgFileUrl' => '/uploads/img/blog/',
            'userModel' => "\app\models\User",
            'userPK' => 'id', //default primary key for {{%user}} table
            'userName' => 'username', //uses in view (may be field `username` or `email` or `login`)
            'addthisId' => "ra-5ab0c5361efd854c",
            'enableShareButtons' => true,
            'blogViewLayout' => '@app/views/layouts/main-with-two-sidebar',
            'blogPostPageCount' => '20',
            'schemaOrg' => [ // empty array [] by default!
                'publisher' => [
                    'logo' => '/img/logo/header.png',
                    'logoWidth' => 200,
                    'logoHeight' => 47,
                    'name' => "Irakanum.am",
                    //'phone' => '+1 800 488 80 85',
                    'address' => 'Baghramyan 4/5'
                ]
            ]
        ],

        'rbac' => 'dektrium\rbac\RbacWebModule',

        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'enableConfirmation' => false,
            'enableRegistration' => false,
            'admins' => ['eyehollow'],
            'modelMap' => [
                'User' => 'app\models\User',
            ],
        ],

        'sliderrevolution' => [
            'class' => 'app\modules\SliderModule\Module',
        ],
    ],
    'params' => $params,
];

return $config;
