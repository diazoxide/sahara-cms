<?php

use yii\db\Schema;
use yii\db\Migration;

class m190411_100928_config_modulesDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%config_modules}}',
                           ["id", "name", "namespace", "is_bootstrap", "bootstrap_namespace", "bootstrap_method", "type", "status", "priority", "created_at", "updated_at"],
                            [
    [
        'id' => '26',
        'name' => 'blog',
        'namespace' => '\\diazoxide\\blog\\Module',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '1',
        'status' => '1',
        'priority' => '5',
        'created_at' => '0',
        'updated_at' => '1554977337',
    ],
    [
        'id' => '29',
        'name' => 'session',
        'namespace' => 'yii\\web\\DbSession',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '2',
        'status' => '1',
        'priority' => '2',
        'created_at' => '0',
        'updated_at' => '2',
    ],
    [
        'id' => '33',
        'name' => 'urlManager',
        'namespace' => 'yii\\web\\UrlManager',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '2',
        'status' => '1',
        'priority' => '0',
        'created_at' => '0',
        'updated_at' => '1554008731',
    ],
    [
        'id' => '36',
        'name' => 'formatter',
        'namespace' => 'yii\\i18n\\Formatter',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '2',
        'status' => '1',
        'priority' => '4',
        'created_at' => '0',
        'updated_at' => '0',
    ],
    [
        'id' => '37',
        'name' => 'request',
        'namespace' => 'yii\\web\\Request',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '2',
        'status' => '1',
        'priority' => '3',
        'created_at' => '1554706194',
        'updated_at' => '1554706274',
    ],
    [
        'id' => '38',
        'name' => 'mailer',
        'namespace' => 'yii\\swiftmailer\\Mailer',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '2',
        'status' => '1',
        'priority' => '1',
        'created_at' => '1554706378',
        'updated_at' => '1554706441',
    ],
    [
        'id' => '40',
        'name' => 'socialmedia',
        'namespace' => 'app\\widgets\\SocialMedia',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '2',
        'status' => '1',
        'priority' => '1',
        'created_at' => '1554725071',
        'updated_at' => '1554814153',
    ],
    [
        'id' => '42',
        'name' => 'contactInfo',
        'namespace' => 'app\\widgets\\ContactInfo',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '2',
        'status' => '1',
        'priority' => '1',
        'created_at' => '1554726517',
        'updated_at' => '1554728193',
    ],
    [
        'id' => '43',
        'name' => 'website',
        'namespace' => 'app\\components\\Website',
        'is_bootstrap' => '0',
        'bootstrap_namespace' => '',
        'bootstrap_method' => '',
        'type' => '2',
        'status' => '1',
        'priority' => '1',
        'created_at' => '1554802015',
        'updated_at' => '1554828051',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%config_modules}} CASCADE');
    }
}
