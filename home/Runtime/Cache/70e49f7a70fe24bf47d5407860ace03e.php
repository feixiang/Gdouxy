<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="<?php echo ($waitSecond); ?>; url=<?php echo ($jumpUrl); ?>">
        <title>提示信息——广东海洋大学校友网欢迎您</title>
        <link rel="stylesheet" href="../Public/css/login.css" type="text/css">
        <link rel="stylesheet" href="../Public/css/common.css" type="text/css">
    </head>
    <body>
        <a href="__APP__"><img src="../Public/images/logo.png" alt="校友网主页"></a>
        <div class="section">
            <h1>提示信息</h1>
            <div class="success">
                <p><?php echo ($message); ?></p>
            </div>
        </div>
        <!--footer-->
    <!-- layout::Public:footer::100 -->
    <!--footer结束-->
</body>
</html>