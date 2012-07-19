<?php if (!defined('THINK_PATH')) exit();?><dl class="box">
    <dt><strong class="blog">精彩推荐</strong></dt>
    <dd>
        <ul>
            <?php if(is_array($recommand)): $i = 0; $__LIST__ = $recommand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$recommandVo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/News/newsdetail/id/<?php echo ($recommandVo['id']); ?>" title="<?php echo ($recommandVo['title']); ?>"><?php echo ($recommandVo['title']); ?></a><span><?php echo (date("m-d",$recommandVo['create_time'])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </dd>
</dl>
<!-- <script type="text/javascript" src="../Public/js/myloop.js"></script>-->
<dl class="box">
    <dt><strong class="notice">通知公告</strong></dt>
    <dd>
        <ul>
            <?php if(is_array($lnotice)): $i = 0; $__LIST__ = $lnotice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lnoticeVo): ++$i;$mod = ($i % 2 )?><li><a href="__APP__/Notice/noticedetail/id/<?php echo ($lnoticeVo['id']); ?>" title="<?php echo ($lnoticeVo['title']); ?>"><?php echo ($lnoticeVo['title']); ?></a><span><?php echo (date("m-d",$lnoticeVo['create_time'])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </dd>
</dl>