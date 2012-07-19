<?php if (!defined('THINK_PATH')) exit();?><div id="nav">
    <div id="navMenu">
        <ul>
            <!--rel属性用来定义下拉项的ID-->
            <li><a href="__APP__/">校友网首页</a></li>
            <li><a href="__SELF__">联谊会首页</a></li>
            <li><a href="__URL__/newslist">企业动态</a></li>
            <li><a href="__URL__/clist/">校友企业</a></li>
            <li><a href="__APP__/Help/">帮助平台</a></li>
        </ul>
    </div>
    <div class="search">
        <form action="" name="searchform">
            <div class="form">
                <h4>搜索新闻</h4>
                <input name="search-keyword" type="text" class="search-keyword" id="search-keyword" maxlength="18"/>
                <select name="search-option" class="search-option" id="search-option">
                    <option value="1">校友总会</option>
                    <option value="1">广州分会</option>
                </select>
                <button type="submit" class="search-bt">搜索</button>
            </div>
        </form>
        <!--热门标签-->
        <div class="hot-tags">
            <span style="font-size: 14px;">亲爱的校友<strong style="color:#36b6ee;"><?php echo $_SESSION["username"];?></strong>，欢迎您来到广东海洋大学校友网</span>
        </div>
        <!--热门标签结束-->
    </div>
</div>