@push('js')
<script>
$(document).ready(function(){

 $('#country_name').keyup(function(){ 

 	           alert('country_namecountry_name');

 	           return 0;
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});
</script>

@endpush
 @if(session('lang')=='en')

 <header class="">
			<div id="html-section-header" class="html-section">
			 

				<div data-section-id="header" data-section-type="header-section" class="header-section">
					<div class="header-wrapper header-wrapper--over-hero">
						<div class="wrapper main-header-wrapper">
							<div class="grid--full grid--table">
								
							

								<!-- Desktop Header -->
								<div class="grid__item large--show medium-down--hide smal--hide">

									 


						<!---------nave en--------------->

					 
                                     <div class="wrapper-middle">
										
                                             
									<div class="grid__item large--three-tenths logo-wrapper">
											<a href="{{url('/')}}" class="site-header__logo-image">
												<img src="{{Storage::url(settings()->siteflag)}}" alt="" height="80">
											</a>
										</div>

										<!-- Search Box -->
										<div class="grid__item header-search large--five-tenths small--hide">
											<div class="header-search-inner">
												<form action="{{url('/')}}/search" method="get" class="input-group search-bar " role="search" style="position: relative;">
						

		 <input type="text" name="search" id="search"   placeholder="{{trans('admin.Searchsomething')}}"  class="input-group-field" style="color:#000" />

  <div class="customsearch" id="ttttttt" style="display:none;"></div>
 
				 

													<span class="input-group-btn">
														<button type="submit" class=" icon-fallback-text">
															 <i class="fa fa-search" aria-hidden="true"></i>
															<span class="fallback-text">Search</span>
														</button>
													</span>
													<ul class="search-results" style="position: absolute; left: 0px; top: 40px; display: none;"></ul>
												</form>
												<div class="header-search-suggestion">
													<ul class="grid__link">
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>samsung</span></a>
														</li>
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>bosch</span></a>
														</li>
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>kingston</span></a>
														</li>
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>ensure gold</span></a>
														</li>
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>converse</span></a>
														</li>
													</ul>
												</div>

											</div>
										</div>
             
											<!-- Cart -->
										<div class="grid__item header-cart large--two-tenths small--hide">

				   	<a  style="color: #fff;

position: absolute;

margin-left: -46px;

margin-top: 9px;
" href="{{url('/')}}/Managementchat">
                 	  <i class='far fa-comment-dots' style='font-size:25px;color:#eb6625'></i>
                 	</a>
							 
		    @guest


				   	
						
<div class="dropdown">
  <a class="dropbtn" >
                    <span style="color:#fff">{{trans('admin.login')}}</span>
  	 
       <i class="far fa-user" style="font-size:25px;color:#eb6625;"></i>
  </a>


  <div class="dropdown-content">
       <a href="{{url('/')}}/login" style="text-align: center;
padding: 4px;
background: #ed6626;
margin-top: 8px;
margin-right: 14px;
margin-right: 14px;
margin-left: 17px;
color: #fff;
font-size: 12px;
"> {{trans('admin.loginr')}} </a>
    <a class="mainfmenu" style="margin-top:3px;text-align:center;"><span>{{trans('admin.or')}}</span></a>
    <a href="{{url('/')}}/register"  style="text-align: center;
padding: 4px;
background: #ffe9cc;
margin-top: 8px;
margin-right: 14px;
margin-right: 14px;
margin-left: 17px;
color: #fff;
font-size: 12px;
">{{trans('admin.registerr')}}</a>
    <a class="mainfmenu"> </a>
   
    <a href="{{url('/')}}/my-orders">{{trans('admin.myorders')}} </a>
    <a href="{{url('/')}}/wishlist">{{trans('admin.wishlist1')}}</i>
</a>
    <a href="{{url('/')}}/my-profile">{{trans('admin.myprofile')}}</a>
    <a href="#">{{trans('admin.MyCoupons')}}</a>
  </div>
</div>
    @else

    <div class="dropdown">
  <a class="dropbtn" >
                    <span style="color:#fff">{{trans('admin.login')}}</span>
  	 
                    <i class="far fa-user" style="font-size:35px;color:#eb6625"></i>
  </a>


  <div class="dropdown-content">
   <a href="{{url('/')}}/login" style="text-align: center;
padding: 4px;
background: #ed6626;
margin-top: 8px;
margin-right: 14px;
margin-right: 14px;
margin-left: 17px;
color: #fff;
font-size: 12px;
"> {{trans('admin.loginr')}} </a>
    <a class="mainfmenu" style="margin-top:3px"><span>{{trans('admin.or')}}</span></a>
    <a href="{{url('/')}}/register" style="text-align: center;
padding: 4px;
background: #ffe9cc;
margin-top: 8px;
margin-right: 14px;
margin-right: 14px;
margin-left: 17px;
color: #fff;
font-size: 12px;
">{{trans('admin.registerr')}}</a>
    <a class="mainfmenu"> </a>
   
    <a href="{{url('/')}}/my-orders">{{trans('admin.myorders')}}</a>
    <a href="{{url('/')}}/wishlist">{{trans('admin.wishlist1')}}
</a>
    <a href="{{url('/')}}/my-profile">{{trans('admin.myprofile')}}</a>

    <a href="#">{{trans('admin.MyCoupons')}}</a>

  <a href="{{url('/')}}/tracking-order">{{trans('admin.trackingOrder')}}<i class="fa fa-map-marker" style="font-size:24px"></i></a>


      <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" style="font-size:24px;"></i>

               {{trans('admin.Logout')}}
        </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>

  </div>
</div>

     
        @endguest
                 
                 
&nbsp;
                                   	<a class="js-login-modal2" data-mfp-src="LoginModal2" style="color: #fff;

position: absolute;

margin-left: -60px;

margin-top: 11px;
"  href="{{url('/')}}/wishlist">

                    <i class="fa fa-heart-o" style="font-size:25px;color:#eb6625"></i>


                 	</a>
         
											<div class="cart-link site-nav__item">




												<a href="http://localhost/dashboard/old/alymarket3/forentend3/cart.html" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
													<div class="icon-fallback-text">
														<div class="">
			 <i class="fa fa-shopping-cart" style="color:#eb6625;font-size:25px; margin-top:10px;" ></i>
															<span class="cart-link__bubble">

											@if (Cart::instance('default')->count() > 0)
										    {{ Cart::instance('default')->count() }}
										    @else
										    0
										    @endif
														</span>
														</div>

														<div class="right-block">
															<div class="text1"></div>
														</div>

													</div>
												</a>

											</div>
										</div>
<!-- Logo -->
										



									</div>
									 



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>					
		</header>
								@endif

<!-----------------  ar---------------------------------------------->


 @if(session('lang')=='ar')

 <header class="">
			<div id="html-section-header" class="html-section">
			 

				<div data-section-id="header" data-section-type="header-section" class="header-section">
					<div class="header-wrapper header-wrapper--over-hero">
						<div class="wrapper main-header-wrapper">
							<div class="grid--full grid--table">
								<!-- Mobile Button -->
								<div class="grid__item large--hide medium-down--one-quarter small--one-quarter nav-mobile">
									<div>
										<button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left site-mobileNav-bar">
											<span class="icon icon-hamburger" aria-hidden="true"></span>
											<span class="fallback-text">Site navigation</span>
										</button>
									</div>
								</div>
								<!-- Mobile Logo -->
								<div class="grid__item large--hide medium-down--two-quarters small--two-quarters logo-mobile">
									<a href="{{url('/')}}" class="site-header__logo-image">
														

										<img src="{{Storage::url(settings()->siteflag)}}" alt="">


									</a>
								</div>
								<!-- Mobile Cart -->
								<div class="grid__item large--hide medium-down--one-quarter small--one-quarter cart-mobile">
									<div class="text-right">
										<a href="http://localhost/dashboard/old/alymarket3/forentend3/cart.html" class="site-nav__link cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
											<span class="icon-fallback-text">
												<span class="icon icon-cart" aria-hidden="true"></span>
												<span class="fallback-text">Shopping Cart</span>
											</span>
											<span class="cart-link__bubble"></span>
										</a>
									</div>
								</div>

								<div class="mobileNav-search large--hide medium-down--one-whole small--one-whole">
									<form action="./search.html" method="get" class="input-group search-bar search-bar--drawer" role="search" style="position: relative;">

									 	<input type="text" name="country_name" id="country_name" placeholder="Search something" class="input-group-field" aria-label="Search something" autocomplete="off">
										 <div id="countryList">
    </div>
 {{ csrf_field() }}


										<span class="input-group-btn">

											<button type="submit" class="btn--secondary icon-fallback-text">
									<i class="fa fa-sreach" aria-hidden="true"></i>
												<span class="fallback-text">Search</span>
											</button>
										</span>



									</form>
								</div>


								<!-- Desktop Header -->
								<div class="grid__item large--show medium-down--hide smal--hide">

									 


						<!---------nave en--------------->

					 
                                     <div class="wrapper-middle">
										
                                           <!-- Cart -->
										<div class="grid__item header-cart large--two-tenths small--hide">

												 


												<a href="http://localhost/dashboard/old/alymarket3/forentend3/cart.html" class="site-nav__link site-nav__link--icon cart-link js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">

												 
									 
			  <span>
	 <i class="fa fa-shopping-cart" style="font-size:25px;color:#eb6625;margin-right:22px;"></i>
	 </span>
										<span class="cart-link__bubble" style="color: #fff;
margin-top: -28px;
position: absolute;
margin-top: -12px;
margin-left: -31px;">

											@if (Cart::instance('default')->count() > 0)
										    {{ Cart::instance('default')->count() }}
										    @else
										    0
										    @endif
														</span>
														 

														<div class="right-block">
															<div class="text1"></div>
														</div>

												 
												</a>

									 
	 
	 
                    					   
                    @guest


				   	
						
<div class="dropdown">
  <a class="dropbtn" >
                    <span style="color:#fff">{{trans('admin.login')}}</span>
  	 
       <i class="far fa-user" style="font-size:25px;color:#eb6625;"></i>
  </a>


  <div class="dropdown-content">
    <a href="{{url('/')}}/login" style="text-align: center;
padding: 4px;
background: #ed6626;
margin-top: 8px;
margin-right: 14px;
margin-right: 14px;
margin-left: 17px;
color: #fff;
font-size: 12px;
"> {{trans('admin.loginr')}} </a>
    <a class="mainfmenu" style="margin-top:3px"><span></span></a>
    <a href="{{url('/')}}/register" style="text-align: center;
padding: 4px;
background: #ffe9cc;
margin-top: 8px;
margin-right: 14px;
margin-right: 14px;
margin-left: 17px;
color: #ed6626;
font-size: 12px;
">{{trans('admin.registerr')}}</a>
    <a class="mainfmenu"> </a>
   
    
    <a href="{{url('/')}}/my-orders">{{trans('admin.myorders')}} </a>
    <a href="{{url('/')}}/wishlist">{{trans('admin.wishlist1')}}</i>
</a>
    <a href="{{url('/')}}/my-profile">{{trans('admin.myprofile')}}</a>
    <a href="#">{{trans('admin.MyCoupons')}}</a>
  </div>
</div>
    @else

    <div class="dropdown">
  <a class="dropbtn" >
                    <span style="color:#fff">{{trans('admin.login')}}</span>
  	 
                    <i class="far fa-user" style="font-size:25px;color:#eb6625"></i>
  </a>


  <div class="dropdown-content">
     
    <a href="{{url('/')}}/my-orders">{{trans('admin.myorders')}}</a>
    <a href="{{url('/')}}/wishlist">{{trans('admin.wishlist1')}}
</a>
    <a href="{{url('/')}}/my-profile">{{trans('admin.myprofile')}}</a>

    <a href="#">{{trans('admin.MyCoupons')}}</a>

  <a href="{{url('/')}}/tracking-order">{{trans('admin.trackingOrder')}}<i class="fa fa-map-marker" style="font-size:24px"></i></a>


      <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" style="font-size:24px;"></i>

               {{trans('admin.Logout')}}
        </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>

  </div>
</div>

     
        @endguest
                 
               	<a class="js-login-modal2" data-mfp-src="LoginModal2" style="    color: 
#eb6625;
position: absolute;
margin-left: -51px;
margin-top: 2px;
}: "  href="{{url('/')}}/wishlist">
                 <i class="fa fa-heart-o" style="font-size:25px;color:#eb6625"></i>
                 	</a>
						


             <a  style="color:
    #eb6625;
    position: absolute;
    margin-left:3px;
    margin-top: 2px;
}" href="{{url('/')}}/Managementchat">
                 	 <i class='far fa-comment-dots' style='font-size:25px;color:#eb6625'></i>
                 	</a>
         
										
										</div>
