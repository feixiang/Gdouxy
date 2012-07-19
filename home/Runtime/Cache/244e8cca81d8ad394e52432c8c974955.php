<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>校友捐赠——广东海洋大学校友网</title>
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

                    <!--中间模块-->
                    <div class="bluewrap">
                        <h4 class="list-header"> 当前位置：主页 &gt;&gt;校友捐赠</h4>
                        <div class="list newsdetail">
                            <!--文章内容-->
                            <h1><?php echo ($dwords['title']); ?></h1>
                            <div class="content">
                                <!--文章格式由editor生成-->
                                <?php echo ($dwords['value']); ?>
                            </div>

                            <h1><a href="__URL__/donateList/">查看所有捐赠</a></h1>
                            <!--end 文章内容-->
                            <div class="clear"> </div>
                        </div>
                    </div>
                    <!--中间模块结束-->
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
        <!-- layout::Public:social::0 -->
    </body>
</html>