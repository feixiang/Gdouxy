<?php

class MajorAction extends CommonAction{
    public function _before_add() {
        $this->getCollege();
    }

    public function _before_edit(){
        $this->getCollege();
        $this->getDepartment();
    }

    public function getCollege(){
        $college = M('college');
        $list = $college->select();
        $this->assign('college',$list);
    }

    public function setDepartment(){
        $department = M('department');
        $list = $department->select();
        $this->assign('department',$list);
    }

    public function getDepartment(){
        $college_id = $_GET['college_id'];
        $department = M('department');
        $list = $department->where('college_id ='.$college_id)->select();
        $this->assign('department',$list);

        $easy=$list[0][name];

        $this->assign('easy',$easy);

        $this->display();
    }
}
?>
