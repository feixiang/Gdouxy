<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta charset="utf-8" />
        <title>新闻列表-广东海洋大学校友网</title>
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
                        <h3 class="list-header">当前位置：<a href="__APP__/Index/">主页 </a> &gt;&gt; 新闻列表&gt;&gt; <?php echo ($className); ?></h3>
                        <div class="list">
                            <ul>
                                <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newsVo): ++$i;$mod = ($i % 2 )?><li>
                                        <h3><a href="__URL__/newsdetail/id/<?php echo ($newsVo['id']); ?>.html"><?php echo ($newsVo['title']); ?></a></h3>
                                        <img src="../Public/images/preview.png" alt="缩略图" class="preview"/>
                                        <p> <?php echo ($newsVo['info']); ?><a style="color:#256eb1;" href="__URL__/newsdetail/id/<?php echo ($newsVo['id']); ?>">[查看详细]</a></p>
                                        <span class="newsinfo"><small>所属地区:</small><?php echo ($newsVo['className']); ?><small>发表时间:</small>2010-12-8 <small>作者:</small><?php echo ($newsVo['publicer']); ?></span> <br class="clear" />
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <div class="pagination"><?php echo ($page); ?></div>
                            <!-- End .pagination -->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--中间模块结束-->
                </div>
                <!--友情链接模块-->
                <!-- layout::Public:flink::100 -->
                <!--友情链接模块结束-->
            </div>
            <!--内容模块结束-->
        </div>
        <!--footer-->
    <!-- layout::Public:footer::100 -->
    <!--jia this的js-->
    <!-- layout::Public:social::3600 -->
</body>
</html>