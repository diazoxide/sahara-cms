<?php

use diazoxide\blog\widgets\Navigation;

echo Yii::$app->website->template->topNavigationBar;
echo Yii::$app->website->template->brandingBar;
echo Navigation::widget([
    'options' => [
        'id' => 'header_second'
    ]
]);
