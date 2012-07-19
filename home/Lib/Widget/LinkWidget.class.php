<?php

/**
 * 友情链接部件
 */
class LinkWidget extends Widget {

    public function render($data) {
        return $this->getflink();
    }

    public function getflink() {
        $flink = M('link');
        $list = $flink->select();
        return $list;
    }

}

?>