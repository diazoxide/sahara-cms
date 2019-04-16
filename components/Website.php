<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 09.04
 * Time: 13:23
 */

namespace app\components;

use Yii;
use yii\base\Component;
use yii\web\View;

class Website extends Component
{

    /*
     * Website name or title
     * */
    public $name;

    /*
     * Primary description field
     * */
    public $description;

    /*
     * Website main logo array
     * */
    public $logo;

    /*
     * Additional space for keeping values
     */
    public $data = [];


    /*
     * Dynamic options
     * For Template component
     * */
    public $template_options = [];

    public function init()
    {

    }

    /**
     * @param View $view
     */
    public function registerJs($view)
    {
        if (isset($this->data['custom_js'])) {
            $view->registerJs($this->data['custom_js']);
        }
    }

    /**
     * @param View $view
     */
    public function registerCss($view)
    {
        if (isset($this->data['custom_css'])) {
            $view->registerCss($this->data['custom_css']);
        }
    }

    /*
     * Registering custom css
     * and js to view */
    public function register()
    {
        $this->registerCss(Yii::$app->view);
        $this->registerJs(Yii::$app->view);
    }


    public function getLogo($type = null)
    {
        if (!is_array($this->logo)) {
            return $this->logo;
        } elseif ($type != null && isset($this->logo[$type])) {
            return $this->logo[$type];
        } else {
            return null;
        }
    }

    public function getData($type = null)
    {
        if (!is_array($this->data)) {
            return $this->data;
        } elseif ($type != null && isset($this->data[$type])) {
            return $this->data[$type];
        } else {
            return null;
        }
    }

    /**
     * @return Template
     */
    public function getTemplate()
    {
        return new Template($this->template_options);
    }

}