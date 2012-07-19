<?php

class ClassAction extends CommonAction {

    public function _before_add() {
        $this->assignArea();
    }

    public function _before_edit() {
        $this->assignArea();
    }

    public function assignArea(){
        $area = M('area');
        $list = $area->select();
        $this->assign('area',$list);
    }

}

?>
