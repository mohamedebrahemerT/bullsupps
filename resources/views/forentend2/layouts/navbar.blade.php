    
 <body   style="background-color:#fcf9f7">
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>{{trans('admin.WelcometoE-shop!')}}</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="{{route('shop.index')}}">{{trans('admin.Store')}}</a></li>
						<li><a href="{{route('blog.index')}}">{{trans('admin.Newsletter')}} </a></li>
						<li><a href="#">{{trans('admin.FAQ')}}</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{trans('admin.lang')}}  <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">{{trans('admin.AR')}} ({{trans('admin.AR1')}})</a></li>
								<li><a href="#">{{trans('admin.EN')}} ({{trans('admin.EN1')}})</a></li>
							 
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">{{trans('admin.USD')}} ($)</a></li>
								<li><a href="#">{{trans('admin.LE')}} (EG)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="{{url('/')}}/forentend2/img/logo.jpg" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<select class="input search-categories">
								<option value="0">All Categories</option>
      @foreach(departmentsMenue2() as  $Department)

								<option value="1">
									   @if(session('lang')=='ar')

 {{$Department->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$Department->dep_name_en }}

@endif
								</option>
                                          @endforeach  
								 

							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="{{url('/')}}/login" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
							<ul class="custom-menu">

								  @guest
    <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Sign Up</a></li>
    <li><a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
    @else

								<li><a href="{{url('/')}}/my-profile"><i class="fa fa-user-o"></i> My Account</a></li>


								<li><a href="{{url('/')}}/user_logout"><i class="fa fa-user-o"></i> Logout</a></li>
		 
		 

        @endguest


								<li><a href="{{url('/')}}/MyWishlist"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="{{route('Checkout.index')}}"><i class="fa fa-check"></i> Checkout</a></li>
								 

							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">
										@if (Cart::instance('default')->count() > 0)
    {{ Cart::instance('default')->count() }}
    @else
    0
    @endif
									</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->