<?php

require '../vendor/autoload.php';

$app = new Maleeby\MRest\MRest([
    'appDir' => '../app',
    'contentType' => 'Json',
    'defaultRouteClass' => 'Index',
    'databases' => [
        'main' => [
            'driver' => 'mysql',
            'dbhost' => '127.0.0.1',
            'dbuser' => 'dev',
            'dbpass' => 'qweasd',
            'dbname' => 'mycooldb',
            'pdoOptions' => [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
            ]
        ],
    ]
]);

$app->run();