<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta charset="utf-8" />
        <title>校友机构——广东海洋大学校友网</title>
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
                        <!--博文展示区
                        <dl class="box">
                            <dt><strong class="blog">校友机构导航</strong></dt>
                            <dd>
                                <ul>
                                    <li><a href="#organInfo">简介</a></li>
                                    <li><a href="#organDuty">机构职责</a></li>
                                    <li><a href="#organAdmin">负责人</a></li>
                                    <li><a href="#organRule">规章制度</a></li>
                                </ul>
                            </dd>
                        </dl>            -->
                        <!--博文展示区结束-->

                        <dl class="box">
                            <dt><strong class="links">机构列表</strong></dt>
                            <dd>
                                <ul>
                                    <?php if(is_array($organList)): $i = 0; $__LIST__ = $organList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$organListVo): ++$i;$mod = ($i % 2 )?><li><a href="__URL__/organDts/Name/<?php echo ($organListVo['pinyin']); ?>"><?php echo ($organListVo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <!--左侧模块结束-->
                    <!--中间模块-->
                    <div id="centerbar">
                        <h4 class="list-header"> 当前位置：主页 &gt;&gt; 校友机构</h4>
                        <div class="list newsdetail">
                                <!--文章内容-->
                                <h1>简介</h1>
                                <div class="content" id="organInfo">
                                    <?php echo ($organ['info']); ?>
                                </div>
                                <h1>职责</h1>
                                <div class="content" id="organDuty">
                                    <?php echo ($organ['duty']); ?>
                                </div>

                                <h1>负责人</h1>
                                <div class="content" id="organAdmin">
                                    <?php echo ($organ['admin']); ?>
                                </div>

                                <h1>规章制度</h1>
                                <div class="content" id="organRule">
                                    <?php echo ($organ['rule']); ?>
                                </div>
                                <!--end 文章内容-->
                            </volist>
                        </div>
                    </div>
                    <!--中间模块结束-->
                </div>
                <!--内容模块结束-->
                <div class="clear"> </div>
                <!--友情链接模块-->
                <!-- layout::Public:flink::100 -->
                <!--友情链接模块结束-->
            </div>
            <!--居中模块结束-->
        </div>
        <!--footer-->
    <!-- layout::Public:footer::100 -->
    <!--footer结束-->
    <!--jia this的js-->
    <!-- layout::Public:social::0 -->
</body>
</html>