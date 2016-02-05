<?php

namespace Dorm\Controller;
use Think\Controller;

/**
 * 简单的后台管理
 */
class AdminController extends Controller{

    /**
     * 查看留言
     */
    public function index()
    {
        $list = D("Contact")->select();
        $this->assign("list", $list);
        $this->display();
    }
}
