<?php


namespace System;

class Core
{
    private $module_name = '';
    private $class_name = '';
    private $method_name = '';

    public function run()
    {
        $this->route();
    }

    public function route()
    {
        $request_info = str_replace('/index.php/', '', $_SERVER['PHP_SELF']);

        # 初始化请求的类和方法
        $this->initClassAndMethod($request_info);

        # application\Controllers\user
        $module_path = CONTROLLER_PATH . (string)($this->module_name);

        if (!file_exists($module_path)) {
            system_print(402, '模块不存在');
        }

        if (!file_exists($module_path . '/' . $this->class_name . '.php')) {
            system_print(402, '类不存在');
        }

        include_once $module_path . '/' . $this->class_name . '.php';

        # 生成控制器类对象
        $class = 'Controllers\\' . $this->module_name . '\\' . $this->class_name;
        $obj_module = new $class();

        if (!method_exists($obj_module, $this->method_name)) {
            system_print(403, '方法不存在');
        }

        if (!is_callable(array($obj_module, $this->method_name))) {
            system_print(404, '方法不可调用');
        }

        # 调用方法
        $method = $this->method_name;
        $obj_module->$method();
    }

    private function initClassAndMethod($request_info = '')
    {
        if (!$request_info) {
            system_print(401, '非法请求');
        }

        if (strpos($request_info, '/') === false) {
            system_print(401, '非法请求');
        }

        $pathList = explode('/', $request_info);
        if (count($pathList) != 3) {
            system_print(408, '非法请求');
        }

        if (!$pathList[0] || !$pathList[1] || !$pathList[2]) {
            system_print(401, '非法请求');
        }

        $this->module_name = $pathList[0];
        $this->class_name = $pathList[1];
        $this->method_name = $pathList[2];
    }
}