<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
    <meta name="keywords" content="<?php echo ($site_seo_keywords); ?>"/>
    <meta name="description" content="<?php echo ($site_seo_description); ?>">
    	<?php  function _sp_helloworld(){ echo "hello 玫瑰里!"; } function _sp_helloworld2(){ echo "hello 玫瑰里2!"; } function _sp_helloworld3(){ echo "hello 玫瑰里3!"; } ?>
	<?php $portal_index_lastnews="2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"玫瑰里X2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"玫瑰里X2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"玫瑰里X2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
    <!-- Set render engine for 360 browser -->
    <!-- <meta name="renderer" content="webkit"> -->
   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/themes/simplebootx_mobile/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/themes/simplebootx_mobile/Public/images/favicon.ico" type="image/x-icon">
    <link href="/themes/simplebootx_mobile/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/themes/simplebootx_mobile/Public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/css/mcommon.css" rel="stylesheet">
    <meta name="format-detection" content="telephone=no" />
    <link href="/css/mmain.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/swiper3.0.min.css">
    <link rel="stylesheet" type="text/css" href="/css/zane-calendar.css">
    <script src="/js/zane-calendar.js"></script>
</head>
<body>
<div class="logo-wap-top">
	<a href="/"><img src="/images/logo.png"></a>
</div>
<div  id="center-login">
	<?php $getaddress=sp_getaddress(); if(isset($_SESSION['address'])){ $address=$_SESSION['address']; }else{ $address=$getaddress[0]['address']; } ?>
<select name="navaddress" id="navaddress">
<?php if(is_array($getaddress)): foreach($getaddress as $key=>$vo): if($vo["address"] == $address): ?><option value="<?php echo ($vo["address"]); ?>" selected=""><?php echo ($vo["address"]); ?></option>
				<?php else: ?><option value="<?php echo ($vo["address"]); ?>" ><?php echo ($vo["address"]); ?></option><?php endif; endforeach; endif; ?>
 </select>
<span class="login"><a href="<?php echo U('user/center/index');?>">个人中心</a><a href="<?php echo U('user/index/logout');?>">退出</a> </span>
<span class="offline"><a href="<?php echo leuu('user/login/index');?>">登录</a>|<a href="<?php echo leuu('user/register/index');?>">注册</a></span>
<span>
<?php  if($_SESSION["mainnav"]==1){ echo '<a href="/index.php?g=&m=index&a=swmain">玫瑰里·商务</a>'; }else{ echo '<a href="/index.php?g=&m=index&a=main">玫瑰里·婚礼</a>'; } ?>
		</span>
</div>
<div class="nav-header">
	<?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'  data-cid='\$cid'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target'  data-cid='\$cid'>\$label </a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; if($_SESSION["mainnav"]==2){ echo sp_get_menu(2,$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); }else{ echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); } ?>
</div>
 
<?php if ($_SESSION["mainnav"] == 2) { if ($_SESSION['address'] == '北京·太阳公元') { $biao = "sw-mgl-banner"; } elseif ($_SESSION['address'] == '上海·外滩') { $biao = "sw-sh-banner"; } elseif ($_SESSION['address'] == '天津·爱琴海') { $biao = "sw-tj-banner"; } elseif ($_SESSION['address'] == '南京·外秦淮') { $biao = "sw-njwq-banner"; } elseif ($_SESSION['address'] == '南京·1865') { $biao = "sw-nj-banner"; } else { $biao = "sw-mgl-banner"; } } else { if ($_SESSION['address'] == '北京·太阳公元') { $biao = "mgl-banner"; } elseif ($_SESSION['address'] == '上海·外滩') { $biao = "sh-banner"; } elseif ($_SESSION['address'] == '天津·爱琴海') { $biao = "tj-banner"; } elseif ($_SESSION['address'] == '南京·外秦淮') { $biao = "njwq-banner"; } elseif ($_SESSION['address'] == '南京·1865') { $biao = "nj-banner"; } else { $biao = "mgl-banner"; } } $home_slides=sp_getslide($biao,$limit=5,$order = "listorder ASC"); ?>
<div class="main-banner">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><div class="swiper-slide"><a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a></div><?php endforeach; endif; ?>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="/js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container');
    </script>
</div>

<div class="index-partone">
    <div class="index-partone-03">
        <img src="/images/yugu-wap.png">
    </div>
    <div class="clear"></div>
    <div class="index-partone-01">
        <ul>
            <li class="active" id="yuyueclick">点击预约</li>
        </ul>
    </div>
    <div class="index-partone-01">
        <ul>
            <li class="active" id="addressclick">发送地址</li>
        </ul>
    </div>
    <div class="index-partone-01">
        <ul>

            <li class="active" id="dateselect">查询档期</li>
        </ul>
    </div>

