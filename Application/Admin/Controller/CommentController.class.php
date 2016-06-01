<?php
/**
 * Created by PhpStorm.
 * User: yuchao
 * Date: 16/5/31
 * Time: 下午10:31
 */
namespace Admin\Controller;
use Think\Controller;

class CommentController extends Controller{
    public function allComment(){
        $comment = M('comment');
        $count = $comment->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();
        $list = $comment->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("list",$list);
        $this->assign('page',$show);

        $this->display();
    }
}