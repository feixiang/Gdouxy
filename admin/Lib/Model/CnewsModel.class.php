<?php

// 企业动态模型
class CnewsModel extends CommonModel {
    public $_auto = array(
        array('publicer', 'auto_publicer', self::MODEL_BOTH, 'callback'),
        array('create_time', 'time', self::MODEL_BOTH, 'function'),
    );

    public function auto_publicer(){
        return $_SESSION['loginUserName'];
    }

}

?>