<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class FacebookLightboxAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/src/FacebookLightbox';
    public $js = [
        'script.js',
    ];

    public $depends = [
        JqueryAsset::class
    ];

}