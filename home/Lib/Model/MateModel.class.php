<?php

// 用户模型
class MateModel extends Model{
    public $_auto = array(
        array('password', 'pwdHash', self::MODEL_BOTH, 'callback'),
        array('reg_time', 'time', self::MODEL_BOTH, 'function'),
    );

    protected function pwdHash() {
        if (isset($_POST['password'])) {
            return pwdHash($_POST['password']);
        } else {
            return false;
        }
    }

}

?>