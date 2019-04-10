<?php

use yii\helpers\Html;

?>
<footer class="footer">
    <div class="container">
        <div class="col-md-3">
            <div id="fb_like_box">
                <h4>Սեղմիր LIKE և բաժանորդագրվիր</h4>
                <?php Yii::$app->socialmedia->getFacebookPagePlugin() ?>
            </div>
        </div>
        <div class="col-md-3 hidden-xs">
            <h4>Բաժիններ</h4>
            <?= diazoxide\blog\widgets\Navigation::widget([
                'vertical' => true,
                'options' => [
                    'id' => 'footer_categories'
                ]
            ]); ?>
        </div>
        <div class="col-md-3">
            <?php
            Yii::$app->contactInfo;
            ?>
        </div>
        <div class="col-md-3">
            <?= \yii\helpers\Html::img(Yii::$app->website->getLogo('footer')) ?>
            <p class="top-buffer-20"><?= Yii::$app->website->getData('footer_description'); ?></p>
        </div>
    </div>
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->website->name; ?> <?= date('Y') ?></p>
        <p class="pull-right">Powered By <?= Yii::$app->website->getData('powered'); ?></p>
    </div>
</footer>