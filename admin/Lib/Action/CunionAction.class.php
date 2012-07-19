<?php

class CunionAction extends CommonAction {

    public function _before_add() {
        $this->assignClass();
    }

    public function _before_edit() {
       $this->assignClass();
    }

}

?>
