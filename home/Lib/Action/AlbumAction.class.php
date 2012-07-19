<?php

class AlbumAction extends CommonAction {

    public function index() {
        $this->getAllalbum();
        $this->display();
    }

    public function getAllalbum(){
        $album = M('album');
        $list = $album->order('id desc')->select();
        $this->assign('album',$list);
    }

    public function detail(){
        $id = $_GET['id'];
        $photo = M('photo');
        $list = $photo->where('album_id='.$id)->select();

        $album = M('album');
        $alist = $album->where('id='.$id)->select();
        $albumName= $alist[0]['name'];
        $this->assign('albumName',$albumName);

        $this->assign('photo',$list);
        $this->display();
    }

}

?>
