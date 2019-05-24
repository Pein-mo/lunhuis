<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\phpStudy\WWW\entss\public/../application/index\view\index\index.html";i:1505043626;s:73:"D:\phpStudy\WWW\entss\public/../application/index\view\public\header.html";i:1505007047;s:71:"D:\phpStudy\WWW\entss\public/../application/index\view\public\foot.html";i:1505007368;}*/ ?>
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
<div class="rollpic">
	 <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
	  <ul class="am-slides">
	  	<?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): if( count($img)==0 ) : echo "" ;else: foreach($img as $key=>$v): ?>
	      <li><img src="__uploads__/<?php echo $v['img']; ?>"/></li>
	      <?php endforeach; endif; else: echo "" ;endif; ?>
	  </ul>
    </div>
</div>
<div class="am-container-1">
	<div class="solutions part-all">
		<div class="part-title">
			<a href="solutions.html">
			<i class="am-icon-lightbulb-o part-title-i"></i>
			<span class="part-title-span">解决方案</span>
			<p>Solutions</p>
			</a>
		</div>
		<ul class="am-g part-content solutions-content">
		  <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
		  	<i class="am-icon-safari solution-circle"></i>
		  	<span class="solutions-title"><?php echo $a[0]['name']; ?></span>
		  	<p class="solutions-way"><?php echo $a[0]['remark']; ?></p>
		  </li>
		  <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
		  	<i class="am-icon-magic solution-circle"></i>
		  	<span class="solutions-title"><?php echo $a[1]['name']; ?></span>
		  	<p class="solutions-way"><?php echo $a[1]['remark']; ?></p>
		  </li>
		  <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
		  	<i class="am-icon-phone solution-circle"></i>
		  	<span class="solutions-title"><?php echo $a[2]['name']; ?></span>
		  	<p class="solutions-way"><?php echo $a[2]['remark']; ?></p>
		  </li>
		  <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
		  	<i class="am-icon-hacker-news solution-circle"></i>
		  	<span class="solutions-title"><?php echo $a[3]['name']; ?></span>
		  	<p class="solutions-way"><?php echo $a[3]['remark']; ?></p>
		  </li>
		  
		</ul>
		
	</div>
	</div>
	<div class="gray-li">
	<div class="customer-case part-all ">
		<div class="part-title">
			<a href="<?php echo url('Customer/index'); ?>">
			<i class=" am-icon-briefcase part-title-i"></i>
			<span class="part-title-span">客户案例</span>
			<p>Customer Case</p>
			</a>
		</div>
	
	
		 <ul data-am-widget="gallery" class=" am-avg-sm-1
  am-avg-md-4 am-avg-lg-4 am-gallery-bordered customer-case-content" >
      <?php if(is_array($customer) || $customer instanceof \think\Collection || $customer instanceof \think\Paginator): if( count($customer)==0 ) : echo "" ;else: foreach($customer as $key=>$vo): ?>
      <li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
        <div class="am-gallery-item case-img1">
            <a href="#" >
              <img src="__uploads__/<?php echo $vo['img']; ?>"  />
                
            </a>
        </div>
        <div class="case-li-mengban">
        	<div class=" case-word">
              <h3 class="am-gallery-title"><?php echo $vo['title']; ?></h3>
              <p><?php echo date('Y-m-d',$vo['create_time']); ?></p>
              <a href="<?php echo url('Customer/info',['id'=>$vo['id']]); ?>"><span><i class="am-icon-eye"></i>查看更多</span></a>
           </div>
        </div>
      </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      
      
  </ul>
		<div class="lan-bott">
			<div class="left"><span>全方位解决方案,为您轻松解决不同问题</span>
				<p>A full range of solutions for you to solve different problems</p>
			</div>
			<div class="right">
				<a href="<?php echo url('Customer/index'); ?>">
					<span class="see-more">查看更多<i class="am-icon-angle-double-right"></i></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="part-title">
		    	
		</div>
		</div>
</div>	
	



		
		
<div class=" news-all">
	<div class="am-container-1">
<div class="news part-all">
		<div class="part-title">
			<a href="<?php echo url('News/index'); ?>">
			<i class="am-icon-newspaper-o part-title-i"></i>
			<span class="part-title-span">新闻动态</span>
			<p>Hengwang News</p>
			</a>
		</div>
		<div class="news-content ">
				<ul class="news-content-ul">
					<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): if( count($news)==0 ) : echo "" ;else: foreach($news as $key=>$v): ?>
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
						<a href="#">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
						    	<div class="news-img">
						    	<img src="__uploads__/<?php echo $v['photo']; ?>"></img>
						    	</div>
						    </div>
						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-7">
										<span class="news-right-title"><?php echo $v['title']; ?></span>
										<p class="news-right-time"><?php echo date('Y-m-d',$v['create_time']); ?></p>
										<p class="news-right-words"><?php echo $v['remark']; ?></p>
										<a href="<?php echo url('News/info',['id'=>$v['id']]); ?>"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
								 </div>	
						<div class="clear"></div>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
							
					<div class="clear"></div>
				</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<!--<div class="three-reason">
			<div class="part-title three-reason-title">
			<span class="part-title-span w-white">选择恒望的三大理由</span>
			<p class="w-white">Why Choose Hengwang</p>
			
		</div>
			<ul class="am-g part-content three-reason-content">
			  <li class="am-u-sm-4 am-u-md-4 am-u-lg-4">
			  	<div class="three-reason-img1 "></div>
			  	<p class="reason-title w-white">规模优势<br/>Scale advantage</p>
			  </li>
			  <li class="am-u-sm-4 am-u-md-4 am-u-lg-4">
			  	<div class="three-reason-img2 "></div>
			  	<p class="reason-title w-white ">领先技术<br/>Leading technology</p>
			  </li>
			  <li class="am-u-sm-4 am-u-md-4 am-u-lg-4">
			  	<div class="three-reason-img3 "></div>
			  	<p class="reason-title w-white">整合能力<br/>Integration capability</p>
			  </li>
		</ul>
		</div>-->
<div class="part-all gray-li">
<div class="customer  am-container-1">
		<div class="part-title">
			<i class="am-icon-users part-title-i"></i>
			<span class="part-title-span">服务客户</span>
			<p>Serve Customers</p>
		</div>
		
		<div class="am-slider am-slider-default am-slider-carousel part-all" data-am-flexslider="{itemWidth:150, itemMargin: 5, slideshow: false}" style="  background-color: #f0eeed; box-shadow:none;">
  <ul class="am-slides">
  	<?php if(is_array($cust_img) || $cust_img instanceof \think\Collection || $cust_img instanceof \think\Paginator): if( count($cust_img)==0 ) : echo "" ;else: foreach($cust_img as $key=>$v): ?>
    <li><img src="__uploads__/<?php echo $v['img']; ?>"/></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
		<!--<ul class="customer-content">
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="__static__/img/ptn4.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="__static__/img/ptn5.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="__static__/img/ptn6.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="__static__/img/ptn7.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="__static__/img/ptn8.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="__static__/img/ptn4.png"/></div></li>
			<div class="clear"></div>
		</ul>-->
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

