<?php
/**
 * Project: yii2-blog for internal using
 * Author: akiraz2
 * Copyright (c) 2018.
 */
namespace app\modules\blog;
use akiraz2\blog\traits\ModuleTrait;
use yii\base\BootstrapInterface;
use yii\i18n\PhpMessageSource;
/**
 * Blogs module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    use ModuleTrait;
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add module URL rules.
        $app->getUrlManager()->addRules(
            [
                '<_m:blog>/cat/<category_id:\d+>-<slug:[a-zA-Z0-9_-]{1,100}+>' => '<_m>/default/index',
                '<_m:blog>/<id:\d+>-<slug:[a-zA-Z0-9_-]{1,100}+>' => '<_m>/default/view',
                '<_m:blog>' => '<_m>/default/index',
            ]
        );

    }
}