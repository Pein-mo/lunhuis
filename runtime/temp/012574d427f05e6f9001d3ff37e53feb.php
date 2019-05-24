<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\entss\public/../application/index\view\product\index.html";i:1505103025;s:73:"D:\phpStudy\WWW\entss\public/../application/index\view\public\header.html";i:1505007047;s:71:"D:\phpStudy\WWW\entss\public/../application/index\view\public\foot.html";i:1505007368;}*/ ?>
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
			<i class="am-icon-dropbox toppic-title-i"></i>
			<span class="toppic-title-span">产品展示</span>
			<p>Product Show</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo url('Index/index'); ?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('Product/index'); ?>" class="w-white">产品展示</a></span>
		</div>
	</div>
</div>

<div >
	<ul class=" product-show-ul">
		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $k=>$v): ?>
	    <li <?php if($k % 2 == 0): else: ?>class="gray-li"<?php endif; ?>>
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-6 am-u-lg-6 <?php if($k % 2 == 0): ?>product-content-right<?php else: ?>product-content-left<?php endif; ?>">
			    		<div class="product-show-title">
			    			<h3><?php echo $v['title']; ?></h3>
			    			<span><?php echo $v['name']; ?></span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
			    			<div><a href="http://<?php echo $v['url']; ?>" target="_blank"><?php echo $v['url']; ?></a></div>
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div><p><?php echo $v['remark']; ?></p></div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 <?php if($k % 2 == 0): ?>product-content-left<?php else: ?>product-content-right<?php endif; ?>">
			    		<img class="product-img" src="__uploads__/<?php echo $v['img']; ?>" />
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	    <?php endforeach; endif; else: echo "" ;endif; ?>
	    
	    <div class="clear"></div>
	</ul>
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


