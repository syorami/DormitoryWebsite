<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Dorm\Controller;

use Think\Controller;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends Controller
{

    /**
     * 系统首页
     */
    public function index()
    {
        $this->display();
    }

    /**
     * 多木设计
     */
    public function design()
    {
        $this->display();
    }

    /**
     * 多木视觉
     */
    public function vision()
    {
        $this->display();
    }

    /**
     * 多木优品
     */
    public function goods()
    {
        $this->display();
    }

    /**
     * 我
     */
    public function user()
    {
        $this->display();
    }

    /**
     * 关于
     */
    public function about()
    {
        $this->display();
    }

    /**
     * 联系我们
     */
    public function contact()
    {
        if(IS_POST)
        {
            $data = array();
            $name = $data["name"] = I('post.name', '', 'trim');
            $address = $data["address"] = I('post.address', '', 'trim');
            $phone = $data["phone"] = I('post.phone', '', 'trim');
            $message = $data["message"] = I('post.message', '', 'trim');
            $data["created_at"] = time();

            if(empty($name) || empty($address) || empty($phone) || empty($message))
                $this->error("您提交的信息不齐全哟");
            else{
                if(D("Contact")->add($data))
                    $this->success("提交成功");
            }
        }else{
            $this->error("页面不存在");
        }
    }

    /**
     * 多木设计 - 运动
     */
    public function buy_yd()
    {
        $this->display();
    }

    /**
     * 多木设计 - 动漫
     */
    public function buy_dm()
    {
        $this->display();
    }

    /**
     * 多木设计 - 音乐
     */
    public function buy_yy()
    {
        $this->display();
    }

    /**
     * 多木设计 - 影视
     */
    public function buy_ys()
    {
        $this->display();
    }

    /**
     * 多木设计 - 个性定制
     */
    public function buy_diy()
    {
        $this->display();
    }

    /**
     * 多木视觉 - 集体照
     */
    public function buy_jtz()
    {
        $this->display();
    }

    /**
     * 多木视觉 - 个人写真
     */
    public function buy_grxz()
    {
        $this->display();
    }

    /**
     * 多木视觉 - 情侣照
     */
    public function buy_qlz()
    {
        $this->display();
    }

    /**
     * 多木视觉 - LOGO设计
     */
    public function buy_logosj()
    {
        $this->display();
    }

    /**
     * 多木视觉 - 文化衫设计
     */
    public function buy_whssj()
    {
        $this->display();
    }

    /**
     * 多木优品 - 开门神器
     */
    public function buy_kmsq()
    {
        $this->display();
    }

    /**
     * 多木优品 - 牛皮海报
     */
    public function buy_nphb()
    {
        $this->display();
    }

    /**
     * 多木优品 - 动漫抱枕
     */
    public function buy_dmbz()
    {
        $this->display();
    }

    /**
     * 多木优品 - 收纳助手
     */
    public function buy_snzs()
    {
        $this->display();
    }

    /**
     * 多木优品 - 桌面置物架
     */
    public function buy_zmzwj()
    {
        $this->display();
    }

    /**
     * 多木优品 - 明信片夹
     */
    public function buy_mxpj()
    {
        $this->display();
    }

    protected function _initialize()
    {

        /*读取站点配置*/
        $config = api('Config/lists');
        C($config); //添加配置

        if (!C('WEB_SITE_CLOSE')) {
            $this->error('站点已经关闭，请稍后访问~');
        }
    }

}