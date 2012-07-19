<?php

/**
 * 公共类
 */
class CommonAction extends Action {

    public function _empty() {
        $this->redirect('Index/index');
    }

    protected function _initialize() {
        $this->getflink();
        $this->getNotice();
        $this->getRecommand();
        $this->getServiceList();
    }

    /**
     *友情链接
     */
    public function getflink() {
        $flink = M('link');
        $list = $flink->select();
        $this->assign('flink', $list);
    }

    /**
     * 公告信息
     */
    public function getNotice() {
        $notice = M('notice');
        $list = $notice->order('id desc')->limit(C('noticeCount'))->select();
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
     * 导航服务荐列表
     */
    public function getServiceList(){
        $service = M('service');
        $list = $service->select();
         $this->assign('serviceNav', $list);
    }

}

?>