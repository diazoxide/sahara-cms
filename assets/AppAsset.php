<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class AppAsset extends AssetBundle
{

    public $sourcePath = '@app/assets/src';


    public $css = [
        'css/site.css',
    ];

    public $js = [
        'js/ads.js'
    ];

    public $depends = [
        \yii\web\YiiAsset::class,
        \yii\bootstrap\BootstrapAsset::class,
        FontsAsset::class,
        FacebookLightboxAsset::class,
    ];

}

