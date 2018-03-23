<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
	<title>商品结算</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Bootstrap不支持IE的兼容模式，此处使IE浏览器运行最新的渲染模式 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 响应式布局开启视窗控制 -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 页面信息 -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	

	<!-- 网站个性图标 -->
	<link rel="icon" href="__PUBLIC__/index/img/favicon/favicon.html" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="__PUBLIC__/index/img/favicon/apple-touch-icon-144x144-precomposed.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="__PUBLIC__/index/img/favicon/apple-touch-icon-72x72-precomposed.html">
	<link rel="apple-touch-icon-precomposed" href="__PUBLIC__/index/img/favicon/apple-touch-icon-precomposed.html">
	<!-- // 网站个性图标 -->
	

	<!-- GENERAL CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/minified.css">
	<!-- // GENERAL CSS FILES -->
	
	<!--[if IE 8]>
		<script src="js/respond.min.js"></script>
		<script src="js/selectivizr-min.js"></script>
	<![endif]-->

	<script>window.jQuery || document.write('<script src="__PUBLIC__/index/js/jquery.min.js"><\/script>');</script>
	<script src="__PUBLIC__/index/js/modernizr.min.js"></script>	
	<!-- PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/innerpage.css">
	<!-- // PARTICULAR PAGES CSS FILES -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/responsive.css">
</head>
<body>
			
	<!-- PAGE WRAPPER -->
<div id="page-wrapper">
	<!-- 站点头部 -->
	<!-- SITE HEADER 站点页眉 -->
