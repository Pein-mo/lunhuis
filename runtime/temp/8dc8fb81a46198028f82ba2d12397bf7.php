<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\phpStudy\WWW\entss\public/../application/index\view\news\index.html";i:1505133793;s:73:"D:\phpStudy\WWW\entss\public/../application/index\view\public\header.html";i:1505007047;s:71:"D:\phpStudy\WWW\entss\public/../application/index\view\public\foot.html";i:1505007368;}*/ ?>
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
			<i class="am-icon-newspaper-o toppic-title-i"></i>
			<span class="toppic-title-span">新闻动态</span>
			<p>Hengwang News</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo url('Index/index'); ?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('News/index'); ?>" class="w-white">新闻动态</a></span>
		</div>
	</div>
</div>


<link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">	
<div class="am-container-1 news-content-all">
<div class="left am-u-sm-12 am-u-md-8 am-u-lg-9 ">
	  <ul class="news-ul">
	  	<?php foreach($data as $v): ?>
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="<?php echo url('News/info',['id'=>$v['id']]); ?>">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="__uploads__/<?php echo $v['photo']; ?>"/>		  	  		  	 
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i><?php echo date('Y-m-d',$v['create_time']); ?></div>
		  		  	<div class="inform-list-label"><i class="am-icon-arrow-circle-right"></i><?php echo $v['name']; ?></div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：<?php echo $v['views']; ?></div>
	  		  </div>		  
	  		  <span><?php echo $v['title']; ?></span>
	  		  <p><?php echo $v['remark']; ?></p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div>
	  	  </a>
	  	</li>
	  	<?php endforeach; ?>
	  	<div class="clear"></div>
		</ul>
		<?php echo $data->render(); ?>	  
</div>	  

<div class="left am-u-sm-12 am-u-md-4 am-u-lg-3">
	
	<section data-am-widget="accordion" class="am-accordion am-accordion-gapped" data-am-accordion='{  }'>
		<div class="hot-title"><i class="am-icon-thumbs-o-up"></i>热门新闻 / Hot 	News</div>
		<?php foreach($hot as $k=>$v): ?>
      <dl class="am-accordion-item <?php if($k == 0): ?>am-active<?php endif; ?>">
        <dt class="am-accordion-title">
          <?php echo $v['title']; ?>
        </dt>
        <dd class="am-accordion-bd am-collapse <?php if($k == 0): ?>am-in<?php endif; ?>">
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <div class="am-accordion-content">
            <?php echo $v['remark']; ?>
          </div>
        </dd>
      </dl>
      <?php endforeach; ?>
      
      
  </section>
	
</div>

<div class="clear"></div>
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

