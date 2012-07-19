<?php

class PublicAction extends Action {

    public function verify() {
        $type = isset($_GET['type']) ? $_GET['type'] : 'gif';
        import("@.ORG.Image");
        Image::buildImageVerify(4, 1, $type);
    }

    public function checkLogin() {
        if (!isset($_SESSION['username'])) {
            
        }
    }

    public function login() {
        if (empty($_POST['username'])) {
            $this->error('帐号错误！');
        } elseif (empty($_POST['password'])) {
            $this->error('密码必须！');
        } elseif (empty($_POST['verify'])) {
            $this->error('验证码必须！');
        }
        if ($_SESSION['verify'] != md5($_POST['verify'])) {
            $this->error('验证码错误！');
        }

        $mate = M('mate');
        $list = $mate->where('name="' . $_POST['username'].'"')->select();
        $name = $list[0]['name'];
        echo "<alert>".$name."</alert>";
        $password = $list[0]['password'];
        if (empty($name)) {
            $this->error('不存在的用户');
        } else if ($_POST['password'] != $password)
            $this->error('密码错误');
        else {
            $_SESSION['username'] = $name ;
            $this->assign("jumpUrl","__APP__/Index/");
            $this->assign('name',$name);
            $this->success("登录成功，现在将跳转到主页");
        }
    }

    public function logout()
    {
        if(isset($_SESSION['username'])) {
            unset($_SESSION['username']);
            unset($_SESSION);
            session_destroy();
            $this->assign("jumpUrl", __URL__ . '__APP__/');
            $this->success('登出成功！');
        }else {
            $this->error('已经登出！');
        }
    }

    public function error404(){
        $this->display('404');
    }

}

?>