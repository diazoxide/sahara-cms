<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 10.04
 * Time: 22:10
 */
use yii\db\Migration;

class m170528_050554_blog_migration extends Migration
{
    /**
     * @return bool|void
     * @throws \yii\base\InvalidRouteException
     * @throws \yii\console\Exception
     */
    public function up()
    {
        Yii::$app->runAction('migrate', ['migrationPath' => '@vendor/diazoxide/yii2-blog/migrations']);

    }

    public function down()
    {

    }
}