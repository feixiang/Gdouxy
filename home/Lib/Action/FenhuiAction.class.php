<?php

class FenhuiAction extends Action {

    public function index() {
        $name = $_GET['Name']; //获取分会的名称，通过名称找到分会ID
        $_SESSION['fenhui'] = $name;
        $class = M('class');
        $list = $class->getByPinyin($name);
        $id = $list["id"];
        $_SESSION['fenhuiId'] =  $id ;
        $fenhuiName = $list["name"];
        $_SESSION['fenhuiName'] =  $fenhuiName ;
        $fenhuiHeader = $list['banner'];
        
        $this->assign('banner', $fenhuiHeader);
        $this->assign('fenhuiName', $fenhuiName);

        $this->getNews($id);
        $this->getFocus($id);
        $this->getDonate();
        $this->getBless();
        $this->getNotice();
        $this->getRecommand();
        $this->getflink();

        $this->display();
    }

    public function fenhuiList() {
        $class = M('class');
        //广东地区 id = 2 ;
        $gdlist = $class->where('area_id = 2')->select();
        $this->assign("gdlist", $gdlist);
        //广西地区 id = 3 ;
        $gxlist = $class->where('area_id = 3')->select();
        $this->assign("gxlist", $gxlist);
        //香港地区 id = 4 ;
        $hklist = $class->where('area_id = 4')->select();
        $this->assign("hklist", $hklist);

        $this->display();
    }

    /**
     * 分会所有新闻
     */
    public function getNews($id) {
        $count = C('indexNewsCount');
        $sliderCount = C('sliderCount');
        $news = M('news');
        //分会新闻
        $fenhui = $news->where('class_id=' . $id)->order('id desc')->limit($count)->select();
        $this->assign('fenhui', $fenhui);
        //总会新闻
        $zonghui = $news->where('class_id=1')->order('id desc')->limit($count)->select();
        $this->assign('zonghui', $zonghui);

        //幻灯片展示图片
        $slider = $news->where('is_slide=1 and class_id=' . $id)->order('id desc')->limit($sliderCount)->select();
        $this->assign('slider', $slider);

        //精彩推荐
        $hot = $news->order('view_cnt desc')->limit($count)->select();
        $this->assign('hot', $hot);
    }

    /**
     * 专题
     */
    public function getFocus($id) {
        $focus = M('focus');
        $list = $focus->where('class_id=' . $id)->order('id desc')->limit(1)->select();
        $this->assign('focus', $list);
    }

    /**
     * 校友祝福
     */
    public function getBless() {
        $bless = M('bless');
        $list = $bless->limit(C('blessCount'))->select();
        $this->assign('bless', $list);
    }

    /**
     * 校友捐赠信息
     */
    public function getDonate() {
        $donate = M('donate');
        $list = $donate->order('level desc')->limit(C('blessdonateCount'))->select();
        $this->assign('donate', $list);
    }

    /**
     * 公告信息
     */
    public function getNotice() {
        $notice = M('notice');
        $list = $notice->where('class_id='.$_SESSION['fenhuiId'])->order('id desc')->limit(C('noticeCount'))->select();
        $this->assign('lnotice', $list);
    }

    /**
     * 精彩推荐
     */
    public function getRecommand() {
        $news = M('news');
        $list = $news->order('viewCnt desc')->limit(C('recommandCount'))->select();
        $this->assign('recommand', $list);
    }

    /**
     *友情链接
     */
    public function getflink() {
        $flink = M('link');
        $list = $flink->select();
        $this->assign('flink', $list);
    }

}

?>
