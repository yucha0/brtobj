<?php
/**
 * Created by PhpStorm.
 * User: yuchao
 * Date: 16/5/31
 * Time: 下午4:42
 */
namespace Admin\Controller;

use Think\Controller;

class ArticleController extends Controller
{
    public function allArticle()
    {
        $article = M('article');
        $count = $article->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();
        $list = $article->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign("list",$list);
        $this->assign('page',$show);
        $this->display();
    }
    
    public function add(){
        $article = D('article');
        $article->create();

        $res =$article->add();
        if($res){
            $this->show('添加成功');
        }else{
            $this->show('添加失败');
        }
    }
    public function newArticle()
    {
        
        $this->display();
    }
}