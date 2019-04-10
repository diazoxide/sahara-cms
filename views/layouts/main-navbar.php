<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

?>

<?php
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

    'options' => [
        'class' => 'navbar-default',
        'id' => 'header_top',
    ],
]);

/*
 * Header social media navigation
 * */
echo Yii::$app->socialmedia->navigation();

echo Nav::widget([
    'encodeLabels' => false,
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => '<i class="fa fa-info-circle"></i> Մեր մասին', 'url' => ['/site/about']],
        ['label' => '<i class="fa fa-address-card"></i> Կապ մեզ հետ', 'url' => ['/site/contact']],
        ['label' => '<i class="fa fa-sign-in"></i> Մուտք', 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest],
        ['label' => '<i class="fa fa-sign-out"></i> Ելք',
            'url' => ['/user/security/logout'],
            'linkOptions' => ['data-method' => 'post'],
            'visible' => !Yii::$app->user->isGuest
        ],
    ],
]);
NavBar::end();
?>

<div class="container hidden-xs" id="logo-container">
    <div class="col-md-3">
        <?= Html::a(Html::img(Yii::$app->website->getLogo('md')), "/", ['id' => 'logo']) ?>
    </div>

    <div class="col-md-9 text-right hidden-xs hidden-sm hidden-md">

        <?php
        $banners = Yii::$app->params['header_banners'];
        $banner = $banners[(rand(0, (count($banners) - 1)))];
        echo Html::a(Html::img($banner['src']), $banner['href']);
        ?>
        <?= Yii::$app->params['banners']['currency'] ?>

    </div>

</div>

<?= diazoxide\blog\widgets\Navigation::widget([
    'options' => [
        'id' => 'header_second'
    ]
]); ?>

