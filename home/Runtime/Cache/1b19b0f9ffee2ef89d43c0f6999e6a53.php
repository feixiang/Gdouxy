<?php if (!defined('THINK_PATH')) exit();?><div id="slider">
    <div id="KinSlideshow" style="visibility:hidden; overflow: hidden;">
        <?php if(is_array($slider)): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sliderVo): ++$i;$mod = ($i % 2 )?><a href="__APP__/News/newsdetail/id/<?php echo ($sliderVo['id']); ?>" target="_blank"><img src="<?php echo (getFirstImage($sliderVo['content'])); ?>" alt="<?php echo ($sliderVo['title']); ?>"/></a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<script type="text/javascript" src="../Public/js/jquery.KinSlideshow-1.2.1.min.js"></script>
<script type="text/javascript">
    $(function(){
        $("#KinSlideshow").KinSlideshow({
            mouseEvent:"mouseover",intervalTime:5,
            titleBar:{titleBar_height:30,titleBar_bgColor:"#08355c",titleBar_alpha:0.5},
            btn:{btn_bgColor:"#FFFFFF",btn_bgHoverColor:"#1072aa",btn_fontColor:"#000000",
                btn_fontHoverColor:"#FFFFFF",btn_borderColor:"#cccccc",
                btn_borderHoverColor:"#1188c0",btn_borderWidth:1}
        });
    })
</script>