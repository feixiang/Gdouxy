<?php

class CompanyAction extends CommonAction {

    public function _before_add() {
        $this->setLevel();
    }

    public function _before_edit() {
        $this->setLevel();
    }

    public function setLevel() {
        $level = array();
        for ($i = 10; $i > 0; $i--) {
            $level[] = $i;
        }
        $this->assign('level', $level);
    }

}

?>
