<?php

define('ROOT_PATH', __DIR__ . '/../');
define('APP_PATH', ROOT_PATH . 'application/');
define('CONTROLLER_PATH', APP_PATH . 'Controllers/');
define('CONFIG_PATH', ROOT_PATH . 'config/');

require_once CONFIG_PATH . '/environment.php';

require_once ROOT_PATH . 'vendor/autoload.php';

require_once CONFIG_PATH . '/init.php';