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

    <div id="main-content" class="top-buffer-20-md">

        <div class="container nopadding-xs">

            <div class="visible-md visible-lg visible-xl">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div>
            <?= Alert::widget() ?>

            <?= $content ?>

        </div>
    </div>
</div>

<?= $this->render("main-footer") ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
