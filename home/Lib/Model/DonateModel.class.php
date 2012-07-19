<?php

// 节点模型
class DonateModel extends CommonModel {

    public $_auto = array(
        array('create_time', 'time', self::MODEL_BOTH, 'function'),
    );

}

?>