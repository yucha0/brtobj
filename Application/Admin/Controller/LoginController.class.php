<?php
/**
 * Created by PhpStorm.
 * User: yuchao
 * Date: 16/5/17
 * Time: 下午3:12
 */
namespace Admin\Controller;

use Think\Controller;
use Think\Model;

class LoginController extends Controller
{
    public function login()
    {
        $this->display();
    }

    public function checkLogin()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result = M('admin')->where("username ='%s' and password = '%s'", $username, $password)->find();
        if ($result) {
            $_SESSION['username'] = $username;
            $this->success('成功', U('Admin/Index/Index'), 0);
//            header(U('Admin/Index/Index'));
        } else {
            $this->error('登录失败');
        }
    }
}