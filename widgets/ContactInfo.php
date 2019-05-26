<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 08.04
 * Time: 15:24
 */

namespace app\widgets;

use yii\base\Component;
use yii\base\Widget;
use yii\bootstrap\Nav;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class ContactInfo extends Widget
{

    public $options = ['tag' => 'div', 'class' => 'ContactInfo'];
    public $row_options = ['tag' => 'p'];
    public $title_options = ['tag' => 'h4'];
    public $title = "Contact Info";

    public $info = [
        'Mobile' => [
            'icon' => 'fa fa-mobile',
            'value' => ''
        ],
        'Telephone' => [
            'icon' => 'fa  fa-phone-square',
            'value' => ''
        ],
        'Address' => [
            'icon' => 'fa fa-map-marker',
            'value' => ''
        ],
        'City' => [
            'icon' => 'fa fa-map-o',
            'value' => ''
        ],
        'Country' => [
            'icon' => 'fa fa-map-o',
            'value' => ''
        ],
    ];

    /**
     * Get widget
     * @return string
     */
    public function getWidget()
    {
        $html = "";
        $options = $this->options;
        $tag = ArrayHelper::remove($options, 'tag', 'div');

        $html .= Html::beginTag($tag, $options);

        $title_options = $this->title_options;
        $title_tag = ArrayHelper::remove($title_options, 'tag', 'h4');
        $html .= Html::tag($title_tag, $this->title, $title_options);

        foreach ($this->info as $label => $row) {

            $icon = isset($row['icon']) ? $row['icon'] : null;
            $value = isset($row['value']) ? $row['value'] : null;

            $row_options = $this->row_options;
            $row_tag = ArrayHelper::remove($row_options, 'tag', 'div');

            $html .= Html::tag($row_tag, '<i class="' . $icon . '"></i> ' . $label . ' : ' . $value);

        }

        $html .= Html::endTag($tag);

        return $html;
    }

}