<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript" src="../Public/js/jquery-1.4.2.min.js"></script>
<div id="nav">
    <div id="navMenu">
        <ul>
            <!--rel属性用来定义下拉项的ID-->
            <li><a href="__APP__">首页</a></li>
            <li><a href="__APP__/News/" rel="newsdrop">新闻动态</a></li>
            <li><a href="__APP__/Organ/Index/Name/zonghui" rel="organdrop">校友机构</a></li>
            <li><a href="#" rel="matesdrop">校友天地</a></li>
            <li><a href="http://bbs.gdou.edu.cn/forum.php?mod=forumdisplay&fid=14">校友专栏</a></li>
            <li><a href="__APP__/Service/" rel="servicedrop">服务校友</a></li>
            <li><a href="__APP__/Donate/">校友捐赠</a></li>
            <li><a href="__APP__/Organ/organDts/Name/zonghuidsh">董事会</a></li>
            <li><a href="__APP__/Company/" rel="lyhdrop">联合会</a></li>
            <li><a href="__APP__/Tongxun/">校友通讯</a></li>
            <li><a href="__APP__/Search/">校友查询</a></li>
            <li><a href="__APP__/Help/">联系我们</a></li>
        </ul>
    </div>
    <!--二级导航-->
    <script type="text/javascript" src="../Public/js/dropdown.js"></script>
    <ul id="newsdrop" class="dropMenu">
        <li><a href="__APP__/Notice/">校友动态</a></li>
        <li><a href="__APP__/News/Index/id/5">母校动态</a></li>
        <li><a href="__APP__/Album/">校友公告</a></li>
    </ul>
    <ul id="matesdrop" class="dropMenu">
        <li><a href="__APP__/Focus/">校友之星</a></li>
        <li><a href="__APP__/Focus/">校友专访</a></li>
        <li><a href="__APP__/Album/">校友风采</a></li>
    </ul>
    <ul id="organdrop" class="dropMenu">
        <li><a href="__APP__/Organ/Index/Name/zonghui/value/info">简介</a></li>
        <li><a href="__APP__/Organ/Index/Name/zonghui/value/zhangcheng">章程</a></li>
        <li><a href="__APP__/Organ/Index/Name/zonghui/value/lishihui">理事会</a></li>
        <li><a href="__APP__/Organ/Index/Name/zonghui/value/zzjg">组织机构</a></li>
        <li><a href="__APP__/Organ/Index/Name/zonghui/value/duty">职责</a></li>
        <li><a href="__APP__/Organ/Index/Name/zonghui/value/rule">规章制度</a></li>
        <li><a href="__APP__/Organ/Index/Name/zonghui/value/jishi">纪事</a></li>
        <li><a href="__APP__/Fenhui/fenhuiList/">各地校友会链接</a></li>
    </ul>
    <ul id="servicedrop" class="dropMenu">
        <li><a href="http://zsjy.gdou.edu.cn/" target="_blank">招生就业</a></li>
        <li><a href="http://www.gdou.edu.cn/kyc/" target="_blank">科技信息</a></li>
        <li><a href="http://210.38.128.99/yjsc/" target="_blank">校友深造</a></li>
        <?php if(is_array($serviceNav)): $i = 0; $__LIST__ = $serviceNav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$serviceNavVo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/Service/serviceDts/id/<?php echo ($serviceNavVo['id']); ?>"><?php echo ($serviceNavVo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <ul id="lyhdrop" class="dropMenu">
        <li><a href="__APP__/Company/clist">企业展示</a></li>
        <li><a href="__APP__/Company/newslist/">企业动态</a></li>
    </ul>
    <script type="text/javascript">cssdropdown.startchrome("navMenu")</script>
    <!--二级导航结束-->
    <div class="search">
        <form action="__APP__/Search/searchNews/" name="searchform" mothod="get">
            <div class="form">
                <h4>搜索新闻</h4>
                <input name="keyword" type="text" class="search-keyword" id="search-keyword" maxlength="18"/>
                <button type="submit" class="search-bt">搜索新闻</button>
            </div>
        </form>
        <!--热门标签-->
        <div class="hot-tags">
            <span style="font-size: 14px;">亲爱的校友<strong style="color:#36b6ee;"><?php echo $_SESSION["username"];?></strong>，欢迎您来到广东海洋大学校友网</span>
        </div>
        <!--热门标签结束-->
    </div>
</div>