<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class AlbumAction extends CommonAction {

    //put your code here
    public function _before_add() {
        $this->assignClass();
    }

    public function _before_edit() {
        $this->assignClass();
    }

    public function photoList() {
        $photo = D('photo');
        $aid = $_GET['aid'];
        $list = $photo->where('album_id=' . $aid)->order('id desc')->select();
        $this->assign('photo', $list);
        $this->display();
    }

    public function addPhoto() {
        $this->display();
    }

    public function editPhoto() {
        $photo = D('photo');
        $id = $_REQUEST [$photo->getPk()];
        $vo = $photo->getById($id);
        $this->assign('vo', $vo);
        $this->display();
    }

    /**
     * 设为封面
     */
    public function setCover() {
        $photo = D('photo');
        $id = $_REQUEST [$photo->getPk()];
        $vo = $photo->find($id);
        $photoPath = $vo['image_path'];

        $album_id = $_GET['aid'];   //相册id
        $album = M('album');
        $list = $album->where('id=' . $album_id)->setField('image_path', $photoPath);
        if ($list !== false) { //保存成功
            $this->assign('jumpUrl', Cookie::get('_currentUrl_'));
            $this->ajaxReturn($list, "设置成功！", 1);
        } else {
            //失败提示
            $this->error('设置失败!');
        }
    }

}

?>
