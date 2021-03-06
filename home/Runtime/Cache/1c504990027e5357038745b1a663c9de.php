<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>精彩图集——广东海洋大学校友网</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link href="../Public/css/main.css" rel="stylesheet" type="text/css" />
        <link href="../Public/css/album.css" rel="stylesheet" type="text/css" />
        <link href="../Public/fancybox/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div id="container">
            <div id="header"></div>
            <!--整个居中的模块-->
            <div id="contentwrap">
                <!--导航条-->
                <!-- layout::Public:nav::100 -->
                <!--整个导航模块结束-->
                <!--内容模块-->
                <div id="content">
                    <h4 class="list-header"> 当前位置：主页 &gt;&gt;<a href="__URL__/">精彩图集</a> &gt;&gt;<?php echo ($albumName); ?></h4>
                    <div class="bluewrap">
                        <!--Photo begin-->
                        <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$photoVo): ++$i;$mod = ($i % 2 )?><div class="album_box margin_r20">
                                <div class="thumb_wrapper"><a rel="p_group" href="__PUBLIC__/upload/photo/<?php echo ($photoVo['image_path']); ?>" title="<?php echo ($photoVo['info']); ?>"><img alt="" src="__PUBLIC__/upload/photo/thumb_<?php echo ($photoVo['image_path']); ?>" /></a> </div>
                                <p><?php echo ($photoVo['info']); ?></p>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--Photo end-->
                        <div class="clear"> </div>
                    </div>
                </div>
                <div class="clear"> </div>
                <!--友情链接模块-->
                <!-- layout::Public:flink::100 -->
                <!--友情链接模块结束-->
            </div>
            <!--内容模块结束-->
        </div>
        <!--footer-->
        <!-- layout::Public:footer::100 -->
        <!--footer结束-->
        <!--jia this的js-->
        <!-- layout::Public:social::3600 -->
        <script type="text/javascript" src="../Public/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
        <script type="text/javascript" src="../Public/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("a[rel=p_group]").fancybox({
                    'titlePosition'	    : 'inside',
                    'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                        return '<span id="fancybox-title-inside">第 ' + (currentIndex + 1) + ' / ' + currentArray.length + '&nbsp;张'+(title.length ? ' &nbsp; ' + title : '') + '</span>';
                    }
                });
            });
        </script>
    </body>
</html>