<?php
/**
 * Description of OrganAction
 *
 * @author Administrator
 */
class OrganAction extends CommonAction{
     public function _before_add(){
        $this->assignClass();
    }

    public function _before_edit(){
        $this->assignClass();
    }

}
?>
