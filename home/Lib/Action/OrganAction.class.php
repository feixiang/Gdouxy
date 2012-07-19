<?php

class OrganAction extends CommonAction {

    /**
     * 获取机构的详细信息
     */
    public function index() {
        $name = $_GET['Name']; //获取机构的拼音
        $value = $_GET['value'];
//        echo $value;

        $organ = M('organ');
        $list = $organ->getByPinyin($name);//通过拼音得到具体机构的信息
        $value = $list[$value];
        $this->assign('value',$value);
        $this->assign('organ', $list); //这里显示校友会的资料，如总会简介

        $class_id = $list["class_id"];
        $this->getAllOrgans($class_id);

        $this->display();
    }

    /**
     *获取该校友会所有机构
     * @param <type> $id  校友会id
     */
    public function getAllOrgans($id) {
        $organ = D('organ');
        $list = $organ->where('class_id=' . $id)->select();
        $this->assign('organList', $list);
    }

    /**
     *这里显示校友会各个机构的资料，如理事会
     */
    public function organDts() {
        $name = $_GET['Name']; //获取分会的名称，通过名称找到分会ID
        $organ = M('organ');
        $list = $organ->getByPinyin($name);

        $classid = $list['class_id'];
        $this->getAllOrgans($classid);

        $this->assign('organ', $list);
        $this->display();
    }

}

?>