<header>
<div id="site-header" class="push-up" role="banner">
	<!-- HEADER TOP 页眉顶部 -->
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<!-- CONTACT INFO 联系信息 -->
					<div class="contact-info">
						<i class="iconfont-headphones round-icon"></i>
						<strong><?php echo ($head["cellphone"]); ?></strong>
						<span>(营业时间：09:00 - 22:00)</span>
					</div>
					<!-- // CONTACT INFO 联系信息 -->
				</div>
				<div class="col-xs-12 col-sm-6">
					<ul class="actions unstyled clearfix">
						<li>
							<!-- SEARCH BOX 搜索框 -->
							<div class="search-box">
								<form action="__APP__/Products/products/search" method="post">
									<div class="input-iconed prepend">
										<button class="input-icon"><i class="iconfont-search"></i></button>
										<label for="input-search" class="placeholder">请输入搜索内容…</label>
										<input type="text" name="search" id="input-search" class="round-input full-width" required />
									</div>
								</form>
							</div>
							<!-- // SEARCH BOX 搜索框 -->
						</li>
						<li data-toggle="sub-header" data-target="#sub-cart">
							<!-- SHOPPING CART 购物车-->
							<a href="javascript:void(0);" id="total-cart">
								<i class="iconfont-shopping-cart round-icon"></i>
							</a>
							
							<div id="sub-cart" class="sub-header">
								<div class="cart-header">
									<span>您的购物车当前为空.</span>
									<small><a href="__APP__/Cart/cart">(查看全部)</a></small>
								</div>
								<ul class="cart-items product-medialist unstyled clearfix"></ul>
								<div class="cart-footer">
									<div class="cart-total clearfix">
										<span class="pull-left uppercase">总计</span>
										<span class="pull-right total">￥ 0</span>
									</div>
									<div class="text-right">
										<a href="__APP__/Cart/cart" class="btn btn-default btn-round view-cart">查看购物车</a>
									</div>
								</div>
							</div>
							<!-- // SHOPPING CART 购物车 -->
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- ADD TO CART MESSAGE 添加到购物车 -->
		<div class="cart-notification">
			<ul class="unstyled"></ul>
		</div>
		<!-- // ADD TO CART MESSAGE 添加到购物车 -->
	</div>
	<!-- // HEADER TOP 头部顶部 -->
	<!-- MAIN HEADER 头部主要部分 -->
	<div class="main-header-wrapper">
		<div class="container">
			<div class="main-header">
				<!-- CURRENCY 用户菜单 -->
				<div class="actions">
					<!-- USER RELATED MENU 用户相关菜单 -->
					<nav id="tiny-menu" class="clearfix">
						<ul class="user-menu" >
							<?php if(empty($_SESSION['Username'])): ?><!-- 登陆成功后此处隐藏并显示用户名，点击可进入用户中心 -->
								<li><a blank-"_blank" href="__APP__/Login/login" style="font-size:13px;">登录</a></li>
							<?php else: ?>
								<li><a blank-"_blank" href="__APP__/Personal/center"><?php echo (session('Username')); ?></a></li><?php endif; ?>
							<!-- 登陆成功后此处隐藏 -->
							<li><a href="__APP__/Register/register" style="font-size:13px;">注册会员</a></li>

							<!-- 清除cookie -->
							<?php if(!empty($_SESSION['Username'])): ?><li><a href="__APP__/Login/loginout" style="font-size:13px;">退出</a></li><?php endif; ?>
						</ul>
					</nav>
					<!-- // USER RELATED MENU 用户相关菜单 -->
				</div>
				<!-- // CURRENCY  用户菜单 -->
				<!-- SITE LOGO 站点 logo -->
				<div class="logo-wrapper">
					<a href="__APP__" class="logo" title="<?php echo ($head["shoptitle"]); ?>">
						<img src="__PUBLIC__/Uploads/config/<?php echo ($head["logo"]); ?>" alt="<?php echo ($head["shoptitle"]); ?>" />
					</a>
				</div>
				<!-- // SITE LOGO 站点 logo -->
				<!-- SITE NAVIGATION MENU 网站导航菜单 -->
				<nav id="site-menu" role="navigation">
					<ul class="main-menu hidden-sm hidden-xs">
						<li class="active">
							<a href="__APP__">首页</a>
						</li>
						<li>
							<a href="__APP__/Products/products">产品列表</a>
						</li>
						<?php if(empty($_SESSION['Username'])): else: ?>
							<li class="dropdown">
								<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"> -->
								<a href="__APP__/Personal/center">个人中心</a>
								<!-- <b class="caret"></b> 是否显示下拉条 -->
							</li><?php endif; ?>
						<li>
							<a href="__APP__/Cart/cart">购物车</a>
						</li>
						<li>
							<a href="__APP__/Checkout/checkout">结账</a>
						</li>
					</ul>
					
					<!-- MOBILE MENU 手机菜单 -->
						<div id="mobile-menu" class="dl-menuwrapper visible-xs visible-sm" style="z-index:10">
							<button class="dl-trigger"><i class="iconfont-reorder round-icon"></i></button>
							<ul class="dl-menu">
								<li class="active">
									<a href="__APP__">首页</a>
								</li>
						<li>
							<a href="__APP__/Products/products">产品列表</a>
						</li>
						<?php if(empty($_SESSION['Username'])): else: ?>
							<li class="dropdown">
								<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"> -->
								<a href="__APP__/Personal/center">个人中心</a>
								<!-- <b class="caret"></b> 是否显示下拉条 -->
							</li><?php endif; ?>
						<li>
							<a href="__APP__/Cart/cart">购物车</a>
						</li>
						<li>
							<a href="__APP__/Checkout/checkout">结账</a>
						</li>
							</ul>
						</div>
					<!-- // MOBILE MENU 手机菜单 -->

				</nav>
				<!-- // SITE NAVIGATION MENU 网站导航菜单 -->
			</div>
		</div>
	</div>
	<!-- // MAIN HEADER 页眉主要部分 -->
