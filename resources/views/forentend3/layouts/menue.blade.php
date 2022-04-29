	<nav class="menu-navigation">
			<div class="navigation-bar menu-bar" >
				<div class="wrapper wrapper-allcoll">
					<div id="html-section-navigation" class="html-section">
						<div data-section-id="navigation" data-section-type="horizontal-menu-section">
							<div class="grid--full grid--table">
						  <!----------------menu en---------------------------->
 
						  	<div class="horizontal-menu desktop-menu medium-down--hide" style="">
									<ul class="site-nav site-nav--init" id="AccessibleNav">
										 
										<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown dropdown navigation desknav mega-menu" aria-haspopup="true" >
											<a target="_blank"  href="{{url('/')}}/factory" class="site-nav__link">
												<span style="
 
color:
#fff;
font-size:20px;
font-weight: 600;
 
padding: 10px 20px;
 
position: relative;
												">
												@if(session('lang')=='ar')
												المصــــــانع
												@endif
												@if(session('lang')=='en')
											{{trans('admin.Factory')}}
												 
												@endif
										</span>
												 
											</a>
											<ul class="site-nav__dropdown column-5" style="max-width:1220px">
												@foreach(factmenues() as $factmenu)
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>

														<li class="site-nav__item site-nav__item-title">

 @if(session('lang')=='ar')

 {{$factmenu->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$factmenu->dep_name_en }}

@endif

														</li>
      @foreach(App\departmentsFactories::where('parent',$factmenu->id)->take(6)->get() as  $cc)
                        
														<li class="site-nav__item">
<a href="{{ route('shop.index',['id'=>$cc->id]) }}" target="_blank" class="site-nav__link">
																<span>
	 @if(session('lang')=='ar')

 {{$cc->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$cc->dep_name_en }}

@endif

															</span>
															</a>
														</li>
														
                                          @endforeach 
													
													
														


													</ul>
												</li>
											  @endforeach
												 
												 
											</ul>
										</li>

									  <!----------------------------------------------------------------------------->

								 
									 

		<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown dropdown navigation desknav mega-menu" aria-haspopup="true"  style="margin-right: 148px;">
											<a target="_blank"  href="{{url('/')}}/factory" class="site-nav__link">
								<span>{{trans('admin.collection')}} </span>
												 
											</a>
											<ul class="site-nav__dropdown column-5" style="max-width:1220px">
						@foreach(collectionmenues() as $collectionmenu)
												<li class="site-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
													<ul>

														<li class="site-nav__item site-nav__item-title">

 @if(session('lang')=='ar')

 {{$collectionmenu->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$collectionmenu->dep_name_en }}

@endif

														</li>
      @foreach(App\Department::where('parent',$collectionmenu->id)->take(6)->get() as  $ff)
                        
														<li class="site-nav__item">
<a href="{{ route('shop.index',['id'=>$ff->id]) }}" target="_blank" class="site-nav__link">
																<span>
	 @if(session('lang')=='ar')

 {{$ff->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$ff->dep_name_en }}

@endif

															</span>
															</a>
														</li>
														
                                          @endforeach 
													
													
														


													</ul>
												</li>
											  @endforeach
												 
												 
											</ul>
										</li>
	<!----------------------------------------------------------------------------->


	<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown dropdown navigation desknav mega-menu" aria-haspopup="true">
											<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
							<span>{{trans('admin.NewArrivals')}}</span>
												 
											</a>
											<ul class="site-nav__dropdown column-5" style="max-width:1220px">
                            @foreach(NewArrivalsmenues() as $NewArrivalsmenu)
												<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
													<div class="grid-view-item">
														<div class="grid-normal-display">
															<div class="grid__image product-image">
<a class="grid-view-item__link" href="{{url('/')}}/shop/{{$NewArrivalsmenu->id}}" target="_blank">
		<img class="grid-view-item__image" src="{{Storage::url($NewArrivalsmenu->photo)}}"
		 alt="

@if(session('lang')=='ar')
                                                                                 
{{$NewArrivalsmenu->title_name_ar }}

