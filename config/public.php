<?php
$config = require __DIR__ . '/common.php';
$config['id']='public';
$config['defaultRoute']='/blog';

//$config['modules']['blog']['enableComments'] = true;
//$config['modules']['blog']['schemaOrg'] =  [ // empty array [] by default!
//    'publisher' => [
//        'logo' => '/img/logo/header.png',
//        'logoWidth' => 191,
//        'logoHeight' => 74,
//        'name' => 'Irakanum.am',
//        'phone' => '+1 800 488 80 85',
//        'address' => 'City, street, house'
//    ]
//];

return $config;

