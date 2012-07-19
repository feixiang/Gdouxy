<?php

/**
 * Description of OrganAction
 *企业联合会机构信息表，如广州校友会企业联合会理事会
 */
class CorganAction extends CommonAction {

    public function _before_add() {
        $this->assignCunion();
    }

    public function _before_edit() {
        $this->assignCunion();
    }

    public function assignCunion() {
        $cunion = M('cunion');
        $list = $cunion->select();
        $this->assign('cunion', $list);
    }

}

?>
