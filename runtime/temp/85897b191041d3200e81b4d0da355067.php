<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\phpStudy\WWW\entss\public/../application/index\view\solutions\solutions.html";i:1505059009;s:73:"D:\phpStudy\WWW\entss\public/../application/index\view\public\header.html";i:1505007047;s:71:"D:\phpStudy\WWW\entss\public/../application/index\view\public\foot.html";i:1505007368;}*/ ?>
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
			<i class="am-icon-lightbulb-o toppic-title-i"></i>
			<span class="toppic-title-span">解决方案</span>
			<p>Solutions</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="index.html" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('Solutions/index'); ?>" class="w-white">解决方案</a></span>
		</div>
	</div>
</div>

		

  
   <div data-am-widget="tabs"class="am-tabs am-tabs-d2 ">

      <ul class="am-tabs-nav am-cf solutions-tabs-ul ">
      		<!--<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $k=>$vo): ?>
      			<li class="am-active solutions-tabs-ul-li<?php echo $k+1; ?>"><a href="[data-tab-panel-<?php echo $k; ?>]" ><i <?php if($k % 2 == 0): ?>class=" am-icon-desktop" <?php else: ?>class=" am-icon-mobile-phone mobile-phone"<?php endif; ?>></i><span><?php echo $vo['name']; ?></span></a></li>
      		<?php endforeach; endif; else: echo "" ;endif; ?>-->
         <li class="am-active solutions-tabs-ul-li1"><a href="[data-tab-panel-0]" ><i class=" am-icon-desktop"></i><span><?php echo $cate[0]['name']; ?></span></a></li>
          <li class="solutions-tabs-ul-li2"><a href="[data-tab-panel-1]"><i class=" am-icon-mobile-phone mobile-phone"></i><span><?php echo $cate[1]['name']; ?></span></a></li>
          <li class="solutions-tabs-ul-li3"><a href="[data-tab-panel-2]" ><i class=" am-icon-desktop"></i><span><?php echo $cate[2]['name']; ?></span></a></li>
          <li class="solutions-tabs-ul-li4"><a href="[data-tab-panel-3]"><i class=" am-icon-mobile-phone mobile-phone"></i><span><?php echo $cate[3]['name']; ?></span></a></li>
      </ul>

      <div class="am-tabs-bd solutions-tabs-content ">
          <div data-tab-panel-0 class="am-tab-panel am-active">
          	<ul class=" solutions-content-ul">
          		<?php if(is_array($solu1) || $solu1 instanceof \think\Collection || $solu1 instanceof \think\Paginator): if( count($solu1)==0 ) : echo "" ;else: foreach($solu1 as $k=>$v): ?>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="<?php echo url('Solutions/info',['id'=>$v['id']]); ?>">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="__uploads__/<?php echo $v['img']; ?>" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5><?php echo $v['title']; ?></h5>
            			<p><?php echo $v['remark']; ?></p>
            		</div>
            		</a>
            	</li>
            	<?php endforeach; endif; else: echo "" ;endif; ?>
            	<div class="clear"></div>
            </ul>
            
          </div>
          <div data-tab-panel-1 class="am-tab-panel ">
             <ul class="am-container-1 solutions-content-ul">
            	<?php if(is_array($solu2) || $solu2 instanceof \think\Collection || $solu2 instanceof \think\Paginator): if( count($solu2)==0 ) : echo "" ;else: foreach($solu2 as $k=>$v): ?>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="<?php echo url('Solutions/info',['id'=>$v['id']]); ?>">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="__uploads__/<?php echo $v['img']; ?>" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5><?php echo $v['title']; ?></h5>
            			<p><?php echo $v['remark']; ?></p>
            		</div>
            		</a>
            	</li>
            	<?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
          <div data-tab-panel-2 class="am-tab-panel ">
            <ul class="am-container-1 solutions-content-ul">
            	<?php if(is_array($solu3) || $solu3 instanceof \think\Collection || $solu3 instanceof \think\Paginator): if( count($solu3)==0 ) : echo "" ;else: foreach($solu3 as $k=>$v): ?>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="<?php echo url('Solutions/info',['id'=>$v['id']]); ?>">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="__uploads__/<?php echo $v['img']; ?>" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5><?php echo $v['title']; ?></h5>
            			<p><?php echo $v['remark']; ?></p>
            		</div>
            		</a>
            	</li>
            	<?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
          <div data-tab-panel-3 class="am-tab-panel ">
            <ul class="am-container-1 solutions-content-ul">
            	<?php if(is_array($solu4) || $solu4 instanceof \think\Collection || $solu4 instanceof \think\Paginator): if( count($solu4)==0 ) : echo "" ;else: foreach($solu4 as $k=>$v): ?>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="<?php echo url('Solutions/info',['id'=>$v['id']]); ?>">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="__uploads__/<?php echo $v['img']; ?>" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5><?php echo $v['title']; ?></h5>
            			<p><?php echo $v['remark']; ?></p>
            		</div>
            		</a>
            	</li>
            	<?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
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

