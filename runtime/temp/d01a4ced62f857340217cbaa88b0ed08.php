<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\phpStudy\WWW\entss\public/../application/index\view\about\index.html";i:1505146600;s:73:"D:\phpStudy\WWW\entss\public/../application/index\view\public\header.html";i:1505007047;s:71:"D:\phpStudy\WWW\entss\public/../application/index\view\public\foot.html";i:1505007368;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>万点星辰科技</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
  <link rel="alternate icon" type="__static__/img/hengwang-1.png" href="__static__/img/hengwang-1.png">
  <link rel="stylesheet" href="__static__/css/amazeui.css"/>
  <link rel="stylesheet" href="__static__/css/style.css"/>
</head>
<body>
<header class="am-topbar header">
	<div class="am-container-1">
		<div class="left hw-logo">
		  <img class=" logo" src="__static__/img/HENGWANG.png"></img>
		  <img class="word" src="__static__/img/hw-word.png"></img>
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
    

    <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
      <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
      <li <?php if($menu == 'index'): ?>class="hw-menu-active"<?php endif; ?>><a href="<?php echo url('Index/index'); ?>">首页</a></li>
      <li <?php if($menu == 'solutions'): ?>class="hw-menu-active"<?php endif; ?>><a href="<?php echo url('Solutions/index'); ?>">解决方案</a></li>
      <li <?php if($menu == 'product'): ?>class="hw-menu-active"<?php endif; ?>><a href="<?php echo url('Product/index'); ?>">产品展示 </a></li>
      <li <?php if($menu == 'customer'): ?>class="hw-menu-active"<?php endif; ?>><a href="<?php echo url('Customer/index'); ?>">客户案例</a></li>
      <li <?php if($menu == 'server'): ?>class="hw-menu-active"<?php endif; ?>><a href="<?php echo url('Server/index'); ?>">服务中心 </a></li>
      <li <?php if($menu == 'news'): ?>class="hw-menu-active"<?php endif; ?>><a href="<?php echo url('News/index'); ?>">新闻动态 </a></li>
      <li <?php if($menu == 'about'): ?>class="hw-menu-active"<?php endif; ?>><a href="<?php echo url('About/index'); ?>">关于我们</a></li>
      <li <?php if($menu == 'recruit'): ?>class="hw-menu-active"<?php endif; ?>><a href="<?php echo url('Recruit/index'); ?>">招贤纳士 </a></li>
    </ul>
    </div>

  </div>
  </div>
</header>
<div class="toppic">
	 <div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-paper-plane toppic-title-i"></i>
			<span class="toppic-title-span">关于我们</span>
			<p>About Us</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo url('Index/index'); ?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('About/index'); ?>" class="w-white">关于我们</a></span>
		</div>
	</div>
</div>

<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class=" am-icon-paper-plane part-title-i"></i>
			<span class="part-title-span">关于万点星辰</span>
			<p>About wandianxingchen</p>
			</a>
		</div>
	<div class="company-intro">
		<?php echo $config['web_about_us']; ?>
	</div>
</div>
<div class="gray-li company-thought-all" >
	<div class=" am-container-1">
			<ul class="company-thought">
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-circle-o-notch"></i>
				  	<span>企业理念</span>
				  	<div class="thought-all-none">
				  	    <h5>专注 专业</h5>
				    </div>
				  </div>
				  
				</li>
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-hand-o-right"></i>
				  	<span>服务理念</span>
				  	<div class="thought-all-none">
				  	    <h5>实务 用心</h5>
				    </div>
				  </div>	
				</li>
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-bar-chart"></i>
				  	<span>发展方向</span>
				  	<div class="thought-all-none">
				  	    <h5>精益求精</h5>
				    </div>
				  </div>	
				</li>
				<div class="clear"></div>
			</ul>
		</div>
</div>

	

<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class=" am-icon-home part-title-i"></i>
			<span class="part-title-span">办公环境</span>
			<p>Office Space</p>
			</a>
		</div>
	<div class="office-space">
		<?php foreach($data as $k=>$v): ?>
		<div  class="<?php if($k == 0): ?>cam-u-lg-6 am-u-md-6 am-u-sm-12<?php else: ?>cam-u-lg-3 am-u-md-3 am-u-sm-6<?php endif; ?>">
			<img src="__uploads__/<?php echo $v['photo']; ?>"/>
		</div>
		<?php endforeach; ?>
		<div class="clear"></div>
	</div>
	
</div>
</div>
<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class=" am-icon-comments-o part-title-i"></i>
			<span class="part-title-span">联系我们</span>
			<p>Contact Us</p>
			</a>
		</div>
</div>
<div class="gray-li">
<div class=" am-container-1">
	<div class="contact-us">
		 <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
		 	<img src="__uploads__/<?php echo $img['photo']; ?>" />
		 </div>
		 <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
		 	 <ul class="contact-add">
		 	 	<li>
		 	 		<div><i class=" am-icon-map-marker"></i><span class="contact-add-1"><?php echo $config['web_address']; ?></span></div>
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-phone"></i><span><?php echo $config['web_landline']; ?></span></div>		 	 		
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-mobile mobile"></i><span><?php echo $config['web_mobile']; ?></span></div>	 	 		
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-envelope-o"></i><span><?php echo $config['web_email']; ?></span></div>		 	 		
		 	 	</li>
		 	 </ul>	 	
		 </div>
		 <div class="clear"></div>
	</div>
</div>
</div>
<footer class="footer ">
	
<ul>
        
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title">联系我们</div>
            <div class="part-5-words2">
                <span>地址:<?php echo $config['web_address']; ?></span>
                <span>电话:<?php echo $config['web_mobile']; ?></span>
                <span>传真:<?php echo $config['web_landline']; ?></span>
                <span>邮箱:<?php echo $config['web_email']; ?></span>
                <span><i class="am-icon-phone"></i><em ><?php echo $config['web_landline']; ?></em></span>
                
            </div>
        </li>
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
            <div class="part-5-title">相关链接</div>
            <div class="part-5-words2">
                <ul class="part-5-words2-ul">
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('Solutions/index'); ?>">解决方案</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('Product/index'); ?>>产品展示</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('Customer/index'); ?>">客户案例</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('Server/index'); ?>">服务中心</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('About/index'); ?>">关于我们</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('Recruit/index'); ?>">招贤纳士</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </li>
        <div class="clear"></div>
    </ul>
   
</footer>


</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/__static__/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="__static__/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="__static__/js/amazeui.min.js"></script>
<script src="__static__/js/scroll.js"></script>
<script type="text/javascript">

</script>
</html>

