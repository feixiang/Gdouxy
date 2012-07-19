<?php

class DepartmentAction extends CommonAction {

    public function _before_add() {
        $this->getCollege();
    }

    public function _before_edit() {
        $this->getCollege();
    }

    public function getCollege() {
        $college = M('college');
        $list = $college->select();
        $this->assign('college', $list);
    }

}

?>
