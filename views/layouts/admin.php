<?php

use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<img height="25" src="' . Yii::$app->params['logo_white'] . '">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
        'innerContainerOptions' => ['class' => 'container-fluid'],

    ]);
    echo !Yii::$app->user->isGuest ? Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
            ['label' => 'User',
                'items' => [
                    ['label' => 'Profile', 'url' => ['/user/settings/profile']],
                    ['label' => 'Account', 'url' => ['/user/settings/account']],
                    ['label' => 'Networks', 'url' => ['/user/settings/networks']],
                    ['label' => 'Admin', 'url' => ['/user/admin/index'], /*'visible' => Yii::$app->user->can('admin')*/],
                ],
                'visible' => !Yii::$app->user->isGuest,
            ],
            ['label' => 'Posts',
                'items' => \diazoxide\blog\Module::getBlogNavigation(),
                'visible' => Yii::$app->user->can("BLOG_VIEW_POSTS") ||
                    Yii::$app->user->can("BLOG_VIEW_CATEGORIES") ||
                    Yii::$app->user->can("BLOG_VIEW_COMMENTS") ||
                    Yii::$app->user->can("BLOG_VIEW_TAGS")
            ],
        ],
    ]) : "";

    echo Nav::widget([
        'encodeLabels' => false,
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Sign in', 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest],
            ['label' => 'Sign out',
                'url' => ['/user/security/logout'],
                'linkOptions' => ['data-method' => 'post'],
                'visible' => !Yii::$app->user->isGuest
            ],

        ],
    ]);

    NavBar::end();
    ?>

    <div id="main-content">
        <div class="container-fluid">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->params['site_title']; ?> <?= date('Y') ?></p>

        <p class="pull-right">Powered By <?= Yii::$app->params['powered']; ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
