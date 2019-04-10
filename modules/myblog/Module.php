<?php

namespace app\modules\myblog;

use yii\helpers\Html;

class Module extends \diazoxide\blog\Module
{
    public function init()
    {
        parent::init();
//        $this->on(parent::EVENT_AFTER_POST_CONTENT_VIEW, function ($event) {
//            echo Html::beginTag('div', ['class' => 'row']);
//            echo Html::a(
//                Html::img('https://norlur.am/uploads/img/banners/library.gif', ['style' => 'width:100%']),
//                'https://www.facebook.com/libraryyerevan/',
//                ['target' => '_blank']
//            );
//            echo Html::endTag('div');
//        });

    }
}
