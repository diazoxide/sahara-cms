<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class AppAsset extends AssetBundle
{

    public $sourcePath = '@app/assets/src';


    public $css = [
        'css/site.css',
    ];

    public $js = [];

    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        FontsAsset::class,
        FacebookLightboxAsset::class,
    ];

}

