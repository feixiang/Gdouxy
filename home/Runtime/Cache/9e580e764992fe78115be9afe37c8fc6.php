<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta charset="utf-8" />
        <title>校友查询——广东海洋大学校友网</title>
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
                        <h4 class="list-header"> 当前位置：主页 &gt;&gt;校友查询</h4>
                        <div class="list newsdetail">
                            <!--文章内容-->
                            <h1>校友查询</h1>

                            <div class="content">
                                <!--文章格式由editor生成-->
                                <form action="__URL__/search" method="get" class="font14">
                                    <table border="0">
                                        <tbody>
                                            <tr>
                                                <td>姓名:</td>
                                                <td><input name="keyword" type="text" maxlength="100" style="padding:4px; width: 200px;"/></td>
                                                <td>专业:</td>
                                                <td><input name="keyword" type="text" maxlength="100" style="padding:4px; width: 200px;"/></td>
                                                <td>班级:</td>
                                                <td><input name="keyword" type="text" maxlength="100" style="padding:4px; width: 200px;"/></td>
                                            </tr>
                                            <tr>
                                                <td>入学时间:</td>
                                                <td><input name="keyword" type="text" maxlength="100" style="padding:4px; width: 200px;"/></td>
                                                <td>毕业时间:</td>
                                                <td><input name="keyword" type="text" maxlength="100" style="padding:4px; width: 200px;"/></td>
                                                <td>工作地：</td>
                                                <td><input name="keyword" type="text" maxlength="100" style="padding:4px; width: 200px;"/></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <input name="submit" type="submit" value="查询"  class="search-bt"/>
                                </form>

                            </div>
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
    <!-- layout::Public:social::3600 -->
</body>
</html>