
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
	============================================ -->
	<title>



     @if(session('lang')=='ar')

      {{settings()->namear}}

      @endif

      @if(session('lang')=='en')

      {{settings()->nameaen}}

    @endif

	</title>
	<meta charset="utf-8">
    <meta name="keywords" content="{{settings()->sitemeta}}" />
    <meta name="author" content="shifapharmacies">
    <meta name="robots" content="index, follow" />

    <base href="https://demo.smartaddons.com/templates/html/market/mobile/">
   
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->

    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/ratchet/ratchet.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
	<link href="css/mobile.css" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	  <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
  

  <style type="text/css">

                body, #wrapper{font-family: 'Tajawal', sans-serif;
                   
            }
                   

     

  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  


<style type="text/css">
	.dropdown-menu {
   top: 100%;
left: 0;
z-index: 1000;
float: left;
min-width: 160px;
padding: 5px 0;
font-size: 14px;
list-style: none;
background-color: #fff;
background-clip: padding-box;
border: 1px solid rgba(0,0,0,.15);
border-radius: 4px;
box-shadow: 0 6px 12px rgba(0,0,0,.175);
    margin-left: 0%;
    text-align: right !important;

}

</style>
</head>

<body class="mobile-home ltr mobilelayout-0" style="text-align: right;">
	<!-- Begin Main wrapper -->
    <div id="wrapper" >
		 <nav class="bar bar-tab" style="direction: rtl;">
			<a class="tab-item " href="{{url('/')}}/" data-transition="slide-in">
				<span  ><i class="fa fa-home"></i></span>
				<span class="tab-label"> {{trans('admin.Home')}} </span>
			</a>
			<a class="tab-item" href="{{url('/')}}/shop" data-transition="slide-in">
				<span  ><i class="fa fa-search"></i></span>
				<span class="tab-label"> {{trans('admin.shop')}} </span>
			</a>
			<a class="tab-item item-cart" href="{{url('/')}}/cart" data-transition="slide-in">

				<span  ><i class="fa fa-shopping-cart"></i></span>

				<div id="cart" class="btn-shopping-cart">
					<span class="total-shopping-cart cart-total-full">
						 <span class="items_cart">
						 	
						 	   @if (Cart::instance('default')->count() > 0)

         {{ Cart::instance('default')->count() }}

    @else

0

    @endif
						 </span>			</span>
				</div>
				
				<span class="tab-label"> {{trans('admin.cart')}}      </span>
			</a>

        @guest

			<a class="tab-item" href="{{url('/')}}/my-profile" data-transition="slide-in">
				<span><i class="fa fa-user"></i></span>
				<span class="tab-label"> {{trans('admin.MyAccount')}} </span>
			</a>

    @else

    <a class="tab-item" href="{{url('/')}}/my-profile" data-transition="slide-in">
				<span><i class="fa fa-user"></i></span>
				<span class="tab-label">  
                   {{auth()->guard('web')->user()->name}}


				 </span>
			</a>

        @endguest



        @guest


			<a class="tab-item tab-item--more tooltip-popovers" href="{{ route('login') }}">
				<span ><i class="fa fa-user"></i></span>
				<span class="tab-label"> دخول </span>
			</a>

    @else

    <a class="tab-item tab-item--more tooltip-popovers"   href="{{ route('logout') }}"

            onclick="event.preventDefault();

                     document.getElementById('logout-form').submit();">
				<span >   
					<i class="fa fa-sign-out"></i>

				</span>
				<span class="tab-label"> 

            {{trans('admin.Logout')}}


    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

        {{ csrf_field() }}

        </form>

				 </span>
			</a>

        @endguest

		</nav>
	 
		
		<!-- Begin Bar Nav -->
		<header class="bar bar-nav bar-navhome typeheader-0" style="background-color:#F2F3F4">
			<div class="row navbar-bar ">
				<!-- LOGO -->
				<div class="navbar-menu col-xs-2">
					<a class="toggle-panel" href="#panel-menu">
						<span class="icon-bar"></span>
						<span class="icon-bar bar2"></span>
						<span class="icon-bar"></span>
					</a>
				</div>
				<div class="navbar-logo col-xs-3">
					<a href="{{url('/')}}">
						<img src="{{url('/')}}/forentend4/iconified/apple-touch-icon-180x180.png" title="shifapharmacies" alt="shifapharmacies" style="width: 73px;">
					</a>
				</div>
				<div class="navbar-search col-xs-7">


					<!-- BOX CONTENT SEARCH -->
					<div id="search-bar" class="input-group">

				 


					    <input  type="text" name="search" id="search"  class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="{{trans('admin.Searchsomething')}} ........" name="search" style="text-align: right;font-size: 20px;background-color: #fff;">


					 

						 <div class="customsearch" id="ttttttt" style="display: block;
