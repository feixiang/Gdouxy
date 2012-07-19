<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo ($fenhuiName); ?>——广东海洋大学校友网</title>
        <link href="../Public/css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="container">
            <div id="header"><a href="#"><?php echo ($banner); ?></a></div>
            <!--整个居中的模块-->
            <div id="contentwrap">
                <!--导航条-->
                <!-- layout::Public:fenhui_nav::0 -->
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
                    <!--正中文字内容-->
                    <div class="maintext">
                        <!--校友之星-->
                        <div class="matestar">
                            <?php if(is_array($focus)): $i = 0; $__LIST__ = $focus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$focusVo): ++$i;$mod = ($i % 2 )?><h2><a href="__APP__/Focus/focusdetail/id/<?php echo ($focusVo['id']); ?>"><?php echo ($focusVo['title']); ?></a></h2>
                                <span><?php echo ($focusVo['info']); ?>…<a href="__APP__/Focus/focusdetail/id/<?php echo ($focusVo['id']); ?>">[查看全文]</a></span><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <!--校友之星结束-->
                        <!--校友动态-->
                        <div class="newsbox">
                            <h2><?php echo ($fenhuiName); ?>动态</h2>
                            <ol>
                                <?php if(is_array($fenhui)): $i = 0; $__LIST__ = $fenhui;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fenhuiVo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/News/newsdetail/id/<?php echo ($fenhuiVo['id']); ?>.html" title="<?php echo ($fenhuiVo['title']); ?>"><?php echo ($fenhuiVo['title']); ?></a><span><?php echo (date("m-d",$fenhuiVo['create_time'])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ol>
                        </div>
                        <!--校友动态结束-->
                        <!--总会动态-->
                        <div class="newsbox">
                            <h2>总会动态</h2>
                            <ol>
                                <?php if(is_array($zonghui)): $i = 0; $__LIST__ = $zonghui;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zonghuiVo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/News/newsdetail/id/<?php echo ($zonghuiVo['id']); ?>.html" title="<?php echo ($zonghuiVo['title']); ?>"><?php echo ($zonghuiVo['title']); ?></a><span><?php echo (date("m-d",$zonghuiVo['create_time'])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ol>
                        </div>
                        <!--总会动态结束-->
                    </div>
                    <!--正中文字内容结束-->
                    <!--右侧模块-->
                    <div id="rightbar">
                        <div class="newsbox">
                            <h2>校友捐赠</h2>
                            <ol>
                                <?php if(is_array($donate)): $i = 0; $__LIST__ = $donate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$donateVo): ++$i;$mod = ($i % 2 )?><li><a href="#" title="<?php echo ($donateVo['things']); ?>"><?php echo ($donateVo['donator']); ?><small style="color:red; font-size:11px;">捐赠了</small><?php echo ($donateVo['things']); ?></a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ol>
                        </div>
                        <div class="newsbox">
                            <h2>校友祝福</h2>
                            <ol>
                                <?php if(is_array($bless)): $i = 0; $__LIST__ = $bless;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blessVo): ++$i;$mod = ($i % 2 )?><li><a href="#" title="<?php echo ($blessVo['name']); ?><?php echo ($blessVo['content']); ?>"><?php echo ($blessVo['name']); ?><?php echo ($blessVo['content']); ?></a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ol>
                        </div>
                    </div>
                </div>
                <!--中间模块结束-->
                <div class="clear"></div>
                <!--友情链接模块-->
                <!-- layout::Public:flink::100 -->
                <!--友情链接模块结束-->
            </div>
        </div>
        <!--footer-->
    <!-- layout::Public:footer::100 -->
    <!--footer结束-->

    <script type="text/javascript" src="../Public/js/jquery.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.KinSlideshow-1.2.1.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#KinSlideshow").KinSlideshow({
                mouseEvent:"mouseover",intervalTime:2,
                titleBar:{titleBar_height:30,titleBar_bgColor:"#08355c",titleBar_alpha:0.5},
                titleFont:{TitleFont_size:12,TitleFont_color:"#FFFFFF",TitleFont_weight:"normal"},
                btn:{btn_bgColor:"#FFFFFF",btn_bgHoverColor:"#1072aa",btn_fontColor:"#000000",
                    btn_fontHoverColor:"#FFFFFF",btn_borderColor:"#cccccc",
                    btn_borderHoverColor:"#1188c0",btn_borderWidth:1}
            });
        })
    </script>
    <!--jia this的js-->
    <!-- layout::Public:social::3600 -->
</body>
</html>