@endif

  @if(session('lang')=='en')
{{$NewArrivalsmenu->title_name_en }} 
@endif
		 " width="115" height="115">
	<img class="hover-image" src="http://localhost/dashboard/old/alymarket3/storage/app/public/productes/MensClothing/1.jpg" alt="Consequuntur magni dolores" title="
@if(session('lang')=='ar')
                                                                                 
{{$NewArrivalsmenu->title_name_ar }}

@endif

  @if(session('lang')=='en')
{{$NewArrivalsmenu->title_name_en }} 
@endif
	" width="130" height="115">
																</a>
																<div class="product-label">
																	<div class="label-element deal-label">
																		<span style="color:#ff5722; background-color: #ffd839;">20% off</span>
																	</div>
																</div>
															</div>
															<div class="quickbuy">
																<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																	<div class="effect-ajax-cart">
	<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
					<input type="hidden" name="quantity" value="1">
				<div class="product-single__add-to-cart">
				<button type="submit" name="add" class="btn AddToCart">
										</button>
										</div>
												</form>
													</div>
																</div>
															</div>
														</div>
														<div class="group-information style-">
															<div class="grid-view-item__vendor">  @if(session('lang')=='ar')
  {{ $NewArrivalsmenu->department_name->dep_name_ar }}
  @endif
  @if(session('lang')=='en')
  {{ $NewArrivalsmenu->department_name->dep_name_en }}
  @endif

															</div>
															<div class="h4 grid-view-item__title">
				<a href="{{url('/')}}/shop/{{$NewArrivalsmenu->id}}" target="_blank">
										      @if(session('lang')=='ar')                      
												{{$NewArrivalsmenu->title_name_ar }}
												@endif
												@if(session('lang')=='en')
												{{$NewArrivalsmenu->title_name_en }} 
												@endif
														</a></div>
															<div class="price-and-ship">
																<div class="grid-view-item__meta grid__item large--three-quarters">																
																	<s class="product-price__price"><span class="money">
									L.E {{$NewArrivalsmenu->price}}.00

											</span></s>
																	<span class="product-price__price product-price__sale">
																	<span class="money">
									L.E {{$NewArrivalsmenu->price_offer}}.00
																	</span>
																	<span class="product-price__sale-label">On Sale</span>
																	</span>
																</div>
								<div class="shipcode grid__item large--one-quarter"><img src="{{url('/')}}/forentend3/assets/images/freeshipicon.svg" alt="free shipping icon" />
																</div>
															</div>
															<div class="group-functions">
																<div class="rating-star grid__item one-half">
									<span class="spr-badge" data-rating="5.0">
								<span class="spr-starrating spr-badge-starrating">
										<i class="spr-icon spr-icon-star"></i>
									<i class="spr-icon spr-icon-star"></i>
										<i class="spr-icon spr-icon-star"></i>
										<i class="spr-icon spr-icon-star"></i>
										<i class="spr-icon spr-icon-star"></i>
									</span>																		
												</span>
												</div>
								<ul class="action-button grid__item one-half">
									<li class="button-wishlist">
								<a class="wish-list wlc wl-1552981229660" data-wishlistid="1552981229660" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
									</li>
									<li class="button-compare">
								<a class="wish-list cmc cm-1552981229660" data-compareid="1552981229660" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
									</li>
																</ul>
															</div>
														</div>
													</div>
												</li>												
											 	    @endforeach										
											 											
											 

											</ul>
										</li>



										<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown dropdown navigation desknav mega-menu" aria-haspopup="true" data-url="/collections/all">
											<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
												<span>{{trans('admin.SpecialDeals')}}</span>
												
											</a>

											<ul class="site-nav__dropdown column-5" style="max-width:1220px">

                            @foreach(SpecialDeals() as  $SpecialDeal)


												<li class="site-nav__item column-text grid__item small--one-whole medium-up--one-third one-fifth">

													<div class="heading">

@if(session('lang')=='ar')

 {{$SpecialDeal->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$SpecialDeal->dep_name_en }}

@endif
												</div>
													<div class="content" style="font-size:11px;">
														<ul>
      @foreach(App\Department::where('parent',$SpecialDeal->id)->take(7)->get() as  $xx)

															<li>
				<a href="{{ route('shop.index',['id'=>$xx->id]) }}" target="_blank">
	@if(session('lang')=='ar')

 {{$xx->dep_name_ar }}

