	<!DOCTYPE html>
	<html dir="rtl" lang="ar">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="canonical" href="ttps://alymarket.net">
		<link rel="icon" href="{{url('/')}}/forentend3/assets/images/icon/apple-touch-icon-32x32.png" sizes="32x32">
		<link rel="icon" href="{{url('/')}}/forentend3/assets/images/icon/apple-touch-icon-64_64.png" sizes="64x64">
		<link rel="icon" href="{{url('/')}}/forentend3/assets/images/icon/apple-touch-icon-128_128.png" sizes="128x128">
		<link rel="icon" href="{{url('/')}}/forentend3/assets/images/icon/apple-touch-icon-196_196.png" sizes="196x196">
		<link href="{{url('/')}}/forentend3/assets/fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet"> <!--load all styles -->
		<title>
			@if(session('lang')=='ar')
			{{settings()->namear}}
			@endif
			@if(session('lang')=='en')
			{{settings()->nameaen}}
		@endif</title>
		<meta property="og:type" content="website">
		<meta property="og:title" content="alymarket">
		<meta property="og:description" content="تسوق من مكان واحد ">
		<meta property="og:site_name" content="alymarket"> 
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="alymarket">
		<meta name="twitter:description" content="">
		<base href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/" />
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
		<style type="text/css">
			a.buy-demo {
				position: fixed;
				bottom: 80px;
				left: 40px;
				background-color: #101010;
				color: white;
				font-size: 14px;
				padding: 12px 20px 12px 16px;
				border-radius: 35px;
				line-height: 1;
				z-index: 379;
				display: none;
			}
		</style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                 



		<link rel="stylesheet" href="catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css">
		<link rel="stylesheet" href="catalog/view/javascript/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="catalog/view/javascript/soconfig/css/lib.css">
		<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/ie9-and-up.css">
		<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/custom.css">
		<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/tooltipster.bundle.min.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_call_for_price/css/jquery.fancybox.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_call_for_price/css/style.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_color_swatches_pro/css/style.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_filter_shop_by/css/nouislider.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_filter_shop_by/css/style.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_tools/css/style.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_listing_tabs/css/so-listing-tabs.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_listing_tabs/css/animate.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_listing_tabs/css/owl.carousel.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_newletter_custom_popup/css/style.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_page_builder/css/shortcodes.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_instagram_gallery/css/style.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_instagram_gallery/css/jquery.fancybox.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_page_builder/css/style_render_35.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_page_builder/css/style.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_countdown/css/style.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_megamenu/so_megamenu.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_megamenu/wide-grid.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_searchpro/css/chosen.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_searchpro/css/so_searchpro.css">
		<link rel="stylesheet" href="catalog/view/javascript/so_sociallogin/css/so_sociallogin.css">
		<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/layout1/red-rtl.css">
		<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/header/header1-rtl.css">
		<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/footer/footer1-rtl.css">
		<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/responsive-rtl.css">



		<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>
		<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>
		<script src="catalog/view/javascript/soconfig/js/libs.js"></script>
		<script src="catalog/view/javascript/soconfig/js/so.system.js"></script>
		<script src="catalog/view/javascript/soconfig/js/jquery.sticky-kit.min.js"></script>
		<script src="catalog/view/javascript/lazysizes/lazysizes.min.js"></script>
		<script src="catalog/view/theme/so-emarket/js/jquery.nav.js"></script>
		<script src="catalog/view/theme/so-emarket/js/so.custom.js"></script>
		<script src="catalog/view/theme/so-emarket/js/custom.js"></script>
		<script src="catalog/view/theme/so-emarket/js/common.js"></script>
		<script src="catalog/view/theme/so-emarket/js/tooltipster.bundle.min.js"></script>
		<script src="catalog/view/theme/so-emarket/js/waypoints.min.js"></script>
		<script src="catalog/view/theme/so-emarket/js/jquery.counterup.min.js"></script>
		<script src="catalog/view/javascript/so_call_for_price/js/script.js"></script>
		<script src="catalog/view/javascript/so_filter_shop_by/js/nouislider.js"></script>
		<script src="catalog/view/javascript/so_tools/js/script.js"></script>
		<script src="catalog/view/javascript/so_listing_tabs/js/owl.carousel.js"></script>
		<script src="admin/view/template/extension/module/so_page_builder/assets/js/shortcodes.js"></script>
		<script src="catalog/view/javascript/so_instagram_gallery/js/jquery.fancybox.js"></script>
		<script src="catalog/view/javascript/so_page_builder/js/section.js"></script>
		<script src="catalog/view/javascript/so_page_builder/js/modernizr.video.js"></script>
		<script src="catalog/view/javascript/so_page_builder/js/swfobject.js"></script>
		<script src="catalog/view/javascript/so_page_builder/js/video_background.js"></script>
		<script src="catalog/view/javascript/so_countdown/js/jquery.cookie.js"></script>
		<script src="catalog/view/javascript/so_megamenu/so_megamenu.js"></script>
		<script src="catalog/view/javascript/so_searchpro/js/chosen.jquery.js"></script>



		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700' rel='stylesheet' type='text/css'>  	


		<style type="text/css">
			body, #wrapper{font-family:'Roboto', sans-serif}

		</style>




 



		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" type="text/css" rel="stylesheet" media="screen" />

		<style type="text/css">
			 
  .shipedbyAly
{
    background-color:
#eb6625;
color:
#fff;
padding: 3px;
border-radius: 13px; margin-right:11px;
}

.customsearch
{
   position:absolute;
background-color: #fff;
padding: 9px;
width: 590px;
margin-left: -65px;
text-align: right;
direction:ltr;
}
.lisrech
{
        position: absolute;
left: 6px;
margin-right: 57px;
margin-top: -30px;
position: absolute;
margin-left: 37px;
}

