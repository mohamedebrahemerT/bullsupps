 <!DOCTYPE html>
   <html  >
<head>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=617425ba4564d200122a7f86&product=inline-share-buttons" async="async"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MWD8WGC');</script>
<!-- End Google Tag Manager -->


<meta name="google-site-verification" content="ll34KNTCi0oSCoFGdE79myeF9H9Q9UYtG0mbYvxJBM4" /> 
 

<meta charset="UTF-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>
  @if(session('ProdcutTitle'))
             
   {{trans('admin.Shop online')}}  {{  session('ProdcutTitle') }}  
      @else

                  @if(session('lang')=='ar')

  {{settings()->namear}}

@endif

  @if(session('lang')=='en')

  {{settings()->nameaen}}
@endif
         

   



      @endif
</title>
 <meta charset="UTF-8">
  <meta name="description" content="{{settings()->sitemeta}}">
  <meta name="keywords" content="{{settings()->sitemeta}}">

  <meta name="author" content="mohamed gmail">
 <link rel="shortcut icon" href="{{url('/')}}/forentend4/iconified/favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="{{url('/')}}/forentend4/iconified/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}/forentend4/iconified/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/forentend4/iconified/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/forentend4/iconified/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/forentend4/iconified/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/forentend4/iconified/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/forentend4/iconified/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/forentend4/iconified/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/forentend4/iconified/apple-touch-icon-180x180.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href="https://opencart.opencartworks.com/themes/so_emarket/layout2/" />

    @if(session('lang') == 'ar')

<meta name="google-site-verification" content="UORaaRMIHVq4BKfpx6FZbh22625otr9QBi6yaE_Lw_A" />
<link rel="stylesheet" href="{{url('/')}}/forentend4/catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css">
<link rel="stylesheet" href="{{url('/')}}/forentend4/catalog/view/javascript/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="catalog/view/javascript/soconfig/css/lib.css">
<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/ie9-and-up.css">
<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/custom.css">
<link rel="stylesheet" href="catalog/view/javascript/so_page_builder/css/shortcodes.css">
<link rel="stylesheet" href="catalog/view/javascript/so_home_slider/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_home_slider/css/animate.css">
<link rel="stylesheet" href="catalog/view/javascript/so_home_slider/css/owl.carousel.css">
<link rel="stylesheet" href="catalog/view/javascript/so_categories/css/so-categories.css">
<link rel="stylesheet" href="catalog/view/javascript/so_deals/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_deals/css/css3.css">
<link rel="stylesheet" href="catalog/view/javascript/so_call_for_price/css/jquery.fancybox.css">
<link rel="stylesheet" href="catalog/view/javascript/so_call_for_price/css/style.css">
<link rel="stylesheet"  href="{{url('/')}}/forentend4/catalog/view/javascript/so_listing_tabs/css/so-listing-tabs.css">
<link rel="stylesheet" href="catalog/view/javascript/so_latest_blog/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_page_builder/css/style_render_38.css">
<link rel="stylesheet" href="catalog/view/javascript/so_page_builder/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_countdown/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_tools/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_facebook_message/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_instagram_gallery/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_instagram_gallery/css/jquery.fancybox.css">
<link rel="stylesheet" href="catalog/view/javascript/so_newletter_custom_popup/css/style.css">
<link rel="stylesheet" href="catalog/view/javascript/so_page_builder/css/style_render_45.css">
<link rel="stylesheet" href="catalog/view/javascript/so_megamenu/so_megamenu.css">
<link rel="stylesheet" href="catalog/view/javascript/so_megamenu/wide-grid.css">
<link rel="stylesheet" href="catalog/view/javascript/so_searchpro/css/chosen.css">
<link rel="stylesheet" href="catalog/view/javascript/so_searchpro/css/so_searchpro.css">
<link rel="stylesheet" href="catalog/view/javascript/so_sociallogin/css/so_sociallogin.css">
<link rel="stylesheet" href="{{url('/')}}/forentend4/catalog/view/theme/so-emarket/css/layout2/yellow-rtl.css">
<link rel="stylesheet" href="{{url('/')}}/forentend4/catalog/view/theme/so-emarket/css/header/header2-rtl.css">
<link rel="stylesheet" href="catalog/view/theme/so-emarket/css/footer/footer2-rtl.css">
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
<script src="admin/view/template/extension/module/so_page_builder/assets/js/shortcodes.js"></script>
<script src="catalog/view/javascript/so_home_slider/js/owl.carousel.js"></script>
<script src="catalog/view/javascript/so_call_for_price/js/script.js"></script>
<script src="catalog/view/javascript/so_page_builder/js/section.js"></script>
<script src="catalog/view/javascript/so_page_builder/js/modernizr.video.js"></script>
<script src="catalog/view/javascript/so_page_builder/js/swfobject.js"></script>
<script src="catalog/view/javascript/so_page_builder/js/video_background.js"></script>
<script src="catalog/view/javascript/so_countdown/js/jquery.cookie.js"></script>
<script src="catalog/view/javascript/so_tools/js/script.js"></script>
<script src="catalog/view/javascript/so_instagram_gallery/js/jquery.fancybox.js"></script>
<script src="catalog/view/javascript/so_megamenu/so_megamenu.js"></script>
<script src="catalog/view/javascript/so_searchpro/js/chosen.jquery.js"></script>
 <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
   @elseif(session('lang') == 'en')

