<?php
$config = require __DIR__ . '/common.php';
$config['id']='public';
$config['defaultRoute']='/blog';

$config['components']['request']['baseUrl'] ='/';
$config['components']['urlManager']['baseUrl'] ='/';


return $config;

