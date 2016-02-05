<?php
/**
 * 所属项目 110.
 * 开发者: 陈一枭
 * 创建日期: 2014-11-18
 * 创建时间: 10:14
 * 版权所有 想天软件工作室(www.ourstu.com)
 */

return array(
    //模块名
    'name' => 'Dorm',
    //别名
    'alias' => '多木创艺',
    //版本号
    'version' => '2.0.0',
    //是否商业模块,1是，0，否
    'is_com' => 0,
    //是否显示在导航栏内？  1是，0否
    'show_nav' => 1,
    //模块描述
    'summary' => '多木创艺模块，主要用于展示网站内容',
    //开发者
    'developer' => '北京猎梦科技有限公司',
    //开发者网站
    'website' => 'http://www.huntdreams.com',
    //前台入口，可用U函数
    'entry' => 'Dorm/Index/index',

    'admin_entry' => 'Admin/Dorm/index',

    'icon'=>'home',

    'can_uninstall' => 1

);