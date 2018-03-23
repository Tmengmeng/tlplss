<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="noIE" lang="en-US"><!--<![endif]-->
<head>
	<title>订单详情</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Bootstrap不支持IE的兼容模式，此处使IE浏览器运行最新的渲染模式 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 响应式布局开启视窗控制 -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- 页面信息 -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	
	<!-- bootstarp css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/bootstrap.css">
	<!-- // bootstrap css 文件引入 -->

	<!-- 一般 css 文件引入 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/minified.css">
	<link rel="stylesheet" href="__PUBLIC__/index/css/innerpage.css">	
	<!-- // 一般 css 文件引入 -->

	<!--[if IE 8]>
		<script src="js/respond.min.js"></script>
		<script src="js/selectivizr-min.js"></script>
	<![endif]-->
	<!--
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	-->
	<!-- 挂载 jquery.min.js (上线采用)到对象 window 下，若不成功直接加载 -->
	<script>window.jQuery || document.write('<script src="__PUBLIC__/index/js/jquery.min.js"><\/script>');</script>
	<!-- // 挂载 jquery.min.js (上线采用)到对象 window 下，若不成功直接加载 -->
	
	<script src="__PUBLIC__/index/js/modernizr.min.js"></script>
	
	<!-- 挂载bootstrap js 文件 -->
	<script src="__PUBLIC__/index/js/bootstrap.js"></script>
	<!-- // 挂载 bootstarp js 文件 -->

	<!-- 响应式 css 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/index/css/responsive.css">
	<!-- // 响应式 css 文件 -->
	<style type="text/css">
		/* 定义图片 选择器，使宽高固定 */
		.img60px {
			width: 60px;
			height: 60px;
		}

		/* 定义固定高度div */
		.h11px {
			height: 11px;
			width: 100%;
			}
		.h20px {
			height: 20px;
			width: 100%;
			}
		.h30px {
				height: 30px;
		}
		/* 定义line-height为60px */
		.lineh60px{
			line-height: 60px;	
		}
		/* 定义灰色背景色 */
		.back-grey {
				background: #F2F2F2;
			}
		/* 格式化所有padding和marign */
		.nopm {
				margin: 0;
				padding: 0
			}
		.nop {
			padding: 0;
		}
		.nop-l{
			padding-left:0;
			}
		.nom {
			margin: 0;
		}
		/* 格式化表格border */
		.noborder {
			border: 0;
		}
		/* 重定义clearfix使具有高度 */
		.clearfix{
				height: 12px;
			}
		/* 重定义th标签 */
		th {
  			border-bottom:0;
    		vertical-align: bottom;
			font-size: 12px;
		}
		
	</style>
