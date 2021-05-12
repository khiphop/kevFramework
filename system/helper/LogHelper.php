<?php

namespace System\helper;

class LogHelper
{
    public function __construct()
    {
        defined('REQUEST_UNIQUE_ID') || define('REQUEST_UNIQUE_ID', uniqid());
    }

    public static function write($info, $dir = 'default', $notJson = true, $logRequest = false)
    {
        $basePath = ROOT_PATH . 'logs/' . $dir . '/';
        if (!is_dir($basePath)) {
            mkdir($basePath, 0777, true);
        }

        $notJson or $info = json_encode($info, 320);

        $txt = '[' . date('H:i:s') . '] ' . $info;

        if ($logRequest) $txt .= '|Request: ' . json_encode($_POST, 320);

        $txt = 'RID:[' . @REQUEST_UNIQUE_ID . ']|' . $txt . "\n";

        file_put_contents($basePath . date('Ymd') . '.log', $txt, FILE_APPEND);
    }
}
