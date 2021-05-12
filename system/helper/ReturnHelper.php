<?php

namespace System\helper;

class ReturnHelper
{
    public static function echoJson($code = 200, $msg = '', $data = array())
    {
        $final = array(
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        );

        echo json_encode($final, 320);
        exit;
    }
}