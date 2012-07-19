<?php

class StarAction extends CommonAction {

    public function _before_index(){
        
    }

    public function listMate() {
        $mate = M('mate');
        $list = $mate->order('id desc')->select();
        $this->assign('list', $list);
        $this->display();
    }

    public function details() {
        $uid = $_GET['id'];
        $mate = M('mate');
        $list = $mate->where('id='.$uid)->select();
        $this->assign('list', $list);
        $this->display();
    }

    public function _before_add(){
        $id = $_GET['id'];
        $name = getMateName($id);
        $this->assign('user_id',$id);
        
        $this->assign('name',$name);
    }



}

?>
