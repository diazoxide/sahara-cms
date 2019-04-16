<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 09.04
 * Time: 13:23
 */

namespace app\widgets;

use Yii;
use yii\base\Widget;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

class TopNavigationBar extends Widget
{

    public $items = [];

    public $show_social_icons = true;
    public $show_user_menu_items = true;

    public $options = [
        'class' => 'navbar navbar-default bottom-buffer-0-xs',
        'id' => 'top-navigation-bar',
    ];

    public function init()
    {
        if ($this->show_user_menu_items) {
            $this->items[] = ['label' => '<i class="fa fa-sign-in"></i> ' . Yii::t('app', 'Sign In'), 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest];
            $this->items[] = ['label' => '<i class="fa fa-sign-out"></i> ' . Yii::t('app', 'Sign Out'),
                'url' => ['/user/security/logout'],
                'linkOptions' => ['data-method' => 'post'],
                'visible' => !Yii::$app->user->isGuest
            ];
        }
    }

    /**
     * @throws \Exception
     */
    public function run()
    {
        /*
         *  Header Top Navigation bar
         * Showing logo for mobile
         * */
        NavBar::begin([
            'brandImage' => Yii::$app->website->getLogo('xs'),
            'brandOptions' => [
                'class' => 'visible-xs'
            ],
            'innerContainerOptions' => ['class' => 'container nopadding-sm'],
            'containerOptions' => ['class' => 'nopadding-sm'],

            'options' => $this->options,
        ]);

        /*
         * Header social media navigation
         * */
        if ($this->show_social_icons) {
            echo Yii::$app->socialmedia->navigation();
        }

        echo Nav::widget([
            'encodeLabels' => false,
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $this->items
        ]);

        NavBar::end();
    }

}