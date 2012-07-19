<?php

class NewsAction extends CommonAction {

    public function index() {
        //新闻列表，有id传入则提取相应新闻，否则提取所有新闻
        $news = D('news');
        import("ORG.Util.Page"); // 导入分页类

        if(empty ($_GET[id])){
            $count = $news->count();
            $page = new Page($count,C('pageCount'));
            $list = $news->relation(true)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        }else {
            $count = $news->where('class_id='.$_GET[id])->count();
            $page = new Page($count,C('pageCount'));
            $list = $news->relation(true)->where('class_id='.$_GET[id])->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
            $className = $list[0]['className'];
            $this->assign('className',$className);
        }

        $this->assign('news', $list);
        $p = $page->show ();
        $this->assign('page',$p);
        $this->display();
    }

    public function getAllNews(){
        
    }


    public function newsdetail(){
        $id = $_GET['id'];
        $news = D('news');
        //浏览次数+1
        $tempCnt = $news->find($id);
        $viewCnt = $tempCnt['viewCnt'];
        $news->where('id='.$id)->setField('viewCnt',$viewCnt+1);
        
        $list = $news->find($id);
        $nextId = $id + 1 ; $foreId = $id - 1 ;
        $nextList = $news->find($nextId);
        $foreList = $news->find($foreId);
          
        $this->assign('news', $list);
        $this->assign('nextNews',$nextList);
        $this->assign('foreNews',$foreList);
        
        $this->display();
    }


}

?>
