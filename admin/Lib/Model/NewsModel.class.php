<?php

// 新闻模型
class NewsModel extends CommonModel {
    public $_auto = array(
        array('publicer', 'auto_publicer', self::MODEL_BOTH, 'callback'),
        array('create_time', 'time', self::MODEL_BOTH, 'function'),
    );

    public function auto_publicer(){
        return $_SESSION['loginUserName'];
    }

}

?>