</div>


<div class="index-title">
    婚礼馆场<a href="/index.php?m=list&a=index&id=1">查看更多>></a>
</div>
<div class="index-cghl clear">
    <ul>
        <?php $lists = sp_sql_posts_paged("cid:1;order:listorder DESC;where:postadderss='$address'",3); ?>
        <?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $smeta=json_decode($vo['smeta'], true); ?>
            <li>
                <div class="aimg">
                    <a class="huang" href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">
                        <?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>">
                            <?php else: ?>
                            <img src="/images/no-data.png"><?php endif; ?>
                    </a>
                    <span><?php echo ($vo["post_title"]); ?></span>

                </div>
                <p class="class1">优惠:<?php echo ($vo["youhui"]); ?></p>
                <p class="class2">特色:<?php echo ($vo["tese"]); ?></p>
                <p class="class3">场地价格:<?php echo ($vo["jiage"]); ?></p>
                <p class="class4">容纳桌数:<?php echo ($vo["zhuoshu"]); ?></p>
                <a href="javascript:;" class="clear yuyueclick">预约看馆</a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<div class="index-title">
    婚礼案例<a href="/index.php?m=list&a=index&id=9">查看更多>></a>
</div>
<div class="index-hlsl clear">
    <div class="swiper-container" id="hlsl-swiper">
        <div class="swiper-wrapper">
            <ul class="swiper-slide">
                <?php $lists = sp_sql_posts_paged_index("cid:9;order:listorder
                    DESC;limit:0,1;where:postadderss='$address'",1); ?>
                <?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $smeta=json_decode($vo['smeta'], true); ?>
                    <li>
                        <div class="aimg">
                            <a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">
                                <?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>">
                                    <?php else: ?>
                                    <img src="/images/no-data.png"><?php endif; ?>
                            </a>
                        </div>
                        <span><?php echo ($vo["post_title"]); ?></span>


                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ul class="swiper-slide">
                <?php $lists = sp_sql_posts_paged_index("cid:9;order:listorder
                    DESC;limit:1,1;where:postadderss='$address'",1); ?>
                <?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $smeta=json_decode($vo['smeta'], true); ?>
                    <li>
                        <div class="aimg">
                            <a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">
                                <?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>">
                                    <?php else: ?>
                                    <img src="/images/no-data.png"><?php endif; ?>
                            </a>
                        </div>
                        <span><?php echo ($vo["post_title"]); ?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ul class="swiper-slide">
                <?php $lists = sp_sql_posts_paged_index("cid:9;order:listorder
                    DESC;limit:2,1;where:postadderss='$address'",1); ?>
                <?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $smeta=json_decode($vo['smeta'], true); ?>
                    <li>
                        <div class="aimg">
                            <a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>">
                                <?php if(!empty($smeta['thumb'])): ?><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>">
                                    <?php else: ?>
                                    <img src="/images/no-data.png"><?php endif; ?>
                            </a>
                        </div>
                        <span><?php echo ($vo["post_title"]); ?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>

        </div>

        <div class="swiper-button-prev swiper-button-black"></div>
        <div class="swiper-button-next swiper-button-black"></div>
    </div>

</div>
<div class="index-title">
    玫瑰里大事件<a href="/index.php?g=portal&m=list&a=index&id=19">查看更多>></a>
</div>
<div class="index-hlsl clear">
    <ul class="swiper-slides">
        <?php $lists = sp_sql_posts_paged("cid:19,20;order:listorder DESC;where:postadderss='$address'",10); ?>
        <?php if(is_array($lists['posts'])): $i = 0; $__LIST__ = $lists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $smeta=json_decode($vo['smeta'], true); ?>
            <li>
                <div class="aimg">
                    <?php if(!empty($smeta['thumb'])): ?><a href="<?php echo leuu('article/index',array('id'=>$vo['tid'],'cid'=>$vo['term_id']));?>"><img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>"></a>
                        <?php else: ?>
                        <img src="/images/no-data.png"><?php endif; ?>
                </div>
                <span><?php echo ($vo["post_title"]); ?></span>
                <!--<span> <?php echo ($vo["post_date"]); ?></span>-->

            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

</div>
<img src="/images/index-ad.png">
<div class="index-comment-title">
    <span>客户服务中心</span>
</div>
<div class="index-comment-con clear">
    <textarea name="msg" class="msg" placeholder="请输入评论"></textarea>
    <p class="red" id="msg-errormessage"></p>
    <div class="index-comment-con-bottom"><img src="/images/index-touxiang.png"><span>Cora</span>
        <button onclick="postmsg()">发布</button>
    </div>
</div>
<div class="comment-con">
    <h1>全部评论</h1>
    <ul>
        <?php if(is_array($commentlist)): foreach($commentlist as $key=>$vo): ?><li>
                <div class="dimg">

                    <?php if(!empty($vo['avatar'])): ?><img src="<?php echo sp_get_user_avatar_url($vo['avatar']);?>">
                        <?php else: ?>
                        <img src="/images/index-touxiang-a.png"><?php endif; ?>

                </div>
                <div class="comlist-r">
                    <h1><span><?php echo ($vo["user_nicename"]); ?></span> <?php echo ($vo["createtime"]); ?></h1>
                    <p><?php echo ($vo["msg"]); ?></p>
                    <p class="b-r"><a href="<?php echo U('index/do_like',array('id'=>$vo['id']));?>"><i
                            class="fa fa-thumbs-o-up"></i><span class="count">(<?php echo ($vo["post_like"]); ?>)</span></a></p>
                </div>
            </li>
            <!-- <tr>
            <td><?php echo ($vo["ccatcode"]); ?></td>
            <td><?php echo ($vo["cname"]); ?></td>
            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["part"]); ?></td>
            <td><a href="<?php echo U('user/contact/doedit',array('id'=>$vo['id']));?>">修改</a> </td>
            </tr> --><?php endforeach; endif; ?>
    </ul>
</div>

<div class="index-title clear">
    品牌介绍<a href="/index.php?m=page&a=index&id=3">查看更多>></a>
</div>
<img src="/images/index-aboutad.png" class="mtb50">

<div class="footer clear">

<ul>
	<li><a href="<?php echo U('index/main');?>">玫瑰里·婚礼</a></li>
	<li><a href="<?php echo U('index/swmain');?>">玫瑰里·商务</a></li>
	<li><a href="/index.php?m=page&a=index&id=1">关于我们</a></li>
</ul>
<p class="url">
	www.lavin.com.cn
</p>
<p class="tel">
	4006-111-521
</p>
<p>
©2012玫瑰里文化集团有限公司版权所有
</p>
</div>
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/themes/simplebootx_mobile/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		$("#main-menu a").each(function() {
	   		 if ($(this)[0].href == String(window.location)) {
	        	$(this).parentsUntil("#main-menu>ul>li").addClass("active");
	    	}
		});
		$("#navaddress").change(function(){
			$.post("<?php echo U('index/getaddsession');?>",{address:$(this).val()},function(data){
			if(data.status==1){
				var indexhref= $('#main-menu li a').eq(0).attr('href'); 
				if(indexhref){
					window.location.href=indexhref;
				}
				 
			}			 
			
		});	
			 
  
        });
          $.get("<?php echo U('index/updatenum');?>",{ },function(data){});	
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#center-login span.login").show();
				
			}
			if(data.status==0){
				$("#center-login span.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


﻿<div id="index-bg-fixed">
</div>
<!-- 快速预约 -->
<div class="fixed-wapper" id="index-yuyue">
<div class="fixed-content">
<div class="fixed-logo"><img src="/images/index-fixed-logo.png"></div>
<div class="fixed-close">
	<img src="/images/index-fixed-close.png">
</div>
<div class="form">
<h1>快速预约</h1>
	<p class="form-p">您选择的条件如下:</p>
	<p class="select-p">选择地点<select name="address"><option>北京·太阳公元</option>
	<option>上海·外滩</option>
	<option>天津·爱琴海</option>
	<option>南京·外秦淮</option>
	<option>南京·1865</option>
	</select> 
	选择桌数<select name="number"><option>10桌以内</option>
	<option>10-16桌</option>
	<option>16桌以上</option>
	</select>
	</p>
	<input type="text" name="uname" placeholder="请输入您的姓名">
<input type="text" name="utel" placeholder="请输入您的手机号">
<p class="red" id="yy-errormessage"></p>
<button onclick="addpost('预约')">提交预约</button>
</div>

</div>
</div>
<!-- 发送地址 -->
<div class="fixed-wapper" id="index-address">
<div class="fixed-content">
<div class="fixed-logo"><img src="/images/index-fixed-logo.png"></div>
<div class="fixed-close">
	<img src="/images/index-fixed-close.png">
</div>
<div class="form">
	<p class="form-p">请选择门店</p>
	<p class="select-big-p"><select name="address"><option>北京·太阳公元</option>
	<option>上海·外滩</option>
	<option>天津·爱琴海</option>
	<option>南京·外秦淮</option>
	<option>南京·1865</option>
	</select> 	
	</p>
	<p class="form-p">请输入您的手机号</p>
<input type="text" name="phone" placeholder="请输入您的手机号">
<p class="red" id="address-errormessage"></p>
<button onclick="addpost('地址')">发送地址</button>
</div>

</div>
</div>
<!-- 查询档期 -->
<div class="fixed-wapper" id="index-dangqi">
<div class="fixed-content">
<div class="fixed-logo"><img src="/images/index-fixed-logo.png"></div>
<div class="fixed-close">
	<img src="/images/index-fixed-close.png">
</div>
<div class="form">
<h1>查询档期</h1>
	
	<p class="select-p-big">请选择门店<select name="address"><option>北京·太阳公元</option>
	<option>上海·外滩</option>
	<option>天津·爱琴海</option>
	<option>南京·外秦淮</option>
	<option>南京·1865</option>
	</select> 
	</p>
	<p class="form-p">请选择日期</p>
	<input type="text" name="datetime" placeholder="请选择日期" readonly="" id="checkdatetime">
	<p class="form-p">请输入您的手机号</p>
<input type="text" name="utel" placeholder="请输入您的手机号">
<p class="red" id="date-errormessage"></p>
<button onclick="addpost('日期')">提交预约</button>
</div>

</div>
</div>
 
</body>
</html>
<script src="/js/swiper3.0.js"></script>

<script>

    zaneDate({
        elem: '#checkdatetime',
        begintime: 1514779932000,
        format: 'yyyy-MM-dd',
        showtime: true
    })
    $('#yuyueclick,.yuyueclick').click(function () {
        $('#index-bg-fixed').show();
        $('#index-yuyue').show();
    });
    $('#addressclick').click(function () {
        $('#index-bg-fixed').show();
        $('#index-address').show();
    });
    $('#dateselect').click(function () {
        $('#index-bg-fixed').show();
        $('#index-dangqi').show();
    });
    $('.fixed-close').click(function () {
        $(this).parents('.fixed-wapper').hide();
        $('#index-bg-fixed').hide();
    });

    function addpost(postname) {
        switch (postname) {
            case '预约':
                $('#yy-errormessage').text('');
                if (!$('#index-yuyue input[name=uname]').val()) {
                    $('#yy-errormessage').text('姓名不能为空!');
                    return false;
                }
                if (!$('#index-yuyue input[name=utel]').val()) {
                    $('#yy-errormessage').text('手机号不能为空!');
                    return false;
                }

                var postdata = {
                    full_name: $('#index-yuyue input[name=uname]').val(),
                    address: $('#index-yuyue select[name=address]').val(),
                    number: $('#index-yuyue select[name=number]').val(),
                    tel: $('#index-yuyue input[name=utel]').val(),
                    from: '婚礼' + postname

                }
                ajaxpost(postdata);
                break;
            case '地址':
                $('#address-errormessage').text('');
                if (!$('#index-address input[name=phone]').val()) {
                    $('#address-errormessage').text('手机号不能为空!');
                    return false;
                }
                var postdata = {
                    address: $('#index-address select[name=address]').val(),
                    tel: $('#index-address input[name=phone]').val(),
                    from: '婚礼' + postname

                }
                ajaxpost(postdata);
                break;
            case '日期':
                $('#date-errormessage').text('');
                if (!$('#index-dangqi input[name=utel]').val()) {
                    $('#date-errormessage').text('手机号不能为空!');
                    return false;
                }
                if (!$('#index-dangqi input[name=datetime]').val()) {
                    $('#date-errormessage').text('请选择日期!');
                    return false;
                }
                var postdata = {
                    address: $('#index-dangqi select[name=address]').val(),
                    datetime: $('#index-dangqi input[name=datetime]').val(),
                    tel: $('#index-dangqi input[name=utel]').val(),
                    from: '婚礼' + postname

                }
                ajaxpost(postdata);
                break;
            default:
                break;
        }

    }

    function ajaxpost(data) {
        $.ajax({
            url: "<?php echo U('index/indexformadd');?>",
            type: "POST",
            data: data,
            dataType: "json",
            success: function (data) {
                if (data.status == 1) {
                    alert('提交成功!');
                } else {
                    alert(data.info);
                }
                location.reload();

            },
        });
    }

    function postmsg() {
        var msg = $('.msg').val();
        if (!msg) {
            $('#msg-errormessage').text('评论内容不能为空!');
            return false;
        }
        var data = {
            msg: msg
        }
        $.ajax({
            url: "<?php echo U('user/center/indexmsgadd');?>",
            type: "POST",
            data: data,
            dataType: "json",
            success: function (data) {
                if (data.status == 1) {
                    alert('提交成功!');
                } else {
                    alert(data.info);
                }
                location.reload();

            },
        });

    }

    var swiper = new Swiper('#hlsl-swiper', {
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        parallax: true,
        speed: 600,
    });
</script>