@endif

  @if(session('lang')=='en')
{{$xx->dep_name_en }}

@endif

</a>
															</li>
							  @endforeach
															 

														</ul>
													</div>
												</li>

												
							  @endforeach

                            @foreach(imagegrid__items() as  $imagegrid__item)


                  <li class="site-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
					<a href="{{ route('shop.index',['id'=>$imagegrid__item->id]) }}"><img src="{{Storage::url($imagegrid__item->icon)}}" alt=""></a>
												</li>
							  @endforeach

											 


											</ul>
										</li>
										<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  navigation desknav dropdown-menu" aria-haspopup="true" data-url="/collections/all">
											<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
								<span>{{trans('admin.Pages')}}</span>
												
											</a>
											<ul class="site-nav__dropdown column-1" style="max-width:300px">
												<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  dropdown navigation desknav" aria-haspopup="true">
													<a href="{{url('/')}}/about" class="site-nav__link">
										<span>{{trans('admin.AboutUs')}}</span>
														 
													</a>
													<ul class="site-nav__dropdown">
														<li class="li-sub-mega">
															<a tabindex="-1" href="{{url('/')}}/about">{{trans('admin.Services')}}</a>
														</li>
														<li class="li-sub-mega">
															<a tabindex="-1" href="{{url('/')}}/about">{{trans('admin.ShoppingGuide')}}</a>
														</li>
														<li class="li-sub-mega">
															<a tabindex="-1" href="Storage::url({{settings()->profile}})" target="_blank">{{trans('admin.Typography')}}</a>
														</li>
														<li class="li-sub-mega">
										<a tabindex="-1" href="{{url('/')}}/contact">{{trans('admin.StoreLocation')}}</a>
														</li>
													</ul>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="{{url('/')}}/contact" class="site-nav__link">
									<span>{{trans('admin.ContactUs')}}</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="{{url('/')}}/VisionMission" class="site-nav__link">
									<span>{{trans('admin.VisionMission')}}</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="{{url('/')}}/Objectives" class="site-nav__link">
									<span>{{trans('admin.Objectives')}}</span>
													</a>
												</li>
												
												<li class="site-nav__item site-nav__expanded-item">
													<a href="{{url('/')}}/FAQ" class="site-nav__link">
														<span>{{trans('admin.FAQ')}}</span>
													</a>
												</li>
												 
												<li class="site-nav__item site-nav__expanded-item">
													<a href="{{url('/')}}/SaleOff" class="site-nav__link">
								<span>{{trans('admin.SaleOff')}}</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item">
													<a href="{{url('/')}}/wishlist" class="site-nav__link">
														<span>{{trans('admin.Wishlist')}}</span>
													</a>
												</li>
											</ul>
										</li>

										<li class="site-nav__item site-nav__expanded-item " data-url="/pages/contact-us">
											<a href="{{url('/')}}/wishlist" class="site-nav__link">
												<span>{{trans('admin.Wishlist')}}</span>
											</a>
										</li>
										<li class="site-nav__item site-nav__expanded-item " data-url="/pages/contact-us">
											<a href="{{url('/')}}/contact" class="site-nav__link">
												<span>{{trans('admin.ContactUs')}}</span>
											</a>
										</li>

                                   @if(auth()->guard('admin')->user())
                                   	<li class="site-nav__item site-nav__expanded-item" data-url="/">
											<a href="{{url('/')}}/SellOnAlymarket" class="site-nav__link" target="_blank">
												<span></span>
											</a>
										</li>
											<li class="site-nav__item site-nav__expanded-item" data-url="/">
											<a href="{{url('/')}}/SellOnAlymarket" class="site-nav__link" target="_blank">
												<span></span>
											</a>
										</li>
											<li class="site-nav__item site-nav__expanded-item" data-url="/">
											<a href="{{url('/')}}/SellOnAlymarket" class="site-nav__link" target="_blank">
												<span></span>
											</a>
										</li>
<li class="site-nav__item site-nav__expanded-item" data-url="/">
											<a href="{{url('/')}}/admin_login" class="site-nav__link" target="_blank" >
												<span>{{trans('admin.VendorAcount')}}</span>
											</a>
										</li>
										@endif



