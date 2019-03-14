<?php

namespace app\controllers;

use app\modules\blog\models\BlogPost;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\imagine\Image;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

//    https://new.irakanum.am/site/localize-images?n=0&l=100
    public function actionLocalizeImages($n, $l)
    {
        $offset = $n * $l;
        $posts = BlogPost::find()->orderBy(['id' => SORT_DESC])->limit($l)->offset($offset)->all();

        foreach ($posts as $key => $post) {
            $id = $post->id;
            $content = isset($post->content) ? $post->content : null;
            echo $key.'--'.$id . "--";
            if ($content) {
                $final = preg_replace_callback(
                    '/\<img.*\ src="(.[^"]+)\"/i',
                    function ($m) {
                        $url = $m[1];
                        $extPattern = '/\.([A-Za-z0-9]+)$/i';
                        $name = md5($url);
                        preg_match($extPattern, $url, $matches, PREG_OFFSET_CAPTURE, 0);

                        $ext = isset($matches[0][0]) ? $matches[0][0] : false;

                        if (!$ext) {
                            return $url;
                        };

                        $localUrl = "/img/blog/upload/1/$name$ext";
                        $path = \Yii::getAlias('@webroot') . $localUrl;

                        //echo $path;

                        if (!file_exists($path)) {
                            try {
                                file_put_contents($path, fopen($url, 'r'));
                                //echo "<img src='$localUrl' width='50' height='50'>";
                                echo "--Done";
                                $url = $localUrl;
                            } catch (\Exception $exception) {
                                echo "--Fail";
                            }
                        } else {
                            echo "--Exists";
                            $url = $localUrl;
                        }

                        return '<img src="' . $url . '"';
                    },
                    $content);
                $post->content = $final;

                if($post->save()){
                    echo "--Saved";
                } else{
                    echo "--Not Saved";
                }

                echo "<br>";

            }
        }
    }

    public function actionPath(){
        echo \Yii::getAlias('@public');
    }

    public function actionDownload($n,$l=10)
    {
        $offset = $n * $l;

        $posts = BlogPost::find()->orderBy(['id' => SORT_DESC])->limit($l)->offset($offset)->asArray()->all();
        foreach ($posts as $key => $post) {
            $id = $post['id'];
            $url = isset($post['banner']) ? $post['banner'] : null;
            if ($url) {
                $url = str_replace("https://", "http://", $url);
                $path = \Yii::getAlias('@webroot') . "/img/blog/blogPost/$id.jpg";
                echo $path . '<br>';
                try {
                    file_put_contents($path, fopen($url, 'r'));
                } catch (\Exception $exception) {

                }
            }
        }
    }

    public function actionThumb($n,$l=10)
    {
        $offset = $n * $l;
        $posts = BlogPost::find()->orderBy(['id' => SORT_DESC])->limit($l)->offset($offset)->all();
        foreach ($posts as $key => $post) {
            $post->createThumbs();
        }
    }

    public function actionExcerpt($n)
    {

        foreach ($posts as $key => $post) {
            $content = strip_tags($post->content);
            $content = trim($content);

            $excerpt = yii\helpers\StringHelper::truncate($content, 200, "");
            $post->brief = $excerpt;
            if ($post->save()) {
                echo $post->id . "<br>";
            }
        }
    }

    public function actionClearCache()
    {
        Yii::$app->cache->flush();
    }
}
