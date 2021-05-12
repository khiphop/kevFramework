<?php

use System\Core;

defined('APP_ENV') || define('APP_ENV', 'dev');

if ( ! function_exists('system_print'))
{
    function system_print($code, $msg)
    {
        $data = array(
            'code' => $code,
            'msg' => $msg,
        );

        echo json_encode($data, 320);
        exit;
    }
}

# 报错等级
switch (APP_ENV)
{
    case 'dev':
    case 'pre':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;
    case 'prod':
        ini_set('display_errors', 0);
        if (version_compare(PHP_VERSION, '5.3', '>='))
        {
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        }
        else
        {
            error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
        }
        break;

    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo '项目环境定义错误';
        exit(1);
}

date_default_timezone_set('Asia/Shanghai');

require 'config.php';
require 'constants.php';

$core = new Core();
$core->run();