<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>黑魔方工作室后台登录</title>
        <link href="__PUBLIC__/dwz/themes/css/login.css" rel="stylesheet" type="text/css">
        <script src="__PUBLIC__/dwz/js/jquery-1.4.4.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function fleshVerify(type){
                //重载验证码
                var timenow = new Date().getTime();
                if (type){
                    $('#verifyImg').attr("src", '__URL__/verify/adv/1/'+timenow);
                }else{
                    $('#verifyImg').attr("src", '__URL__/verify/'+timenow);
                }
            }
            function checkInput(){
                if(document.getElementById("name").value=="")
                {
	   		
                    document.getElementById("error").innerHTML = "用户名不能为空！";
                    return false ;
                }
                if(document.getElementById("password").value=="")
                {
                    document.getElementById("error").innerHTML = "密码不能为空！";
                    return false ;
                }
                else return true ;
            }
        </script>
    </head>
    <body>
        <div id="login">
            <div class="login_form">
                <img src="__PUBLIC__/dwz/themes/default/images/login_logo.png"/>
                <form action="__URL__/checkLogin/" method="post" name="login_form" onSubmit="return checkInput();">
                    <div class="unit margint30">
                        <label for="username">用户名</label>
                        <input name="account" id="name" type="text">
                    </div>
                    <div class="unit">
                        <label for="password">密码</label>
                        <input name="password" id="password" type="text">
                    </div>
                    <div class="unit">
                        <label>验证码：</label>
                        <input class="code" name="verify" type="text" size="5" />
                    </div>
                    <span><img id="verifyImg" SRC="__URL__/verify/" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer" align="absmiddle"></span>
                    <div class="unit">
                        <button type="reset" class="login_bt">清空</button><button type="submit" class="login_bt">登录</button>
                    </div>
                </form>
                <div id="error"></div>
            </div>
        </div>
    </body>
</html>