<?php
/**
 * Created by PhpStorm.
 * User: yuchao
 * Date: 16/5/31
 * Time: 下午9:30
 */
namespace Admin\Controller;

use Think\Controller;

class MessageController extends Controller
{
    public function allMessage()
    {
        $message = M('message');
        $count = $message->count();
        $Page = new \Think\Page($count, 5);
        $show = $Page->show();
        $list = $message->order('id asc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign("list", $list);
        $this->assign('page', $show);
        $this->display();
    }
}