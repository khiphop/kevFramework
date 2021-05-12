<?php

if ('dev' == APP_ENV) {
    return array(
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'gongdan',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix' => ''
    );
}


if ('prod' == APP_ENV) {
    return array(
        'driver' => 'mysql',
        'host' => '192.168.2.69',
        'database' => 'gongdan',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci',
        'prefix' => ''
    );
}