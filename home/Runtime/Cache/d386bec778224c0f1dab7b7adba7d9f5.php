<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta charset="utf-8" />
        <title>校友查询结果——广东海洋大学校友网</title>
        <link href="../Public/css/main.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            td{
                
                padding:2px 0;
            }
            table{
                border:1px solid #eceaea;
                text-align:center;
            }
            .odd {
                background-color: #f4f4f4; /* pale yellow for odd rows */
            }
            .even {
                background-color: #fbfbfb; /* pale blue for even rows */
            }
        </style>

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
                        <h4 class="list-header"> 当前位置：<a href="__APP__/Index/">主页</a> &gt;&gt;<a href="__URL__/Index/">校友查询</a>&gt;&gt;查询结果</h4>
                        <div class="list newsdetail">
                            <!--文章内容-->
                            <div class="content">
                                <table width="100%" cellspacing="0">
                                    <tr>
                                        <th width="40">序号</th>
                                        <th scope="col">姓名</th>
                                        <th scope="col">班级</th>
                                        <th scope="col">专业</th>
                                        <th scope="col">入学时间</th>
                                        <th scope="col">毕业时间</th>
                                    </tr>

                                    <?php if(is_array($rs)): $i = 0; $__LIST__ = $rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rsVo): ++$i;$mod = ($i % 2 )?><tr>
                                            <td><?php echo ($i); ?></td>
                                            <td><?php echo ($rsVo['name']); ?></td>
                                            <td><?php echo ($rsVo['major']); ?></td>
                                            <td><?php echo ($rsVo['class']); ?></td>
                                            <td><?php echo ($rsVo['ent_time']); ?></td>
                                            <td><?php echo ($rsVo['gra_time']); ?></td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </table>
                            </div>
                            <!--end 文章内容-->

                            <div class="pagination"><?php echo ($page); ?></div>
                            <!-- End .pagination -->
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
    <!-- layout::Public:social::100 -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('tr').addClass('odd');
            $('tr:even').addClass('even'); //奇偶变色，添加样式
        });
    </script>
</body>
</html>