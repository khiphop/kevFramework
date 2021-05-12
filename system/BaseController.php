<?php

namespace System;


use System\helper\LogHelper;
use System\helper\ReturnHelper;

class BaseController
{

    /**
     * @var ReturnHelper
     */
    protected $output;
    /**
     * @var LogHelper
     */
    protected $log;


    public function __construct()
    {
        $this->output = new ReturnHelper();
        $this->log = new LogHelper();
    }

}