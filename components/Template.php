<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 09.04
 * Time: 13:23
 */

namespace app\components;

use app\widgets\BrandingBar;
use app\widgets\TopNavigationBar;
use yii\base\Component;

class Template extends Component
{

    public $top_navigation_bar_options = [];

    public $branding_bar_options = [];

    public function init()
    {
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getTopNavigationBar()
    {
        return TopNavigationBar::widget($this->top_navigation_bar_options);
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getBrandingBar()
    {
        return BrandingBar::widget($this->branding_bar_options);
    }

}