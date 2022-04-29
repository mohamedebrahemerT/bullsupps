  @extends('forentend3.index')
@section('content')
	<main class="main-content">
			 
			<div id="html-section-collection-template" class="html-section">
				<div id="CollectionSection" class="collection-left" data-section-id="collection-template" data-section-type="collection-template" data-grid-type="4">
					<header class="section-header wrapper-breadcrumb">
						<div class="wrapper">
							<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
								<a href="/" title="Back to the frontpage">Home</a>
								<span aria-hidden="true">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</span>
								<span>Search page</span>
							</nav>
						</div>
					</header>
					<div class="wrapper">
						<div class="grid">
							<div class="grid__item">
								<header class="section-header text-center sticky affix animated">
									<h1 class="text-center">Your search for "{{$query}}" revealed the following:</h1>
									<hr class="hr--small">
								</header>
								<form action="#" method="get" class="input-group search-bar search-bar--page" role="search" style="position: relative;">
									<input type="search" name="q" value="{{$query}}" placeholder="Search something" class="input-group-field" aria-label="Search something" autocomplete="off">
									<span class="input-group-btn">
										<button type="submit" class="btn icon-fallback-text">
											<i class="icon-search" aria-hidden="true"></i>
											<span class="fallback-text">{{$query}}</span>
										</button>
									</span>
									<ul class="search-results" style="position: absolute; left: 0px; top: 43px; display: none;"></ul>
								</form>
								<hr class="hr--medium hr--clear">
								<div class="grid-uniform">
									@foreach($products as $product)


										<div class="grid-element grid__item medium-up--one-quarter one-quarter">
											<div class="grid-view-item">
												<div class="grid-normal-display">
													<div class="grid__image product-image">
														<a class="grid-view-item__link" href="./product.html">
		<img class="grid-view-item__image" src="{{Storage::url($product->photo)}}" alt="Consequuntur magni dolores">
															<img class="hover-image" src="{{Storage::url($product->photo2)}}" title="Consequuntur magni dolores">
														</a>
														<div class="product-label">
															<div class="label-element deal-label">
																<span>Sale off</span>
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
													<div class="grid-view-item__vendor">Apple</div>
													<div class="h4 grid-view-item__title"><a href="./product.html">

													@if(session('lang')=='ar')
													{{$product->title_name_ar}}
													@endif

													@if(session('lang')=='en')
													{{$product->title_name_en}}
													@endif
												</a></div>
													<div class="price-and-ship">
														<div class="grid-view-item__meta grid__item large--three-quarters">																
			<s class="product-price__price"><span class="money">{{$product->price}}.00</span></s>
						<span class="product-price__price product-price__sale">
								<span class="money">	L.E {{$product->price_offer}}.00</span>
									<span class="product-price__sale-label">On Sale</span>
															</span>
														</div>
														<div class="shipcode grid__item large--one-quarter">
															<img src="{{url('/')}}/assets/images/freeshipicon.svg" alt="free shipping icon" />
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
																<a class="wish-list wlc wl-1559290460343" data-wishlistid="1559290460343" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
															</li>
															<li class="button-compare">
																<a class="wish-list cmc cm-1559290460343" data-compareid="1559290460343" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
															</li>
														</ul>
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
			</div>
		</main>
		


@endsection