<li class="site-nav__item site-nav__expanded-item" data-url="/">
											<a href="{{url('/')}}/SellOnAlymarket" class="site-nav__link" target="_blank">
												<span></span>
											</a>
										</li>
									
									 
                                   @if(!auth()->guard('admin')->user())
                                   	<li class="site-nav__item site-nav__expanded-item" data-url="/">
											<a href="{{url('/')}}/SellOnAlymarket" class="site-nav__link" target="_blank">
												<span></span>
											</a>
										</li>
								 

										<li class="site-nav__item site-nav__expanded-item" data-url="/" style="margin-left: 23px;">
											<a href="{{url('/')}}/SellOnAlymarket" class="site-nav__link" target="_blank">
												<span style="margin-right:17px">{{trans('admin.sellonalymarket')}}</span>
											</a>
										</li>

									 

										@endif

										
										 			<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  navigation desknav dropdown-menu" aria-haspopup="true" data-url="/collections/all">
											<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link" style="margin-right: -12px;">
								<span>{{trans('admin.lang')}}</span>
												
											</a>
											<ul class="site-nav__dropdown column-1" style="max-width:300px">
												<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  dropdown navigation desknav" aria-haspopup="true">
													<a href="{{url('/')}}/admin/lang_en/en" class="site-nav__link">
														 <img src="{{url('/')}}/forentend3/assets/images/en.png" height="16" width="16" alt="en">
										<span>{{trans('admin.English')}}</span>
														 
													</a>
												 
												</li>
												<br>

													<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  dropdown navigation desknav" aria-haspopup="true">
													<a href="{{url('/')}}/admin/lang_en/ar" class="site-nav__link">
														  <img src="{{url('/')}}/forentend3/assets/images/ar.png" height="16" width="16" alt="en">
										<span>{{trans('admin.arabic')}}</span>
														 
													</a>
												 
												</li>
											 
											 
											 
												 
											</ul>
										</li>

                                      <li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  navigation desknav dropdown-menu" aria-haspopup="true" data-url="/collections/all">
											<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
								<span>{{trans('admin.curency')}}</span>
												
											</a>
											<ul class="site-nav__dropdown column-1" style="max-width:300px">
												<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  dropdown navigation desknav" aria-haspopup="true">
													<a href="{{url('/')}}/admin/lang_en/en" class="site-nav__link">
														 <img src="{{url('/')}}/forentend3/assets/images/en.png" height="16" width="16" alt="en">
										<span>{{trans('admin.LE2')}}</span>
														 
													</a>
												 
												</li>
												<br>

													<li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown  dropdown navigation desknav" aria-haspopup="true">
													<a href="{{url('/')}}/admin/lang_en/ar" class="site-nav__link">
														  <img src="{{url('/')}}/forentend3/assets/images/ar.png" height="16" width="16" alt="en">
										<span>{{trans('admin.USDollar2')}}</span>
														 
													</a>
												 
												</li>
											 
											 
											 
												 
											</ul>
										</li>

									 


									</ul>
								</div>

						 

						

								<div class="horizontal-menu mobile-menu large--hide">
									<div id="MobileNav" class="mobileNav-left">
										<div class="mobileNav-header">
											<div class="mobileNav-close">
												<button type="button" class="icon-fallback-text mobileNav-icon-close">
													<span class="icon icon-x" aria-hidden="true"></span>
													<span class="fallback-text">
                                           {{trans('admin.Closemenu')}} 
													</span>
												</button>
											</div>
										</div>
										<div class="mobileNav-menu">
											<ul class="mobileNav-nav">
												<li class="mobile-nav__item active" data-url="/">
													<a href="{{url('/')}}" class="site-nav__link">
										<span>{{trans('admin.Home')}}</span>
													</a>
												</li>
												<li class="mobile-nav__item mobile-nav__item-menulv1 mega-menu" data-father="none" data-url="/collections/all">
													<div class="mobile-nav__has-sublist">
														<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="mobile-nav__link">Collections</a>
														<div class="mobile-nav__toggle">
															<button type="button" class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv1-button">
																<span class="icon-fallback-text mobile-nav__toggle-open">
																	<span class="icon icon-plus" aria-hidden="true"></span>
																	<span class="fallback-text">Expand submenu</span>
																</span>
																<span class="icon-fallback-text mobile-nav__toggle-close">
																	<span class="icon icon-minus" aria-hidden="true"></span>
																	<span class="fallback-text">Collapse submenu</span>
																</span>
															</button>
														</div>
													</div>
													<ul class="mobile-nav__sublist mobile-nav__sublist-menulv1 megamenu__dropdown megamenu_1">
														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Fashion Collection</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Blouses &amp; Shirts</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Jumpsuits</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Jackets</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Trench Coats</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Tops &amp; Tees</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Hoodies</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Jewelry Collection</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Pendant Necklaces</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Rings</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Hot Earrings</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Popular Bracelets</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Jewelry Sets</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Beads for DIY Jewelry</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Men's Brand Watches</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Beauty Collection</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Human Hair</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Natural Color Weave</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Pre-Colored Weave</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Nail Polish</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Nail Tools</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Makeup</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Face Care</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Furniture Collection</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Space Home Store</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Living Room</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Bedroom</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Kitchen</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Bathroom</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Dining Room</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Children's Room</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Weddings &amp; Events</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Wedding Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Evening Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Prom Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Bridesmaid Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Flower Girl Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Cocktail Dresses</span>
																	</a>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<li class="mobile-nav__item mobile-nav__item-menulv1 mega-menu" data-father="none" data-url="/collections/all">
													<div class="mobile-nav__has-sublist">
														<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="mobile-nav__link">New Arrivals</a>
														<div class="mobile-nav__toggle">
															<button type="button" class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv1-button">
																<span class="icon-fallback-text mobile-nav__toggle-open">
																	<span class="icon icon-plus" aria-hidden="true"></span>
																	<span class="fallback-text">Expand submenu</span>
																</span>
																<span class="icon-fallback-text mobile-nav__toggle-close">
																	<span class="icon icon-minus" aria-hidden="true"></span>
																	<span class="fallback-text">Collapse submenu</span>
																</span>
															</button>
														</div>
													</div>
													<ul class="mobile-nav__sublist mobile-nav__sublist-menulv1 megamenu__dropdown megamenu_1">
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">
																			<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product1.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product1x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																		<div class="product-label">
																			<div class="label-element deal-label">
																				<span style="color:#ff5722; background-color: #ffd839;">20% off</span>
																			</div>
																		</div>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">APPLE</div>
																	<div class="h4 grid-view-item__title"><a href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">																
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">																	
																			<img src="{{url('/')}}/forentend3/assets/images/freeshipicon.svg" alt="free shipping icon" />
																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>																		
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895403066" data-wishlistid="1559895403066" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895403066" data-compareid="1559895403066" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>												
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">
																			<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product3.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product3x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">KingStone</div>
																	<div class="h4 grid-view-item__title"><a href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">																
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">																	
																			
																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>																		
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895398140" data-wishlistid="1559895398140" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895398140" data-compareid="1559895398140" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>												
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">
																			<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product4.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product4x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																		<div class="product-label">
																			<div class="label-element deal-label">
																				<span style="color:#ff5722; background-color: #ffd839;">20% off</span>
																			</div>
																		</div>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">SAMSUNG</div>
																	<div class="h4 grid-view-item__title"><a href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">																
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">																	
																			
																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>																		
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895396466" data-wishlistid="1559895396466" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895396466" data-compareid="1559895396466" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>												
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">
																			<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product2.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product2x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">BOSCH</div>
																	<div class="h4 grid-view-item__title"><a href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">																
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">																	
																			
																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>																		
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895394200" data-wishlistid="1559895394200" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895394200" data-compareid="1559895394200" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>											
														<li class="mobile-nav__item column-product grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="grid-view-item">
																<div class="grid-normal-display">
																	<div class="grid__image product-image">
																		<a class="grid-view-item__link" href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">
																			<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product5.png" alt="Consequuntur magni dolores">
																			<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product5x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
																		</a>
																	</div>
																	<div class="quickbuy">
																		<div class="product-ajax-quickbuy in-stock hidden-xs hidden-sm">
																			<div class="effect-ajax-cart">
																				<form action="./product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																					<input type="hidden" name="quantity" value="1">
																					<div class="product-single__add-to-cart">
																						<button type="submit" name="add" class="btn AddToCart">
																							<span class="AddToCartText">
																								Add to Cart
																							</span>
																						</button>
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="group-information style-">
																	<div class="grid-view-item__vendor">ACME</div>
																	<div class="h4 grid-view-item__title"><a href="http://localhost/dashboard/old/alymarket3/forentend3/product.html">Consequuntur magni dolores</a></div>
																	<div class="price-and-ship">
																		<div class="grid-view-item__meta grid__item large--three-quarters">																
																			<s class="product-price__price"><span class="money">$24.99 USD</span></s>
																			<span class="product-price__price product-price__sale">
																			<span class="money">$19.99 USD</span>
																			<span class="product-price__sale-label">On Sale</span>
																			</span>
																		</div>
																		<div class="shipcode grid__item large--one-quarter">																	
																			<img src="{{url('/')}}/forentend3/assets/images/freeshipicon.svg" alt="free shipping icon" />
																		</div>
																	</div>
																	<div class="group-functions">
																		<div class="rating-star grid__item one-half">
																			<span class="spr-badge" data-rating="5.0">
																				<span class="spr-starrating spr-badge-starrating">
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																					<i class="spr-icon spr-icon-star"></i>
																				</span>																		
																			</span>
																		</div>
																		<ul class="action-button grid__item one-half">
																			<li class="button-wishlist">
																				<a class="wish-list wlc wl-1559895387337" data-wishlistid="1559895387337" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
																			</li>
																			<li class="button-compare">
																				<a class="wish-list cmc cm-1559895387337" data-compareid="1559895387337" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="mobile-nav__item mobile-nav__item-menulv1 mega-menu" data-father="none" data-url="/collections/all">
													<div class="mobile-nav__has-sublist">
														<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="mobile-nav__link">Special Deals</a>
														<div class="mobile-nav__toggle">
															<button type="button" class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv1-button">
																<span class="icon-fallback-text mobile-nav__toggle-open">
																	<span class="icon icon-plus" aria-hidden="true"></span>
																	<span class="fallback-text">Expand submenu</span>
																</span>
																<span class="icon-fallback-text mobile-nav__toggle-close">
																	<span class="icon icon-minus" aria-hidden="true"></span>
																	<span class="fallback-text">Collapse submenu</span>
																</span>
															</button>
														</div>
													</div>
													<ul class="mobile-nav__sublist mobile-nav__sublist-menulv1 megamenu__dropdown megamenu_1">
														<li class="mobile-nav__item column-text grid__item small--one-whole medium-up--one-third one-fifth">
															<div class="heading">Text Column</div>
															<div class="content">
																<ul>
																	<li>Rings</li>
																	<li>Hot Earrings</li>
																	<li>Popular Bracelets</li>
																	<li>Jewelry Sets</li>
																	<li>Beads for DIY Jewelry</li>
																	<li>Men's Brand Watches</li>
																	<li>Pendant Necklaces</li>
																</ul>
															</div>
														</li>
														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Fashion Collection</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Dresses</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Blouses &amp; Shirts</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Jumpsuits</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Jackets</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Trench Coats</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Tops &amp; Tees</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Hoodies</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="mobile-nav__item column-linklist grid__item small--one-whole medium-up--one-third one-fifth">
															<ul>
																<li class="site-nav__item site-nav__item-title">Accessories</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Eyewear &amp; Accessories</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Hats &amp; Caps</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Belts &amp; Cummerbunds</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Scarves &amp; Wraps</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Gloves &amp; Mittens</span>
																	</a>
																</li>
																<li class="site-nav__item">
																	<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html" class="site-nav__link">
																		<span>Prescription Glasses</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="mobile-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><img src="{{url('/')}}/forentend3/assets/images/mega-img1.png" alt=""></a>
														</li>
														<li class="mobile-nav__item column-image grid__item small--one-whole medium-up--one-third one-fifth">
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/collection.html"><img src="{{url('/')}}/forentend3/assets/images/mega-img1.png" alt=""></a>
														</li>
													</ul>
												</li>
												<li class="mobile-nav__item mobile-nav__item-menulv1 dropdown-menu" data-father="none" data-url="/collections/all">
													<div class="mobile-nav__has-sublist">
														<a href="{{url('/')}}/about" class="mobile-nav__link">Pages</a>
														<div class="mobile-nav__toggle">
															<button type="button" class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv1-button">
																<span class="icon-fallback-text mobile-nav__toggle-open">
																	<span class="icon icon-plus" aria-hidden="true"></span>
																	<span class="fallback-text">Expand submenu</span>
																</span>
																<span class="icon-fallback-text mobile-nav__toggle-close">
																	<span class="icon icon-minus" aria-hidden="true"></span>
																	<span class="fallback-text">Collapse submenu</span>
																</span>
															</button>
														</div>
													</div>
													<ul class="mobile-nav__sublist mobile-nav__sublist-menulv1 megamenu__dropdown megamenu_1">
														<li class="mobile-nav__item mobile-nav__item-menulv2">
															<div class="mobile-nav__has-sublist">
																<a href="{{url('/')}}/about" class="mobile-nav__link">About Us</a>
																<div class="mobile-nav__toggle">
																	<button type="button" class="mobile-nav__toggle-btn icon-fallback-text mobileNav-menulv2-button">
																		<span class="icon-fallback-text mobile-nav__toggle-open">
																			<span class="icon icon-plus" aria-hidden="true"></span>
																			<span class="fallback-text">Expand submenu</span>
																		</span>
																		<span class="icon-fallback-text mobile-nav__toggle-close">
																			<span class="icon icon-minus" aria-hidden="true"></span>
																			<span class="fallback-text">Collapse submenu</span>
																		</span>
																	</button>
																</div>
															</div>
															<ul class="mobile-nav__sublist mobile-nav__sublist-menulv2">
																<li class="mobile-nav__item">
																	<a href="{{url('/')}}/about" class="site-nav__link">
																		<span>Services</span>
																	</a>
																</li>
																<li class="mobile-nav__item">
																	<a href="{{url('/')}}/about" class="site-nav__link">
																		<span>Shopping Guide</span>
																	</a>
																</li>
																<li class="mobile-nav__item">
																	<a href="{{url('/')}}/about" class="site-nav__link">
																		<span>Typography</span>
																	</a>
																</li>
																<li class="mobile-nav__item">
																	<a href="{{url('/')}}/about" class="site-nav__link">
																		<span>Store Location</span>
																	</a>
																</li>
															</ul>
														</li>

														<li class="mobile-nav__item">
															<a href="{{url('/')}}/contact" class="site-nav__link">
																<span>Contact Us</span>
															</a>
														</li>

														<li class="mobile-nav__item">
															<a href="http://localhost/dashboard/old/alymarket3/forentend3/page-faq.html" class="site-nav__link">
																<span>FAQ</span>
															</a>
														</li>

														<li class="mobile-nav__item">
															<a href="{{url('/')}}/about" class="site-nav__link">
																<span>Heading</span>
															</a>
														</li>

														<li class="mobile-nav__item">
															<a href="{{url('/')}}/about" class="site-nav__link">
																<span>Sale Off</span>
															</a>
														</li>

														<li class="mobile-nav__item">
															<a href="http{{url('/')}}/wishlist" class="site-nav__link">
																<span>Wishlist</span>
															</a>
														</li>

													</ul>
												</li>
												<li class="mobile-nav__item" data-url="/pages/contact-us">
													<a href="{{url('/')}}/contact" class="site-nav__link">
														<span>Contact Us</span>
													</a>
												</li>


											</ul>
										</div>
										<div class="mobileNav-information">											
											<div class="mobileNav__item nav-customerlink">
												<a class="site-nav__link site-nav__link--icon js-login-modal" data-mfp-src="#LoginModal">
										<i class="icon-customer" aria-hidden="true"></i>
										<span class="text">My Account</span>
									</a>
											</div>
											<div class="mobileNav__item nav-compare">
												<a href="http://localhost/dashboard/old/alymarket3/forentend3/pages-compare.html">My Compare</a>
											</div>
											<div class="mobileNav__item nav-wishlist">
												<a href="{{url('/')}}/wishlist">My Wishlist</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
 