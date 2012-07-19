<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>各地校友会列表——广东海洋大学校友网</title>
        <link href="../Public/css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="container">
            <div id="header"></div>
            <div id="contentwrap">
                <!--导航条-->
                <!-- layout::Public:nav::100 -->
                <!--整个导航模块结束-->
                <!--内容模块-->
                <div id="content">
                    <div class="bluewrap">
                        <h5 class="cwall-title">各地校友会列表</h5>
                        <hr />
                        <dl class="box fenhui">
                            <dt><strong class="links">广东省</strong></dt>
                            <dd>
                            <?php if(is_array($gdlist)): $i = 0; $__LIST__ = $gdlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gdlistVo): ++$i;$mod = ($i % 2 )?><a href="__URL__/Index/Name/<?php echo ($gdlistVo[pinyin]); ?>" class="link"><?php echo ($gdlistVo[name]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dd>
                        </dl>
                        <dl class="box fenhui">
                            <dt><strong class="links">香港特别行政区</strong></dt>
                            <dd>
                            <?php if(is_array($hklist)): $i = 0; $__LIST__ = $hklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hklistVo): ++$i;$mod = ($i % 2 )?><a href="__URL__/Index/Name/<?php echo ($hklistVo[pinyin]); ?>" class="link"><?php echo ($hklistVo[name]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dd>
                        </dl>
                        <dl class="box fenhui">
                            <dt><strong class="links">广西省</strong></dt>
                            <dd>
                            <?php if(is_array($gxlist)): $i = 0; $__LIST__ = $gxlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gxlistVo): ++$i;$mod = ($i % 2 )?><a href="__URL__/Index/Name/<?php echo ($gxlistVo[pinyin]); ?>" class="link"><?php echo ($gxlistVo[name]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <!--内容模块结束-->
        </div>
        <div class="clear"> </div>
        <!--footer-->
    <!-- layout::Public:footer::100 -->
    <!--footer结束-->
    <!--jia this的js-->
    <!-- layout::Public:social::3600 -->
</body>
</html>