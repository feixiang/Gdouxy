<?php

class SearchAction extends CommonAction {

    public function index() {
        $this->display();
    }

    public function search() {
        $mate = M('mate');

        $condition = $_GET['condition'];
        $keyword = $_GET['keyword'];

        import("ORG.Util.Page"); // 导入分页类
        $count = $mate->where($condition . ' like ' . '"%' . $keyword . '%"')->count();
        $page = new Page($count, C('searchCount'));

        $list = $mate->where($condition . ' like ' . '"%' . $keyword . '%"')->limit($page->firstRow . ',' . $page->listRows)->select();
        //echo($mate->getLastSql());
        $p = $page->show();
        $this->assign('page', $p);
        $this->assign('rs', $list);

        $this->display('s_result');
    }

    public function searchNews() {
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $news = M('news');
            $condition = 'title like ' . '"%' . $keyword . '%"';
            import("ORG.Util.Page"); // 导入分页类
            $count = $news->where($condition)->count();
            $page = new Page($count, C('searchCount'));

            $list = $news->where($condition)->limit($page->firstRow . ',' . $page->listRows)->select();
            $class_id = $list[0]['class_id'];
            $class = M('class');
            $classDt = $class->find($class_id);
            $this->assign('classDt', $classDt);

            $p = $page->show();
            $this->assign('page', $p);
            $this->assign('rs', $list);
            $this->assign('keyword', $keyword);
            $this->display('n_result');
        }else
            $this->redirect ('News/Index');

        
    }

}

?>