position: absolute;
margin-top: 24px;
left: -107px;
    overflow-y: auto;

"></div>


<script>
$(document).ready(function(){



 $('#search').keyup(function(){ 

    				

  document.getElementById("ttttttt").style.display = "block";
  
        var query = $(this).val();


        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{url('/')}}/autocomplete/fetch2",
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
					</div>


				</div>
			</div>
		</header>
		<!-- //End Bar Nav -->


		<div class="content">
			<!-- //Begin Main Content -->
			<div class="container page-builder-ltr">
				<div class="row">
					<div id="content" >
						<div class="col-xs-12 ">
							<div class="module">
								<div class="loading-placeholder"></div>
								<div class="menu-link contentslider" data-rtl="no" data-autoplay="yes" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-item_xs="2" data-item_sm="2" data-arrows="no" data-pagination="no" data-lazyload="no"  data-loop="yes" data-hoverpause="yes">
									
                 @foreach(App\Department::get() as  $Department)

									<div class="item-link">
										<a href="{{ route('shop.index',['id'=>$Department->id]) }}">
											<span class="menu-title">
												
												  @if(session('lang')=='ar')
 {{$Department->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$Department->dep_name_en }}
@endif
											</span>
										</a>
									</div>

									 
                                          @endforeach 
									 
								 
									 
									 
								</div>
							</div>
						</div>
						<!--div class="col-xs-12 no-padding">
							<div class="module sohomepage-slider ">
								<div class="modcontent">
									<div id="sohomepage-slider">
										<div class="so-homeslider contentslider" data-rtl="no" data-autoplay="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-item_xs="1" data-item_sm="1" data-arrows="no" data-pagination="yes" data-lazyload="no"  data-loop="yes" data-hoverpause="yes">

											 
   @foreach($otherDataDepartmentbannersHomeSliders as  $data)
  

											 <div class="item ">
												<a href="{{$data->input_key}}" title="slider2" target="_self">
													<img class="responsive" src="{{url('/')}}/{{substr($data->input_value,38,50)}}" alt="">
												</a>
												<div class="sohomeslider-description"></div>
											</div>

                              @endforeach
										 

											 


										</div>
										<div class="loading-placeholder"></div>
									</div>
								</div>
								
							</div>
						</div -->

					 


					 
						<div class="col-xs-12 ">
   @foreach($otherDataDepartmentbannersHomeSliders as  $data)

<a href="{{$data->input_key}}" title="slider2" target="_self">
			<img class="responsive" src="{{url('/')}}/{{substr($data->input_value,38,50)}}" alt="">
                                          @endforeach 


							<div class="module no-margin">
								<div class="block-categories">
									<h3 class="modtitle"   style="text-align: right;"><span>{{trans('admin.FeaturedCategories')}}</span></h3>
									<div class="loading-placeholder"></div>
									<div class="cate-content contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="1" data-col-sm="1" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">

										
                 @foreach(App\Department::whereNull('parent')->get() as  $Department)

										<div class="cate cate1">
											<div class="inner">
<a href="{{ route('shop.index',['id'=>$Department->id]) }}">
												<img src="{{Storage::url($Department->icon)}}" alt="@if(session('lang')=='ar')
 {{$Department->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$Department->dep_name_en }}
@endif" style="width: 210px;height: 210px">
</a>

												<a href="{{ route('shop.index',['id'=>$Department->id]) }}">
												
												 @if(session('lang')=='ar')
 {{$Department->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$Department->dep_name_en }}
@endif
											</a></div>
										</div>
 
                                          @endforeach 

									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 ">
							<div class="module mobile_deals ">
								<h3 class="modtitle font-ct" style="text-align: right;"><span>{{trans('admin.TopDeals')}}</span></h3>
								<div class="modcontent">
									<div class="so-deal products-list grid" >
										<div class="loading-placeholder"></div>
										<div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="2" data-col-sm="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">



                			 @foreach(App\product::inRandomOrder()->take(20)->get() as  $product)

											<div class="item">
												<div class="product-layout">
													<div class="product-item-container ">
														<div class="left-block">
															<div class="product-image-container">
																<div class="box-label">
                                                                
             @if($product->price_offer  > 0)   

				<span class="label-product label-sale"> {{ ratio($product->price,$product->price_offer) }} % </span>

            @endif

																</div>
																<a href="{{url('/')}}/shop/{{$product->id}}" target="_self">
																	<img src="{{Storage::url($product->photo)}}" alt="Hamburger shoulder" class="img-responsive" style="width: 160px;height: 160px">
																</a>
															</div>
														</div>
														<div class="right-block">
															<div class="caption">
																<h4 class="font-ct"><a href="{{url('/')}}/shop/{{$product->id}}" target="_self" title="Hamburger shoulder">
		 @if(session('lang')=='ar')



        {{ str_limit($product->title_name_ar, $limit =15, $end = '..') }}  
       
 
       

@endif

   
																 
															</a></h4>
																<p class="price">
																	 
 <div class="price">

                                          

      <span style="float: right;"> 

    
             @if($product->price_offer  > 0)   
        {{$product->price_offer }}  {{trans('admin.pound')}}  
            @endif

     </span>




         @if($product->price_offer  > 0)
         <span style="text-decoration: line-through;

font-size: 12px;

float: left;

color: #c0aec3;

margin-top: 9px;">

                                            

        {{$product->price }}  {{trans('admin.pound')}}

                                          </span>

              @endif                    


         @if($product->price_offer  == 0)
                <span  >

                                            

        {{$product->price }}  {{trans('admin.pound')}}

                                          </span>
              @endif                    

                            

                                                        </div>

 
																</p>
																
															</div>
														</div>
													</div>
												</div>

											</div>

											
											 
										
											 
										  @endforeach
											
										</div>
									</div>
									

								</div>
								
							</div>
						</div>
						<div class="col-xs-12">
							<div class="mobile-bn2-h1 clearfix">
   @foreach(App\otherDataDepartmentbanners::where('Departmentbanners_id',$DepartmentbannersBigID)->inrandomOrder()->take(1)->get(); as  $data)

								<div class="banners">
									<a href="{{$data->input_key}}">
										<img src="{{url('/')}}/{{substr($data->input_value,30,50)}}" alt="">
									</a>
								</div>

     @endforeach

							</div>
						</div>
						
						<div class="col-xs-12 ">
							<div class="module mobile_deals ">
								<h3 class="modtitle font-ct" style="text-align: right;"><span>{{trans('admin.BestSellers')}}</span></h3>
								<div class="modcontent">
									<div class="so-deal products-list grid" >
										<div class="loading-placeholder"></div>
										<div class="contentslider" data-rtl="no" data-autoplay="no" data-autowidth="yes" data-delay="4" data-speed="0.6" data-margin="10" data-col-xs="2" data-col-sm="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
										

                			 @foreach(App\product::inRandomOrder()->take(20)->get() as  $product)

											<div class="item">
												<div class="product-layout">
													<div class="product-item-container ">
														<div class="left-block">
															<div class="product-image-container">
																<div class="box-label">
																	    @if($product->price_offer  > 0)   

				<span class="label-product label-sale"> {{ ratio($product->price,$product->price_offer) }} % </span>

            @endif
																</div>

																<a href="{{url('/')}}/shop/{{$product->id}}" target="_self">
																	<img src="{{Storage::url($product->photo)}}" alt="Hamburger shoulder" class="img-responsive" style="height: 160px;width: 160px">
																</a>
															</div>
														</div>
														<div class="right-block">
															<div class="caption">
																<h4 class="font-ct"><a href="{{url('/')}}/shop/{{$product->id}}" target="_self" title="Hamburger shoulder">
																	 @if(session('lang')=='ar')



       
 

        {{ str_limit($product->title_name_ar, $limit =15, $end = '..') }}  

       

@endif
																</a></h4>
																<p class="price">

            												 
 <div class="price">

                                          

      <span style="float: right;"> 

    
             @if($product->price_offer  > 0)   
        {{$product->price_offer }}  {{trans('admin.pound')}}  
            @endif

     </span>




         @if($product->price_offer  > 0)
         <span style="text-decoration: line-through;

font-size: 12px;

float: left;

color: #c0aec3;

margin-top: 9px;">

                                            

        {{$product->price }}  {{trans('admin.pound')}}

                                          </span>

              @endif                    


         @if($product->price_offer  == 0)
                <span  >

                                            

        {{$product->price }}  {{trans('admin.pound')}}

                                          </span>
              @endif                    

                            

                                                        </div>

 

																</p>
																
															</div>
														</div>
													</div>
												</div>

											</div>

										  
										     @endforeach
											
											
										</div>
									</div>
									

								</div>
								
							</div>
						</div>
						
						
						 
						
						<div class="col-xs-12">
							<div class="block-mobile clearfix">
								<div class="info info1">
									<div class="inner">
										<i class="fa fa-truck"></i>
										<div class="info-content">
											<span>توصيل سريع</span>
											<p>خلال يوم ل 3ايام عمل</p>
										</div>
									</div>
								</div>
								<div class="info info2">
									<div class="inner">
										<i class="fa fa-money"></i>
										<div class="info-content">
											<span>خدمة الدفع</span>
											 	<p>عند الاستلام</p>
										</div>
									</div>
								</div>
								<div class="info info3">
									<div class="inner">
										<i class="fa fa-gift"></i>
										<div class="info-content">
											<span>ارجاع </span>
											<p>&amp; مجاني</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<!-- //End Main Content -->
			
			<!-- //Begin Footer Content -->
			<div class="container footer-content">
				<div class="footernav-top">
					<div class="need-help">
						<p>تحتاج مساعدة</p>
						<div class="nh-contact">
      
							<a href="tel:12345678"><i class="fa fa-phone"></i>{{settings()->phone}}</a> <a class="need-help-padding" href="mailto:info@shifapharmacies.com" target="_top"><i class="fa fa-envelope-o"></i> ارسل لنا عبر البريد الإلكتروني</a> </div>
					</div>
				</div>

				<div class="footernav-social">
					<p><a href="{{settings()->facebook}}">تجدنا على</a>
					</p>
					<ul class="list-inline">
						<li>
							<a href="{{settings()->facebook}}" target="_blank"> <i class="fa fa-facebook social-icon"></i>
							</a>
						</li>
						<li>
							<a href="{{settings()->twitter}}" target="_blank"> <i class="fa fa-twitter social-icon"></i>
							</a>
						</li>
						  
					</ul>
				</div>

				<div class="footernav-midde">
					<ul class="footer-link-list row">
						<li class="col-xs-6"><a href="https://shifapharmacies.com/about"> معلومات عنا </a></li>
						<li class="col-xs-6"><a href="https://shifapharmacies.com/login"> تسجيل الدخول </a></li>
						<li class="col-xs-6"><a href="https://shifapharmacies.com/cart"> عربة التسوق </a></li>
						 
						
						<li class="col-xs-6"><a href="https://shifapharmacies.com/cart"> مدونة </a></li>
						<li class="col-xs-6"><a href="https://shifapharmacies.com/register"> تسجيل </a></li>
				 
						<li class="col-xs-6"><a href="https://shifapharmacies.com/Checkout"> الدفع </a></li>
						<li class="col-xs-6"><a href="https://shifapharmacies.com/TheSupport">  الدعم  </a></li>
						<li class="col-xs-6"><a href="https://shifapharmacies.com/contact"> اتصل </a></li>
											
					</ul>
				</div>

				<div class="footernav-bottom">
					<div class="text-center">
						<p class="nomargin"><img alt="Footer Image" class="form-group" src="../image/demo/payment/payment_method_mob.png">
						</p>
						
          متجر shifapharmacies. جميع الحقوق محفوظة © 2021 http://shifapharmacies.com
 

					</div>
				</div>
			</div>
			<!-- //End Footer Content -->
		</div>

    </div>
	
	<div id="panel-menu" class="side-menu panel panel-left">
		<div class="content">
			<div class="panel-left__top clearfix text-center">
				<div class="panel-logo" style="background-color: #F2F3F4">
					<a href="index.php"><img src="{{url('/')}}/forentend4/iconified/apple-touch-icon-180x180.png" title="shifapharmacies" alt="shifapharmacies"></a>
				</div>
				<div class="panel-search">
					<div id="search" class="input-group">
						<input type="text" name="search" value="" placeholder="بحث" class="form-control input-lg">
						<span class="input-group-btn">
							<button type="button" class="btn btn-default btn-link"><i class="fa fa-search"></i></button>
						  </span>
					</div>
				</div>
			</div>
			
			<div class="panel-left__midde">
				<div class="panel-group" id="panel-category" role="tablist" aria-multiselectable="true">

                 @foreach(departments() as  $Department)

					<div class="panel panel-default">
						<div class="panel-heading" role="tab">
							<a href="{{ route('shop.index',['id'=>$Department->id]) }}">
 @if(session('lang')=='ar')
 {{$Department->dep_name_ar }}
@endif
  @if(session('lang')=='en')
{{$Department->dep_name_en }}
@endif
							</a>
						 
						</div>
						<div id="panel-category{{$Department->id}}" class="panel-collapse collapse " role="tabpanel">
							<ul>
      @foreach(App\Department::where('parent',$Department->id)->get() as  $cc)

								<li>
									<a href="{{url('/')}}/shop?id={{$cc->id}}">
										  @if(session('lang')=='ar')

 {{$cc->dep_name_ar }}

@endif

  @if(session('lang')=='en')

{{$cc->dep_name_en }}

@endif
									</a>
								</li>

                                          @endforeach 

								 
							</ul>
						</div>
					</div>

                                          @endforeach 
				 

					 
					 
				 
					 
				 
				</div>


			</div>

			<div class="panel-left__bottom clearfix text-center">
				<div class="col-xs-6">
					<i class="fa fa-check-square-o" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="https://shifapharmacies.com/cart"> عربة التسوق</a>
					</div>
				</div>
				<div class="col-xs-6">
					<i class="fa fa-heart" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="https://shifapharmacies.com/wishlist">قائمة الرغبات</a>
					</div>
				</div>

				<div class="col-xs-6 panel-left__language">
					<div class="btn-group languages-block">
						<form action="https://shifapharmacies.com/app/" method="get" enctype="multipart/form-data" id="form-language">
							<div class="btn-group">
								<button class="btn-link dropdown-toggle" data-toggle="dropdown">
									<img src="../image/demo/flags/gb.png" alt="English" title="English">
									<span class="hidden-xs">الإنجليزية</span>
									<i class="fa fa-angle-down"></i>
								</button>

								<ul class="dropdown-menu">
									<li>
										<button class="btn-block language-select" type="button" name="en-gb"><img src="../image/demo/flags/gb.png" alt="English" title="English"> الإنجليزية</button>
									</li>
									<li>
										<button class="btn-block language-select" type="button" name="ar"><img src="../image/demo/flags/lb.png" alt="Arabic" title="Arabic"> عربى</button>
									</li>
								</ul>
							</div>
							<input type="hidden" name="code" value="">
							<input type="hidden" name="redirect" value="#">
						</form>
					</div>
					<h4>لغة</h4>
				</div>
				<div class="col-xs-6 panel-left__currency">
					<div class="btn-group currencies-block">
						<form action="https://shifapharmacies.com/app/" method="get" enctype="multipart/form-data" id="form-currency">
							<div class="btn-group">
								<button class="btn-link dropdown-toggle" data-toggle="dropdown">
									{{trans('admin.pound')}}
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu">
									 
									<li>
										<button class="currency-select btn-block" type="button" name="USD">$ USD</button>
									</li>
								</ul>
							</div>
							<input type="hidden" name="code" value="">
							<input type="hidden" name="redirect" value="index.html">
						</form>
					</div>

					<h4>عملة</h4>

				</div>

 <br>
 <br>
					<div class="col-xs-6 panel-left__currency">
					<i class="fa fa-user" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="https://shifapharmacies.com//affiliate/login?"> الافليت</a>
					</div>
				</div>
				<div class="col-xs-6 panel-left__currency">
					<i class="fa fa-truck" aria-hidden="true"></i>
					<div class="bot-inner">
						<a href="https://shifapharmacies.com/tracking-order">

       تتبع الطلب</a>
					</div>
				</div>



 <br>
 <br>
					<div class="col-xs-6 panel-left__currency">
					<i class="fa fa-phone-square"></i>
					<div class="bot-inner">
						<a href="https://shifapharmacies.com/TheSupport"> الدعم </a>
					</div>
				</div>
				<div class="col-xs-6 panel-left__currency">
					 
<i class='fa fa-comments'></i>
					<div class="bot-inner">
						<a href="https://shifapharmacies.com/LiveChat">

 لايف شات 

   </a>
					</div>
				</div>




			</div>
		</div>
	</div>
  
<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/ratchet/ratchet.js"></script>

<!-- Theme files
============================================ -->
<script type="text/javascript" src="js/mobile.js"></script>

</body>
</html>		