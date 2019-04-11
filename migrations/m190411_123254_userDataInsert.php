<?php

use yii\db\Schema;
use yii\db\Migration;

class m190411_123254_userDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%user}}',
            ["id", "username", "email", "password_hash", "auth_key", "confirmed_at", "unconfirmed_email", "blocked_at", "registration_ip", "created_at", "updated_at", "flags", "last_login_at"],
            [
                [
                    'id' => '1',
                    'username' => 'sahara',
                    'email' => 'admin@sahara.cms',
                    'password_hash' => '$2y$10$FChFcvdIlM/gtnnuxNOLQeqaSJuUgC4tnOFHBSfwST6.bjCi.058y', // password: sahara
                    'auth_key' => 'X2iEkZPTH-sGSBAikmewrAMtY991eQNE',
                    'confirmed_at' => '1',
                    'unconfirmed_email' => null,
                    'blocked_at' => null,
                    'registration_ip' => '1.1.1.1',
                    'created_at' => '0',
                    'updated_at' => '0',
                    'flags' => '0',
                    'last_login_at' => null,
                ],
            ]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%user}} CASCADE');
    }
}
