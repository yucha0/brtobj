<?php
/**
 * Created by PhpStorm.
 * User: yuchao
 * Date: 16/5/31
 * Time: 下午7:51
 */
namespace Admin\Controller;
use Think\Controller;

class TagController extends Controller{
    public function allTag(){
        $tag = M('tag');
        $list = $tag->select();
        $this->assign('list',$list);
        $this->display();
    }
}