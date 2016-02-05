<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Controller;

use Admin\Builder\AdminListBuilder;
use Admin\Builder\AdminConfigBuilder;

class DormController extends AdminController
{

    public function index()
    {
        $r = 20;
        $model = D("Contact");
        $list = $model->order('id desc')->page(1, $r)->select();
        unset($li);
        $totalCount = $model->count();

        //显示页面
        $builder = new AdminListBuilder();
        $builder->title('留言管理')
            ->keyId()
            ->keyText('name','姓名')->keyText('address','地址')->keyText('phone','手机号')->keyText('message','内容')
            ->keyText('created_at','创建时间')
            ->data($list)
            ->pagination($totalCount, $r)
            ->display();
    }
}
