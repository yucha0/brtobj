<?php
/**
 * Created by PhpStorm.
 * User: yuchao
 * Date: 16/5/31
 * Time: 下午6:31
 */
namespace Admin\Controller;

use Think\Controller;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $category = M('category');
        $list = $category->select();
//        var_dump($list);
        $this->assign('list', $list);
        $this->display();
    }

    public function modify()
    {

    }

    public function delete($id)
    {
        $category = M('category');
        $result = $category->where('id=' . $id)->delete();
        if ($result) {
            $this->success('成功');
        } else {

        }
    }

    public function add()
    {
        $category = M('category');
        $result = $category->add($category->create());
        if ($result) {
            $this->success('成功');
            header('location:http://localhost/brtobj/index.php/Admin/category/allcategory');
        } else {
            $this->error('失败');
        }
    }

    public function newCategory($id = null)
    {
        if (is_numeric($id)) {
            $category = M('category');
            $list = $category->where('id=' . $id)->select();
            $this->assign('list', $list);
        }
        $this->display();
    }
}