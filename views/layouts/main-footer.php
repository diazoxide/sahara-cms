<?php
use yii\helpers\Html;
?>
<footer class="footer">
    <div class="container">
        <div class="col-md-3 hidden-xs nopadding">
            <?=

            \yii\bootstrap\Nav::widget([
                'encodeLabels' => false,
                'options' => ['class' => 'navbar-nav navbar-left', 'id' => 'header_top_social','style'=>'font-size:24px'],
                'items' => [
                    ['label' => '<i class="fa fa-facebook-official"></i>', 'url' => Yii::$app->params['social']['facebook']],
                    ['label' => '<i class="fa fa-instagram"></i>', 'url' => Yii::$app->params['social']['instagram']],
                    ['label' => '<i class="fa fa-youtube-square"></i>', 'url' => Yii::$app->params['social']['youtube']],
                    ['label' => '<i class="fa fa-twitter-square"></i>', 'url' => Yii::$app->params['social']['twitter']],
                    ['label' => '<i class="fa fa-skype"></i>', 'url' => Yii::$app->params['social']['skype']],
                ],
            ]); ?>
            <!--<h4>Մենք Ֆեյսբուքում</h4>

            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2&appId=333539393787494&autoLogAppEvents=1';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-page" data-href="https://www.facebook.com/irakanum.am" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/irakanum.am" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/irakanum.am">Irakanum.am</a></blockquote></div>
-->
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
            <h4>Կոնտակտային տվյալներ</h4>
            <?php foreach(Yii::$app->params['footer_info'] as $inf){
                echo Html::tag('p',$inf);
            }?>
        </div>
        <div class="col-md-3">
            <?= \yii\helpers\Html::img(Yii::$app->params['logo_white']) ?>
            <p class="top-buffer-20"><?= Yii::$app->params['site_description']; ?></p>
        </div>
    </div>
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->params['site_title']; ?> <?= date('Y') ?></p>
        <p class="pull-right">Powered By <?= Yii::$app->params['powered']; ?></p>
    </div>
</footer>