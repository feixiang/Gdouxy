<?php

class TongxunAction extends CommonAction{

    public function index() {
        $this->tlist();
    }

    public function tlist() {
        $tx = M('tongxun');
        $list = $tx->order('id desc')->select();
        $this->assign('tongxun', $list);
        $this->display("list");
    }

    public function tdetail() {
        $id = $_GET['id'];
        $tx = M('tongxun');
        $list = $tx->where('id='.$id)->select();
        $this->assign('tongxun',$list);
        $this->display();
    }

}

?>