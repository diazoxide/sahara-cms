<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 08.04
 * Time: 15:24
 */

namespace app\widgets;


use yii\base\Component;
use yii\bootstrap\Nav;
use yii\helpers\Html;

class SocialMedia extends Component
{

    public $options = ['class' => 'navbar-nav navbar-left hidden-xs', 'id' => 'header_top_social'];

    public $networks = [
        'facebook' => [
            'url' => '#',
            'icon' => 'fa fa-facebook-official',
            'appId' => '',
            'page_plugin_options' => [
                'language' => 'en_US',
                'data' => [
                    'small-header' => "false",
                    'adapt-container-width' => "true",
                    'hide-cover' => "false",
                    'show-facepile' => "true"
                ]
            ]
        ],
        'instagram' => [
            'url' => '#',
            'icon' => 'fa fa-instagram',
        ],
        'twitter' => [
            'url' => '#',
            'icon' => 'fa fa-twitter-square',
        ],
        'youtube' => [
            'url' => '#',
            'icon' => 'fa fa-youtube-square'
        ],
        'skype' => [
            'url' => '#',
            'icon' => 'fa fa-skype'
        ]
    ];

    public $icons = [
        'facebook' => 'fa fa-facebook-official',
        'instagram' => 'fa fa-instagram',
        'youtube' => 'fa fa-youtube-square',
        'twitter' => 'fa fa-twitter-square',
        'skype' => 'fa fa-skype',
    ];

    protected $_items;

    public function init()
    {
        foreach ($this->networks as $name => $network) {
            $this->_items[] = ['label' => '<i class="' . $network['icon'] . '"></i>', 'url' => $network['url']];
        }

    }

    /**
     * @return string|void
     * @throws \Exception
     */
    public function navigation()
    {
        echo Nav::widget([
            'encodeLabels' => false,
            'options' => $this->options,
            'items' => $this->_items,
        ]);
    }


    public function getFacebookPagePlugin()
    {
        echo Html::tag('div', null, ['id' => "fb-root"]);
        $app_id = $this->networks['facebook']['appId'];
        $url = $this->networks['facebook']['url'];
        $language = $this->networks['facebook']['page_plugin_options']['language'];
        $data = $this->networks['facebook']['page_plugin_options']['data'];
        $data['href'] = $url;

        echo '<script async defer crossorigin="anonymous" src="https://connect.facebook.net/' . $language . '/sdk.js#xfbml=1&version=v3.2&appId=' . $app_id . '&autoLogAppEvents=1"></script>';
        echo Html::tag('div', null, [
            'class' => 'fb-page',
            'data' => $data
        ]);
//        echo '<div class="fb-page" data-href="https://www.facebook.com/norlur.analysis/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">';
    }
}