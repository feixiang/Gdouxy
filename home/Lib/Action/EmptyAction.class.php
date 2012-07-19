<?php
/**
 * 空模块，找不到模块时系统会定位到空模块
 * 这里定义操作返回主页
 */
class EmptyAction extends Action {

    public function index() {
        $this->redirect('Public/error404');
    }

}

?>
