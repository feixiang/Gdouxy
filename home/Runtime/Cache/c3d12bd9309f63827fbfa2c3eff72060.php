<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>企业联合会——广东海洋大学校友网</title>
        <link href="../Public/css/main.css" rel="stylesheet" type="text/css" />
        <link href="../Public/css/company.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../Public/js/jquery.js"></script>
        <script type="text/javascript" src="../Public/js/jquery.featureList.js"></script>
        <script language="javascript">
            $(document).ready(function() {
                $.featureList(
                $("#tabs li a"),
                $("#output li"), {
                    start_item	:0
                }
            );
            });
        </script>
    </head>
    <body>
        <div id="container">
            <div id="comheader">广东海洋大学校友网</div>
            <!--整个居中的模块-->
            <div id="contentwrap">
                <!--导航模块-->
                <!-- layout::Public:company_nav::100 -->
                <!--整个导航模块结束--> 
                <!--内容模块-->
                <div id="content">
                    <div class="bluewrap">
                        <h1>企业联谊会正式上线</h1>
                        <h2>广东海洋大学企业联谊会正式上线，欢迎各企业参与宣传...</h2>
                        <hr />
                        <div id="feature_list">
                            <ul id="tabs">
                                <?php if(is_array($slide)): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$slideVo): ++$i;$mod = ($i % 2 )?><li> <a href="javascript:;"> <img src="../Public/images/services.png" />
                                            <h3><?php echo ($slideVo['name']); ?></h3>
                                            <span><?php echo ($slideVo['aword']); ?></span> </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <ul id="output">
                                <?php if(is_array($slide)): $i = 0; $__LIST__ = $slide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$slideVo): ++$i;$mod = ($i % 2 )?><li><?php echo ($slideVo['banner']); ?><a href="__URL__/cdetail/id/<?php echo ($slideVo['id']); ?>">查看详细</a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="bluewrap">
                    <h5 class="cwall-title">名企风采</h5>
                    <hr />
                    <div class="logolist">
                        <?php if(is_array($logo)): $i = 0; $__LIST__ = $logo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$logoVo): ++$i;$mod = ($i % 2 )?><a href="__URL__/cdetail/id/<?php echo ($logoVo['id']); ?>"><?php echo ($logoVo['logo']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
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
    <!--jia this-->
    <!-- layout::Public:social::3600 -->
    <!--jia this结束-->
</body>
</html>