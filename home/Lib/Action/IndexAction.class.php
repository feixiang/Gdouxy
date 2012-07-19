<?php

class IndexAction extends CommonAction {

    public function index() {
        $this->getNews();
        $this->getFocus();
        $this->getDonate();
        $this->getBless();
//        $status = '';
//        if (is_set($_SESSION['username'])) {
//            $status = '亲爱的校友' . $_SESSION['username'] . '欢迎您的到来';
//        }else
//            $status='您还没有登录，请先登录...';
//        $this->assign('status', $status);

//        $this->buildHtml();
        $this->display();
    }

    public function startPage() {
        $this->display("start");
    }

    /**
     * 主页所有新闻
     */
    public function getNews() {
        $count = C('indexNewsCount');
        $sliderCount = C('sliderCount');
        $news = M('news');
        //总会新闻
        $zonghui = $news->where('class_id=1')->order('id desc')->limit($count)->select();
        $this->assign('zonghui', $zonghui);
        //母校新闻
        $muxiao = $news->where('class_id=5')->order('id desc')->limit($count)->select();
        $this->assign('muxiao', $muxiao);

        //幻灯片展示图片
        $slider = $news->where('is_slide=1')->order('id desc')->limit($sliderCount)->select();
        $this->assign('slider', $slider);

        //精彩推荐
        $hot = $news->order('view_cnt desc')->limit($count)->select();
        $this->assign('hot', $hot);
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
     * 校友之星
     */
    public function getStar() {
        $star = M('star');
        $list = $star->order('id desc')->limit(1)->select();
        $this->assign('star', $list);
    }

    /**
     * 专题
     */
    public function getFocus() {
        $focus = M('focus');
        $list = $focus->order('id desc')->limit(1)->select();
        $this->assign('focus', $list);
    }

    public function tongxun() {
        $tx = M('tongxun');
        $list = $tx->order('id desc')->limit(1)->select();
        $this->assign('list', $list);
        $this->display('tongxun');
    }

    public function verify() {
        $type = isset($_GET['type']) ? $_GET['type'] : 'gif';
        import("@.ORG.Image");
        Image::buildImageVerify(4, 1, $type);
    }

    public function newsList() {
        
    }

}

?>