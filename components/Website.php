<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 09.04
 * Time: 13:23
 */

namespace app\components;


use yii\base\Component;

class Website extends Component
{

    public $name;
    public $description;
    public $logo;
    public $data = [];


    public function init()
    {

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
}