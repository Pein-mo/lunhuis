<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpStudy\WWW\entss\public/../application/index\view\recruit\index.html";i:1505144844;s:73:"D:\phpStudy\WWW\entss\public/../application/index\view\public\header.html";i:1505007047;s:71:"D:\phpStudy\WWW\entss\public/../application/index\view\public\foot.html";i:1505007368;}*/ ?>
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
			<span class="toppic-title-span">招贤纳士</span>
			<p>Recruit</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo url('Index/index'); ?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('Product/Recruit'); ?>" class="w-white">招贤纳士</a></span>
		</div>
	</div>
</div>

<div >
	<ul class=" product-show-ul">
		<?php foreach($data as $k=>$v): ?>
		 <li <?php if($k % 2 == 0): ?>class="gray-li"<?php endif; ?>>
	    	<div class="product-content">
			    	<div class=" am-u-sm-12 am-u-md-6 am-u-lg-6 <?php if($k % 2 == 0): ?>left recruit-left<?php else: ?>right recruit-right<?php endif; ?>">
			    		<img class="product-img" src="__uploads__/<?php echo $v['photo']; ?>" />
			    	</div>
			    	<div class=" am-u-sm-12 am-u-md-6 am-u-lg-6 <?php if($k % 2 == 0): ?>right recruit-right<?php else: ?>recruit-left left<?php endif; ?>">
			    		
			    		<div class="product-show-title">			    			
			    			<span><?php echo $v['title']; ?></span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<?php echo $v['content']; ?>
			    	</div>
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>
	    <?php endforeach; ?>
	    	
	   
	    <div class="clear"></div>
	</ul>
</div>

  
   
<div class=" gray-li">		
<div class="am-container-1">
	<div class="part-title part-title-mar">
			<i class="am-icon-users part-title-i"></i>
			<span class="part-title-span">优厚待遇</span>
			<p>Good Treatments</p>
		</div>
</div>
<div data-am-widget="tabs"class="am-tabs am-tabs-d2 ">

      <ul class="am-tabs-nav am-cf daiyu-title-ul ">
         <li class="am-active "><a href="[data-tab-panel-0]" ><span class="w-white"> 福利待遇</span></a></li>
          <li class=""><a href="[data-tab-panel-1]"><span class="w-white">薪资待遇</span></a></li>
          
      </ul>

      <div class="am-tabs-bd daiyu-content ">
          <div data-tab-panel-0 class="am-tab-panel am-active">
          	<div class=" daiyu-content-1">
                <p>1.享有每周双休</p>
<p>2.年终奖</p>
<p>3.项目奖金/产品提成</p>
<p>4.调休</p>
<p>5.五险（养老保险、医疗保险、失业保险、工伤保险和生育保险）</p>
<p>6.出差补贴（一线城市100/天，二线城市60/天），出差包住</p>
<p>7. 公司每1-2月举行聚餐 </p>
<p>8. 每天7小时工作时间 早上9：00-12：00下午1：30-5:30</p>	
            </div>
            
          </div>
          <div data-tab-panel-1 class="am-tab-panel ">
             <div class=" daiyu-content-1">
                <p>1.安卓开发工程师：4000元-7000元</p>
                <p>2.软件测试人员：3000元-5000元</p>
                <p>3.JAVA软件开发工程师：4000元-6000元</p>
            </div>
          </div>
          
          
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