</header>
<!-- // SITE HEADER 网站页眉-->
	
		<!-- BREADCRUMB -->
		<div class="breadcrumb-container">
			<div class="container">
				<div class="relative">
					<ul class="bc unstyled clearfix">
						<li><a href="#">首页</a></li>
						<li class="active">结算中心</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- // BREADCRUMB -->
		
		<!-- SITE MAIN CONTENT -->
		<main id="main-content" role="main">
		
			<div class="container">
				<div class="row">
					
					<div class="m-t-b clearfix">
						<!-- SIDEBAR -->
						<aside class="col-xs-12 col-sm-4 col-md-3">
							<section class="side-section">
								<h3 class="uppercase text-bold"><span class="text-xs">站内导航</span></h3>
								
								<ul class="nav nav-tabs nav-stacked">
									<li><a href="index-3.html">店铺首页</a></li>															
									<li><a href="about-us.html">关于店铺</a></li>															
									<li><a href="products-2.html">近期活动</a></li>															
									<li><a href="product-2.html">商品列表</a></li>															
									<li><a href="contact-us-2.html">联系我们</a></li>															
								</ul>
							</section>
								
							<!-- PROMO -->
							<div class="promo inverse-background" style="background: url('images/demo/Barn-Dress-Girl_t.jpg') no-repeat; background-size: auto 100%;">
								<div class="inner text-center np">
									<div class="ribbon">
										<h6 class="nmb">New Arrivals</h6>
										<h5 class="text-semibold uppercase nmb">Leather Fashion</h5>
										<div class="space10"></div>
										<a href="products.html" class="with-icon prepend-icon"><i class="iconfont-caret-right"></i><span> Shop Now</span></a>
									</div>
								</div>
							</div>
							<!-- // PROMO -->
						</aside>
						<!-- // SIDEBAR -->
						
						<section class="col-xs-12 col-sm-8 col-md-9">
							<div class="panel-group checkout" id="checkout-collapse">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse1">
												<span class="step">01</span>
												成功提交订单
											</a>
										</h4>

									</div>
									<div id="checkout-collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="row">
												<table border="1" width="600">
										<tr colspan="2">订单信息</tr>
										<tr>
											<th>订单编号:</th><td><?php echo ($odata["ordernum"]); ?></td>
										</tr>
										<tr>
											<th>订单金额:</th><td><?php echo ($odata["realprice"]); ?></td>
										</tr>
										<tr>
											<th>支付方式:</th><td><?php echo ($odata["payname"]); ?></td>
										</tr>
										<tr>
											<th>配送方式:</th><td><?php echo ($odata["diliveryname"]); ?></td>
										</tr>
										<tr>
										<th>
											<form action="__PUBLIC__/chinabank/Send.php" method="post">
												<input type="hidden" name="v_oid" value="<?php echo ($odata["ordernum"]); ?>">
												<input type="hidden" name="v_amount" value="<?php echo ($odata["totalprice"]); ?>">
												<input type="submit" class="btn btn-primary" value="立即支付"/>
											</form>
										</th>
										<td></td>
										</tr>
										
										</table>

											</div>
										</div>
									</div>
								</div>
								<!-- <div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#checkout-collapse" href="#checkout-collapse2">
												<span class="step">02</span>
												查看订单信息
											</a>
										</h4>
									</div>
									<div id="checkout-collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-6">
													区域一
												</div>
												<div class="col-xs-12 col-sm-12 col-md-6">
													区域二<img src='__URL__/verify/' />
												</div>
											</div>
										</div>
									</div>
								</div> -->

							</div>
						</section>
						
					</div>
				
				</div>
			</div>
		
		</main>
		<!-- // SITE MAIN CONTENT -->

		<!-- 站点页脚 -->
			<!-- SITE FOOTER 网站页脚 -->
