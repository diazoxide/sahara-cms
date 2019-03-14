<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<?= $this->render("main-header") ?>

<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?= $this->render("main-navbar") ?>

    <div id="main-content">

        <div class="container">

            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

            <?= Alert::widget() ?>

            <div class="col-sm-8"><?= $content ?></div>
            <div class="col-sm-4"><?= $this->render("main-right-sidebar") ?></div>

        </div>
    </div>
</div>

<?= $this->render("main-footer") ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
