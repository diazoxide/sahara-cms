<?php
return [
    'class' => yii\db\Connection::class,
    'dsn' => 'mysql:host=localhost;dbname=MY_DB_NAME',
    'username' => 'MY_DB_USERNAME',
    'password' => 'MY_DB_PASSWORD',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 300,
    'schemaCache' => 'cache',
//
//    'enableQueryCache'=>!YII_DEBUG,
//    'queryCacheDuration'=>3600,
];

