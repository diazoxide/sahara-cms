<?php

namespace app\assets;

use yii\web\AssetBundle;

class StickySidebarAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower-asset/sticky-sidebar/src';

    public $js = [
        [
            'sticky-sidebar.js',
            'type' => 'module'

        ],
//        [
//            'jquery.sticky-sidebar.js',
////            'type' => 'module'
//
//        ],

    ];
    //public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
//    public $depends = [
//        'yii\web\JqueryAsset',
//    ];

}
