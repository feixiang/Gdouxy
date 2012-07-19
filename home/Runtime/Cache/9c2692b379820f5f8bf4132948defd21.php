<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta charset="utf-8" />
        <title><?php echo ($focus['title']); ?>-广东海洋大学校友网</title>
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
                            <h3 class="list-header">当前位置：主页 &gt;&gt; 校友动态 &gt;&gt;<?php echo ($focus['title']); ?></h3>
                            <div class="list newsdetail">
                                <!--文章内容-->
                              
                                <h1><?php echo ($focus['title']); ?></h1>
                                <span> <small>发表时间:</small><?php echo (date("Y-m-d",$focus['create_time'])); ?><small>作者:</small><?php echo ($focus['publicer']); ?> <small>浏览次数:</small><?php echo ($focus['viewCnt']); ?></span>
                                <div class="content">
                                    <!--文章格式由editor生成-->
                                   <?php echo ($focus['content']); ?>
                                </div>
                                </volist>
                                <!--end 文章内容-->
                                <div class="clear"></div>
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
            <!--jia this的js-->
            <!-- layout::Public:social::3600 -->
    </body>
</html>