<footer class="page-footer">
	
	<!-- WIDGET AREA 小部件区域 -->
	<div class="widgets">
	
		<!-- FIRST ROW 第一行 -->
		<div class="section">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-3">
						<section class="widget widget-menu">
							<h5 class="widget-title">联系方式</h5>
							<div class="widget-content">
								<ul class="menu iconed-list unstyled">
									<li>
										<span class="list-icon"><i class="round-icon iconfont-map-marker"></i></span>
										<div class="list-content"><?php echo ($foot["address"]); ?></div>
									</li>
									<li>
										<span class="list-icon"><i class="round-icon iconfont-phone"></i></span>
										<div class="list-content"><?php echo ($foot["cellphone"]); ?></div>
									</li>
									<li>
										<span class="list-icon"><i class="round-icon iconfont-envelope-alt"></i></span>
										<div class="list-content"><?php echo ($foot["aemail"]); ?></div>
									</li>
									<li>
										<span class="list-icon"><i class="round-icon iconfont-weibo"></i></span>
										<div class="list-content"><?php echo ($foot["weibo"]); ?></div>
									</li>
								</ul>
							</div>
						</section>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<section class="widget widget-text">
							<h5 class="widget-title">关于本店</h5>
							<div class="widget-content">
								<p>本店是韩都衣舍旗下女装品牌HSTYLE—韩风时尚女装。</p>
								<p>以产品"款式多、更新快、性价比高"而迅速赢得都市时尚人群信赖。</p>
								<p>韩都衣舍目标销售对象为都市时尚人群，公司旗下有超过500人的专业时尚设计师团队，并在韩国拥有分公司，同1000余家时尚品牌公司保持着紧密的、全方位的合作关系。
								</p>
							</div>
						</section>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3">
						<section class="widget widget-text">
							<h5 class="widget-title">营业时间</h5>
							<div class="widget-content">
								<p>周一 - 周五 :-------------------------8:00 -- 22:00</p>
								<p>周六 - 周日 :-------------------------9:00 -- 24:00</p>
								<br/>
								<p>全年365天营业，节假日不休息，韩都衣舍期待您的光临！</p>
							</div>
						</section>
					</div>
					
					<div class="space40 visible-sm clearfix"></div>
					
					<div class="col-xs-12 col-sm-6 col-md-2">
						<section class="widget widget-menu">
							<h5 class="widget-title">友情链接</h5>
							<div class="widget-content">
								<ul class="menu iconed-menu unstyled">
									<?php if(is_array($foot["links"])): foreach($foot["links"] as $key=>$v): ?><li><a href="<?php echo ($v["url"]); ?>"><i class="iconfont-circle-blank menu-icon"></i><?php echo ($v["lname"]); ?></a></li><?php endforeach; endif; ?>
								</ul>
							</div>
						</section>
					</div>
					
				</div>
			</div>
		</div>
		<!-- // FIRST ROW 第一行 -->
		
	</div>
	<!-- // WIDGET AREA 小部件区域 -->
	
	<div class="footer-sub">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
				<!-- 此处预留,项目审核前屏蔽	SC -->
<!-- 					<div class="footer-links center-xs clearfix">
						<ul class="unstyled">
							<li><a href="./Index/Tpl/Index/#">统计代码</a></li>
							<li><a href="./Index/Tpl/Index/#">常见问题</a></li>
							<li><a href="./Index/Tpl/Index/#">加入我们</a></li>
						</ul>
					</div>
					<div class="space10"></div> -->
					<div class="copyright center-xs">
						<p>© 2013-2014 意象图文 All rights reserved.</p>
					</div>
				</div>
				
				<div class="space40 visible-xs"></div>
				
				<div class="col-xs-12 col-sm-6">
					<div class="pull-right">
							<span class="uppercase">可选付款类型&emsp;</span>
							<a href="./Index/Tpl/Index/#"><img src="__PUBLIC__/index/img/visacard.png" alt="" width="40" /></a>
							<a href="./Index/Tpl/Index/#"><img src="__PUBLIC__/index/img/mastercard.png" alt="" width="40" /></a>
							<a href="./Index/Tpl/Index/#"><img src="__PUBLIC__/index/img/paypal.png" alt="" width="40" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</footer>
<!-- // SITE FOOTER 站点尾部 -->

</div>
<!-- // PAGE WRAPPER -->

<!-- Essential Javascripts -->
<script src="__PUBLIC__/index/js/minified.js"></script>
<!-- // Essential Javascripts -->

<!-- Particular Page Javascripts -->
<script src="__PUBLIC__/index/js/products.js"></script>
<!-- // Particular Page Javascripts -->
</body>
</html>