.onhvermenu li:hover 
{
    background-color:#fbf5f5;
   color:#000;

}

		</style>

	</head>









	<body class="product-category rtl layout-1">


		<div id="wrapper" class="wrapper-fluid banners-effect-7">  






			<div class="so-pre-loader no-pre-loader"><div class="so-loader-line" id="line-load"></div></div>


			<header id="header" class=" variant typeheader-1">

				<div class="header-top hidden-compact">
					<div class="container">
						<div class="row">
							<div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
								<div class="hidden-sm hidden-xs welcome-msg">
									<b>{{trans('admin.WelcometoAlyMarket')}}  !</b>
									{{trans('admin.wg')}}

								</div>
								<ul class="top-link list-inline hidden-lg hidden-md">
									<li class="account" id="my_account"><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/account" title="My Account " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">My Account </span> <span class="fa fa-caret-down"></span></a>
										<ul class="dropdown-menu ">
											<li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/wishlist"  title="قائمة رغباتي (0)">قائمة رغباتي (0)</a></li>
											<li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/compare" title="Compare">Compare</a></li>

											<li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/register">Register</a></li>
											<li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/login">Login</a></li>

										</ul>
									</li>	


								</ul>
								
							</div>
							<div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">	
								<div class="dropdown become"><a href="{{url('/')}}/SellOnAlymarket"  class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs">
									{{trans('admin.SellOnAlymarket')}}
								 
							</span></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="top-menu-mp"><a href="{{url('/')}}admin">
										{{trans('admin.venacount')}}</a></li>
										<li><a href="{{url('/')}}SellOnAlymarket">{{trans('admin.SellOnAlymarket')}}</a></li>
									</ul>
								</div>

								<ul class="top-link list-inline lang-curr">						
									<li class="currency"> <div class="pull-left">
										<form action="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency">
											<div class="btn-group">
												<button class="btn-link dropdown-toggle" data-toggle="dropdown">

													L.E {{trans('admin.LE')}} 


													&nbsp;<i class="fa fa-caret-down"></i>	  
												</button>
												<ul class="dropdown-menu">


													<li>
														<button class="currency-select btn-block" type="button" name="USD">                   ${{trans('admin.US')}}</button>
													</li>
												</ul>
											</div>
											<input type="hidden" name="code" value="" />
											<input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24" />
										</form>
									</div>
								</li> 						 <li class="language"><div class="pull-left">
									<form action="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="form-language">
										<div class="btn-group">

											<button class="btn-link dropdown-toggle" data-toggle="dropdown">

												<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/language/ar-ar/ar-ar.png" alt="Arabic" title="Arabic">
												<span class="hidden-xs hidden-sm hidden-md">{{trans('admin.AR')}}</span>
												<i class="fa fa-caret-down"></i>
											</button>

											<ul class="dropdown-menu">
												<li>
													<a class="btn-block" type="button"    href="{{url('/')}}//admin/lang_en/ar">
														<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/language/ar-ar/ar-ar.png" alt="Arabic" title="Arabic" /> {{trans('admin.AR')}}</a>
													</li>
													<li>
														<a class="btn-block" type="button" href="{{url('/')}}//admin/lang_en/en">
															<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="catalog/language/en-gb/en-gb.png" alt="English" title="English" /> {{trans('admin.EN')}}</a>
														</li>
													</ul>
												</div>
												<input type="hidden" name="code" value="" />
												<input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24" />
											</form>
										</div>
									</li>				
								</ul>				



							</div>
						</div>
					</div>
				</div>


				<div class="header-middle ">
					<div class="container">
						<div class="row">			
							<div class="navbar-logo col-lg-2 col-md-2 col-sm-12 col-xs-12">
								<div class="logo">
									<a href="{{url('/')}}">

										<img class="lazyload" data-sizes="auto" src="{{Storage::url(settings()->siteflag_ar)}}" title="Your Store" alt="Your Store" /></a>


									</div>
								</div>

								<div class="main-menu col-lg-6 col-md-7">					
									<div class="responsive megamenu-style-dev">

										<nav class="navbar-default">
											<div class=" container-megamenu   horizontal ">
												<div class="navbar-header">
													<button type="button" id="show-megamenu" data-toggle="collapse"  class="navbar-toggle">
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>
												</div>

												<div class="megamenu-wrapper">

													<span id="remove-megamenu" class="fa fa-times"></span>

													<div class="megamenu-pattern">
														<div class="container">
															<ul class="megamenu"
															data-transition="slide" data-animationtime="500">
															<li class="home">
																<a href="{{url('/')}}">
																	<span><strong>  
																	  {{trans('admin.Home')}}
																	   </strong></span>
																</a>
															</li>











															

															<li class=" item-style1 with-sub-menu hover" >
																<p class='close-menu'></p>
																<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57" class="clearfix" >
																	<strong>
																		<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/catalog/menu/new-icon.png" alt="">
                                                         {{trans('admin.Collections')}}
																	
																	</strong>
																	<span class="labelNew"></span>
																	<b class='caret'></b>
																</a>

																<div class="sub-menu" style="width: 700px">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-3">
																				<ul class="subcategory subcate-col">
																					<li>
																						<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18" class="title-submenu subcate-col">Towels Cloud</a>
																						<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_101" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_101';" class="main-menu">Appliances</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46';" class="main-menu">Furniture &amp; Decors</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45';" class="main-menu">Lamp &amp; Lighting</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70';" class="main-menu">Punge nenune</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71';" class="main-menu">Qunge genga</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_72" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_72';" class="main-menu">Sofa &amp; Chairs</a></li></ul></div></div></div>
																					</li>		
																				</ul>
																			</div>
																			<div class="col-sm-3">
																				<ul class="subcategory subcate-col">
																					<li>
																						<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20" class="title-submenu subcate-col">Furnitures</a>
																						<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_67" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_67';" class="main-menu">Bathroom</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_68" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_68';" class="main-menu">Bedroom</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_27" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_27';" class="main-menu">Decor</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_65" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_65';" class="main-menu">Furniture</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_26" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_26';" class="main-menu">Living room</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_66" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_66';" class="main-menu">Theid cupensg</a></li></ul></div></div></div>
																					</li>		
																				</ul>
																			</div>
																			<div class="col-sm-3">
																				<ul class="subcategory subcate-col">
																					<li>
																						<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57" class="title-submenu subcate-col">Collections</a>
																						<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_81" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_81';" class="main-menu">Appliances</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_78" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_78';" class="main-menu">Fashion</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_80" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_80';" class="main-menu">Furniture &amp; Decor</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_82" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_82';" class="main-menu">Sine engain</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_77" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_77';" class="main-menu">Smartphone</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_79" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_79';" class="main-menu">Sport bikes</a></li></ul></div></div></div>
																					</li>		
																				</ul>
																			</div>
																			<div class="col-sm-3">
																				<ul class="subcategory subcate-col">
																					<li>
																						<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33" class="title-submenu subcate-col">Smartphone</a>
																						<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59';" class="main-menu">Apple</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60';" class="main-menu">Dell</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64';" class="main-menu">Esdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62';" class="main-menu">Scanners</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_63" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_63';" class="main-menu">Sony</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_61" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_61';" class="main-menu">Toshiba</a></li></ul></div></div></div>
																					</li>		
																				</ul>
																			</div>
																		</div>												
																	</div>
																</div>										
															</li>










															

															<li class=" item-style2 with-sub-menu hover" >
																<p class='close-menu'></p>
																<a href="" class="clearfix" >
																	<strong>
																{{trans('admin.Shop')}}
																		
																		 
																	</strong>

																	<b class='caret'></b>
																</a>

																<div class="sub-menu" style="width: 700px">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="categories ">
																					<div class="row"><div class="col-sm-3 static-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33';" class="main-menu">Smartphone</a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59';">Apple</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60';">Dell</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64';">Esdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62';">Scanners</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_61" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_61';">Toshiba</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_63" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_63';">Sony</a></li></ul></li></ul></div></div><div class="col-sm-3 static-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25';" class="main-menu">Electronics</a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29';">Asdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_32" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_32';">Web Cameras</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35';">Diam sit</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36';">Labore et</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_28" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_28';">Monitors</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_31" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_31';">Scanners</a></li></ul></li></ul></div></div><div class="col-sm-3 static-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18';" class="main-menu">Towels Cloud</a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45';">Lamp &amp; Lighting</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_72" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_72';">Sofa &amp; Chairs</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46';">Furniture &amp; Decors</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45';">Lamp &amp; Lighting</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_69" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_69';">Sound &amp; Life</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71';">Qunge genga</a></li></ul></li></ul></div></div><div class="col-sm-3 static-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57';" class="main-menu">Collections</a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_77" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_77';">Smartphone</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_81" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_81';">Appliances</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_78" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_78';">Fashion</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_78" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_78';">Fashion</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_80" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_80';">Furniture &amp; Decor</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_80" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_80';">Furniture &amp; Decor</a></li></ul></li></ul></div></div></div>
																				</div>															
																			</div>
																		</div><div class="border"></div><div class="row">
																			<div class="col-sm-12">
																				<div class="html item-banner">
																					<div class="img-banner-w">
																						<div class="img-banner"><a href="#"><img src="image/catalog/menu/megabanner/image-5.jpg" alt="banner"></a></div>
																						<div class="img-banner"><a href="#"><img src="image/catalog/menu/megabanner/image-6.jpg" alt="banner"></a></div>
																					</div>
																				</div>
																			</div>
																		</div>												
																	</div>
																</div>										
															</li>










															

															<li class="blog-item" >
																<p class='close-menu'></p>
																<a href="index.php?route=extension/simple_blog/article" class="clearfix" >
																	<strong>
																		<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/catalog/menu/hot-icon.png" alt="">{{trans('admin.Blog')}}
																	</strong>

																</a>

															</li>










															

															<li class="style-page with-sub-menu hover" >
																<p class='close-menu'></p>
																<a href="" class="clearfix" >
																	<strong>
																{{trans('admin.Pages')}}
																	</strong>

																	<b class='caret'></b>
																</a>

																<div class="sub-menu" style="width: 360px">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html ">
																					<div class="row">
																						<div class="col-sm-6">
																							<ul class="row-list">
																								<li><a class="subcategory_item" href="index.php?route=information/information&amp;information_id=4">About Us</a></li>
																								<li><a class="subcategory_item" href="index.php?route=information/information&amp;information_id=6">Services</a></li>
																								<li><a class="subcategory_item" href="index.php?route=information/information&amp;information_id=3">FAQs</a></li>
																								<li><a class="subcategory_item" href="index.php?route=information/contact">Contact us</a></li>
																								<li><a class="subcategory_item" href="index.php?route=information/information&amp;information_id=7">Support 24/7 Page</a></li>  
																								<li><a class="subcategory_item" href="index.php?route=information/information&amp;information_id=9">Typography</a></li>
																								<li><a class="subcategory_item" href="index.php?route=information/information&amp;information_id=5">Photo Gallery</a></li>
																							</ul>
																						</div>
																						<div class="col-sm-6">
																							<ul class="row-list">      
																								<li><a class="subcategory_item" href="index.php?route=information/sitemap">SiteMap</a></li>
																								<li><a class="subcategory_item" href="index.php?route=information">Page 404</a></li>
																								<li><a class="subcategory_item" href="index.php?route=information/information&amp;information_id=8">Coming Soon </a></li>
																								<li><a class="subcategory_item" href="index.php?route=extension/custom/bestseller">Best Seller</a></li>
																								<li><a class="subcategory_item" href="index.php?route=extension/custom/newarrivals">New Arrivals</a></li>
																								<li><a class="subcategory_item" href="index.php?route=extension/custom/mostrate">Most Rated</a></li>
																								<li><a class="subcategory_item" href="index.php?route=extension/custom/featured">Trending Items</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>												
																	</div>
																</div>										
															</li>










															

															<li class=" with-sub-menu hover" >
																<p class='close-menu'></p>
																<a href="" class="clearfix" >
																	<strong>
																{{trans('admin.Marketplace')}}
																		
																		
																	</strong>

																	<b class='caret'></b>
																</a>

																<div class="sub-menu" style="width: 250px">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html sub-marketplace">
																					<div class="submenu-mpwebkul">
																						<ul>
																							<li><a href="index.php?route=customerpartner/sell">Browser Seller</a></li>
																							<li><a href="index.php?route=customerpartner/profile&amp;id=17">View Demo Seller Profile</a>
																							</li><li><a href="index.php?route=account/customerpartner/dashboard&amp;view=separate">Separate Seller View</a></li>
																							<li><a href="index.php?route=customerpartner/sell">Become a Seller</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>												
																	</div>
																</div>										
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
								</div>

								<script>
									$(document).ready(function(){
										$('a[href="http://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&path=24"]').each(function() {
											$(this).parents('.with-sub-menu').addClass('sub-active');
										});  
									});
								</script>

							</div>
							<div class="middle-right col-lg-4 col-md-3 col-sm-6 col-xs-8">					
								<div class="telephone hidden-xs hidden-sm hidden-md" >
									<ul> <li><a href="#"><i class="fa fa-truck"></i>track your order</a></li> <li><a href="#"><i class="fa fa-phone-square"></i>{{trans('admin.Hotline')}} +201020006605</a></li> </ul>
								</div>

								<div class="signin-w font-title hidden-sm hidden-xs">

									<ul class="signin-link">							

										<li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/login ">{{trans('admin.Login')}} </a> أو <a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/register">{{trans('admin.Register')}} </a></li>								

									</ul>						
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="header-bottom hidden-compact">
					<div class="container">
						<div class="row">
							<div class="bottom1 menu-vertical col-lg-2 col-md-3 col-sm-3">
								<div class="responsive megamenu-style-dev">
									<div class="so-vertical-menu no-gutter">

										<nav class="navbar-default">
											<div class=" container-megamenu  container   vertical  ">
												<div id="menuHeading">
													<div class="megamenuToogle-wrapper">
														<div class="megamenuToogle-pattern">
															<div class="container">
																<div><span></span><span></span><span></span></div>
																الاقسام        
															</div>
														</div>
													</div>
												</div>
												<div class="navbar-header">
													<button type="button" id="show-verticalmenu" data-toggle="collapse"  class="navbar-toggle">
						<!-- <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> -->
						<i class="fa fa-bars"></i>
						<span>        الاقسام        </span>
					</button>
				</div>

				<div class="vertical-wrapper">

					<span id="remove-verticalmenu" class="fa fa-times"></span>

					<div class="megamenu-pattern">
						<div class="container">
							<ul class="megamenu"
							data-transition="slide" data-animationtime="300">












							<li class="item-vertical  style1 with-sub-menu hover" >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57" class="clearfix" >

									<span>
										<strong><i class="fa fa-gift"></i>Gifts &amp; Toys</strong>
									</span>

									<b class='fa fa-angle-right' ></b>
								</a>

								<div class="sub-menu" style="width:700px">

									<div class="content">
										<div class="row">
											<div class="col-sm-7">
												<div class="categories "><div class="row"><div class="col-sm-6 static-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33';" class="main-menu">Smartphone</a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64';">Esdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62';">Scanners</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59';">Apple</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60';">Dell</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62';">Scanners</a></li></ul></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25';" class="main-menu">Electronics</a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29';">Asdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35';">Diam sit</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36';">Labore et</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_28" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_28';">Monitors</a></li></ul></li></ul></div></div><div class="col-sm-6 static-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18';" class="main-menu">Towels Cloud</a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_72" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_72';">Sofa &amp; Chairs</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46';">Furniture &amp; Decors</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45';">Lamp &amp; Lighting</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_69" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_69';">Sound &amp; Life</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70';">Punge nenune</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_77" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_77';">Smartphone</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_81" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_81';">Appliances</a></li></ul></li></ul></div></div></div></div>

											</div>
											<div class="col-sm-5">
												<div class="html "><div class="img-vbanner">
													<a href="#"><img src="image/catalog/menu/megabanner/vbanner1.jpg" alt="banner"></a>  
												</div></div>

											</div>
										</div>
									</div>				
								</div>			
							</li>							











							<li class="item-vertical " >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25" class="clearfix" >
									<span>
										<strong><i class="fa fa-plug"></i>Electronics</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical " >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34" class="clearfix" >
									<span>
										<strong><i class="fa fa-gitlab"></i>Fashion &amp; Accessories</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical   item-style3" >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33" class="clearfix" >
									<span>
										<strong><i class="fa fa-shopping-bag"></i>Bags &amp; Shoes</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical  item-style2 with-sub-menu hover" >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33" class="clearfix" >

									<span>
										<strong><i class="fa fa-video-camera"></i>Optimum Electronics</strong>
									</span>

									<b class='fa fa-angle-right' ></b>
								</a>

								<div class="sub-menu" style="width:720px">

									<div class="content">
										<div class="row">
											<div class="col-sm-4">
												<ul class="subcategory ">
													<li>
														<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34" class="title-submenu ">Fashion</a>
														<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_43" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_43';" class="main-menu"> Accessories</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_44" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_44';" class="main-menu">Bags</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_47" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_47';" class="main-menu">Jewelry</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_39" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_39';" class="main-menu">Men's Clothing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_48" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_48';" class="main-menu">Shoes</a></li></ul></div></div></div>
													</li>
												</ul>

											</div>
											<div class="col-sm-4">
												<ul class="subcategory ">
													<li>
														<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18" class="title-submenu ">Towels Cloud</a>
														<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_101" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_101';" class="main-menu">Appliances</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46';" class="main-menu">Furniture &amp; Decors</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45';" class="main-menu">Lamp &amp; Lighting</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70';" class="main-menu">Punge nenune</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71';" class="main-menu">Qunge genga</a></li></ul></div></div></div>
													</li>
												</ul>

											</div>
											<div class="col-sm-4">
												<ul class="subcategory ">
													<li>
														<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20" class="title-submenu ">Furnitures</a>
														<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_67" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_67';" class="main-menu">Bathroom</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_68" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_68';" class="main-menu">Bedroom</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_27" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_27';" class="main-menu">Decor</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_65" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_65';" class="main-menu">Furniture</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_26" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_26';" class="main-menu">Living room</a></li></ul></div></div></div>
													</li>
												</ul>

											</div>
										</div><div class="border"></div><div class="row">
											<div class="col-sm-4">
												<ul class="subcategory subcate-col">
													<li>
														<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25" class="title-submenu subcate-col">Electronics</a>
														<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29';" class="main-menu">Asdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_95" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_95';" class="main-menu">Consectetur</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35';" class="main-menu">Diam sit</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36';" class="main-menu">Labore et</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_96" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_96';" class="main-menu">Reprehenderit </a></li></ul></div></div></div>
													</li>
												</ul>

											</div>
											<div class="col-sm-4">
												<ul class="subcategory subcate-col">
													<li>
														<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18" class="title-submenu subcate-col">Towels Cloud</a>
														<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_101" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_101';" class="main-menu">Appliances</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46';" class="main-menu">Furniture &amp; Decors</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45';" class="main-menu">Lamp &amp; Lighting</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70';" class="main-menu">Punge nenune</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71';" class="main-menu">Qunge genga</a></li></ul></div></div></div>
													</li>
												</ul>

											</div>
											<div class="col-sm-4">
												<ul class="subcategory subcate-col">
													<li>
														<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33" class="title-submenu subcate-col">Smartphone</a>
														<div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59';" class="main-menu">Apple</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60';" class="main-menu">Dell</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64';" class="main-menu">Esdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62';" class="main-menu">Scanners</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_63" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_63';" class="main-menu">Sony</a></li></ul></div></div></div>
													</li>
												</ul>

											</div>
										</div>
									</div>				
								</div>			
							</li>							











							<li class="item-vertical  css-menu with-sub-menu hover" >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=67" class="clearfix" >

									<span>
										<strong><i class="fa fa-bath"></i>Bathroom</strong>
									</span>

									<b class='fa fa-angle-right' ></b>
								</a>

								<div class="sub-menu" style="width:250px">

									<div class="content">
										<div class="row">
											<div class="col-sm-12">
												<div class="categories "><div class="row"><div class="col-sm-12 hover-menu"><div class="menu"><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33';" class="main-menu">Smartphone<b class="fa fa-angle-right"></b></a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62';">Scanners</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59';">Apple</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60';">Dell</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64';">Esdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62';">Scanners</a></li></ul></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25';" class="main-menu">Electronics<b class="fa fa-angle-right"></b></a><ul><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29';">Asdipiscing</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35';">Diam sit</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36';">Labore et</a></li></ul></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34';" class="main-menu">Fashion</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57';" class="main-menu">Collections</a></li><li><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18" onclick="window.location = 'https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18';" class="main-menu">Towels Cloud</a></li></ul></div></div></div></div>

											</div>
										</div>
									</div>				
								</div>			
							</li>							











							<li class="item-vertical " >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33" class="clearfix" >
									<span>
										<strong><i class="fa fa-heartbeat"></i>Health &amp; Beauty</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical id6-item" >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=80" class="clearfix" >
									<span>
										<strong><i class="fa fa-bullseye"></i>Home &amp; Lights</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical " >
								<p class='close-menu'></p>
								<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=79" class="clearfix" >
									<span>
										<strong><i class="fa fa-tint"></i>Metallurgy</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical " >
								<p class='close-menu'></p>
								<a href="" class="clearfix" >
									<span>
										<strong><i class="fa fa-bed"></i>Bedroom</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical id6-item" >
								<p class='close-menu'></p>
								<a href="" class="clearfix" >
									<span>
										<strong><i class="fa fa-industry"></i>Industrial Parts</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical id16-item" >
								<p class='close-menu'></p>
								<a href="" class="clearfix" >
									<span>
										<strong><i class="fa fa-address-book"></i>Book Stationery</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical id16-item" >
								<p class='close-menu'></p>
								<a href="" class="clearfix" >
									<span>
										<strong><i class="fa fa-cutlery"></i>Food &amp; Restaurant</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical " >
								<p class='close-menu'></p>
								<a href="" class="clearfix" >
									<span>
										<strong><i class="fa fa-institution"></i>Living room</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical " >
								<p class='close-menu'></p>
								<a href="" class="clearfix" >
									<span>
										<strong><i class="fa fa-asl-interpreting"></i>Accessories
										</strong>
									</span>

								</a>

							</li>							











							<li class="item-vertical " >
								<p class='close-menu'></p>
								<a href="" class="clearfix" >
									<span>
										<strong><i class="fa fa-cubes"></i>Metallurgy, Chemicals</strong>
									</span>

								</a>

							</li>							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		var itemver =  13;
		if(itemver <= $( ".vertical ul.megamenu >li" ).length)
			$('.vertical ul.megamenu').append('<li class="loadmore"><i class="fa fa-plus-square"></i><span class="more-view"> More Categories</span></li>');
		$('.horizontal ul.megamenu li.loadmore').remove();

		var show_itemver = itemver-1 ;
		$('ul.megamenu > li.item-vertical').each(function(i){
			if(i>show_itemver){
				$(this).css('display', 'none');
			}
		});
		$(".megamenu .loadmore").click(function(){
			if($(this).hasClass('open')){
				$('ul.megamenu li.item-vertical').each(function(i){
					if(i>show_itemver){
						$(this).slideUp(200);
						$(this).css('display', 'none');
					}
				});
				$(this).removeClass('open');
				$('.loadmore').html('<i class="fa fa-plus-square"></i><span class="more-view">More Categories</span>');
			}else{
				$('ul.megamenu li.item-vertical').each(function(i){
					if(i>show_itemver){
						$(this).slideDown(200);
					}
				});
				$(this).addClass('open');
				$('.loadmore').html('<i class="fa fa-minus-square"></i><span class="more-view">Close Categories</span>');
			}
		});
	});
</script>
<script>
	$(document).ready(function(){
		$('a[href="http://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&path=24"]').each(function() {
			$(this).parents('.with-sub-menu').addClass('sub-active');
		});  
	});
</script>

</div>
<div class="bottom2 col-lg-7 col-md-6 col-sm-6">	
	<div class="search-header-w">
		<div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>								

		<div id="sosearchpro" class="sosearchpro-wrapper so-search ">

 
				<div  class="search input-group form-group">

					<div class="select_category filter_type  icon-select hidden-sm hidden-xs">
						<select class="no-border chosen-select" name="category_id">
							<option value="0">
								{{trans('admin.Categories')}}

							</option>

							


							@foreach(AllCategories() as  $Department)
							<option value="{{ route('shop.index',['id'=>$Department->id]) }}"> 
								@if(session('lang')=='ar')
								{{$Department->dep_name_ar }}
								@endif
								@if(session('lang')=='en')
								{{$Department->dep_name_en }}
								@endif
							</option>
							@endforeach 




							<option value="76">&nbsp;&nbsp;&nbsp;Cellphone </option>


						</select>
					</div>

				  <input type="text" name="search" id="search"   placeholder="{{trans('admin.Searchsomething')}}"  class="input-group-field" style="color:#000"   class="autosearch-input form-control"/>

  <div class="customsearch" id="ttttttt" style="display:none;"></div>



