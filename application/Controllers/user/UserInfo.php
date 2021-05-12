<?php

namespace Controllers\user;
use System\BaseController;

/**
 *
 */
class UserInfo extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getList()
    {
        $this->output->echoJson(200, 'success', $list);
    }


    public function getOne()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        if (!$id) {
            $this->log->write('id不存在', 'user', true, true);
            $this->output->echoJson(301, 'id不存在');
        }

        $this->output->echoJson(200, 'success', $detail);
    }
}