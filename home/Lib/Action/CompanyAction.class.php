<?php

class CompanyAction extends CommonAction {

    public function index() {
        $this->getSlideCompany();
        $this->getLogos();
        $this->display();
    }

    public function getSlideCompany(){
        $company = M('company');
        $list = $company->where('is_slide=1')->limit(3)->select();
        $this->assign('slide',$list);
    }

    public function getLogos(){
        $company = M('company');
        $list = $company->order('level desc')->limit(20)->select();
        $this->assign('logo',$list);
    }

    public function clist() {
        $company = M('company');
        import("ORG.Util.Page"); // 导入分页类
        $count = $company->count();
        $page = new Page($count, C('pageCount'));
        $list = $company->where('status=1')->order("level desc")->limit($page->firstRow . ',' . $page->listRows)->select();
        $this->assign('company', $list);
        $p = $page->show();
        $this->assign('page', $p);
        $this->display();
    }

    public function cdetail() {
        $id = $_GET['id'];
        $company = M('company');
        $list = $company->where('id=' . $id)->select();
        $this->assign('company', $list);
        $this->display();
    }

    public function newslist(){
        $news = D('news');
        import("ORG.Util.Page"); // 导入分页类
        $count = $news->where('class_id=2')->count();
        $page = new Page($count,C('pageCount'));
        $list = $news->relation(true)->where('class_id=2')->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('news', $list);
        $p = $page->show ();
        $this->assign('page',$p);
        $this->display();
    }

     public function newsdetail(){
        $id = $_GET['id'];
        $news = D('news');
        //浏览次数+1
        $tempCnt = $news->where('id='.$id)->select();
        $viewCnt = $tempCnt[0]['viewCnt'];
        $news->where('id='.$id)->setField('viewCnt',$viewCnt+1);

        $list = $news->where('id='.$id)->select();
        $nextId = $id + 1 ; $foreId = $id - 1 ;
        $nextList = $news->where('id='.$nextId)->select();
        $foreList = $news->where('id='.$foreId)->select();

        $this->assign('news', $list);
        $this->assign('nextNews',$nextList);
        $this->assign('foreNews',$foreList);

        $title = $list[0]["title"];
        $this->assign("newstitle",$title);

        $keyword = $list[0]["keyword"];
        $this->assign("newskeyword",$keyword);
        $this->display();
    }

}

?>
