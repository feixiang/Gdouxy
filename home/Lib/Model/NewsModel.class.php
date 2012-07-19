<?php
import('RelationModel');
// 新闻模型
class NewsModel extends RelationModel {

    public $_auto = array(
        array('publicer', 'auto_publicer', self::MODEL_BOTH, 'callback'),
        array('create_time', 'time', self::MODEL_BOTH, 'function'),
    );

    public function auto_publicer() {
        return $_SESSION['loginUserName'];
    }

    protected $_link = array(
        'profile' => array(
            'mapping_type' => BELONGS_TO,
            'class_name' => 'Class',
            'as_fields' => 'id:classId,name:className',
        ),
    );
}

?>