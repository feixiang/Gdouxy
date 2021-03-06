<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title>后台管理</title>

        <link href="__PUBLIC__/dwz/themes/default/style.css" rel="stylesheet" type="text/css" />
        <link href="__PUBLIC__/dwz/themes/css/core.css" rel="stylesheet" type="text/css" />
        <!--[if IE]>
        <link href="__PUBLIC__/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" />
        <![endif]-->

        <script src="__PUBLIC__/dwz/js/speedup.js" type="text/javascript"></script>
        <script src="__PUBLIC__/dwz/js/jquery-1.4.4.min.js" type="text/javascript"></script>
        <script src="__PUBLIC__/dwz/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="__PUBLIC__/dwz/js/jquery.validate.js" type="text/javascript"></script>
        <script src="__PUBLIC__/dwz/js/jquery.bgiframe.js" type="text/javascript"></script>
        <script src="__PUBLIC__/xheditor/xheditor-1.1.6-zh-cn.min.js" type="text/javascript"></script>

        <script src="__PUBLIC__/dwz/js/dwz.min.js" type="text/javascript"></script>
        <script src="__PUBLIC__/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>

        <script type="text/javascript">
            function fleshVerify(){
                //重载验证码
                $('#verifyImg').attr("src", '__APP__/Public/verify/'+new Date().getTime());
            }
            function dialogAjaxMenu(json){
                dialogAjaxDone(json);
                if (json.statusCode == DWZ.statusCode.ok){
                    $("#sidebar").loadUrl("__APP__/Public/menu");
                }
            }
            function navTabAjaxMenu(json){
                navTabAjaxDone(json);
                if (json.statusCode == DWZ.statusCode.ok){
                    $("#sidebar").loadUrl("__APP__/Public/menu");
                }
            }
            $(function(){
                DWZ.init("__PUBLIC__/dwz/dwz.frag.xml", {
                    loginUrl:"__APP__/Public/login_dialog", loginTitle:"登录",	// 弹出登录对话框
                    //		loginUrl:"__APP__/Public/login",	//跳到登录页面
                    debug:false,
                    statusCode:{ok:1,error:0},
                    callback:function(){
                        initEnv();
                        $("#themeList").theme({themeBase:"__PUBLIC__/dwz/themes"});
                    }
                });
            });
            //清理浏览器内存,只对IE起效，FF不需要
            if ($.browser.msie) {
                window.setInterval("CollectGarbage();", 10000);
            }
        </script>
    </head>

    <body scroll="no">
        <div id="layout">
            <div id="header">
                <div class="headerNav">
                    <a class="logo" href="__APP__">Logo</a>
                    <ul class="nav">
                        <li><a href="__ROOT__">返回校友网主页</a></li>
                        <li><a href="__APP__/Public/main" target="dialog" width="580" height="360" rel="sysInfo">系统消息</a></li>
                        <li><a href="__APP__/Public/password/" target="dialog" mask="true">修改密码</a></li>
                        <li><a href="__APP__/Public/profile/" target="dialog" mask="true">修改资料</a></li>
                        <li><a href="__APP__/Public/logout/">退出</a></li>
                    </ul>
                    <ul class="themeList" id="themeList">
                        <li theme="default"><div class="selected">蓝色</div></li>
                        <li theme="green"><div>绿色</div></li>
                        <li theme="purple"><div>紫色</div></li>
                        <li theme="silver"><div>银色</div></li>
                    </ul>
                </div>
            </div>

            <div id="leftside">
                <div id="sidebar_s">
                    <div class="collapse">
                        <div class="toggleCollapse"><div></div></div>
                    </div>
                </div>

                <div id="sidebar">
                    	
<div class="accordion" fillSpace="sideBar">
	<div class="accordionHeader">
		<h2><span>Folder</span>应用</h2>
	</div>
	<div class="accordionContent">
	
		<ul class="tree treeFolder">
			<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): ++$i;$mod = ($i % 2 )?><?php if((strtolower($item['name']))  !=  "public"): ?><?php if((strtolower($item['name']))  !=  "index"): ?><?php if(($item['access'])  ==  "1"): ?><li><a href="__APP__/<?php echo ($item['name']); ?>/index/" target="navTab" rel="<?php echo ($item['name']); ?>"><?php echo ($item['title']); ?></a></li><?php endif; ?><?php endif; ?><?php endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>

	</div>
</div>

                </div>
            </div>

            <div id="container">
                <div id="navTab" class="tabsPage">
                    <div class="tabsPageHeader">
                        <div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
                            <ul class="navTab-tab">
                                <li tabid="main" class="main"><a href="javascript:void(0)"><span><span class="home_icon">我的主页</span></span></a></li>
                            </ul>
                        </div>
                        <div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
                        <div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
                        <div class="tabsMore">more</div>
                    </div>
                    <ul class="tabsMoreList">
                        <li><a href="javascript:void(0)">我的主页</a></li>
                    </ul>
                    <div class="navTab-panel tabsPageContent">
                        <div>
                            <div class="accountInfo">
                                <div class="right">
                                    <p>当前时间<?php echo (date('Y-m-d g:i a',time())); ?></p>
                                </div>
                                <p>欢迎您, <?php echo ($_SESSION['loginUserName']); ?></p>
                            </div>
                            <div class="pageFormContent" layoutH="80">
                                <p>使用说明：</p>
                                <div class="divider"></div>
                                <h2>系统版本介绍:</h2>
                                <pre style="margin: 5px; line-height: 1.4em;">
                                        本版本属于内测版本，部分功能尚未完善
                                </pre>
                                <div class="divider"></div>
                                <h2>有问题请联系:</h2>
                                <p style="color:red">QQ:8560685</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="taskbar" style="left:0px; display:none;">
                <div class="taskbarContent">
                    <ul></ul>
                </div>
                <div class="taskbarLeft taskbarLeftDisabled" style="display:none;">taskbarLeft</div>
                <div class="taskbarRight" style="display:none;">taskbarRight</div>
            </div>
            <div id="splitBar"></div>
            <div id="splitBarProxy"></div>
        </div>

        <div id="footer">Copyright &copy; 2010 <a href="http://www.dwzjs.com" target="_blank">dwzjs.com</a></div>

        <!--拖动效果-->
        <div class="resizable"></div>
        <!--阴影-->
        <div class="shadow" style="width:508px; top:148px; left:296px;">
            <div class="shadow_h">
                <div class="shadow_h_l"></div>
                <div class="shadow_h_r"></div>
                <div class="shadow_h_c"></div>
            </div>
            <div class="shadow_c">
                <div class="shadow_c_l" style="height:296px;"></div>
                <div class="shadow_c_r" style="height:296px;"></div>
                <div class="shadow_c_c" style="height:296px;"></div>
            </div>
            <div class="shadow_f">
                <div class="shadow_f_l"></div>
                <div class="shadow_f_r"></div>
                <div class="shadow_f_c"></div>
            </div>
        </div>
        <!--遮盖屏幕-->
        <div id="alertBackground" class="alertBackground"></div>
        <div id="dialogBackground" class="dialogBackground"></div>

        <div id='background' class='background'></div>
        <div id='progressBar' class='progressBar'>数据加载中，请稍等...</div>

    </body>
</html>