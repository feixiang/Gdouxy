<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>公告列表-广东海洋大学校友网</title>
        <link href="../Public/css/main.css" rel="stylesheet" type="text/css" />
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
                    <!--左侧模块-->
                    <div id="leftbar">
                        <!--左侧公告区及热门展示区-->
                        <!-- layout::Public:leftbar::0 -->
                        <!--左侧公告区结束-->
                    </div>
                    <!--左侧模块结束-->
                    <!--中间模块-->
                    <div id="centerbar">
                        <h3 class="list-header">当前位置：主页 &gt;&gt; 公告列表</h3>
                        <div class="list">
                            <div class="formallist">
                                <ul>
                                    <?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$noticeVo): ++$i;$mod = ($i % 2 )?><li>
                                        <a href="__URL__/noticedetail/id/<?php echo ($noticeVo['id']); ?>"><?php echo ($noticeVo['title']); ?></a>
                                        <span class="timestamp"><?php echo (date('m-d',$noticeVo['create_time'])); ?></span>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <div class="pagination"><?php echo ($page); ?></div>
                                <!-- End .pagination -->
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--中间模块结束-->
                <!--友情链接模块-->
                <!-- layout::Public:flink::100 -->
                <!--友情链接模块结束-->
            </div>
            <!--内容模块结束-->
        </div>
        <!--footer-->
    <!-- layout::Public:footer::100 -->
    <!--footer结束-->

    <!--幻灯片展示的js-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/s3Slider.js"></script>
</body>
</html>