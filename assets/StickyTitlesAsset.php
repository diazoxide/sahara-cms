<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class StickyTitlesAsset extends AssetBundle
{
    public $sourcePath = '@app/assets/src/StickyTitles';
    public $css = [
        'sticky_titles.css',
    ];
    public $js = [
        'sticky_titles.js',
    ];
    public $depends = [
        JqueryAsset::class

    ];
}