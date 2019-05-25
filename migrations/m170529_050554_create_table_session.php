<?php
/**
 * Created by PhpStorm.
 * User: Yordanyan
 * Date: 10.04
 * Time: 22:10
 */

use yii\db\Migration;

class m170529_050554_create_table_session extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%session}}', [
            'id' => $this->char(64)->notNull(),
            'expire' => $this->integer(),
            'data' => $this->binary()
        ], $tableOptions);
        $this->addPrimaryKey('pk-id', '{{%session}}', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%session}}');
    }
}