<script>
$(document).ready(function(){

 $('#search').keyup(function(){ 

 	

  document.getElementById("ttttttt").style.display = "block";
 	
        var query = $(this).val();


        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{url('/')}}/autocomplete/fetch",
          method:"POST",
          data:
          {
          	query:query,
        "_token": "{{ csrf_token() }}",
          	   
          	},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#ttttttt').html(data);

                  
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#search').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});


$(document).click(function() {
  document.getElementById("ttttttt").style.display = "none";

   
});
</script>


					<button type="submit" class="button-search btn btn-default btn-lg" name="submit_search"><i class="fa fa-search"></i> </button>

				</div>


				<input type="hidden" name="route" value="product/search"/>
			</form>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".chosen-select").chosen({
					width: '100%'
				});
			})
		</script>
		<script type="text/javascript">
	// Autocomplete */
	(function($) {
		$.fn.Soautocomplete = function(option) {
			return this.each(function() {
				this.timer = null;
				this.items = new Array();

				$.extend(this, option);

				$(this).attr('autocomplete', 'off');

				// Focus
				$(this).on('focus', function() {
					this.request();
				});

				// Blur
				$(this).on('blur', function() {
					setTimeout(function(object) {
						object.hide();
					}, 200, this);
				});

				// Keydown
				$(this).on('keydown', function(event) {
					switch(event.keyCode) {
						case 27: // escape
						this.hide();
						break;
						default:
						this.request();
						break;
					}
				});

				// Click
				this.click = function(event) {
					event.preventDefault();

					value = $(event.target).parent().attr('data-value');

					if (value && this.items[value]) {
						this.select(this.items[value]);
					}
				}

				// Show
				this.show = function() {
					var pos = $(this).position();

					$(this).siblings('ul.dropdown-menu').css({
						top: pos.top + $(this).outerHeight(),
						left: pos.left
					});

					$(this).siblings('ul.dropdown-menu').show();
				}

				// Hide
				this.hide = function() {
					$(this).siblings('ul.dropdown-menu').hide();
				}

				// Request
				this.request = function() {
					clearTimeout(this.timer);

					this.timer = setTimeout(function(object) {
						object.source($(object).val(), $.proxy(object.response, object));
					}, 200, this);
				}

				// Response
				this.response = function(json) {
					html = '';

					if (json.length) {
						for (i = 0; i < json.length; i++) {
							this.items[json[i]['value']] = json[i];
						}

						for (i = 0; i < json.length; i++) {
							if (!json[i]['category']) {
								html += '<li class="media" data-value="' + json[i]['value'] + '" title="' + json[i]['label'] + '">';
								if(json[i]['image'] && json[i]['show_image'] && json[i]['show_image'] == 1 ) {
									html += '	<a class="media-left" href="' + json[i]['link'] + '"><img class="pull-left" src="' + json[i]['image'] + '"></a>';
								}

								html += '<div class="media-body">';
								html += '<a href="' + json[i]['link'] + '" title="' + json[i]['label'] + '"><span>' +json[i]['cate_name'] + json[i]['label'] + '</span></a>';
								if(json[i]['price'] && json[i]['show_price'] && json[i]['show_price'] == 1){
									html += '	<div class="box-price">';
									if (!json[i]['special']) {
										html += '<span class="price">Price : '+json[i]['price']+'</span>';;
									} else {
										html += '</span><span class="price-new">' + json[i]['special'] + '</span>'+'<span class="price-old" style="text-decoration:line-through;">' + json[i]['price']  ;
									}

									html += '	</div>';
								}
								html += '</div></li>';
								html += '<li class="clearfix"></li>';
							}
						}

						// Get all the ones with a categories
						var category = new Array();

						for (i = 0; i < json.length; i++) {
							if (json[i]['category']) {
								if (!category[json[i]['category']]) {
									category[json[i]['category']] = new Array();
									category[json[i]['category']]['name'] = json[i]['category'];
									category[json[i]['category']]['item'] = new Array();
								}

								category[json[i]['category']]['item'].push(json[i]);
							}
						}

						for (i in category) {
							html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

							for (j = 0; j < category[i]['item'].length; j++) {
								html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
							}
						}
					}

					if (html) {
						this.show();
					} else {
						this.hide();
					}

					$(this).siblings('ul.dropdown-menu').html(html);
				}

				$(this).after('<ul class="dropdown-menu"></ul>');

			});
		}
	})(window.jQuery);

	$(document).ready(function() {
		var selector = '#search0';
		var total = 0;
		var showimage = 1;
		var showprice = 1;
		var character = 3    ;
		var height = 70;
		var width = 70;

		$(selector).find('input[name=\'search\']').Soautocomplete({
			delay: 500,
			source: function(request, response) {
				var category_id = $(".select_category select[name=\"category_id\"]").first().val();
				if(typeof(category_id) == 'undefined')
					category_id = 0;
				var limit = 5;
				if(request.length >= character){
					$.ajax({
						url: 'index.php?route=extension/module/so_searchpro/autocomplete&filter_category_id='+category_id+'&limit='+limit+'&width='+width+'&height='+height+'&filter_name='+encodeURIComponent(request),
						dataType: 'json',
						success: function(json) {
							response($.map(json, function(item) {
								total = 0;
								if(item.total){
									total = item.total;
								}

								return {
									price:   item.price,
									special: item.special,
									tax		:     item.tax,
									label:   item.name,
									cate_name:   (item.category_name) ? item.category_name + ' > ' : '',
									image:   item.image,
									link:    item.link,
									minimum:    item.minimum,
									show_price:  showprice,
									show_image:  showimage,
									value:   item.product_id,
								}
							}));
						}
					});
				}
			},
		});
	});

</script>

</div>				
</div>
<div class="bottom3 col-lg-3 col-md-3 col-sm-3">
	<div class="shopping_cart">							
		<div id="cart" class="btn-shopping-cart">

			<a data-loading-text="جاري ... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
				<div class="shopcart">
					<span class="icon-c">
						<i class="fa fa-shopping-bag"></i>
					</span>
					<div class="shopcart-inner">
						<p class="text-shopping-cart">
							{{trans('admin.Mycart')}}

						</p>

						<span class="total-shopping-cart cart-total-full">
							<span class="items_cart">0</span><span class="items_cart2">item(s)</span><span class="items_carts"> - $0.00</span>
						</span>
					</div>
				</div>
			</a>

			<ul class="dropdown-menu pull-right shoppingcart-box">
				<li>
					<p class="text-center empty">سلة الشراء فارغة !</p>
				</li>
			</ul>
		</div>

	</div>	
	<ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
		<li class="compare hidden-xs"><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/compare"  class="top-link-compare" title="Compare "><i class="fa fa-refresh"></i></a></li>
		<li class="wishlist hidden-xs"><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/wishlist" id="wishlist-total" class="top-link-wishlist" title="قائمة رغباتي (0) "><!-- <i class="fa fa-heart"></i> --></a></li>						
	</ul>

</div>				
</div>
</div>
</div>

</header>
<div id="socialLogin"></div>

<div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog block-popup-login">
		<a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
		<div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
		<div class="block-content">
			<div class=" col-reg registered-account">
				<div class="block-content">
					<form class="form form-login" action="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/login" method="post" id="login-form">
						<fieldset class="fieldset login" data-hasrequired="* Required Fields">
							<div class="field email required email-input">
								<div class="control">
									<input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-mail Address" />
								</div>
							</div>
							<div class="field password required pass-input">
								<div class="control">
									<input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password" />
								</div>
							</div>
							<div class=" form-group">
								<label class="control-label">Login with your social account</label>
								<div>
									<a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=https%3A%2F%2Fopencart.opencartworks.com%2Fthemes%2Fso_emarket%2Fwebkul_marketplace%2Findex.php%3Froute%3Dextension%2Fmodule%2Fso_sociallogin%2FGoogleLogin&client_id=21690390667-tco9t3ca2o89d3sshkb2fmppoioq5mfq.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&approval_prompt=force" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>
									<a href="https://www.facebook.com/v2.4/dialog/oauth?client_id=442675926063537&state=5f91659d1e87779df32e7cacff9f784d&response_type=code&sdk=php-sdk-5.5.0&redirect_uri=https%3A%2F%2Fopencart.opencartworks.com%2Fthemes%2Fso_emarket%2Fwebkul_marketplace%2Findex.php%3Froute%3Dextension%2Fmodule%2Fso_sociallogin%2FFacebookLogin&scope=public_profile%2Cemail" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>
									<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=extension/module/so_sociallogin/TwitterLogin" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>
									<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=extension/module/so_sociallogin/LinkedinLogin" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="secondary ft-link-p"><a class="action remind" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/forgotten"><span>Forgot Your Password?</span></a></div>
							<div class="actions-toolbar">
								<div class="primary"><button type="submit" class="action login primary" name="send" id="send2"><span>{{trans('admin.Login')}}</span></button></div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>      
			<div class="col-reg login-customer">
				<h2>NEW HERE?</h2>
				<p class="note-reg">Registration is free and easy!</p>
				<ul class="list-log">
					<li>Faster checkout</li>
					<li>Save multiple shipping addresses</li>
					<li>View and track orders and more</li>
				</ul>
				<a class="btn-reg-popup" title="Register" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/register">Create an account</a>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		var $window = $(window);
		function checkWidth() {
			var windowsize = $window.width();
			if (windowsize > 767) {
				$('a[href*="account/login"]').click(function (e) {
					e.preventDefault();
					$("#so_sociallogin").modal('show');
				});
			}
		}
		checkWidth();
		$(window).resize(checkWidth);
	});
</script>


<div class="breadcrumbs ">
	<div class="container">
		<div class="current-name">	  






			Accessories

		</div>
		<ul class="breadcrumb">
			<li><a href="{{url('/')}}">الصفحة الرئيسية</a></li>
			<li><a href="">{{$categoryName}}</a></li>
		</ul>
	</div>
</div>





<div class="container product-listing content-main ">

	<div class="row">	<aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas " >
		<span id="close-sidebar" class="fa fa-times"></span>
		<div class="module so_filter_wrap block-shopby">
			<h3 class="modtitle">{{trans('admin.SHOPBY')}}</h3>

			<div class="modcontent">
				<ul data-product_id = "101,100,96,86,52,99,51,66,95,91,104,102,97,98,103">
					<li class="so-filter-options" data-option="search">
						<div class="so-filter-heading">
							<div class="so-filter-heading-text">
								<span>{{trans('admin.Search')}}</span>
							</div>
							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="so-filter-content-opts">
							<div class="so-filter-content-opts-container">
								<div class="so-filter-option" data-type="search">
									<div class="so-option-container">
 <form  method="get" action="{{url('/')}}/shop?id={{request()->id}}">
                                   
                                     <input type="hidden" name="id" value="{{request()->id}}">
										<div class="input-group">
                                    
	<input type="text" class="form-control" name="text_search" id="text_search" value="">
	  @csrf
											<div class="input-group-btn">
												<button class="btn btn-default" type="submit"  type="submit"><i class="fa fa-search"></i></button>
											</div>

										</div>

</form>

									</div>
								</div>
							</div>
						</div>
					</li>


					<li class="so-filter-options" data-option="Color">
						<div class="so-filter-heading">
							<div class="so-filter-heading-text">
								<span>{{trans('admin.color')}}</span>
							</div>
							<i class="fa fa-chevron-down"></i>
						</div>

						<div class="so-filter-content-opts">

							<div class="so-filter-content-opts-container">
    @foreach(App\colorName_photoColor_size::groupBy('color_name')->get() as  $color_name)
                    
                                   
								<div class="so-filter-option" data-type="option" data-option_value= "53" data-count_product="1" data-list_product="101">
									<div class="so-option-container">
										<div class="option-input">
											<span class="fa fa-square-o"></i>
											</div>
											<label>

											 

		<a href="{{url('/')}}/shop?id={{request()->id}}&color={{$color_name->color_name}}"> {{$color_name->color_name}}</a>
										</label>
											<div class="option-count ">
												<span>{{$color_name->id}}</span>
												<i class="fa fa-times"></i>
											</div>
										</div>
									</div>
   @endforeach



												 
												</div>
											</div>
										</li>

										<li class="so-filter-options" data-option="Select">
											<div class="so-filter-heading">
												<div class="so-filter-heading-text">
													<span>{{trans('admin.Selectsizes')}}</span>
												</div>
												<i class="fa fa-chevron-down"></i>
											</div>
    @foreach(App\colorName_photoColor_size::groupBy('sizeType')->get() as  $sizeType)

											<div class="so-filter-content-opts">
												<div class="so-filter-content-opts-container">
													<div class="so-filter-option opt-select  opt_enable" data-type="option" data-option_value= "39" data-count_product="12" data-list_product="98,99,96,52,103,100,97,104,95,66,91,102">
														<div class="so-option-container">
															<div class="option-input">
																<span class="fa fa-square-o"></i>
																</div>
																 <label>

											 

		<a href="{{url('/')}}/shop?id={{request()->id}}&size={{$sizeType->sizeType}}"> {{$sizeType->sizeType}}</a>
										</label>
																<div class="option-count ">
																	<span>12</span>
																	<i class="fa fa-times"></i>
																</div>
															</div>
														</div>
   @endforeach

												 
														 
															 
																</div>
															</div>
														</li>



														<li class="so-filter-options" data-option="Manufacturer">
															<div class="so-filter-heading">
																<div class="so-filter-heading-text">
																	<span>{{trans('admin.Manufacturer')}}</span>
																</div>
																<i class="fa fa-chevron-down"></i>
															</div>
    @foreach(App\TradeMark::take('3')->get() as  $TradeMark)

															<div class="so-filter-content-opts">
																<div class="so-filter-content-opts-container">

			<div class="so-filter-option opt-select  opt_enable" data-type="manufacturer" data-manufacturer_value= "8" data-count_product="15" data-list_product="51,52,66,86,91,95,96,97,98,99,100,101,102,103,104">


							<div class="so-option-container">
									<div class="option-input">
								<span class="fa fa-square-o"></i>
									</div>
				<label>
		<a href="{{url('/')}}/shop?id={{request()->id}}&TradeMark={{$TradeMark->id}}">  

		<img class="hidden" src="{{Storage::url($TradeMark->photo)}}">

		 @if(session('lang')=='ar')
		 {{$TradeMark->name_ar}}
		 @endif 
		 @if(session('lang')=='en')
		 {{$TradeMark->name_en}}
		 @endif 
		</a>
	</label>
																				<div class="option-count ">
																					<span>15</span>
																					<i class="fa fa-times"></i>
																				</div>
																			</div>
																		</div>

   @endforeach


																	</div>
																</div>
															</li>


															<li class="so-filter-options" data-option="Price">
																<div class="so-filter-heading">
																	<div class="so-filter-heading-text">
																		<span>{{trans('admin.Price')}}</span>
																	</div>
																	<i class="fa fa-chevron-down"></i>
																</div>
																<div class="so-filter-content-opts">
																	<div class="so-filter-content-opts-container">
								<div class="so-filter-content-wrapper so-filter-iscroll">
									<div class="so-filter-options">
								<div class="so-filter-option so-filter-price">
									<div class="content_min_max">
								<div class="put-min put-min_max">
	<span class="name-curent">$</span>
	 <input type="text" class="input_min form-control" value="45" min="45" max="169">
	  </div>	
	  <div class="put-max put-min_max"> 
	  	<span class="name-curent">$</span>
	  	 <input type="text" class="input_max form-control" value="169" min="45" max="169">
	  	</div>
										</div>
					<div class="content_scroll">
										<div id="slider-range"></div>
									</div>
								</div>
								</div>
							</div>
							</div>
										</div>

																</li>


																<li class="so-filter-options" data-option="Subcategory">
																	<div class="so-filter-heading">
												<div class="so-filter-heading-text">
											<span>{{trans('admin.SubCategory')}} </span>
														</div>
								<i class="fa fa-chevron-down"></i>
								</div>

								@foreach($Departments  as  $Department)

								           <div class="so-filter-content-opts">
																		<div class="so-filter-content-opts-container">
																			<div class="so-filter-option-sub so-filter-option opt-select  opt_enable" data-type="subcategory" data-subcategory_value= "73" data-count_product="6" data-list_product="51,66,82,95,96,100">
																				<div class="so-option-container">
													<div class="option-input">
															<span class="fa fa-square-o"></i>
																		</div>
									<label>
<a href="{{url('/')}}/shop?id={{$Department->id}}"  target="_blank">
										<img class="hidden" src="{{Storage::url($Department->icon)}}" style="height: 20px;width: 20px">
  @if(session('lang')=='ar')
					{{$Department->dep_name_ar }}
					@endif
					@if(session('lang')=='en')
					{{$Department->dep_name_en }}  
					@endif
				</a>


									</label>
													<div class="option-count ">
																	<span>6</span>
															<i class="fa fa-times"></i>
																	</div>
																</div>
															</div>
