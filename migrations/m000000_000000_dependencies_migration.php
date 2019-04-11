<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 10.04
 * Time: 22:10
 */
use yii\db\Migration;

class m000000_000000_dependencies_migration extends Migration
{
    /**
     * @return bool|void
     * @throws \yii\base\InvalidRouteException
     * @throws \yii\console\Exception
     */
    public function up()
    {
        Yii::$app->runAction('migrate', ['migrationPath' => '@vendor/dektrium/yii2-user/migrations']);
        Yii::$app->runAction('migrate', ['migrationPath' => '@yii/rbac/migrations']);
        Yii::$app->runAction('migrate', ['migrationPath' => '@vendor/diazoxide/yii2-blog/migrations']);
        Yii::$app->runAction('migrate', ['migrationPath' => '@vendor/diazoxide/yii2-config/migrations']);
    }

    public function down()
    {

    }
}