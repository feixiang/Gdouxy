<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script type="text/javascript" src="../Public/js/jquery-1.4.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Public/js/ui-lightness/jquery-ui-1.8.16.custom.css" />

        <script type="text/javascript" src="../Public/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../Public/js/jquery.form.js"></script>
        <script type="text/javascript" src="../Public/js/jquery.metadata.js"></script>
        <script type="text/javascript" src="../Public/js/validate.method.js"></script>
        <script type="text/javascript" src="../Public/js/jquery.ui.core.min.js"></script>
        <script type="text/javascript" src="../Public/js/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="../Public/js/regional.zh.js"></script>
        <script type="text/javascript" src="../Public/js/v_code.js"></script>
        <title>欢迎注册成为广东海洋大学校友网的一员</title>
        <link rel="stylesheet" href="../Public/css/login.css" type="text/css" />
        <style type="text/css">
            .valid{color:green;}
            .invalid{color:red;font-weight:bold;}
        </style>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#signupForm").validate({
                    success:"valid",
                    errorClass:"invalid",
                    submitHandler:function(form){
                        this.defaultShowErrors();
                        form.submit();
                    }
                }
            );
                $('#entTime').datepicker({changeYear:true,changeMonth: true,
                    closeText:'关闭',prevText:'前一月',nextText:'后一月',currentText:' ',
                    monthNames:['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
                    monthNamesShort:['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
                    dayNamesMin:['日','一','二','三','四','五','六'],
                    yearRange:'1920:2011'});
                $('#graTime').datepicker({changeYear:true,changeMonth: true,
                    closeText:'关闭',prevText:'前一月',nextText:'后一月',currentText:' ',
                    monthNames:['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
                    monthNamesShort:['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
                    dayNamesMin:['日','一','二','三','四','五','六'],
                    yearRange:'1920:2020'});

                getCollege();
            });
            function getCollege(){
                var url = "__URL__/getCollege";
                $("#college").load(url);
            }
            function getDepartment(){
                var college_id = $("#college option:selected").val();
                var url = "__URL__/getDepartment/college_id/"+college_id;
                $("#department").load(url);
            }
            function getMajor(){
                var department_id = $("#department option:selected").val();
                var url = "__URL__/getMajor/id/"+department_id;
                $("#major").load(url);
            }
            function fleshVerify(type){
                //重载验证码
                var timenow = new Date().getTime();
                if (type){
                    $('#verifyImg').attr("src", '__APP__/Public/verify/adv/1/'+timenow);
                }else{
                    $('#verifyImg').attr("src", '__APP__/Public/verify/'+timenow);
                }
            }

        </script>

    </head>
    <body>
        <a href="__APP__/Index/"><img src="../Public/images/logo.png" alt="校友网主页" /></a>
        <div class="section">
            <h1>欢迎加入校友网</h1>
            <form action="__URL__/signup" method="post" name="userlogin" id="signupForm">
                <fieldset id="login-username">
                    <label for="enter-password">您的真实姓名:</label>
                    <h5>*（您的真实姓名将作为管理员审核的重要标准）</h5>
                    <input type="text" name="name" id="name" maxlength="5"  class="required"  />
                </fieldset>
                <fieldset id="password">
                    <label for="password">密码:</label>
                    <h5>*（6～14个字符，包括字母、区分大小写）</h5>
                    <input type="password" name="password" id="ipassword"  maxlength="14" class="required"/>
                </fieldset>
                <fieldset id="rpassword">
                    <label for="rpassword">请再次确认密码:</label>
                    <input type="password" name="rpassword" id="rpassword" maxlength="14" class="required" equalTo="#ipassword" />
                </fieldset>
                <fieldset id="email">
                    <label for="email">E-Mail:</label>
                    <h5>*（邮箱将作为您找回密码的重要手段，请认真填写！）</h5>
                    <input type="text" name="email" id="email"  class="required email" />
                </fieldset>
                <fieldset id="sex">
                    <label for="sex">您的性别：</label>
                    <label for="sex">性别</label>
                    <select id="sex" name="sex" class="required" >
                        <option value="1">男</option>
                        <option value="0">女</option>
                    </select>
                </fieldset>
                <fieldset id="info">
                    <label for="info">个性宣言:</label>
                    <input type="text" name="info" id="info" value="" maxlength="100" />
                </fieldset>
                <hr/>
                <fieldset id="degree">
                    <label for="degree">学历</label>
                    <select id="degree" name="degree" class="required">
                        <option value="本科">小学</option>
                        <option value="本科">初中</option>
                        <option value="本科">高中</option>
                        <option value="专科">专科</option>
                        <option value="本科">本科</option>
                        <option value="硕士">研究生</option>
                        <option value="博士">博士</option>
                        <option value="博士后">博士后</option>
                        <option value="其他">其他</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="college">学院</label>
                    <input id="class" name="college" type="text" maxlength="30"/>
                </fieldset>
                <fieldset>
                    <label for="college">系</label>
                    <input id="class" name="department" type="text" maxlength="30"/>
                </fieldset>
                <fieldset>
                    <label for="college">专业</label>
                    <input id="class" name="major" type="text" maxlength="30"/>
                </fieldset>
                <fieldset>
                    <label for="number">学号</label>
                    <h5>*（实在记不起来就不写了）</h5>
                    <input id="number" name="number" type="text" maxlength="20"/>
                </fieldset>
                <fieldset>
                    <label for="class">班级</label>
                    <input id="class" name="class" type="text" maxlength="30"/>
                </fieldset>
                <fieldset>
                    <label for="entTime">入学时间</label>
                    <input id="entTime" name="entTime" readonly="readonly">
                    </input>
                </fieldset>
                <fieldset>
                    <label for="graTime">毕业时间</label>
                    <h5>*（必填）</h5>
                    <input id="graTime" name="graTime" readonly="readonly">
                    </input>
                </fieldset>
                <hr/>
                <fieldset>
                    <label for="workType">工作类别</label>
                    <select id="workType" name="workType">
                        <option value="事业机关">事业机关</option>
                        <option value="国企">国企</option>
                        <option value="民营">民营</option>
                        <option value="合资">合资</option>
                        <option value="外资">外资</option>
                        <option value="其他">其他</option>
                    </select>
                </fieldset>
                <fieldset>
                    <label for="workDept">工作单位</label>
                    <input id="workDept" name="workDept" type="text" maxlength="50"/>
                </fieldset>
                <fieldset>
                    <label for="duty">职务</label>
                    <input id="duty" name="duty" type="text" maxlength="30"/>
                </fieldset>
                <fieldset>
                    <label for="workPlace">工作地点</label>
                    <input id="workPlace" name="workPlace" type="text" maxlength="50"/>
                </fieldset>
                <fieldset>
                    <label for="officePhone">办公电话</label>
                    <input id="officePhone" name="officePhone" type="text" class="phone" maxlength="30"/>
                </fieldset>
                <fieldset>
                    <label for="phone">地区</label>
                    <select name="province" id="province" onChange="getCities()" style="width:100px;">
                    </select>
                    <select name="city" id="city" onChange="getCounties()" style="width:100px;">
                    </select>
                    <select name="country" id="county" style="width:100px;">
                    </select>
                </fieldset>
                <hr/>

                <fieldset>
                    <label for="phone">手机</label>
                    <h5>*（请留下您的联系方式，方便校友会为您服务）</h5>
                    <input id="phone" name="phone" type="text" class="required phone" maxlength="20"/>
                </fieldset>
                <fieldset>
                    <label for="qq">QQ</label>
                    <input id="qq" name="qq" type="text" class="required number"  maxlength="20"/>
                </fieldset>
                <fieldset>
                    <label for="address">家庭住址</label>
                    <input id="address" name="address" type="text" class="required" maxlength="40"/>
                </fieldset>
                <fieldset>
                    <label for="address">邮政编码</label>
                    <input id="address" name="address" type="text" class="required number" maxlength="30"/>
                </fieldset>
                <hr/>

                <fieldset>
                    <label>请输入验证码<img id="verifyImg" src="__APP__/Public/verify/"  onclick="fleshVerify()" style="cursor:pointer" alt="请输入验证码" /><a href="javascript:fleshVerify();">换一张</a></label>
                    <input type="text" name="v_code_input" id="v_code_input" value="" maxlength="30" class="required" />
                </fieldset>
                <hr/>

                <fieldset>
                    <small>已经有账号？<a href="__URL__/login/">马上登录</a></small>
                    <button type="submit">登录</button>
                </fieldset>
            </form>
        </div>
        <div class="footer">
            <p><a href="index.html">主页</a><a href="http://bbs.gdou.edu.cn">校友BBS</a> </p>
            <small>
                <p>广东海洋大学校友会版权所有&copy;2010 - 2012</p>
                <p>黑魔方工作室技术维护</p>
            </small></div>
        <script type="text/javascript" src="../Public/js/area.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                getProvinces();
            });

            function getProvinces(){
                var pro = "";
                for(var i = 0 ; i < provinces.length; i++){
                    pro += "<option>" + provinces[i] + "</option>";
                }
                $('#province').empty().append(pro);
                getCities();
            }
            function getCities(){
                var proIndex = $('#province').attr('selectedIndex');
                showCities(proIndex);
                getCounties();
            }
            function showCities(proIndex){
                var cit = "";
                if(cities[proIndex] == null){
                    $('#city').empty();
                    return;
                }
                for(var i = 0 ;i < cities[proIndex].length ; i++){
                    cit += "<option>" + cities[proIndex][i] + "</option>";
                }
                $('#city').empty().append(cit);
            }
            function getCounties(){
                var proIndex = $('#province').attr('selectedIndex');
                var citIndex = $('#city').attr('selectedIndex');
                showCounties(proIndex,citIndex);
            }
            function showCounties(proIndex,citIndex){
                var cou = "";
                if(counties[proIndex][citIndex] == null){
                    $('#county').empty();
                    return;
                }
                for(var i = 0 ;i < counties[proIndex][citIndex].length;i++){
                    cou += "<option>" + counties[proIndex][citIndex][i] + "</option>";
                }
                $('#county').empty().append(cou);
            }
        </script>  
    </body>
</html>