<!-- Logo -->  
								

										<!-- Search Box -->
										<div class="grid__item header-search large--five-tenths small--hide">
											<div class="header-search-inner">
												<form action="{{url('/')}}/search" method="get" class="input-group search-bar " role="search" style="position: relative;">
				 
				  <input type="text" name="search" id="search"   placeholder="{{trans('admin.Searchsomething')}}"  class="input-group-field" style="color:#000" />

  <div class="customsearch" id="ttttttt" style="display:none;"></div>

    

   
				 

													<span class="input-group-btn">
														<button type="submit" class=" icon-fallback-text">
															 <i class="fa fa-search" aria-hidden="true"></i>
															<span class="fallback-text">Search</span>
														</button>
													</span>
													<ul class="search-results" style="position: absolute; left: 0px; top: 40px; display: none;"></ul>
												</form>
												<div class="header-search-suggestion">
													<ul class="grid__link">
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>samsung</span></a>
														</li>
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>bosch</span></a>
														</li>
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>kingston</span></a>
														</li>
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>ensure gold</span></a>
														</li>
														<li>
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><span>converse</span></a>
														</li>
													</ul>
												</div>

											</div>
										</div>
@if(session('lang')=='en')
									 
								<a href="{{url('/')}}"  style="position: absolute;margin-top: -5px;margin-left:1000px">
												<img src="{{Storage::url(settings()->siteflag)}}" alt="" >
											</a>
									 
             @endif

             @if(session('lang')=='ar')
									 
								<a href="{{url('/')}}"  style="position: absolute;margin-top:7px;margin-left:1057px">
												<img src="{{Storage::url(settings()->siteflag_ar)}}" alt="" height="30px">
											</a>
									 
             @endif
											
										



									</div>
									 



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>					
		</header>
								@endif

 