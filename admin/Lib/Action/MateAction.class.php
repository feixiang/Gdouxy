<?php

class MateAction extends CommonAction {

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
