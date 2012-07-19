<?php

class FocusAction extends CommonAction {

    public function index() {
        $this->getFocus();
        $this->display();
    }

    public function getFocus() {
        import("ORG.Util.Page"); // 导入分页类
        $focus = M('focus');
        $count = $focus->count();
        $page = new Page($count, C('focusCount'));
        $list = $focus->order('id desc')->limit($page->firstRow . ',' . $page->listRows)->select();

        $this->assign('focus', $list);
        $p = $page->show();
        $this->assign('page', $p);
    }

    public function focuslist() {
        $this->display();
    }

    public function focusdetail() {
        $id = $_GET['id'];
        $focus = M('focus');
        $list = $focus->find($id);
        $this->assign('focus', $list);
        $this->display();
    }

}

?>
