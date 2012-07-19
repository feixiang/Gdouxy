<?php

class CnewsAction extends CommonAction {

    public function _before_index() {
        $this->assignCunion();
    }

    public function _before_add() {
        $this->assignCunion();
    }

    public function _before_edit() {
        $this->assignCunion();
    }

    public function assignCunion() {
        $cunion = M('cunion');
        $list = $cunion->select();
        $this->assign('cunion', $list);
    }

}

?>
