<?php

// 新闻模型
class MateModel extends CommonModel {
    public $_auto = array(
        array('status', '1'),
        array('create_time', 'time', self::MODEL_BOTH, 'function'),
    );
}

?>