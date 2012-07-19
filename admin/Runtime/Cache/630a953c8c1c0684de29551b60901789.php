<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
</form>


<div class="pageHeader">
    <form onsubmit="return navTabSearch(this);" action="__URL__" method="post">
        <div class="searchBar">
            <ul class="searchContent">
                <li>
                    <label>您可以：</label>
                    <select name="class_id">
                        <option value="">选择分类</option>
                        <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </li>
                <li>
                    <label>或者标题：</label>
                    <input type="text" name="title" class="medium" >
                </li>
                <li>
                    <label>或者关键字：</label>
                    <input type="text" name="keyword" class="medium" >
                </li>
                <li>
                    <label>或者编号进行查询：</label>
                    <input type="text" name="id">
                </li>
            </ul>
            <div class="subBar">
                <ul>
                    <li><div class="buttonActive"><div class="buttonContent"><button type="submit">查询</button></div></div></li>
                </ul>
            </div>
        </div>
    </form>
</div>

<div class="pageContent">
    <div class="panelBar">
        <ul class="toolBar">
            <li><a class="add" href="__URL__/add" target="navTab" mask="true"><span>新增</span></a></li>
            <li><a class="delete" href="__URL__/foreverdelete/id/{sid_node}/navTabId/__MODULE__" target="ajaxTodo" calback="navTabAjaxMenu" title="你确定要删除吗？" warn="请选择节点"><span>删除</span></a></li>
            <li><a class="edit" href="__URL__/edit/id/{sid_node}" target="navTab" mask="true" warn="请选择节点"><span>修改</span></a></li>
        </ul>
    </div>


    <table class="table" width="100%" layoutH="138">
        <thead>
            <tr>
                <th width="60">编号</th>
                <th>标题</th>
                <th>所属分类</th>
                <th>发布者</th>
                <th>发布时间</th>
                <th width="100">操作</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr target="sid_node" rel="<?php echo ($vo['id']); ?>">
                <td><?php echo ($vo['id']); ?></td>
                <td><?php echo ($vo['title']); ?></td>
                <td><?php echo (getClassName($vo['class_id'])); ?></td>
                <td><?php echo ($vo['publicer']); ?></td>
                <td><?php echo (date("Y-m-d",$vo['create_time'])); ?></td>
                <td><a href="__URL__/edit/id/<?php echo ($vo['id']); ?>" target="dialog">编辑</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <div class="panelBar">
        <div class="pages">
            <span>共<?php echo ($totalCount); ?>条</span>
        </div>
        <div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
    </div>
</div>