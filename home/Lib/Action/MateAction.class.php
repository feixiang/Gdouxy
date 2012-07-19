<?php

class MateAction extends CommonAction {

    public function index() {
        if (!isset($_SESSION['mate'])) {
            $this->display("signup");
        }else
            $this->display("Index:index");
    }

    public function _before_signup() {
        
    }

    public function login() {
        $this->display();
    }

    public function signup() {
        $mate = M('mate');
        $mate->create();
        if ($mate->add()) {
            $this->assign("jumpUrl", "__APP__");
            $this->success("恭喜您，注册成功，现在将跳转到校友会主页<p>如果您的浏览器没有跳转，请点击<a href='__APP__/home/'>这里进入</a></p>");
            //$this.redirect("__APP__");
            $_SESSION['mate'] = $_POST['name'];
        } else {
            $this->assign("jumpUrl", "__URL__");
            $this->error("对不起，注册失败，" . "错误是" . $mate->getError() . ",可能是当前人数，请稍候再尝试，或联系我们");
        }
    }

    public function getCollege() {
        $college = M('college');
        $list = $college->order('id asc')->select();
        $this->assign('college', $list);
        $this->display();
    }

    public function getDepartment() {
        $college_id = $_GET['college_id'];
        $department = M('department');
        $list = $department->where('college_id =' . $college_id)->select();
        $this->assign('department', $list);
        $this->display();
    }

    public function getMajor() {
        $id = $_GET['id'];
        $major = M('major');
        $list = $major->where('department_id=' . $id)->select();
        $this->assign('major', $list);
        $this->display("getMajor");
    }
}

?>
