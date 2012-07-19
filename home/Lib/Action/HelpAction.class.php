<?php

class HelpAction extends CommonAction {

    public function index() {
        $this->getContactText();
        $this->display();
    }

    public function getContactText(){
        $ht = M('system');
        $list = $ht->getByName('contact');
        $this->assign('contact',$list);
    }

}

?>