<link rel="stylesheet" href="catalog/view/javascript/soconfig/css/ratchet/ratchet-add.css">
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js"></script>
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js"></script>
<script src="catalog/view/javascript/soconfig/js/libs.js"></script>
<script src="catalog/view/javascript/soconfig/js/so.system.js"></script>
<script src="catalog/view/javascript/soconfig/js/sticky-kit.js"></script>
<script src="catalog/view/javascript/lazysizes/lazysizes.min.js"></script>
<script src="catalog/view/theme/so-emarket/js/jquery.nav.js"></script>
<script src="catalog/view/theme/so-emarket/js/so.custom.js"></script>
<script src="catalog/view/theme/so-emarket/js/custom.js"></script>
<script src="catalog/view/theme/so-emarket/js/common.js"></script>
<script src="admin/view/template/extension/module/so_page_builder/assets/js/shortcodes.js"></script>
<script src="catalog/view/javascript/so_home_slider/js/owl.carousel.js"></script>
<script src="catalog/view/javascript/so_page_builder/js/section.js"></script>
<script src="catalog/view/javascript/so_page_builder/js/modernizr.video.js"></script>
<script src="catalog/view/javascript/so_page_builder/js/swfobject.js"></script>
<script src="catalog/view/javascript/so_page_builder/js/video_background.js"></script>
<script src="catalog/view/javascript/so_countdown/js/jquery.cookie.js"></script>
<script src="catalog/view/javascript/so_tools/js/script.js"></script>
<script src="catalog/view/javascript/so_instagram_gallery/js/jquery.fancybox.js"></script>
<script src="catalog/view/javascript/so_megamenu/so_megamenu.js"></script>
<script src="catalog/view/javascript/so_searchpro/js/chosen.jquery.js"></script>
    @endif
 

    @if(session('lang') == 'ar')
  <link rel="stylesheet" sizes="57x57" href="{{url('/')}}/forentend4/css/LEPALMIER_AR_style.css" />
  <link rel="stylesheet" href="{{url('/')}}/forentend4/css/e5f961ca2c5e7822f8033f4c42b55398_ar.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;500;600&family=Exo:wght@200&display=swap" rel="stylesheet"> 

  @elseif(session('lang') == 'en')
   <link rel="stylesheet" sizes="57x57" href="{{url('/')}}/forentend4/css/LEPALMIER_EN_style.css" />

   <link rel="stylesheet" href="{{url('/')}}/forentend4/css/e5f961ca2c5e7822f8033f4c42b55398_en.css">
  @endif

 
</head>


<body class="common-home rtl layout-2" style="    font-family: 'Cairo', sans-serif;">

 

<div class="so-pre-loader no-pre-loader"><div class="so-loader-line" id="line-load"></div></div>
<header id="header" class=" variant typeheader-2 hnmki">
  <div class="header-top hidden-compact">
    <div class="container">
      <div class="row">
        <div class="header-top-left col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="hidden-md hidden-sm hidden-xs welcome-msg">
       <span style="color: #fff;
text-align: center;
font-size: 20px;
margin-left: 25%;">
    {{trans('admin.Celebrate Festival of Lights with our Special Gifts! Shop now.')}}    </span>       
            </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <nav class="navbar navbar-default" style="margin-bottom:0px !important;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">{{trans('admin.Toggle navigation')}}</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      
      <div class="brand-centered">
      <a class="navbar-brand" href="{{url('/')}}/">
        <img src="{{url('/')}}/forentend4/iconified/logo.png" alt="Dispute Bills"> 
      </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="{{url('/')}}/shop">{{trans('admin.Categories')}} </a></li>
          <li><a href="{{url('/')}}/about">{{trans('admin.About us')}}</a></li>
          <li><a href="{{url('/')}}/shop">{{trans('admin.Shops')}} </a></li>
          <li><a href="{{url('/')}}/shop">{{trans('admin.Gift Cards')}}</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <li><a href="{{url('/')}}/shop"><img src="{{url('/')}}/forentend4/img/shop.png">&nbsp;{{trans('admin.Shops')}} </a></li>
             @guest

          <li><a href="{{url('/')}}/login"><img src="{{url('/')}}/forentend4/img/SignIn.png">&nbsp;{{trans('admin.Sign In')}}</a></li>
    @else
        <li><a href="{{url('/')}}/my-profile"><img src="{{url('/')}}/forentend4/img/SignIn.png">&nbsp;{{trans('admin.My Profile')}}</a></li>

@endguest
          <li><a href="{{url('/')}}/cart"><img src="{{url('/')}}/forentend4/img/cart.png">&nbsp; {{trans('admin.Bag')}}</a></li>

                  <li>
               
  
  <a   type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-angle-down"></i>
  @if(session('lang') == 'ar')
           {{trans('admin.AR')}}

       @elseif(session('lang') == 'en')
       EN
  @endif

  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

 @if(session('lang') == 'ar')
       <a class="dropdown-item" href="{{url('/')}}/language/en" href="#">{{trans('admin.EN')}}</a>

       @elseif(session('lang') == 'en')
     <a class="dropdown-item" href="{{url('/')}}/language/ar" href="#">{{trans('admin.AR')}}</a>
   
  @endif

   

     
  </div>
 
 
                  </li>
  


        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
    <div id="content" class="">
      <div class="so-page-builder">
