<?php

class NoticeAction extends CommonAction {

    public function index() {
        //公告列表，有id传入则提取相应新闻，否则提取所有新闻
        $notice = D('notice');
        import("ORG.Util.Page"); // 导入分页类

        if(empty ($_GET[id])){
            $count = $notice->count();
            $page = new Page($count,C('pageCount'));
            $list = $notice->relation(true)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        }else {
            $count = $notice->where('class_id='.$_GET[id])->count();
            $page = new Page($count,C('pageCount'));
            $list = $notice->relation(true)->where('class_id='.$_GET[id])->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
            $className = $list[0]['className'];
            $this->assign('className',$className);
        }

        $this->assign('notice', $list);
        $p = $page->show ();
        $this->assign('page',$p);
        $this->display();
    }

    public function getAllNews(){
        
    }


    public function noticedetail(){
        $id = $_GET['id'];
        $notice = M('notice');
       $list = $notice->find($id); 
        $this->assign('i_notice', $list);

        $this->display();
    }


}

?>
