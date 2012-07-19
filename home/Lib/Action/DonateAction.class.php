<?php

class DonateAction extends CommonAction {

    public function index() {
        $this->getDonateWords();
        $this->display();
    }

    public function getDonateWords() {
        $dw = M('system');
        $list = $dw->getByName('donate');
        $this->assign('dwords',$list);
    }

    public function donateList() {
        import("ORG.Util.Page"); // 导入分页类
        $donate = M('donate');
        $count = $donate->count();
        $page = new Page($count, C('donateCount'));
        $list = $donate->order('level desc')->limit($page->firstRow . ',' . $page->listRows)->select();
        
        $p = $page->show();
        $this->assign('page', $p);
        $this->assign('i_donate',$list);

        $this->display();
    }

}

?>