@endforeach

														</div>
															</div>							 
												</div>
																							</li>


																						</ul>

																	 
																					</div>
																				</div>
																				<script type="text/javascript">
	//<![CDATA[
	jQuery(window).load(function($){
		$ = typeof($ !== 'funtion') ? jQuery : $;
		
		var obj_class 			= $('#content .row').find('.product-layout').parent(),
		product_arr_all 	= $(".so_filter_wrap .modcontent ul").attr("data-product_id"),
		opt_value_id		= "",
		att_value_id		= "",
		manu_value_id		= "",
		subcate_value_id	= "",
		$minPrice			= 45,
		$maxPrice 			= 169,
		$minPrice_new 		= 45,
		$maxPrice_new 		= 169,
		url 				= 'http://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&path=24';
		text_search			= "";
		
		obj_class.addClass('so-filter-gird');
		$load_gif = $('.so-filter-gird');
		$(".so-filter-heading").on("click",function(){
			if($(this).find(".fa").hasClass("fa-chevron-down")){
				$(this).find(".fa-chevron-down").addClass('fa-chevron-right','slow').removeClass('fa-chevron-down','slow');
			}else{
				$(this).find(".fa-chevron-right").addClass('fa-chevron-down','slow').removeClass('fa-chevron-right','slow');
			}
			$(this).parent().children(".so-filter-content-opts").slideToggle("slow");
		});

		clickOption();
		if( opt_value_id != "" || att_value_id != "" || manu_value_id != "" || $minPrice != $minPrice_new || $maxPrice != $maxPrice_new || text_search != "" || subcate_value_id != "")	{
			requestAjax();
		}else{
			obj_class.find(".product-layout").fadeIn("show");
		}

		function getUrlVars() {
			var vars = {};
			var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
				vars[key] = value;
			});
			return vars;
		}

		function updateURL() {
			if (history.pushState) {
				window.history.pushState({},'',url);
			}
		}

		function clickOption(){
			$(".so-filter-content-opts-container .opt-select.opt_enable").on("click",function(){
				if (!$(this).hasClass('opt_disable')){
					var type_li = $(this).attr("data-type");
					var att_value = "";
					var opt_value = "";
					var manu_value = "";
					$load_gif.addClass('loading-gif');
					switch(type_li)	{
						case "option":
						opt_value = $(this).attr("data-option_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(opt_value_id == ""){
								opt_value_id = opt_value;
							}else{
								opt_value_id += "," + opt_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							opt_value_id = opt_value_id.replace(","+opt_value,"");
							opt_value_id = opt_value_id.replace(opt_value+",","");
							opt_value_id = opt_value_id.replace(opt_value,"");
						}

						if(url.indexOf("opt_id") != -1)	{
							if(opt_value_id != ""){
								url = url.replace(/(&opt_id=)[^\&]+/,'&opt_id='+opt_value_id);
							}else{
								url = url.replace(/(&opt_id=)[^\&]+/,'');
								location.href= url;
							}

						}else{
							url = url+'&opt_id='+opt_value_id;
						}

						break;
						case "attribute":
						att_value = $(this).attr("data-attribute_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(att_value_id == ""){
								att_value_id = att_value;
							}else{
								att_value_id = att_value_id.replace(","+att_value,"");
								att_value_id = att_value_id.replace(att_value+",","");
								att_value_id = att_value_id.replace(att_value,"");
								att_value_id += "," + att_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							att_value_id = att_value_id.replace(","+att_value,"");
							att_value_id = att_value_id.replace(att_value+",","");
							att_value_id = att_value_id.replace(att_value,"");
						}
						if(url.indexOf("att_id") != -1){
							if(att_value_id != ""){
								url = url.replace(/(&att_id=)[^\&]+/,'&att_id='+att_value_id);
							}else{
								url = url.replace(/(&att_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&att_id='+att_value_id;
						}
						break;
						case "manufacturer":
						manu_value = $(this).attr("data-manufacturer_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(manu_value_id == "")	{
								manu_value_id = manu_value;
							}else{
								manu_value_id = manu_value_id.replace(","+manu_value,"");
								manu_value_id = manu_value_id.replace(manu_value+",","");
								manu_value_id = manu_value_id.replace(manu_value,"");
								manu_value_id += "," + manu_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							manu_value_id = manu_value_id.replace(","+manu_value,"");
							manu_value_id = manu_value_id.replace(manu_value+",","");
							manu_value_id = manu_value_id.replace(manu_value,"");
						}
						if(url.indexOf("manu_id") != -1){
							if(manu_value_id != "")	{
								url = url.replace(/(&manu_id=)[^\&]+/,'&manu_id='+manu_value_id);
							}else{
								url = url.replace(/(&manu_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&manu_id='+manu_value_id;
						}
						break;
						case "subcategory":
						subcate_value = $(this).attr("data-subcategory_value");
						if(!$(this).hasClass("opt_active"))	{
							$(this).addClass("opt_active");
							$(this).find('.fa-square-o').removeClass('fa-square-o').addClass('fa-check-square-o');
							$(this).find(".option-count").addClass("opt_close");
							if(subcate_value_id == ""){
								subcate_value_id = subcate_value;
							}else{
								subcate_value_id = subcate_value_id.replace(","+subcate_value,"");
								subcate_value_id = subcate_value_id.replace(subcate_value+",","");
								subcate_value_id = subcate_value_id.replace(subcate_value,"");
								subcate_value_id += "," + subcate_value;
							}
						}else{
							$(this).removeClass("opt_active");
							$(this).find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
							$(this).find(".option-count").removeClass("opt_close");
							subcate_value_id = subcate_value_id.replace(","+subcate_value,"");
							subcate_value_id = subcate_value_id.replace(subcate_value+",","");
							subcate_value_id = subcate_value_id.replace(subcate_value,"");
						}
						if(url.indexOf("subcate_id") != -1)	{
							if(subcate_value_id != ""){
								url = url.replace(/(&subcate_id=)[^\&]+/,'&subcate_id='+subcate_value_id);
							}else{
								url = url.replace(/(&subcate_id=)[^\&]+/,'');
								location.href= url;
							}
						}else{
							url = url+'&subcate_id='+subcate_value_id;
						}
						product_arr_all = $(this).attr("data-list_product");
						/*location.href= url;*/
						break;
					}
					obj_class.find(".product-layout").css("display","none");

					updateURL();
					requestAjax();
				}
				return false;
			});
}

$.arrayIntersect = function(a, b)
{
	return $.grep(a, function(i)
	{
		return $.inArray(i, b) > -1;
	});
};

function getCountProduct(){
	var product_tmp = $(".so_filter_wrap .modcontent ul").attr("data-product_id");

	product_arr = product_tmp.split(',');
	if(product_arr == ''){
		$('.so-filter-option').each(function(){
			$(this).find('.option-count span').html(0);
		});
	}else{
		$('.so-filter-option.opt-select').each(function(){
			var product = $(this).attr('data-list_product');
			if(product != ''){
				var product_array = product.split(',');
				var length = product_array.length;
				var dem = 0 , a =[];
				var _general = $.arrayIntersect(product_arr, product_array);
				var count = _general.length;
						// for (var i = 0; i < length;i++){
							// if(product_arr.indexOf(product_array[i]) > -1){
								// count = count + 1;
								// dem = product_array.length - product_arr.split(',').length;
							// }
						// }
						if(count == 0){
							$(this).removeClass("opt_enable").addClass("opt_disable");
							$(this).attr("disabled", "disabled");

						}else{
							$(this).removeClass("opt_enable").removeClass("opt_disable").addClass("opt_enable");
							$(this).removeAttr("disabled");
						}
						var type = $(this).attr("data-type");
						if(count > 0 && ((att_value_id != "" && type == "attribute") || (opt_value_id != "" && type == "option"))){
							$(this).find('.option-count span').html(count);
						}else{
							$(this).find('.option-count span').html(count);
						}
					}
				});
	}
}

var range = document.getElementById('slider-range');
noUiSlider.create(range, {
	start: [$minPrice_new, $maxPrice_new],
	step: 1,
	connect: true,
	range: {
		'min': $minPrice,
		'max': $maxPrice
	},
	slide: function(event, ui) {
		if ($minPrice == $maxPrice) {
			return false;
		}
	}
});
var valueMin = $('.content_min_max .input_min'),
valueMax = $('.content_min_max .input_max');

range.noUiSlider.on('change', function( values, handle ) {
	if ( handle ) {

		valueMax.val(values[handle]);
		$maxPrice_new = values[handle];
		if(url.indexOf("maxPrice") != -1){
			if($maxPrice_new != "169"){
				url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+$maxPrice_new);
			}else{
				url = url.replace(/(&maxPrice=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&maxPrice='+$maxPrice_new;
		}
	} else {
		valueMin.val(values[handle]);
		$minPrice_new = values[handle];
		if(url.indexOf("minPrice") != -1){
			if($minPrice_new != "45"){
				url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+$minPrice_new);
			}else{
				url = url.replace(/(&minPrice=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&minPrice='+$minPrice_new;
		}
	}
	obj_class.find(".product-layout").css('display','none');
	updateURL();
	requestAjax();

});

range.noUiSlider.on('end', function( values, handle ) {
	if ( handle ) {
		$maxPrice_new = values[handle];
		if(url.indexOf("maxPrice") != -1){
			if($maxPrice_new != "169"){
				url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+$maxPrice_new);
			}else{
				url = url.replace(/(&maxPrice=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&maxPrice='+$maxPrice_new;
		}

	} else {
		$minPrice_new = values[handle];
		if(url.indexOf("minPrice") != -1){
			if($minPrice_new != "45"){
				url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+$minPrice_new);
			}else{
				url = url.replace(/(&minPrice=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&minPrice='+$minPrice_new;
		}

	}
	obj_class.find(".product-layout").css('display','none');
	updateURL();
	requestAjax();
});

$('.content_min_max .input_min').change(function(){
	var valueMin = $(this).val();
	var maxPrice__ = getUrlVars()["maxPrice"];

	if(typeof maxPrice__ === 'undefined'){
		$maxPrice_new = 169;
	}else{
		$maxPrice_new = maxPrice__;
	}
	if(valueMin < 45){
		valueMin = 45;
		$(this).val(valueMin);
	}
	if(valueMin > 169){
		valueMin = 169;
		$(this).val(valueMin);
	}
	range.noUiSlider.set([valueMin,null]);
	if(url.indexOf("minPrice") != -1){
		if(valueMin != "45"){
			url = url.replace(/(&minPrice=)[^\&]+/,'&minPrice='+valueMin);
		}else{
			url = url.replace(/(&minPrice=)[^\&]+/,'');
			location.href= url;
		}
	}else{
		url = url+'&minPrice='+valueMin;
	}
	obj_class.find(".product-layout").css('display','none');
	updateURL();
	$minPrice_new = valueMin;

	requestAjax();
});

$('.content_min_max .input_max').change(function(){
	var valueMax = $(this).val();
	var minPrice__ = getUrlVars()["minPrice"];
	if(typeof minPrice__ === 'undefined'){
		$minPrice_new = 45;
	}else{
		$minPrice_new = minPrice__;
	}
	if(valueMax > 169){
		valueMax = 169;
		$(this).val(valueMax);
	}
	if(valueMax < 45){
		valueMax = 169;
		$(this).val(valueMax);
	}
	range.noUiSlider.set([null, valueMax]);
	if(url.indexOf("maxPrice") != -1){
		if(valueMax != "169"){
			url = url.replace(/(&maxPrice=)[^\&]+/,'&maxPrice='+valueMax);
		}else{
			url = url.replace(/(&maxPrice=)[^\&]+/,'');
			location.href= url;
		}
	}else{
		url = url+'&maxPrice='+valueMax;
	}
	obj_class.find(".product-layout").css('display','none');
	updateURL();
	$maxPrice_new = valueMax;
	requestAjax();
});

$('#text_search').keyup(function(){
	var character = 3;
	text_search = $("#text_search").val();
	if(text_search.length >= character){
		if(url.indexOf("search") != -1){
			if(text_search != ""){
				url = url.replace(/(&search=)[^\&]+/,'&search='+text_search);
			}else{
				url = url.replace(/(&search=)[^\&]+/,'');
				location.href= url;
			}
		}else{
			url = url+'&search='+text_search;
		}
		obj_class.find(".product-layout").css('display','none');
		updateURL();
		requestAjax();
	}
});

$('#submit_text_search').on("click",function(){
	text_search = $("#text_search").val();
	if(url.indexOf("search") != -1){
		if(text_search != ""){
			url = url.replace(/(&search=)[^\&]+/,'&search='+text_search);
		}else{
			url = url.replace(/(&search=)[^\&]+/,'');
			location.href= url;
		}
	}else{
		url = url+'&search='+text_search;
	}
	obj_class.find(".product-layout").css('display','none');
	updateURL();
	requestAjax();
});

$('#btn_resetAll').on("click",function(){
	opt_value_id 		= "";
	att_value_id 		= "";
	manu_value_id 		= "";
	$minPrice_new		= "",
	$maxPrice_new 		= "",
	text_search 		= "";
	subcate_value_id	= "";
	url = url.replace(/(&opt_id=)[^\&]+/,'');
	url = url.replace(/(&att_id=)[^\&]+/,'');
	url = url.replace(/(&manu_id=)[^\&]+/,'');
	url = url.replace(/(&minPrice=)[^\&]+/,'');
	url = url.replace(/(&maxPrice=)[^\&]+/,'');
	url = url.replace(/(&search=)[^\&]+/,'');
	url = url.replace(/(&subcate_id=)[^\&]+/,'');
	obj_class.find(".product-layout").css('display','none');
	updateURL();
	$('.content_min_max .input_min').val($minPrice);
	$('.content_min_max .input_max').val($maxPrice);
	if(($minPrice != 0 || $maxPrice != 0) && ($minPrice != $maxPrice)){
		range.noUiSlider.set([$minPrice, $maxPrice]);
	}

	$(".so-filter-option").removeClass("opt_active");
	$(".so-filter-option").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
	$(".so-filter-option").find(".option-count").removeClass("opt_close");

	$(".so-filter-option-sub").removeClass("opt_active");
	$(".so-filter-option-sub").find('.fa-check-square-o').removeClass('fa-check-square-o').addClass('fa-square-o');
	$(".so-filter-option-sub").find(".option-count").removeClass("opt_close");

	$("#text_search").val('');
	location.href= url;
});

function requestAjax(){
	var page = (getUrlVars()["page"] === "undefined" ? "1" : getUrlVars()["page"]);
	$.ajax({
		type: 'POST',
		cache: false,
		url: 'index.php?route=extension/module/so_filter_shop_by/filter_data',
		data: {
			isFilterShopBy		: 1,
			opt_value_id		: opt_value_id,
			att_value_id		: att_value_id,
			manu_value_id		: manu_value_id,
			subcate_value_id	: subcate_value_id,
			minPrice 			: $minPrice_new,
			maxPrice 			: $maxPrice_new,
			text_search 		: text_search,
			category_id_path	: '24',
			page				: page,
			product_id_in        : $('.so_filter_wrap .modcontent > ul').attr('data-product_id'),
			product_arr_all 	: product_arr_all
		},
		success: function (data) {
			obj_class.html(data['html']);
			var text_right = obj_class.find(".product-layout").parent().next().find('.text-right').html();
			var text_left = obj_class.find(".product-layout").parent().next().find('.text-left').html();
			var text_center = obj_class.find(".product-layout").parent().next().find('.short-by-show.text-center').html();
			obj_class.next().find('.text-right').html(text_right);
			obj_class.next().find('.text-left').html('');
			obj_class.next().find('.short-by-show.text-center').html(text_center);
			obj_class.next().find('.box-pagination.text-right').html('');
			if(obj_class.find(".product-layout").length > 0){
				var html = obj_class.find(".product-layout").eq(0).parent().html();
				obj_class.html(html);

			}else{
				obj_class.html('<div class="col-xs-12">Not product</div>');
				obj_class.next().find('.text-right').css('display','none');
				obj_class.next().find('.short-by-show.text-center').css('display','none');
			}
			obj_class.find(".product-layout").fadeIn("show");
			$(".so_filter_wrap .modcontent ul").attr("data-product_id",data['product_arr']);

			/*===Leader Custom JS===*/
			$('#grid-view-4').click();
			$( '.product-card__gallery .item-img').hover(function() {
				$(this).addClass('thumb-active').siblings().removeClass('thumb-active');
				var thumb_src = $(this).attr("data-src");
				$(this).closest('.product-item-container').find('img.img-responsive').attr("src",thumb_src);
			}); 

			getCountProduct();
			$load_gif.removeClass('loading-gif');
		},
		dataType: 'json'
	});
}

});
	//]]>
</script>
<div class="module banner-left hidden-xs ">


	<div class="banner-sidebar banners">
		<div>
			<a title="Banner Image" href="#"> 
				<img src="{{url('/')}}/forentend3/banner-sidebar.jpg" alt="Banner Image"> 
			</a>
		</div>
	</div> 

</div>
</aside>


<div id="content" class="col-md-9 col-sm-12 col-xs-12 fluid-sidebar">


	<div id="so-groups" class="right so-groups-sticky hidden-xs" style="top: 196px">
		<a class="sticky-categories" data-target="popup" data-popup="#popup-categories"><span>Categories</span><i class="fa fa-align-justify"></i></a>
		<a class="sticky-mycart" data-target="popup" data-popup="#popup-mycart"><span>Cart</span><i class="fa fa-shopping-cart"></i></a>
		<a class="sticky-myaccount" data-target="popup" data-popup="#popup-myaccount"><span>Account</span><i class="fa fa-user"></i></a>
		<a class="sticky-mysearch" data-target="popup" data-popup="#popup-mysearch"><span>Search</span><i class="fa fa-search"></i></a>
		<a class="sticky-recent" data-target="popup" data-popup="#popup-recent"><span>Recent View</span><i class="fa fa-recent"></i></a>

		<div class="popup popup-categories popup-hidden" id="popup-categories">
			<div class="popup-screen">
				<div class="popup-position">
					<div class="popup-container popup-small">
						<div class="popup-header">
							<span><i class="fa fa-align-justify"></i>All Categories</span>
							<a class="popup-close" data-target="popup-close" data-popup-close="#popup-categories">&times;</a>
						</div>
						<div class="popup-content">
							<div class="nav-secondary">
								<ul>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24"><i class="fa fa-chevron-down nav-arrow"></i>Accessories</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24_76"><i class="fa fa-chevron-right flip nav-arrow"></i>Cellphone</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24_85"><i class="fa fa-chevron-right flip nav-arrow"></i>Cosmetics</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24_74"><i class="fa fa-chevron-right flip nav-arrow"></i>Electronics</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24_73"><i class="fa fa-chevron-right flip nav-arrow"></i>Fashion</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24_75"><i class="fa fa-chevron-right flip nav-arrow"></i>Handbags</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24_84"><i class="fa fa-chevron-right flip nav-arrow"></i>Jewelry</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24_83"><i class="fa fa-chevron-right flip nav-arrow"></i>Smart TVs</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=124"><i class="fa fa-chevron-down nav-arrow"></i>Add Color to Your Walls!</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=138"><i class="fa fa-chevron-down nav-arrow"></i>Automotive &amp; Industrial</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=127"><i class="fa fa-chevron-down nav-arrow"></i>Bags, Wallet &amp; Travel</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=132"><i class="fa fa-chevron-down nav-arrow"></i>Beauty</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=139"><i class="fa fa-chevron-down nav-arrow"></i>Beauty &amp; Health</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=142"><i class="fa fa-chevron-down nav-arrow"></i>Books &amp; Audible</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=126"><i class="fa fa-chevron-down nav-arrow"></i>Clothing</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=137"><i class="fa fa-chevron-down nav-arrow"></i>Clothing, Shoes &amp; Jewelry</a>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57"><i class="fa fa-chevron-down nav-arrow"></i>Collections</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_81"><i class="fa fa-chevron-right flip nav-arrow"></i>Appliances</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_78"><i class="fa fa-chevron-right flip nav-arrow"></i>Fashion</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_80"><i class="fa fa-chevron-right flip nav-arrow"></i>Furniture &amp; Decor</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_82"><i class="fa fa-chevron-right flip nav-arrow"></i>Sine engain</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_77"><i class="fa fa-chevron-right flip nav-arrow"></i>Smartphone</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=57_79"><i class="fa fa-chevron-right flip nav-arrow"></i>Sport bikes</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=143"><i class="fa fa-chevron-down nav-arrow"></i>Cosmetics</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=123"><i class="fa fa-chevron-down nav-arrow"></i>Daily Essentials!</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=129"><i class="fa fa-chevron-down nav-arrow"></i>Decor</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=130"><i class="fa fa-chevron-down nav-arrow"></i>Dining</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=131"><i class="fa fa-chevron-down nav-arrow"></i>Dining</a>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=136"><i class="fa fa-chevron-down nav-arrow"></i>Electronics &amp; Computer </a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=136_144"><i class="fa fa-chevron-right flip nav-arrow"></i>Apple</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=136_145"><i class="fa fa-chevron-right flip nav-arrow"></i>Laptop</a>
											</li>
										</ul>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34"><i class="fa fa-chevron-down nav-arrow"></i>Fashion</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_43"><i class="fa fa-chevron-right flip nav-arrow"></i> Accessories</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_44"><i class="fa fa-chevron-right flip nav-arrow"></i>Bags</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_47"><i class="fa fa-chevron-right flip nav-arrow"></i>Jewelry</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_39"><i class="fa fa-chevron-right flip nav-arrow"></i>Men's Clothing</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_48"><i class="fa fa-chevron-right flip nav-arrow"></i>Shoes</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_38"><i class="fa fa-chevron-right flip nav-arrow"></i>Watches</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=34_37"><i class="fa fa-chevron-right flip nav-arrow"></i>Women's Wear</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=125"><i class="fa fa-chevron-down nav-arrow"></i>Fashion</a>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20"><i class="fa fa-chevron-down nav-arrow"></i>Furnitures</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_67"><i class="fa fa-chevron-right flip nav-arrow"></i>Bathroom</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_68"><i class="fa fa-chevron-right flip nav-arrow"></i>Bedroom</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_27"><i class="fa fa-chevron-right flip nav-arrow"></i>Decor</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_65"><i class="fa fa-chevron-right flip nav-arrow"></i>Furniture</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_26"><i class="fa fa-chevron-right flip nav-arrow"></i>Living room</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=20_66"><i class="fa fa-chevron-right flip nav-arrow"></i>Theid cupensg</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=133"><i class="fa fa-chevron-down nav-arrow"></i>Gifting</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=98"><i class="fa fa-chevron-down nav-arrow"></i>Handbags</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=100"><i class="fa fa-chevron-down nav-arrow"></i>Headphone</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=99"><i class="fa fa-chevron-down nav-arrow"></i>Health &amp; Beauty</a>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=110"><i class="fa fa-chevron-down nav-arrow"></i>Home</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=110_112"><i class="fa fa-chevron-right flip nav-arrow"></i>Crockery</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=110_111"><i class="fa fa-chevron-right flip nav-arrow"></i>Cushions</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=110_116"><i class="fa fa-chevron-right flip nav-arrow"></i>Lunch Bags &amp; Boxes</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=110_114"><i class="fa fa-chevron-right flip nav-arrow"></i>Trays</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=110_115"><i class="fa fa-chevron-right flip nav-arrow"></i>Trunks &amp; Boxes</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=110_113"><i class="fa fa-chevron-right flip nav-arrow"></i>Wall Clocks</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=140"><i class="fa fa-chevron-down nav-arrow"></i>Home, Garden &amp; Tools</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=97"><i class="fa fa-chevron-down nav-arrow"></i>Kitchenwares</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=135"><i class="fa fa-chevron-down nav-arrow"></i>Our Store</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=134"><i class="fa fa-chevron-down nav-arrow"></i>Sale</a>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=86"><i class="fa fa-chevron-down nav-arrow"></i>Shop</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=86_89"><i class="fa fa-chevron-right flip nav-arrow"></i>Bag &amp; backpacks</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=86_93"><i class="fa fa-chevron-right flip nav-arrow"></i>Decor</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=86_87"><i class="fa fa-chevron-right flip nav-arrow"></i>Fashion Kids</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=86_92"><i class="fa fa-chevron-right flip nav-arrow"></i>Food &amp; Organic</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=86_91"><i class="fa fa-chevron-right flip nav-arrow"></i>Furniture</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=86_90"><i class="fa fa-chevron-right flip nav-arrow"></i>Mom &amp; Baby</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=86_88"><i class="fa fa-chevron-right flip nav-arrow"></i>Smartphone</a>
											</li>
										</ul>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33"><i class="fa fa-chevron-down nav-arrow"></i>Smartphone</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_59"><i class="fa fa-chevron-right flip nav-arrow"></i>Apple</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_60"><i class="fa fa-chevron-right flip nav-arrow"></i>Dell</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_64"><i class="fa fa-chevron-right flip nav-arrow"></i>Esdipiscing</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_62"><i class="fa fa-chevron-right flip nav-arrow"></i>Scanners</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_63"><i class="fa fa-chevron-right flip nav-arrow"></i>Sony</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=33_61"><i class="fa fa-chevron-right flip nav-arrow"></i>Toshiba</a>
											</li>
										</ul>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=141"><i class="fa fa-chevron-down nav-arrow"></i>Sport &amp; Outdoor</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=141_146"><i class="fa fa-chevron-right flip nav-arrow"></i>Camping &amp; Hiking</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=141_147"><i class="fa fa-chevron-right flip nav-arrow"></i>Fitness</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=122"><i class="fa fa-chevron-down nav-arrow"></i>Stylize Your Phone!</a>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=148"><i class="fa fa-chevron-down nav-arrow"></i>Tarte Brands</a>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18"><i class="fa fa-chevron-down nav-arrow"></i>Towels Cloud</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_101"><i class="fa fa-chevron-right flip nav-arrow"></i>Appliances</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_46"><i class="fa fa-chevron-right flip nav-arrow"></i>Furniture &amp; Decors</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_45"><i class="fa fa-chevron-right flip nav-arrow"></i>Lamp &amp; Lighting</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_70"><i class="fa fa-chevron-right flip nav-arrow"></i>Punge nenune</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_71"><i class="fa fa-chevron-right flip nav-arrow"></i>Qunge genga</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_72"><i class="fa fa-chevron-right flip nav-arrow"></i>Sofa &amp; Chairs</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=18_69"><i class="fa fa-chevron-right flip nav-arrow"></i>Sound &amp; Life</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=17"><i class="fa fa-chevron-down nav-arrow"></i>Watches</a>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=102"><i class="fa fa-chevron-down nav-arrow"></i>Watches</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=102_103"><i class="fa fa-chevron-right flip nav-arrow"></i>Automatic</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=102_104"><i class="fa fa-chevron-right flip nav-arrow"></i>Casual</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=102_105"><i class="fa fa-chevron-right flip nav-arrow"></i>Ceramic</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=102_106"><i class="fa fa-chevron-right flip nav-arrow"></i>Chronograph</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=102_108"><i class="fa fa-chevron-right flip nav-arrow"></i>Kevincons</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=102_109"><i class="fa fa-chevron-right flip nav-arrow"></i>Pastrami</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=102_107"><i class="fa fa-chevron-right flip nav-arrow"></i>Patheon</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=128"><i class="fa fa-chevron-down nav-arrow"></i>Watches &amp; Footwear</a>
									</li>
									<li>
										<span class="nav-action">
											<i class="fa fa-plus more"></i>
											<i class="fa fa-minus less"></i>
										</span>
										<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25"><i class="fa fa-chevron-down nav-arrow"></i>Electronics</a>
										<ul class="level-2">
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_29"><i class="fa fa-chevron-right flip nav-arrow"></i>Asdipiscing</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_95"><i class="fa fa-chevron-right flip nav-arrow"></i>Consectetur</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_35"><i class="fa fa-chevron-right flip nav-arrow"></i>Diam sit</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_36"><i class="fa fa-chevron-right flip nav-arrow"></i>Labore et</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_96"><i class="fa fa-chevron-right flip nav-arrow"></i>Reprehenderit </a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_94"><i class="fa fa-chevron-right flip nav-arrow"></i>Sit amet</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_28"><i class="fa fa-chevron-right flip nav-arrow"></i>Monitors</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_30"><i class="fa fa-chevron-right flip nav-arrow"></i>Printers</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_31"><i class="fa fa-chevron-right flip nav-arrow"></i>Scanners</a>
											</li>
											<li>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=25_32"><i class="fa fa-chevron-right flip nav-arrow"></i>Web Cameras</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="popup popup-mycart popup-hidden" id="popup-mycart">
			<div class="popup-screen">
				<div class="popup-position">
					<div class="popup-container popup-small">
						<div class="popup-html">
							<div class="popup-header">
								<span><i class="fa fa-shopping-cart"></i>Shopping Cart</span>
								<a class="popup-close" data-target="popup-close" data-popup-close="#popup-mycart">&times;</a>
							</div>
							<div class="popup-content">
								<div class="cart-header">
									<div class="notification gray">
										<i class="fa fa-shopping-cart info-icon"></i>
										<p>Your shopping cart is empty!</p>
									</div>
								</div>
							</div>			
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="popup popup-myaccount popup-hidden" id="popup-myaccount">
			<div class="popup-screen">
				<div class="popup-position">
					<div class="popup-container popup-small">
						<div class="popup-html">
							<div class="popup-header">
								<span><i class="fa fa-user"></i>My Account</span>
								<a class="popup-close" data-target="popup-close" data-popup-close="#popup-myaccount">&times;</a>
							</div>
							<div class="popup-content">
								<div class="form-content">
									<div class="row space">
										<div class="col col-sm-6 col-xs-12">
											<div class="form-box">
												<form action="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="sticky-form-currency">
													<label class="label-top" for="input-language"><span>العملة</span></label>
													<select name="select-currency" id="input-currency" class="field icon dark arrow">
														<option value="EUR" >€ Euro</option>
														<option value="GBP" >£ Pound Sterling</option>
														<option value="USD"  selected="selected" >$ US Dollar</option>

													</select>
													<input type="hidden" name="code" value="">
													<input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24">
												</form>
											</div>
										</div>
										<div class="col col-sm-6 col-xs-12">
											<div class="form-box">
												<form action="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="sticky-form-language">
													<label class="label-top" for="input-language"><span>اللغة</span></label>
													<select name="select-language" id="input-language" class="field icon dark arrow">
														<option value="ar-ar" selected="selected">Arabic</option>
														<option value="en-gb">English</option>
													</select>
													<input type="hidden" name="code" value="">
													<input type="hidden" name="redirect" value="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&amp;path=24">
												</form>
											</div>
										</div>
										<div class="col col-sm-12">
											<div class="form-box">
												<div class="hr show"></div>
											</div>
										</div>
										<div class="col col-sm-4 col-xs-6 txt-center">
											<div class="form-box">
												<a class="account-url" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/order">
													<span class="ico ico-32 ico-sm"><i class="fa fa-history"></i></span><br>
													<span class="account-txt">History</span>
												</a>
											</div>
										</div>
										<div class="col col-sm-4 col-xs-6 txt-center">
											<div class="form-box">
												<a class="account-url" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=checkout/cart">
													<span class="ico ico-32 ico-sm"><i class="fa fa-shoppingcart"></i></span><br>
													<span class="account-txt">Shopping Cart</span>
												</a>
											</div>
										</div>
										<div class="col col-sm-4 col-xs-6 txt-center">
											<div class="form-box">
												<a class="account-url" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/register">
													<span class="ico ico-32 ico-sm"><i class="fa fa-register"></i></span><br>
													<span class="account-txt">Register</span>
												</a>
											</div>
										</div>
										<div class="col col-sm-4 col-xs-6 txt-center">
											<div class="form-box">
												<a class="account-url" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/account">
													<span class="ico ico-32 ico-sm"><i class="fa fa-account"></i></span><br>
													<span class="account-txt">Account</span>
												</a>
											</div>
										</div>
										<div class="col col-sm-4 col-xs-6 txt-center">
											<div class="form-box">
												<a class="account-url" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/download">
													<span class="ico ico-32 ico-sm"><i class="fa fa-download"></i></span><br>
													<span class="account-txt">Download</span>
												</a>
											</div>
										</div>
										<div class="col col-sm-4 col-xs-6 txt-center">
											<div class="form-box">
												<a class="account-url" href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=account/login">
													<span class="ico ico-32 ico-sm"><i class="fa fa-login"></i></span><br>
													<span class="account-txt">{{trans('admin.Login')}}</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>					
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="popup popup-mysearch popup-hidden" id="popup-mysearch">
			<div class="popup-screen">
				<div class="popup-position">
					<div class="popup-container popup-small">
						<div class="popup-html">
							<div class="popup-header">
								<span><i class="fa fa-search"></i>Search</span>
								<a class="popup-close" data-target="popup-close" data-popup-close="#popup-mysearch">&times;</a>
							</div>
							<div class="popup-content">
								<div class="form-content">
									<div class="row space">
										<div class="col">
											<div class="form-box">
												<input type="text" name="search" value="" placeholder="Search" id="input-search" class="field" />
												<i class="fa fa-search sbmsearch"></i>
											</div>
										</div>
										<div class="col">
											<div class="form-box">
												<button type="button" id="button-search" class="btn button-search">Search</button>
											</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="popup popup-recent popup-hidden" id="popup-recent">
			<div class="popup-screen">
				<div class="popup-position">
					<div class="popup-container popup-small">
						<div class="popup-html">
							<div class="popup-header">
								<span><i class="fa fa-recent"></i>Recent View Products</span>
								<a class="popup-close" data-target="popup-close" data-popup-close="#popup-recent">&times;</a>
							</div>
							<div class="popup-content">
								<div class="form-content">
									<div class="row space">
										<div class="col col-xs-12">Has no content to show !</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="module so-listing-tabs-rtl ">
		<div class="modcontent">
			<!--[if lt IE 9]>
				<div id="so_listing_tabs_184" class="so-listing-tabs msie lt-ie9 first-load module"><![endif]-->
			<!--[if IE 9]>
				<div id="so_listing_tabs_184" class="so-listing-tabs msie first-load module"><![endif]-->
					<!--[if gt IE 9]><!-->
					<div id="so_listing_tabs_184" class="so-listing-tabs category-featured module"><!--<![endif]-->
						<div class="ltabs-wrap ">

						  @isset($photo)
  <img src="{{Storage::url($photo)}}" alt="" style="width: 100%;
height: 350px;">
@endisset

							<div class="ltabs-tabs-container" data-delay="500"
							data-duration="800"
							data-effect="none"
							data-ajaxurl="http://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&path=24" data-type_source="1"
							data-type_show="slider" >

							<div class="ltabs-tabs-wrap">
								<span class='ltabs-tab-selected'></span>
								<span class="ltabs-tab-arrow">▼</span>
								<ul class="ltabs-tabs cf list-sub-cat font-title">


									<li class="ltabs-tab   tab-sel tab-loaded "
									data-category-id="sell"
									data-active-content-l=".items-category-sell">
									<span class="ltabs-tab-label">
										{{trans('admin.Bestsellers')}}	
									</span>
								</li>
								

							</ul>




						</div>


					</div>
					
					<div class="wap-listing-tabs products-list grid">
						<div class="so-loadeding" ></div>
						<div class="ltabs-items-container">
							<div class="products-list ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-sell" data-total="16">
								<div class="ltabs-items-inner owl2-carousel  ltabs-slider ">



									@foreach($Bestsellers as $product)					
									<div class="ltabs-item ">
										
										<div class="item-inner product-layout transition product-grid">

											<div class="product-item-container">
												<div class="left-block col-sm-5">										

													<div class="product-image-container 	">
														<a href="" target="_blank" title="@if(session('lang')=='ar')


														{{$product->title_name_ar }}
														@endif
														@if(session('lang')=='en')

														{{$product->title_name_en }} 

														@endif"  >

														<img data-sizes="auto" src="{{Storage::url($product->photo)}}" alt="@if(session('lang')=='ar')


														{{$product->title_name_ar }}
														@endif
														@if(session('lang')=='en')

														{{$product->title_name_en }} 

														@endif" class="lazyload" width="150" height="150">

													</a>						
												</div>

												<div class="box-label">
												</div>


											</div>
											<div class="right-block  col-sm-7">

												<div class="caption">
													<h4><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&product_id=101"
														title="@if(session('lang')=='ar')                                                                     
														{{$product->title_name_ar }}
														@endif
														@if(session('lang')=='en')

														{{$product->title_name_en }} 

														@endif" target="_blank">
														@if(session('lang')=='ar')                                                                     
														{{$product->title_name_ar }}
														@endif
														@if(session('lang')=='en')

														{{$product->title_name_en }} 

														@endif

													</a></h4>

													<div class="rating">
														<div class="rating-box">

															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														</div>
														<a class="rating-num"  href="{{url('/')}}/shop/{{$product->id}}" rel="nofollow" target="_blank" >
															{{trans('admin.Reviews')}}
														</a>
													</div>


													<div class="price">
														L.E {{$product->price}}.00



													</div>





													<div class="item-available">
														<div class="row">
															<span class="col-sm-6 text-left"> {{trans('admin.Available')}}: <b>20</b> </span>
															<span class="col-sm-6 text-right">Sold: <b>30</b>  </span>
														</div>
														<div class="available">
															<span class="color_width" data-title="60.00%" data-toggle='tooltip' style="width: 60.00%"></span>
														</div>
													</div>

												</div>


												<div class="button-group so-quickview ">



													<span class="">
														<a href="" id="addtocart" aria-expanded="true" class="addToCart btn-button" style="background-color:#fff">
															<span style="display: none;">{{ $product->id }}</span><span style="font-size:25px;color: red"> 
																<span class="icon-c">
																	<i class="fa fa-shopping-bag"></i>
																</span>
															</span></a> 


														</span>



														<a class="hidden" data-product='101' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&product_id=101" target="_blank" ></a>

													</div>


												</div>

											</div>
										</div>
									</div>

									@endforeach















								</div>




								<script type="text/javascript">
									jQuery(document).ready(function($){
										var $tag_id = $('#so_listing_tabs_184'), 
										parent_active = 	$('.items-category-sell', $tag_id),
										total_product = parent_active.data('total'),
										tab_active = $('.ltabs-items-inner',parent_active),
										nb_column0 = 3,
										nb_column1 = 1,
										nb_column2 = 1,
										nb_column3 = 1,
										nb_column4 = 1;
										tab_active.owlCarousel2({
											rtl: true,
											nav: false,
											dots: true,	
											margin: 0,
											loop:  true,
											autoplay: false,
											autoplayHoverPause: false,
											autoplayTimeout: 5000,
											autoplaySpeed: 1000,
											mouseDrag: true,
											touchDrag: true,
											navRewind: true,
											navText: [ '', '' ],
											responsive: {
												0: {
													items: nb_column4,
													nav: total_product <= nb_column0 ? false : ((false) ? true: false),
												},
												480: {
													items: nb_column3,
													nav: total_product <= nb_column0 ? false : ((false) ? true: false),
												},
												768: {
													items: nb_column2,
													nav: total_product <= nb_column0 ? false : ((false) ? true: false),
												},
												992: {
													items: nb_column1,
													nav: total_product <= nb_column0 ? false : ((false) ? true: false),
												},
												1200: {
													items: nb_column0,

													nav: total_product <= nb_column0 ? false : ((false) ? true: false),
												}
											}
										});
									});
								</script>


							</div>
							<div class="products-list ltabs-items  items-category-p_date_added" data-total="16">
								<div class="ltabs-loading"></div>

							</div>
						</div>
					</div>


				</div>


				<div class="ltabs-wrap ">

					<div class="ltabs-tabs-container" data-delay="500"
					data-duration="800"
					data-effect="none"
					data-ajaxurl="http://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/category&path=24" data-type_source="1"
					data-type_show="slider" >

					<div class="ltabs-tabs-wrap">
						<span class='ltabs-tab-selected'></span>
						<span class="ltabs-tab-arrow">▼</span>
						<ul class="ltabs-tabs cf list-sub-cat font-title">


							<li class="ltabs-tab   tab-sel tab-loaded "
							data-category-id="sell"
							data-active-content-l=".items-category-sell">
							<span class="ltabs-tab-label">
								{{trans('admin.NewArrivals')}}	
							</span>
						</li>

					</ul>




				</div>


			</div>

			<div class="wap-listing-tabs products-list grid">
				<div class="so-loadeding" ></div>
				<div class="ltabs-items-container">
					<div class="products-list ltabs-items  ltabs-items-selected ltabs-items-loaded items-category-sell" data-total="16">
						<div class="ltabs-items-inner owl2-carousel  ltabs-slider ">

							@foreach($NewArrivals as $product)					
							<div class="ltabs-item ">

								<div class="item-inner product-layout transition product-grid">

									<div class="product-item-container">
										<div class="left-block col-sm-5">										

											<div class="product-image-container 	">
												<a href="" target="_blank" title="@if(session('lang')=='ar')


												{{$product->title_name_ar }}
												@endif
												@if(session('lang')=='en')

												{{$product->title_name_en }} 

												@endif"  >

												<img data-sizes="auto" src="{{Storage::url($product->photo)}}" alt="@if(session('lang')=='ar')


												{{$product->title_name_ar }}
												@endif
												@if(session('lang')=='en')

												{{$product->title_name_en }} 

												@endif" class="lazyload" width="150" height="150">

											</a>						
										</div>

										<div class="box-label">
										</div>


									</div>
									<div class="right-block  col-sm-7">

										<div class="caption">
											<h4><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&product_id=101" title="Corem ipsum dolor" target="_blank">
												@if(session('lang')=='ar')                                                                     
												{{$product->title_name_ar }}
												@endif
												@if(session('lang')=='en')

												{{$product->title_name_en }} 

												@endif

											</a></h4>

											<div class="rating">
												<div class="rating-box">

													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<a class="rating-num"  href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&product_id=101" rel="nofollow" target="_blank" >
													{{trans('admin.Reviews')}}
												</a>
											</div>


											<div class="price">
												L.E {{$product->price}}.00



											</div>
											




											<div class="item-available">
												<div class="row">
													<span class="col-sm-6 text-left"> {{trans('admin.Available')}}: <b>20</b> </span>
													<span class="col-sm-6 text-right">Sold: <b>30</b>  </span>
												</div>
												<div class="available">
													<span class="color_width" data-title="60.00%" data-toggle='tooltip' style="width: 60.00%"></span>
												</div>
											</div>

										</div>


										<div class="button-group so-quickview ">

											<span class="">
												<a href="" id="addtocart" aria-expanded="true" class="addToCart btn-button" style="background-color:#fff">
													<span style="display: none;">{{ $product->id }}</span><span style="font-size:25px;color: red"> 
														<span class="icon-c">
															<i class="fa fa-shopping-bag"></i>
														</span>
													</span></a> 


												</span>



												<a class="hidden" data-product='101' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&product_id=101" target="_blank" ></a>

											</div>


										</div>

									</div>
								</div>
							</div>
							
							@endforeach





							







							

						</div>




						<script type="text/javascript">
							jQuery(document).ready(function($){
								var $tag_id = $('#so_listing_tabs_184'), 
								parent_active = 	$('.items-category-sell', $tag_id),
								total_product = parent_active.data('total'),
								tab_active = $('.ltabs-items-inner',parent_active),
								nb_column0 = 3,
								nb_column1 = 1,
								nb_column2 = 1,
								nb_column3 = 1,
								nb_column4 = 1;
								tab_active.owlCarousel2({
									rtl: true,
									nav: false,
									dots: true,	
									margin: 0,
									loop:  true,
									autoplay: false,
									autoplayHoverPause: false,
									autoplayTimeout: 5000,
									autoplaySpeed: 1000,
									mouseDrag: true,
									touchDrag: true,
									navRewind: true,
									navText: [ '', '' ],
									responsive: {
										0: {
											items: nb_column4,
											nav: total_product <= nb_column0 ? false : ((false) ? true: false),
										},
										480: {
											items: nb_column3,
											nav: total_product <= nb_column0 ? false : ((false) ? true: false),
										},
										768: {
											items: nb_column2,
											nav: total_product <= nb_column0 ? false : ((false) ? true: false),
										},
										992: {
											items: nb_column1,
											nav: total_product <= nb_column0 ? false : ((false) ? true: false),
										},
										1200: {
											items: nb_column0,

											nav: total_product <= nb_column0 ? false : ((false) ? true: false),
										}
									}
								});
							});
						</script>


					</div>
					<div class="products-list ltabs-items  items-category-p_date_added" data-total="16">
						<div class="ltabs-loading"></div>

					</div>
				</div>
			</div>


		</div>
		<script type="text/javascript">
	//<![CDATA[
	jQuery(document).ready(function ($) {
		;
		(function (element) {
			var $element = $(element),
			$tab = $('.ltabs-tab', $element),
			$tab_label = $('.ltabs-tab-label', $tab),
			$tabs = $('.ltabs-tabs', $element),
			ajax_url = $tabs.parents('.ltabs-tabs-container').attr('data-ajaxurl'),
			effect = $tabs.parents('.ltabs-tabs-container').attr('data-effect'),
			delay = $tabs.parents('.ltabs-tabs-container').attr('data-delay'),
			duration = $tabs.parents('.ltabs-tabs-container').attr('data-duration'),
			type_source = $tabs.parents('.ltabs-tabs-container').attr('data-type_source'),
			$items_content = $('.ltabs-items', $element),
			$items_inner = $('.ltabs-items-inner', $items_content),
			$items_first_active = $('.ltabs-items-selected', $element),
			$load_more = $('.ltabs-loadmore', $element),
			$btn_loadmore = $('.ltabs-loadmore-btn', $load_more),
			$select_box = $('.ltabs-selectbox', $element),
			$tab_label_select = $('.ltabs-tab-selected', $element),
			setting = 'a:74:{s:6:"action";s:9:"save_edit";s:4:"name";s:17:"Category Features";s:18:"module_description";a:2:{i:2;a:1:{s:9:"head_name";s:17:"Category Features";}i:1;a:1:{s:9:"head_name";s:17:"Category Features";}}s:9:"head_name";s:17:"Category Features";s:17:"disp_title_module";s:1:"0";s:6:"status";s:1:"1";s:12:"store_layout";s:8:"category";s:12:"class_suffix";s:0:"";s:16:"item_link_target";s:6:"_blank";s:10:"nb_column0";s:1:"3";s:10:"nb_column1";s:1:"1";s:10:"nb_column2";s:1:"1";s:10:"nb_column3";s:1:"1";s:10:"nb_column4";s:1:"1";s:9:"type_show";s:6:"slider";s:6:"nb_row";s:1:"1";s:11:"type_source";s:1:"1";s:8:"category";a:4:{i:0;s:2:"76";i:1;s:2:"85";i:2;s:2:"74";i:3;s:2:"24";}s:14:"child_category";s:1:"1";s:14:"category_depth";s:1:"1";s:12:"product_sort";s:7:"p.price";s:16:"product_ordering";s:3:"ASC";s:12:"source_limit";s:1:"6";s:13:"catid_preload";s:1:"*";s:17:"field_product_tab";a:2:{i:0;s:12:"p_date_added";i:1;s:4:"sell";}s:13:"field_preload";s:4:"sell";s:15:"tab_all_display";s:1:"1";s:18:"tab_max_characters";s:2:"25";s:16:"tab_icon_display";s:1:"1";s:12:"cat_order_by";s:4:"name";s:15:"imgcfgcat_width";s:2:"30";s:16:"imgcfgcat_height";s:2:"30";s:13:"display_title";s:1:"1";s:15:"title_maxlength";s:2:"50";s:19:"display_description";s:1:"0";s:21:"description_maxlength";s:3:"100";s:13:"display_price";s:1:"1";s:19:"display_add_to_cart";s:1:"1";s:16:"display_wishlist";s:1:"0";s:15:"display_compare";s:1:"0";s:14:"display_rating";s:1:"1";s:12:"display_sale";s:1:"1";s:11:"display_new";s:1:"1";s:8:"date_day";s:1:"7";s:17:"product_image_num";s:1:"1";s:13:"product_image";s:1:"1";s:22:"product_get_image_data";s:1:"1";s:23:"product_get_image_image";s:1:"1";s:5:"width";s:3:"270";s:6:"height";s:3:"270";s:24:"product_placeholder_path";s:11:"nophoto.png";s:20:"display_banner_image";s:1:"0";s:12:"banner_image";s:12:"no_image.png";s:12:"banner_width";s:3:"150";s:13:"banner_height";s:3:"250";s:16:"banner_image_url";s:0:"";s:6:"effect";s:4:"none";s:8:"duration";s:3:"800";s:5:"delay";s:3:"500";s:8:"autoplay";s:1:"0";s:11:"display_nav";s:1:"0";s:12:"display_loop";s:1:"1";s:9:"touchdrag";s:1:"1";s:9:"mousedrag";s:1:"1";s:10:"pausehover";s:1:"0";s:15:"autoplayTimeout";s:4:"5000";s:13:"autoplaySpeed";s:4:"1000";s:8:"pre_text";s:0:"";s:9:"post_text";s:0:"";s:9:"use_cache";s:1:"0";s:10:"cache_time";s:4:"3600";s:8:"moduleid";s:3:"184";s:11:"cfp_setting";a:5:{s:43:"module_so_call_for_price_send_mail_customer";s:1:"1";s:37:"module_so_call_for_price_send_mail_to";s:14:"dulv@ytcvn.com";s:37:"module_so_call_for_price_replace_cart";s:1:"0";s:34:"module_so_call_for_price_hide_cart";s:1:"0";s:31:"module_so_call_for_price_status";s:1:"1";}s:5:"start";i:0;}',
			type_show = 'slider';

			enableSelectBoxes();
			function enableSelectBoxes() {
				$tab_wrap = $('.ltabs-tabs-wrap', $element),
				$tab_label_select.html($('.ltabs-tab', $element).filter('.tab-sel').children('.ltabs-tab-label').html());
				if ($(window).innerWidth() <= 991) {
					$tab_wrap.addClass('ltabs-selectbox');
				} else {
					$tab_wrap.removeClass('ltabs-selectbox');
				}
			}

			$('span.ltabs-tab-selected, span.ltabs-tab-arrow', $element).click(function () {
				if ($('.ltabs-tabs', $element).hasClass('ltabs-open')) {
					$('.ltabs-tabs', $element).removeClass('ltabs-open');
				} else {
					$('.ltabs-tabs', $element).addClass('ltabs-open');
				}
			});

			$(window).resize(function () {
				if ($(window).innerWidth() <= 991) {
					$('.ltabs-tabs-wrap', $element).addClass('ltabs-selectbox');
				} else {
					$('.ltabs-tabs-wrap', $element).removeClass('ltabs-selectbox');
				}
			});

			function showAnimateItems(el) {
				var $_items = $('.new-ltabs-item', el), nub = 0;
				$('.ltabs-loadmore-btn', el).fadeOut('fast');
				$_items.each(function (i) {
					nub++;
					switch(effect) {
						case 'none' : $(this).css({'opacity':'1','filter':'alpha(opacity = 100)'}); break;
						default: animatesItems($(this),nub*delay,i,el);
					}
					if (i == $_items.length - 1) {
						$('.ltabs-loadmore-btn', el).fadeIn(3000);
					}
					$(this).removeClass('new-ltabs-item');
				});
			}

			function animatesItems($this,fdelay,i,el) {
				var $_items = $('.ltabs-item', el);
				$this.stop(true, true).attr("style",
					"-webkit-animation:" + effect +" "+ duration +"ms;"
					+ "-moz-animation:" + effect +" "+ duration +"ms;"
					+ "-o-animation:" + effect +" "+ duration +"ms;"
					+ "-moz-animation-delay:" + fdelay + "ms;"
					+ "-webkit-animation-delay:" + fdelay + "ms;"
					+ "-o-animation-delay:" + fdelay + "ms;"
					+ "animation-delay:" + fdelay + "ms;").delay(fdelay).animate({
						opacity: 1,
						filter: 'alpha(opacity = 100)'
					}, {
						delay: 1000
					});
					if (i == ($_items.length - 1)) {
						$(".ltabs-items-inner").addClass("play");
					}
				}
				if (type_show == 'loadmore') {
					showAnimateItems($items_first_active);
				}
				$tab.on('click.ltabs-tab', function () {
					var $this = $(this);
					if ($this.hasClass('tab-sel')) return false;
					if ($this.parents('.ltabs-tabs').hasClass('ltabs-open')) {
						$this.parents('.ltabs-tabs').removeClass('ltabs-open');
					}
					$tab.removeClass('tab-sel');
					$this.addClass('tab-sel');
					var items_active = $this.attr('data-active-content-l');
					var _items_active = $(items_active,$element);
					$items_content.removeClass('ltabs-items-selected');
					_items_active.addClass('ltabs-items-selected');
					$tab_label_select.html($tab.filter('.tab-sel').children('.ltabs-tab-label').html());
					var $loading = $('.ltabs-loading', _items_active);
					var loaded = _items_active.hasClass('ltabs-items-loaded');
					type_show =$tabs.parents('.ltabs-tabs-container').attr('data-type_show');
					if (!loaded && !_items_active.hasClass('ltabs-process')) {
						_items_active.addClass('ltabs-process');
						var category_id 		= $this.attr('data-category-id');
						$loading.show();
						$.ajax({
							type: 'POST',
							url: ajax_url,
							data: {
								is_ajax_listing_tabs: 1,
								ajax_reslisting_start: 0,
								categoryid: category_id,
								setting : setting,
								lbmoduleid: 184
							},
							success: function (data) {
								if (data.items_markup != '') {
									$('.ltabs-loading', _items_active).replaceWith(data.items_markup);
									_items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
									$loading.remove();
									if (type_show != 'slider') {
										showAnimateItems(_items_active);
									}
									updateStatus(_items_active);
								}
								if(typeof(_SoQuickView) != 'undefined'){
									_SoQuickView();
								}
								
							},
							dataType: 'json'
						});

					} else {
						if (type_show == 'loadmore') {
							$('.ltabs-item', $items_content).removeAttr('style').addClass('new-ltabs-item');
							showAnimateItems(_items_active);
						}else{
							var owl = $('.owl2-carousel' , _items_active);
							owl = owl.data('owlCarousel2');
							if (typeof owl !== 'undefined') {
								owl.onResize();
							}
						}
					}
				});

				function updateStatus($el) {
					$('.ltabs-loadmore-btn', $el).removeClass('loading');
					var countitem = $('.ltabs-item', $el).length;
					$('.ltabs-image-loading', $el).css({display: 'none'});
					$('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
					var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
					var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
					var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');

					if (countitem >= rl_total) {
						$('.ltabs-loadmore-btn', $el).addClass('loaded');
						$('.ltabs-image-loading', $el).css({display: 'none'});
						$('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
						$('.ltabs-loadmore-btn', $el).removeClass('loading');
					}
				}

				$btn_loadmore.on('click.loadmore', function () {
					var $this = $(this);
					if ($this.hasClass('loaded') || $this.hasClass('loading')) {
						return false;
					} else {
						$this.addClass('loading');
						$('.ltabs-image-loading', $this).css({display: 'inline-block'});
						var rl_start 				= $this.parent().attr('data-rl_start'),
						rl_ajaxurl 				= $this.parent().attr('data-ajaxurl'),
						effect 					= $this.parent().attr('data-effect'),
						category_id 			= $this.parent().attr('data-categoryid'),
						items_active 			= $this.parent().attr('data-active-content');
						
						var _items_active = $(items_active,$element);

						$.ajax({
							type: 'POST',
							url: rl_ajaxurl,
							data: {
								is_ajax_listing_tabs: 1,
								ajax_reslisting_start: rl_start,
								categoryid: category_id,
								setting: setting,
								lbmoduleid: 184
							},
							success: function (data) {
								if (data.items_markup != '') {
									$($(data.items_markup).html()).insertAfter($('.ltabs-item', _items_active).nextAll().last());
									$('.ltabs-image-loading', $this).css({display: 'none'});
									showAnimateItems(_items_active);
									updateStatus(_items_active);
								}
								if(typeof(_SoQuickView) != 'undefined'){
									_SoQuickView();
								}
							}, dataType: 'json'
						});
					}
					return false;
				});
			})('#so_listing_tabs_184');
		});
	//]]>
</script>
</div>
</div> <!-- /.modcontent-->

</div>	

<div class="products-category clearfix">



	<div class="refine-search form-group clearfix">
		<h3 class="title-category">الأقسام الفرعية</h3>
		<ul class="refine-search__content ">
			@foreach($Departments  as  $Department)


			<li class="refine-search__subitem">
				<a href="{{url('/')}}/shop?id={{$Department->id}}" class="thumbnail">

					<img style="width:110px;height: 110px" class="lazyload"  data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{Storage::url($Department->icon)}}" alt="@if(session('lang')=='ar')
					{{$Department->dep_name_ar }}
					@endif
					@if(session('lang')=='en')
					{{$Department->dep_name_en }}
					@endif" />

				</a>
				<a href="{{url('/')}}/shop?id={{$Department->id}}"  target="_blank">
					@if(session('lang')=='ar')
					{{$Department->dep_name_ar }}
					@endif
					@if(session('lang')=='en')
					{{$Department->dep_name_en }}
					@endif
				</a>
			</li>

			@endforeach




		</ul>
		<script type="text/javascript"><!--
			catalog_refine_number = 6;
			if(catalog_refine_number <= $('.refine-search__content > li').length)
				$('.refine-search__content').append('<li class="refine-loadmore"><i class="fa fa-plus"></i> <span class="more-view"> {{trans("admin.More")}} </span></li>');

			var show_catalog_refine_number = catalog_refine_number-1 ;
			$('ul.refine-search__content > li.refine-search__subitem').each(function(i){
				if(i>show_catalog_refine_number){
					$(this).css('display', 'none');
				}
			});

			$("ul.refine-search__content .refine-loadmore").click(function(){
				if($(this).hasClass('open')){
					$('ul.refine-search__content li.refine-search__subitem').each(function(i){
						if(i>show_catalog_refine_number){
							$(this).slideUp(200);
							$(this).css('display', 'none');
						}
					});
					$(this).removeClass('open');
					$('.refine-loadmore').html('<i class="fa fa-plus"></i> <span class="more-view">{{trans("admin.More")}}   </span>');

				}else{
					$('ul.refine-search__content li.refine-search__subitem').each(function(i){
						if(i>show_catalog_refine_number){
							$(this).slideDown(200);
						}
					});
					$(this).addClass('open');
					$('.refine-loadmore').html('<i class="fa fa-minus"></i> <span class="more-view">{{trans("admin.Less")}}  </span>');
				}
			});
			//--></script> 
			
			
		</div>




		<div class="product-filter product-filter-top filters-panel">
			<div class="row">
				<div class="col-sm-5 view-mode">


					<a href="javascript:void(0)" class="open-sidebar hidden-lg hidden-md"><i class="fa fa-bars"></i>الشريط الجانبي</a>
					<div class="sidebar-overlay "></div>
					<div class="list-view">
						<div class="btn btn-gridview">{{trans('admin.GridView')}}:</div>
						<button type="button" id="grid-view-2" class="btn btn-view hidden-sm hidden-xs">2</button>
						<button type="button" id="grid-view-3" class="btn btn-view hidden-sm hidden-xs ">3</button>
						<button type="button" id="grid-view-4" class="btn btn-view hidden-sm hidden-xs">4</button>
						<button type="button" id="grid-view-5" class="btn btn-view hidden-sm hidden-xs">5</button>
						<button type="button" id="grid-view" class="btn btn-default grid hidden-lg hidden-md" title="شبكة"><i class="fa fa-th-large"></i></button>
						<button type="button" id="list-view" class="btn btn-default list " title="قائمة"><i class="fa fa-bars"></i></button>
						<button type="button" id="table-view" class="btn btn-view"><i class="fa fa-table" aria-hidden="true"></i></button>

					</div>
				</div>

				<div class="short-by-show form-inline text-right col-md-7 col-sm-7 col-xs-12">
					<div class="form-group short-by">
						<label class="control-label" for="input-sort">{{trans('admin.Sortby')}}:</label>


		<span   style="    font-size: 13px;
    border: 1px solid #f7f7f7;
    padding: 3px;
">
			
	 <a href="{{ route('shop.index',['id'=>request()->id,'sort'=>'theMostRecent']) }}">{{trans('admin.theMostRecent')}}</a>&nbsp;|&nbsp;
	<a href="{{ route('shop.index',['id'=>request()->id,'sort'=>'moreRequests']) }}">{{trans('admin.moreRequests')}}</a> &nbsp;|&nbsp;
					     <a href="">{{trans('admin.Toprated')}}</a>&nbsp;|&nbsp;



					    

 @if($arrcolor == 0 )
                 
 <a href="{{ route('shop.index',['id'=>request()->id,'sort'=>'low_high']) }}">
{{trans('admin.Price')}} 
                <img src="{{url('/')}}/forentend3/sort.png"  />
 	 
 </a> 
                  @endif


                  @if($arrcolor == 1 )
                    <a href="{{ route('shop.index',['id'=>request()->id,'sort'=>'high_low']) }}">
                    	{{trans('admin.Price')}} 
                <img src="{{url('/')}}/forentend3/sortupred.png"  />
                    </a>

                  @endif

                   @if($arrcolor == 2 )
                   <a href="{{ route('shop.index',['id'=>request()->id,'sort'=>'low_high']) }}">
{{trans('admin.Price')}} 
                <img src="{{url('/')}}/forentend3/sortdawonred.png"  />

                  @endif

                    

		</span>



					</div>
					<div class="form-group">
						<label class="control-label" for="input-limit">عرض:</label>

					 
					</div>

					<div class="form-group product-compare hidden-sm hidden-xs"><a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/compare" id="compare-total" class="btn btn-default">
						مقارنة المنتج (0)

					</a></div>
				</div>

			</div>
		</div>

		<div class="products-list row nopadding-xs">
			@foreach($products  as  $product)
			
			<div class="product-layout ">
				<div class="product-item-container">
					<div class="left-block">
						
						<div class="product-card__gallery product-card__right">
   @forelse (App\filess::where('file_type','productes')->
                where('relation_id',$product->id)->take(1)->get() as  $file)
    <div class="item-img thumb-active" data-src="{{Storage::url($product->photo)}}">
								<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{Storage::url($product->photo)}}" alt=" @if(session('lang')=='ar')

        {{$product->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$product->title_name_en }} 
@endif" style="width: 47px;height: 47px">
							</div>
			 						       @empty

     

    @endforelse  
							


							  @forelse (App\filess::where('file_type','productes')->
                where('relation_id',$product->id)->take(2)->get() as  $file)


							<div class="item-img thumb-active" data-src="{{Storage::url($file->full_file)}}">
								<img class="lazyautosizes lazyloaded" data-sizes="auto" src="{{Storage::url($file->full_file)}}" data-src="{{Storage::url($file->full_file)}}" alt="Corem ipsum dolor"   style="width:47px;height: 47px"></div>

						 						       @empty

     

    @endforelse  


						</div>
						
						<div class="product-image-container">

							<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;path=24&amp;product_id=101 " title="Corem ipsum dolor ">
								
								<img src="{{Storage::url($product->photo)}}" alt=" @if(session('lang')=='ar')

        {{$product->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$product->title_name_en }} 
@endif" title="Corem ipsum dolor" class="img-responsive" id="product-image-{{$product->id}}" / style="height: 170px;width: 270px">

							</a>
						</div>
						


                   

						<div class="button-group cartinfo--left">

							<a class="btn-button" title="{{trans('admin.AddtoCart')}}"  id="addtocart"> <span style="display: none;">{{ $product->id }}</span><i class="fa fa-shopping-basket"></i></a>

								<a class="btn-button" title="{{trans('admin.AddtoWishList')}}"  id="switchToSaveForLaterHome"> <span style="display: none;">{{ $product->id }}</span><i class="fa fa-heart"></i></a>

 


							<button class="compare btn-button" type="button" title="{{trans('admin.AddtoCompare')}}"><i class="fa fa-random"></i></button>


							<a class="quickview iframe-link visible-lg btn-button" title="{{trans('admin.Quickview')}}" data-fancybox-type="iframe"  href="{{url('/')}}/shop/{{$product->id}}"> <i class="fa fa-eye"></i></a>

						</div>
					</div>
				 
					<div class="right-block">

						<ul class="so-productlist-colorswatch" id="colorswatch-101">
                     @forelse ($product->other_otherDataForSize_R()->take(5)->get() as $file)
     

							 
							<li class="{{$file->id}}">
								<a href="javascript:void(0);" title="Lime" style="width: 15px; height: 15px; background-image: url('{{url('/')}}/images/{{$file->color_photo}}')"></a>
								<script type="text/javascript">
									jQuery(document).ready(function($) {
										var $window_width = $(window).width();
										$(document).on('click', '.{{$file->id}}', function(e) {
											e.preventDefault();
											jQuery('img#product-image-{{$product->id}}').attr('src', '{{url("/")}}/images/{{$file->color_photo}}');

											$('.{{$file->id}}').removeClass('actived');
											$(this).removeClass('actived').addClass('actived');
										});
									})
								</script>
							</li>
							 
                         @empty

        

    @endforelse               


						</ul>

						<h4><a href="{{url('/')}}/shop/{{$product->id}}">


            @if(session('lang')=='ar')

        {{$product->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$product->title_name_en }} 
@endif
						 </a></h4>
						<div class="rate-history">

							<div class="ratings">
								<div class="rating-box">
<a class="rating-num"  href="{{url('/')}}/shop/{{$product->id}}" rel="nofollow" target="_blank" >{{trans('admin.Reviews')}}</a>
									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>


									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>


									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>


									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>


									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>


								</div>
								
							</div>
							
							
						</div>

						

						<div class="price">

							<span class="price-new">
								{{trans('admin.pound')}} {{$product->price}}
							</span>

						</div>
						

						<div class="description">
							<p>
								 @if(session('lang')=='ar')

        {{$product->content_name_ar }}
@endif
  @if(session('lang')=='en')
{{$product->title_name_en }} 
@endif
							</p>
						</div>


						
					</div>

					<div class="list-block">

						<button class="addToCart btn-button" type="button" title="Add to Cart" onclick="cart.add('101', '1');"><i class="fa fa-shopping-basket"></i></button>


						<button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i></button>


						<button class="compare btn-button" type="button" title="Add to Compare" onclick="compare.add('101');"><i class="fa fa-refresh"></i></button>


					</div>

				</div>

			</div>
			
			         @endforeach
			
				  {{ $products->links() }}
		 
 
			

		</div>

		<div class="product-filter product-filter-bottom filters-panel">
			<div class="row">
				<div class="col-sm-6 text-left"></div>
				<div class="col-sm-6 text-right">

				 

			</div>
			</div>
		</div>

		<script type="text/javascript"><!--
			reinitView();

			function reinitView() {

				$( '.product-card__gallery .item-img').hover(function() {
					$(this).addClass('thumb-active').siblings().removeClass('thumb-active');
					var thumb_src = $(this).attr("data-src");
					$(this).closest('.product-item-container').find('img.img-responsive').attr("src",thumb_src);
				}); 

				$('.view-mode .list-view button').bind("click", function() {
					$(this).parent().find('button').removeClass('active');
					$(this).addClass('active');
				});	
		// Product List
		$('#list-view').click(function() {
			$('.products-category .product-layout').attr('class', 'product-layout product-list col-xs-12');
			localStorage.setItem('listview', 'list');
		});

		// Product Grid
		$('#grid-view').click(function() {
			var cols = $('.left_column , .right_column ').length;

			
			$('.products-category .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
			
			localStorage.setItem('listview', 'grid');
		});

		// Product Grid 2
		$('#grid-view-2').click(function() {
			$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-2 col-lg-6 col-md-6 col-sm-6 col-xs-12');
			localStorage.setItem('listview', 'grid-2');
		});

		// Product Grid 3
		$('#grid-view-3').click(function() {
			$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-3 col-lg-4 col-md-4 col-sm-6 col-xs-12');
			localStorage.setItem('listview', 'grid-3');
		});

		// Product Grid 4
		$('#grid-view-4').click(function() {
			$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-4 col-lg-3 col-md-4 col-sm-6 col-xs-12');
			localStorage.setItem('listview', 'grid-4');
		});

		// Product Grid 5
		$('#grid-view-5').click(function() {
			$('.products-category .product-layout').attr('class', 'product-layout product-grid product-grid-5 col-lg-15 col-md-4 col-sm-6 col-xs-12');
			localStorage.setItem('listview', 'grid-5');
		});

		// Product Table
		$('#table-view').click(function() {
			$('.products-category .product-layout').attr('class', 'product-layout product-table col-xs-12');
			localStorage.setItem('listview', 'table');
		})

		
		if(localStorage.getItem('listview')== null) localStorage.setItem('listview', 'grid-5');
		
		if (localStorage.getItem('listview') == 'table') {
			$('#table-view').trigger('click');
		} else if (localStorage.getItem('listview') == 'grid-2'){
			$('#grid-view-2').trigger('click');
		} else if (localStorage.getItem('listview') == 'grid-3'){
			$('#grid-view-3').trigger('click');
		} else if (localStorage.getItem('listview') == 'grid-4'){
			$('#grid-view-4').trigger('click');
		} else if (localStorage.getItem('listview') == 'grid-5'){
			$('#grid-view-5').trigger('click');
		} else {
			$('#list-view').trigger('click');
		}
		

	}

	//--></script> 				




</div>
</div>



<script type="text/javascript"><!--
	$(window).load(sidebar_sticky_update);
	$(window).resize(sidebar_sticky_update);

	function sidebar_sticky_update(){
		var viewportWidth = $(window).width();
		if (viewportWidth > 1200) {
		    		// Initialize the sticky scrolling on an item 
		    		sidebar_sticky = 'disable';

		    		if(sidebar_sticky=='left'){
		    			$(".left_column").stick_in_parent({
		    				offset_top: 10,
		    				bottoming   : true
		    			});
		    		}else if (sidebar_sticky=='right'){
		    			$(".right_column").stick_in_parent({
		    				offset_top: 10,
		    				bottoming   : true
		    			});
		    		}else if (sidebar_sticky=='all'){
		    			$(".content-aside").stick_in_parent({
		    				offset_top: 10,
		    				bottoming   : true
		    			});
		    		}
		    	}
		    }


		    //--></script> 

		</div>
	</div>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<div class="w3-container">

		<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" id="control-qid13228" style="display: none;">Open Modal</button>

		<div id="id01" class="w3-modal">
			<div class="w3-modal-content">
				<header class="w3-container w3-teal"> 
					<span onclick="document.getElementById('id01').style.display='none'" 
					class="w3-button w3-display-topright">&times;</span>
					<h2 style="margin-right:35px;"><span class="productName"> </span></h2>
				</header>
				<div class="w3-container">


					<div class="homepdata">

						<u style="list-style:none; display:inline-flex;">

							<li>  <p><span class="productimage" > </span></p></li>
							<li style="margin-right:15px;text-align: right;">
								<span class="cart_sucess"> </span>

								<p>{{trans('admin.name')}}:<span class="productName"> </span></p>
								<p>{{trans('admin.price')}}:<span class="productprice"> </span></p>
								<p>{{trans('admin.price_offer')}}:<span class="price_offer"> </span></p>
								<p>{{trans('admin.content_name_ar')}}:<span class="content_name_ar"> </span></p>
								<p>{{trans('admin.admin_id')}}:<span class="admin_id"> </span></p>
								<p>{{trans('admin.alymarketcode')}}:<span class="alymarketcode"> </span></p>
								<p>{{trans('admin.department_id')}}:<span class="department_id"> </span></p>




								<a href="{{ route('shop.index') }}" class="btn--secondary update-cart">
									{{trans('admin.ContinueShopping')}}
									<span class="icon icon-arrow-right" aria-hidden="true"></span>

								</a>

								<a href="{{ route('wishlist.index') }}" class="btn cart__checkout">
									{{trans('admin.wishlist')}}
									<span class="icon icon-arrow-right" aria-hidden="true"></span>

								</a>


							</li>
						</u>


					</div>



				</div>
				<footer class="w3-container w3-teal">
					<p>AlyMarket</p>
				</footer>
			</div>
		</div>
	</div>


	<footer class="footer-container typefooter-1">

		
		<div class="footer-main collapse description-has-toggle" id="collapse-footer">

			<div class="so-page-builder">
				<div class="container-fluid page-builder-rtl">
					<div class="row row_3vy7  footer-top ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_tt1l  container ftop">
							<div class="row row_1olj  ">

								<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 col_vagh col-style">




									<div class="module newsletter-footer1">
										<div class="newsletter" style="width:100%   ; background-color: #fff ; ">


											<div class="title-block">
												<div class="page-heading font-title" style="font-size:20px">
										{{trans('admin.SignupforNewsletter')}}
													
													 
												</div>
												<div class="promotext">
										{{trans('admin.SignupforNewsletter1')}}

												 </div>
											</div>

											<div class="block_content">
												<form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
													<div class="form-group">
														<div class="input-box">
															<input type="email" placeholder="{{trans('admin.Youremailaddress')}}" value="" class="form-control" id="txtemail" name="txtemail" size="55">
														</div>
														<div class="subcribe">
															<button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
										{{trans('admin.Subscribe')}}

																
															</button>
														</div>
													</div>
												</form>


											</div> <!--/.modcontent-->

										</div>



										<script type="text/javascript">
											function subscribe_newsletter()
											{
												var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
												var email = $('#txtemail').val();
												var d = new Date();
												var createdate = d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
												var status   = 0;
												var dataString = 'email='+email+'&createdate='+createdate+'&status='+status;

												if(email != ""){

													if(!emailpattern.test(email))
													{

														$('.show-error').remove();
														$('.send-mail').after('<div class="alert alert-danger show-error" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> Invalid Email </div>')
														return false;
													}
													else
													{
														$.ajax({
															url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
															type: 'post',
															data: dataString,
															dataType: 'json',
															success: function(json) {
																$('.show-error').remove();
																if(json.error == false) {
																	$('.send-mail').after('<div class="alert alert-success show-error" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> ' + json.message + '</div>');
																	setTimeout(function () {
																		var this_close = $('.popup-close');
																		this_close.parent().css('display', 'none');
																		this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');
																	}, 3000);

																}else{
																	$('.send-mail').after('<div class="alert alert-danger show-error" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> ' + json.message + '</div>');
																}
																var x = document.getElementsByClassName('signup');
																for (i = 0; i < x.length; i++) {
																	x[i].reset();
																}
															}
														});
														return false;
													}
												} else{
													alert("Email is required");
													$(email).focus();
													return false;
												}
											}
										</script>
									</div>




								</div>
								<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col_1vgt col-style">
									<ul class="socials">
										<li class="facebook"><a class="_blank" href="{{settings()->facebookLink}}" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
										<li class="twitter"><a class="_blank" href="{{settings()->TwitterLink}}" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
										<li class="google_plus"><a class="_blank" href="{{settings()->GmailLink}}" target="_blank"><i class="fa fa-google-plus"></i><span>Google Plus</span></a></li>
										<li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
									</ul>


								</div>
							</div>

						</div>			

					</div>
				</div>

				<div class="container page-builder-rtl">
					<div class="row row_560y  footer-middle ">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_i76p  col-style">
							<div class="infos-footer">
								<a href="#"><img src="{{Storage::url(settings()->siteflag_ar)}}" alt="image"></a>
								<ul>
									<li class="adres">
										@if(session('lang') == 'ar')
										{{settings()->address_ar}}
										@endif
										 @if(session('lang') == 'en')
										{{settings()->address_en}}
										@endif
									</li>
									<li class="phone">
										{{settings()->phone}}
										   
									</li>
									<li class="mail">
										<a href="mailto:support@alymarket.net">
										{{settings()->email}}
										 
									</a>
									</li>
									<li class="timer">
										{{trans('admin.twork')}}
									</li>
								</ul>
							</div>



						</div>			
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col_njm1  col-style">
							<div class="box-information box-footer">
								<div class="module clearfix">
									<h3 class="modtitle">{{trans('admin.Information')}}</h3>
									<div class="modcontent">
										<ul class="menu">
											<li><a href="{{url('/')}}/about">
												{{trans('admin.AboutUs')}}
											
										</a></li>
											<li><a href="{{url('/')}}/FAQ">{{trans('admin.FAQ')}}</a></li>
											<li><a href="{{url('/')}}/PurchaseAndDeliveryPolicy">{{trans('admin.PurchaseAndDeliveryPolicy')}}</a></li>
											<li><a href="{{url('/')}}/contact">{{trans('admin.Support24/7')}}</a></li>
											 
											<li><a href="#">{{trans('admin.ProductSupport')}}</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>			
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col_py4d  col-style">
							<div class="box-account box-footer">
								<div class="module clearfix">
									<h3 class="modtitle">{{trans('admin.MyAccount')}}</h3>
									<div class="modcontent">
										<ul class="menu">
											<li><a href="index.php?route=product/manufacturer">{{trans('admin.Brands')}}</a></li>
											<li><a href="index.php?route=account/voucher">{{trans('admin.GiftCertificates')}}</a></li>
											<li><a href="index.php?route=affiliate/login">{{trans('admin.Affiliates')}}</a></li>
											<li><a href="index.php?route=product/special">{{trans('admin.Specials')}}</a></li>
											<li><a href="#">{{trans('admin.FAQs')}}</a></li>
											<li><a href="#">{{trans('admin.CustomLink')}}</a></li>
										</ul>
									</div>
								</div>
							</div>


						</div>			
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col_slxc  col-style">
							<div class="box-service box-footer">
								<div class="module clearfix">
									<h3 class="modtitle">{{trans('admin.Services')}}</h3>
									<div class="modcontent">
										<ul class="menu">
											<li><a href="index.php?route=information/contact">
											{{trans('admin.ContactUs')}}</a></li>
											<li><a href="index.php?route=account/return/add">{{trans('admin.Returns')}}</a></li>
											<li><a href="#">{{trans('admin.Support')}}</a></li>
											<li><a href="index.php?route=information/sitemap">{{trans('admin.SiteMap')}}</a></li>
											<li><a href="#">{{trans('admin.CustomerService')}}</a></li>
											<li><a href="#">{{trans('admin.CustomLink')}}</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>			
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_5rbh  col-style">


							<div class="module box-footer so-instagram-gallery-rtl  ">

								<h4 class="modtitle">{{trans('admin.InstagramGallery')}}</h4>


								<div class="form-group">

								</div>

								<div class="modcontent">

									<div class="so-instagram-gallery button-type2 " id="instagram19803790781591281322">
{{trans('admin.InstagramGallery2')}}
									

									</div>
								</div> <!-- /.modcontent-->

								<div class="form-group">

								</div>

							</div>


							<script type="text/javascript">
								$(document).ready(function(){
									$(".gallery_image_instagram19803790781591281322").attr('rel', 'gallery').fancybox({
										prevMethod : false,
										helpers: {
											thumbs	: {
												width	: 50,
												height	: 50,
											},

											title : {type : 'over'},
										},
									});
								});
							</script>

						</div>			

					</div>
				</div>

				<div class="container page-builder-rtl">
					<div class="row row_nfrt  row-style ">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_apdj  col-style">
							<ul class="footer-links font-title">
								<li><a href="#">Online Shopping</a></li>
								<li><a href="#">Promotions</a></li>
								<li><a href="?route=information/information&information_id=6">Privacy Policy</a></li>
								<li><a href="#">Site Map</a></li>
								<li><a href="#">Orders and Returns</a></li>
								<li><a href="?route=information/information&information_id=6">Help</a></li>
								<li><a href="?route=information/contact">Contact Us</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Most Populars</a></li>
								<li><a href="#">New Arrivals</a></li>
								<li><a href="#">Special Products</a></li>
								<li><a href="index.php?route=product/manufacturer">Manufacturers</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Payments</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Refunds</a></li>
								<li><a href="#">Warantee</a></li>
								<li><a href="#">Promotions</a></li>
								<li><a href="?route=information/information&information_id=3">Customer Service</a></li>
								<li><a href="#">Our Stores</a></li>
								<li><a href="#">Discount</a></li>
								<li><a href="?route=checkout/checkout">Checkout</a></li>    
							</ul>  

						</div>			

					</div>
				</div>

			</div>


		</div>
		
		<div class="description-toggle hidden-lg hidden-md">
			<a class="showmore" data-toggle="collapse" href="#collapse-footer" aria-expanded="false" aria-controls="collapse-footer">
				<span class="toggle-more">أظهر المزيد <i class="fa fa-angle-down"></i></span> 
				<span class="toggle-less">إظهار أقل <i class="fa fa-angle-up"></i></span>   
			</a>        
		</div>

		

		<div class="footer-bottom ">
			<div class="container">

				<div class="col-lg-12 col-xs-12 payment-w">
					<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="image/catalog/demo/payment/payment.png"  alt="imgpayment">
				</div>
			</div>
			<div class="copyright-w">
				<div class="container">
					<div class="copyright">
						eMarket © 2020 Demo Store. All Rights Reserved. Designed by <a href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a>
					</div>
				</div>
			</div>

			
		</div>
	</footer>


	<!-- <div class="back-to-top"><i class="fa fa-angle-up"></i></div>-->
	<div id="previewModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"> Added to cart successfully. What is next?</h4>
				</div>
				<div class="modal-body"></div>
			</div>
		</div>
	</div>



</div>

<script type="text/javascript">
	$(document).on('click','#addtocart',function(){

		var tr = $(this).closest('tr');
	                          tr.fadeOut(1000, function(){ // **addd this
	                          	$(this).remove();
	                          });


	                          var text =$(this).text();

	                          text=text.toString();



	                          $.ajax({
	                          	url:"{{url('/')}}/addToCart",
	                          	method:"POST",
	                          	data :{
	                          		_token:'{{ csrf_token() }}',
	                          		id:text,

	                          	},
	                          	dataType:"json",
	                          	beforeSend:function(){
	                          		$('.cart_sucess').html('');
	                          		$('.cc').addClass('hidden');
	                          	},
	                          	success:function(data)
	                          	{

	                          		$('.cart_sucess').html(data.success); 

	                          		$('.cart_sucess').html(data.success);
	                          		$('.productName').html(data.productName);
	                          		$('.productimage').html(data.productimage);
	                          		$('.productprice').html(data.productprice);
	                          		$('.price_offer').html(data.price_offer);
	                          		$('.content_name_ar').html(data.content_name_ar);
	                          		$('.admin_id').html(data.admin_id);
	                          		$('.alymarketcode').html(data.alymarketcode);
	                          		$('.department_id').html(data.department_id);

	                          		$("#control-qid13228").click();   

	                          	}
	                          });
	                          return false;



	                      });
	                  </script>

  <script type="text/javascript">
             

      $(document).on('click','#switchToSaveForLaterHome',function(){

                      var tr = $(this).closest('tr');
                          tr.fadeOut(1000, function(){ // **addd this
                            $(this).remove();
                        });
                  

                      var text =$(this).text();

              text=text.toString();

      
         
            
        $.ajax({
            url:"{{ url('switchToSaveForLaterHome') }}",
            method:"POST",
           data :{
            _token:'{{ csrf_token() }}',
            id:text,

           },
            dataType:"json",
            beforeSend:function(){
                      $('.cart_sucess').html('');
                         $('.cc').addClass('hidden');
            },
            success:function(data)
            {
             



             $('.cart_sucess').html(data.success);
             $('.productName').html(data.productName);
             $('.productimage').html(data.productimage);
             $('.productprice').html(data.productprice);
             $('.price_offer').html(data.price_offer);
             $('.content_name_ar').html(data.content_name_ar);
             $('.admin_id').html(data.admin_id);
             $('.alymarketcode').html(data.alymarketcode);
             $('.department_id').html(data.department_id);






               $("#control-qid13228").click();  

            }
        });
             return false;
    
                    
                     
                    });
  </script>





	              </body>
	              </html> 
