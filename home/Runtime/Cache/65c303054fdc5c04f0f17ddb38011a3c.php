<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta name="keywords" content="校友，广东海洋大学，学校，校友网，校友会" />
        <meta charset="utf-8" />
        <title>校友机构——广东海洋大学校友网</title>
        <link href="../Public/css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="container">
            <div id="header"></div>
            <!--整个居中的模块-->
            <div id="contentwrap">
                <!--导航条-->
                <!-- layout::Public:nav::100 -->
                <!--整个导航模块结束-->
                <!--内容模块-->
                <div id="content">
                    <!--左侧模块-->
                    <div id="leftbar">
                        <!--博文展示区-->
                        <dl class="box">
                            <dt><strong class="blog">服务导航</strong></dt>
                            <dd>
                                <ul>
                                    <li><a href="__APP__/Fenhui/fenhuilist/">各地校友会链接</a></li>
                                    <?php if(is_array($service)): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$serviceVo): ++$i;$mod = ($i % 2 )?><li><a href="__URL__/serviceDts/id/<?php echo ($serviceVo['id']); ?>"><?php echo ($serviceVo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                    <!--左侧模块结束-->
                    <!--中间模块-->
                    <div id="centerbar">
                        <h4 class="list-header"> 当前位置：主页 &gt;&gt;服务校友</h4>
                        <div class="list newsdetail">
                            <!--文章内容-->
                            <h1>捐赠流程介绍</h1>
                            <span><small>发表时间:</small>2010-12-8 <small>作者:</small>Flyman <small>浏览次数:</small>2010 <small><a href="#comment">评论</a>次数:</small>2010 </span>
                            <div class="content">
                                <!--文章格式由editor生成-->
                                <p align="left">各位校友：</p>
                                <p align="left"> 在历史的长河中，人生是短暂的。然而，在大千世界中的人生，却是多姿多彩的，尤其是印满青春脚印的求学时光，更令人终生难忘。在母校，是辛勤的老师，教诲学子们打造开启科学殿堂的钥匙；在母校，是朝夕相处的学友们，相互陪伴在知识的海洋里畅游；在母校，学子们插上了在科学王国翱翔的翅膀。过去，校友以母校为荣，现在，母校以校友为傲。</p>
                                <p align="left"> 时值母校七十周年华诞之际，母校呼唤校友回报学校，为学校的建设与发展添砖加瓦、踊跃捐款、贡献力量。礼不在乎其轻重，而在乎其心意！</p>
                                <p align="left"> 校友捐赠的项目有：<span lang="EN-US" xml:lang="EN-US"><strong>1、</strong></span><strong>学术交流中心(亦名校友楼,建筑面积7600平方米,投资0.10亿元)<span lang="EN-US" xml:lang="EN-US">；2、</span>水生生物博物馆有关展厅</strong><strong><span lang="EN-US" xml:lang="EN-US">、</span>室<span lang="EN-US" xml:lang="EN-US">；3、</span>兴农楼有关实验室<span lang="EN-US" xml:lang="EN-US">；4、</span>海滨校区(原湛江气象学校)图书馆(建筑面积10000平方米,投资约0.15亿元)<span lang="EN-US" xml:lang="EN-US">；5、</span>校园纪念景点(亦可认种景点&quot;爱校树&quot;)<span lang="EN-US" xml:lang="EN-US">；6、</span>海大先贤塑像<span lang="EN-US" xml:lang="EN-US">；</span>7<span lang="EN-US" xml:lang="EN-US">、</span>奖学(或奖教)基金<span lang="EN-US" xml:lang="EN-US">；</span>8<span lang="EN-US" xml:lang="EN-US">、</span>贫困学生奖助基金<span lang="EN-US" xml:lang="EN-US">；</span>9<span lang="EN-US" xml:lang="EN-US">、</span>学校建设资金(捐款数额部不限)<span lang="EN-US" xml:lang="EN-US">；。</span></strong></p>
                                <p align="left"><strong> 楼宇方面的的项目既可整体捐建，也可捐建其中某个厅室。除了上述项目，还可按捐赠者意愿设立其他项目。</strong></p>
                                <p align="left"><strong> 回报方式:学校将颁发捐赠证书，同时根据捐赠者意愿和捐赠金额，分别采取铭文纪念、捐建项目冠名、镌名纪念（未说明用途的捐赠资金用于校园楼的建设，1000元以上款项捐赠者在楼内镌刻芳名）等方式予以回报；有特殊要求的捐赠者可与学校专门协商。 </strong></p>
                                <p align="left"><strong> </strong>请校友捐款时说明本人在读院校、专业、班级或在校工作部门。详情可查看学校网页：<a href="http://www.gdou.edu.cn/">http://www.gdou.edu.cn/</a></p>
                                <p align="left"> 联系电话：0759-2339333</p>
                                <p align="left"> 联系传真：0759-2339222</p>
                                <p align="left"> 联系人：詹衍玲、朱锦昌、罗开、秦平平</p>
                                <p align="left"> 单位：湛江海洋大学校友会<br />
                                    捐款帐号：2015020709024905972<br />
                                    银行：工 行 麻 章 支 行</p>
                                <p align="left"><strong> </strong> </p>
                                <p align="left"> 湛江海洋大学70周年校庆筹备办公室</p>
                                <p>&nbsp;</p>
                            </div>
                            <!--end 文章内容-->
                            <div class="clear"> </div>
                        </div>
                    </div>
                    <!--中间模块结束-->
                </div>
                <div class="clear"> </div>
                <!--友情链接模块-->
                <!-- layout::Public:flink::100 -->
                <!--友情链接模块结束-->
            </div>
            <!--内容模块结束-->
        </div>
        <!--footer-->
    <!-- layout::Public:footer::100 -->
    <!--footer结束-->
    <!--jia this的js-->
    <!-- layout::Public:social::3600 -->
</body>
</html>