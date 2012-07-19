<?php if (!defined('THINK_PATH')) exit();?><dl class="box">
    <dt><strong class="links">友情链接</strong></dt>
    <dd>
    <?php if(is_array($flink)): $i = 0; $__LIST__ = $flink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$flinkVo): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($flinkVo['url']); ?>" class="link"><?php echo ($flinkVo['name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</dd>
</dl>