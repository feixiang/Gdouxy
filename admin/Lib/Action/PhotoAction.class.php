<?php

/**
 * 校友风采分类
 *
 * @author Administrator
 */
class PhotoAction extends CommonAction {

    public function _before_add() {
        $this->assignAlbum();
    }

    public function _before_edit() {
        $this->assignAlbum();
    }

    public function update() {
        if (!empty($_FILES)) {
            //如果有文件上传 上传附件
            $savePath = './Public/upload/photo/';
            $orign_image = $_POST['orign_image'];
            //先删除原图
            if (file_exists($savePath.$orign_image)) {
                unlink($savePath.$orign_image);
                unlink($savePath.'thumb_'.$orign_image);

                import("ORG.Net.UploadFile");
                import("ORG.Net.Image");
                $upload = new UploadFile(); // 实例化上传类
                $upload->maxSize = C('uploadSize');
                $upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
                $upload->savePath = $savePath;
                $upload->saveRule = time;
                $upload->thumb = true;
                $upload->thumbMaxWidth = '150';
                $upload->thumbMaxHeight = '100';
                if (!$upload->upload()) {
                    $this->error($upload->getErrorMsg());
                } else {
                    $uploadList = $upload->getUploadFileInfo();
                }
                //保存当前数据对象
                $photo = D('photo');
                $photo->create();
                $photo->image_path = $uploadList[0]['savename'];
                // 更新数据
                $list = $photo->save();
                if (false !== $list) {
                    $this->assign('jumpUrl', Cookie::get('_currentUrl_'));
                    $this->success('编辑成功!');
                } else {
                    $this->error('编辑失败!');
                }
            }else $this->error('文件不存在!');
        }
        $this->forward();
    }

    public function  delete() {
        parent::delete();
        
    }

    public function assignAlbum() {
        $album = M('album');
        $list = $album->select();
        $this->assign('album', $list);
    }

    public function uploadAndSave() {
        if (!empty($_FILES)) {
            //如果有文件上传 上传附件
            $this->_upload();
            //$this->forward();
        }
    }

    // 文件上传
    protected function _upload() {
        $savePath = './Public/upload/photo/';

        import("ORG.Net.UploadFile");
        import("ORG.Net.Image");
        $upload = new UploadFile(); // 实例化上传类
        //设置上传文件大小
        $upload->maxSize = C('uploadSize');
        //设置上传文件类型
        $upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
        //设置附件上传目录
        $upload->savePath = $savePath;
        //设置上传文件规则
        $upload->saveRule = time;
        //设置需要生成缩略图
        $upload->thumb = true; //默认前缀为thumb_
        //设置缩略图最大宽度
        $upload->thumbMaxWidth = '150';
        //设置缩略图最大高度
        $upload->thumbMaxHeight = '100';

//        $upload->thumbRemoveOrigin = true;
        if (!$upload->upload()) {
            //捕获上传异常
            $this->error($upload->getErrorMsg());
        } else {
            //取得成功上传的文件信息
            $uploadList = $upload->getUploadFileInfo();
//            import("@.ORG.Image");
//            //给m_缩略图添加水印, Image::water('原文件名','水印图片地址')
//            Image::water($uploadList[0]['savepath'] . 'm_' . $uploadList[0]['savename'], '../Public/Images/logo2.png');
        }
        //保存当前数据对象
        $photo = M('photo');
        $photo->create();
        $photo->image_path = $uploadList[0]['savename'];
        $list = $photo->add();
        if ($list !== false) {
            $this->success('添加成功！');
        } else {
            $this->error('添加失败!');
        }
    }

}

?>