</head>
<body>
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
	<div class="breadcrumb-container">
		<div class="container">
			<div class="relative" style="padding-top:20px;padding-bottom:20px;">
				<ul class="bc push-up unstyled clearfix">
					<li><a href="__APP__">首页</a></li>
					<li><a href="__APP__/Personal/center">个人中心</a></li>
					<li class="active">订单详情</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="h30px"></div>
	<main id="main-content"role="main">
	<div class="container">
		<div class="col-md-offset-1 col-md-10">
			<div class="row">
				<div class="col-xs-3">
					<button type="button" class="btn <?php if($data['status'] == '未支付'): ?>btn-primary<?php else: ?>btn-error<?php endif; ?> btn-block">拍下宝贝</button>
				</div>
				<div class="col-xs-3 nop-l">
					<button type="button" class="btn <?php if($data['status'] == '未发货'): ?>btn-primary<?php else: ?>btn-error<?php endif; ?>r btn-block">买家支付</button>
				</div>
				<div class="col-xs-3 nop-l">
					<button type="button" class="btn <?php if($data['status'] == '未完成'): ?>btn-primary<?php else: ?>btn-error<?php endif; ?> btn-block">卖家发货</button>
				</div>
				<div class="col-xs-3 nop-l">
					<button type="button" class="btn btn-error btn-block">确认收货</button>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-xs-3 text-center">
					<p class="text-primary"><?php echo (date('Y-m-d H:i:s',$data["order"]["addtime"])); ?></p>
				</div>
				<div class="col-xs-3 text-center">
					<p class="text-primary"><?php echo ($data["order"]["paytime"]); ?></p>
				</div>
				<div class="col-xs-3 text-center">
					<p class="text-primary"><?php echo ($data["order"]["sendtime"]); ?></p>
				</div>
				<div class="col-xs-3 text-center">
					<p class="text-warning"><?php echo ($data["order"]["endtime"]); ?></p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="h20px"></div>
			<div class="breadcrumb-container" style="padding-left: 5%;">
				<p class="text-bold">订单状态：
					<span class="text-primary"><?php echo ($data["status"]); ?></span>
				</p>
				<div class="h11px"></div>
				<p>1.其他备注信息如果没有收到货，或收到货后出现问题，您可以联系卖家协商解决。</p>
				<p>2.如果卖家没有履行应尽的承诺，您可以"投诉维权"。</p>
				<p>3.当前订单状态： 卖家已发货，请查看页面下方物流信息了解宝贝寄送情况</p>
				<p>4.如果您已收到货，且对商品满意，您可以 确认收货 打款给卖家</p>
				<p>5.如果还未收到货，请注意自动打款时间，您可以 延长收货时间 或 申请退款 查看退款流程和规则</p>
			</div>
			<div class="clearfix"></div>
			<div class="h20px"></div>
			<div>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab-1" data-toggle="tab" style="margin-left: 100px; padding-bottom: 10px;">订单信息</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="tab-1">
						<table class="table">
								<thead>
									<tr>
										<td style="width:100px;">
											<p class="text-bold text-center">收货地址：</p><br/>
											<p class="text-bold text-center">买家留言：</p>
										</td>
										<td>
											<p class="text-left"><?php echo ($data["address"]["province"]); echo ($data["address"]["city"]); echo ($data["address"]["area"]); echo ($data["address"]["street"]); ?></p><br/>
											<p class="text-left"><?php echo ($data["order"]["uremark"]); ?></p>
										</td>
									</tr>
								</thead>
						</table>
						<table class="table">
							<tbody>
								<tr>
									<td style="padding-left:17px;">
										<p class="text-bold text-left">卖家信息：</p>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<td style="width:100px;"></td>
									<td><p>所在城市：</p></td>
									<td class="text-left"><p><?php echo ($head["address"]); ?></p></td>
									<td><p>电话：</p></td>
									<td><p><?php echo ($head["cellphone"]); ?></p></td>
									<td><p>邮箱：</p></td>
									<td><p><?php echo ($head["aemail"]); ?></p></td>
								</tr>
							</thead>
						</table>
						<table class="table">
							<tbody>
								<tr>
									<td style="padding-left:17px;">
										<p class="text-bold text-left">订单信息：</p>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<thead>
								<tr>
									<td style="width:100px;"></td>
									<td>
										<p>订单编号：</p><br/>
										<p>付款时间：</p>
									</td>
									<td>
										<p><?php echo ($data["order"]["ordernum"]); ?></p><br/>
										<p><?php echo ($data["order"]["paytime"]); ?></p>
									</td>
									<td>
										<p>支付交易号：</p><br/>
										<p>发货时间：</p>
									</td>
									<td>
										<p>79884654546546546</p><br/>
										<p><?php echo ($data["order"]["sendtime"]); ?></p>
									</td>
									<td>
										<p>订单时间：</p><br/>
										<p>确认时间：</p>
									</td>
									<td>
										<p><?php echo (date('Y-m-d H:i:s',$data["order"]["addtime"])); ?></p><br/>
										<p><?php echo ($data["order"]["endtime"]); ?></p>
									</td>
								</tr>
							</thead>
						</table>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="text-center">宝贝</th>
									<th class="text-center">状态</th>
									<th class="text-center">单价(元)</th>
									<th class="text-center">数量</th>
									<th class="text-center">优惠</th>
									<th class="text-center">商品总价(元)</th>
								</tr>
							</thead>
							<?php if(is_array($data["goods"])): foreach($data["goods"] as $key=>$v): ?><tbody>
								<tr>
									<td style="padding-left:20px">

										<span class="pull-left">
											<img src="__PUBLIC__/Uploads/goods/<?php echo ($v["pic"]); ?>" alt="<?php echo ($data["good"]["gname"]); ?>" width="50" height="50">
											<a href=""><?php echo ($v["gname"]); ?></a>
										</span>										
									</td>
									<td class="text-center">
										<p class="lineh60px">卖家已发货</p>
									</td>
									<td class="text-center">
										<p class="lineh60px"><?php echo ($v["price"]); ?></p>
									</td>
									<td class="text-center">	
										<p class="lineh60px"><?php echo ($v["order"]["num"]); ?></p>
									</td>
									<td class="text-center">
										<p class="lineh60px">市场价-售价</p>
									</td>
									<td class="text-center">
										<p class="lineh60px"><?php echo ($v["money"]); ?></p>
									</td>
								</tr>
							</tbody><?php endforeach; endif; ?>
						</table>
						<table class="table">
							<thead>
								<tr >
									<td class="text-bold text-right" style="font-size:14px">
										实付款：
										<span style="font-weight:700;color:#FF5500;font-size:16px;">
											<?php echo ($data["order"]["totalprice"]); ?>
										</span>
										&nbsp;元
									</td>
								</tr>
							</thead>
						</table>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</main>
	<div class="clearfix"></div>
	<div class="h30px"></div>
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
</body>
</html>