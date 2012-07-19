<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta charset="utf-8" />
        <link rel="icon" href="./favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
        <title>欢迎来到广东海洋大学校友网</title>
        <link href="../Public/css/main.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../Public/js/jquery.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="header"></div>
            <!--整个居中的模块-->
            <div id="contentwrap">
                <!--导航条-->
                <!-- layout::Public:nav::0 -->
                <!--整个导航模块结束-->
                <!--内容模块-->
                <div id="content">
                    <!--左侧模块-->
                    <div id="leftbar">
                        <!--幻灯片展示区-->
                        <!-- layout::Public:slider::0 -->
                        <!--幻灯片展示区结束-->
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
                            <h2>校友动态</h2>
                            <ol>
                                <?php if(is_array($zonghui)): $i = 0; $__LIST__ = $zonghui;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zonghuiVo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/News/newsdetail/id/<?php echo ($zonghuiVo['id']); ?>" title="<?php echo ($zonghuiVo['title']); ?>"><?php echo ($zonghuiVo['title']); ?></a><span><?php echo (date("m-d",$zonghuiVo['create_time'])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ol>
                        </div>
                        <!--校友动态结束-->
                        <!--母校动态-->
                        <div class="newsbox">
                            <h2>母校动态</h2>
                            <ol>
                                <?php if(is_array($muxiao)): $i = 0; $__LIST__ = $muxiao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$muxiaoVo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/News/newsdetail/id/<?php echo ($muxiaoVo['id']); ?>" title="<?php echo ($muxiaoVo['title']); ?>"><?php echo ($muxiaoVo['title']); ?></a><span><?php echo (date("m-d",$muxiaoVo['create_time'])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ol>
                        </div>
                        <!--母校动态结束-->
                    </div>
                    <!--正中文字内容结束-->
                    <!--右侧模块-->
                    <div id="rightbar">
                        <div class="box">
                            <dt><strong class="login">用户登录</strong></dt>
                            <dd style="border:none;">
                                <form action="__APP__/Public/login" method="post" onsubmit="return checkInput();">
                                    <table border="0" cellspacing="0" cellpadding="0" class="login_tb">
                                        <tr>
                                            <td class="alignr">姓名：</td>
                                            <td><input type="text" name="username" id="username"/></td>
                                        </tr>
                                        <tr>
                                            <td class="alignr">密码：</td>
                                            <td><input type="password" name="password" value="" id="password" ></td>
                                        </tr>
                                        <tr>
                                            <td class="alignr">验证码：</td>
                                            <td><input type="text" name="verify" id="verify" /></td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td><img id="verifyImg" src="__APP__/Public/verify/"  onclick="fleshVerify()" style="cursor:pointer" alt="请输入验证码" /><a href="javascript:fleshVerify();">换一张</a></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><button type="submit">登录</button></td>
                                        </tr>
                                        <tr>
                                            <td><a href="login.html" class="red">忘记密码？</a>
                                            </td>
                                            <td>还没有账号？<a href="__APP__/Mate/index" class="red">马上注册</a></td>
                                        </tr>
                                    </table>
                                </form>
                            </dd>
                            </dt>
                        </div>
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

    <script language="JavaScript">
        <!--
        function fleshVerify(type){
            //重载验证码
            var timenow = new Date().getTime();
            if (type){
                $('#verifyImg').attr("src", '__APP__/Public/verify/adv/1/'+timenow);
            }else{
                $('#verifyImg').attr("src", '__APP__/Public/verify/'+timenow);
            }
        }
        //-->

        function checkInput(){
            pass = false ; 
            if($('#username').val()==""||$('#username').val().length>5){
                alert('用户名不能为空或大于5个字符');
            }else if($('#password').val()==""){
                alert('密码不能为空');
            }else if($('#verify').val()==""){
                alert('验证码不能为空');
            }else pass=true  ;
            return pass;
        }
    </script>
    <!--jia this的js-->
    <!-- layout::Public:social::3600 -->
</body>
</html>