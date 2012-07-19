<?php

class FocusAction extends CommonAction{
    public function _before_index(){
        $this->assignClass();
    }
     public function _before_add(){
        $this->assignClass();
    }

    public function _before_edit(){
        $this->assignClass();
    }
    
}
?>
