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
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class BrandingBar extends Widget
{

    public $options = [
        'tag' => 'div',
        'class' => 'container hidden-xs',
        'id' => 'branding-bar',
    ];

    public $logo_container_option = [
        'tag' => 'div',
        'class' => 'col-md-3',
    ];

    public $logo_options = [
        'id' => 'logo'
    ];

    public function init()
    {

    }

    /**
     * @throws \Exception
     */
    public function run()
    {
        $options = $this->options;
        $tag = ArrayHelper::remove($options, 'tag', 'div');
        echo Html::beginTag($tag, $options);
        $this->renderLogoContainer();
        echo Html::endTag($tag);

    }

    private function renderLogoContainer()
    {
        $options = $this->logo_options;
        $tag = ArrayHelper::remove($options, 'tag', 'div');

        echo Html::beginTag($tag, $options);
        echo Html::a(Html::img(Yii::$app->website->getLogo('md')), "/", $this->logo_options);
        echo Html::endTag($tag);
    }

}