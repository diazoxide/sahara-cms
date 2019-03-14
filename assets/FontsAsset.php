<?php

namespace app\assets;

use yii\web\AssetBundle;

class FontsAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/src';
    public $css = [
        'fonts/init.css',
    ];
}