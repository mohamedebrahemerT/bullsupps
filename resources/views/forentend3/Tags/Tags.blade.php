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
								<span>{{$categoryName}}</span>
							</nav>
						</div>
					</header>
					<section id="collection_content">
						<div class="wrapper">
							<div class="grid--rev collayout-left" id="collection">
								<div class="grid__item large--three-quarters">
									<section class="section-image">
                                      @isset($Department)
  <img src="{{Storage::url($Department->icon)}}" alt="">
@endisset
										

									</section>
									<section class="collection-toolbar">
										<div class="toolbar-left">
											<h3 class="collection-title">
										 {{$categoryName}}
										</h3>
										</div>
										<div class="toolbar-right">
											<div class="collection-view">
												<button type="button" title="Grid view" class="grid-button change-view change-view--active" data-view="grid">
													<span class="icon-fallback-text">
														<span class="icon icon-grid-view" aria-hidden="true"></span>
													<span class="fallback-text">Grid view</span>
													</span>
												</button>
												<button type="button" title="List view" class="list-button change-view" data-view="list">
													<span class="icon-fallback-text">
														<span class="icon icon-list-view" aria-hidden="true"></span>
													<span class="fallback-text">List view</span>
													</span>
												</button>
											</div>
											<div class="collection-sort">
												<label for="SortBy">Sort by</label>
												<select name="SortBy" id="SortBy">
													<option value="manual">Featured</option>
													<option value="best-selling">Best Selling</option>
													<option value="title-ascending">Alphabetically, A-Z</option>
													<option value="title-descending">Alphabetically, Z-A</option>
													<option value="price-ascending">Price, low to high</option>
													<option value="price-descending">Price, high to low</option>
													<option value="created-descending">Date, new to old</option>
													<option value="created-ascending">Date, old to new</option>
												</select>
											</div>
										</div>
									</section>
									<section class="products-area pull-vendor grid-uniform grid-uniform-category ">
                                         @foreach($products as  $product)
      
										<div class="grid-element grid__item medium-up--one-quarter one-quarter">
											<div class="grid-view-item">
												<div class="grid-normal-display">
													<div class="grid__image product-image">
														<a class="grid-view-item__link" 
														href="{{url('')}}/shop/{{$product->id}}">
															<img class="grid-view-item__image" src="{{ Storage::url($product->photo) }}" alt="Consequuntur magni dolores" width="191" height="191">
															<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product1x.png" alt="Consequuntur magni dolores" title="Consequuntur magni dolores" width="191" height="191">
														</a>
														<div class="product-label">
															<div class="label-element deal-label">
																<!--span style="color:#ff5722; background-color: #ffd839;">20% off</span-->
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
													<div class="grid-view-item__vendor">KingStone</div>
													<div class="h4 grid-view-item__title"><a href="{{url('')}}/shop/{{$product->id}}">
											  @if(session('lang')=='ar')

         {{$product->title_name_ar }}

@endif

  @if(session('lang')=='en')
{{$product->title_name_en }}
@endif
												</a></div>
													<div class="price-and-ship">
														<div class="grid-view-item__meta grid__item large--three-quarters">																
															<s class="product-price__price"><span class="money">{{$product->price }} L.E</span></s>
															<span class="product-price__price product-price__sale">
															<span class="money">{{$product->price_offer }} L.E</span>
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
																<a class="wish-list wlc wl-1559290471878" data-wishlistid="1559290471878" title="Add to Wishlist"><span class=""><i class="fa fa-heart-o"></i></span></a>
															</li>
															<li class="button-compare">
																<a class="wish-list cmc cm-1559290471878" data-compareid="1559290471878" title="Add to Compare"><span class=""><i class="fa fa-exchange"></i></span></a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>

                                          @endforeach 

									 

									</section>
								</div>
								<div class="grid__item large--one-quarter">
									<div class="group_sidebar">
										<div class="sb-wrapper link-collections-wrapper clearfix" data-animate="" data-delay="0">
											<h6 class="sb-title no-icon">
												<span>Related Categories</span>
											</h6>
											<ul class="list-unstyled sb-content all-collections list-styled">
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Dresses</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Blouses &amp; Shirts</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Jumpsuits</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Jackets</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Trench Coats</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Tops &amp; Tees</span>
													</a>
												</li>
												<li class="site-nav__item site-nav__expanded-item ">
													<a href="./collection.html" class="site-nav__link">
														<span>Hoodies</span>
													</a>
												</li>
											</ul>
										</div>
										<div class="sb-wrapper shop-by" data-animate="" data-delay="0">
											<h6 class="sb-title no-icon">
												<span>Shop by</span>
											</h6>
											<div class="shop-by-content" id="tags-filter-content">
												<div class="filter-tag-group">
													<div class="tag-group color-tags" id="coll-filter-1">
														<p class="title cfc1 open" data-toggle="collapse" data-target="#cfc1">Color
															<span class="ficon">
																<i class="fa fa-minus"></i>
															</span>
														</p>
														<ul id="cfc1" class="collapse in">
															<li class="swatch-tag ">
																<span style="background-color:#FF0000" class="btooltip" data-toggle="tooltip" data-placement="top" title="Red">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Red</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#0000FF" class="btooltip" data-toggle="tooltip" data-placement="top" title="Blue">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Blue</span>
															</li>
															<li class="swatch-tag  white-color">
																<span style="background-color:#FFFFFF" class="btooltip" data-toggle="tooltip" data-placement="top" title="White">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">White</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#FFFF00" class="btooltip" data-toggle="tooltip" data-placement="top" title="Yellow">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Yellow</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#00FFFF" class="btooltip" data-toggle="tooltip" data-placement="top" title="Aqua">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Aqua</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#00FF00" class="btooltip" data-toggle="tooltip" data-placement="top" title="Lime">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Lime</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#800080" class="btooltip" data-toggle="tooltip" data-placement="top" title="Purple">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Purple</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#C0C0C0" class="btooltip" data-toggle="tooltip" data-placement="top" title="Silver">
																	<a href="#">
																		<span class"checkbox"=""></span>
																	</a>
																</span>
																<span class="color-text">Silver</span>
															</li>
															<li class="swatch-tag ">
																<span style="background-color:#FFA500" class="btooltip" data-toggle="tooltip" data-placement="top" title="Orange">
																	<a href="#">
																		<span class"checkbox"=""></span>
																</a>
																</span>
																<span class="color-text">Orange</span>
															</li>
														</ul>
													</div>
													<div class="tag-group " id="coll-filter-2">
														<p class="title cfc2 open" data-toggle="collapse" data-target="#cfc2">Type
															<span class="ficon">
																<i class="fa fa-minus"></i>
															</span>
														</p>
														<ul id="cfc2" class="collapse in">
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Vintage
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Bohemian
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Chic
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Artsy
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Sexy
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Casual
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Tomboy
																</a>
															</li>
														</ul>
													</div>
													<div class="tag-group " id="coll-filter-3">
														<p class="title cfc3 open" data-toggle="collapse" data-target="#cfc3">Manufacturer
															<span class="ficon">
																<i class="fa fa-minus"></i>
															</span>
														</p>
														<ul id="cfc3" class="collapse in">
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Omega
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Gucci
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Tissot
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Hamilton
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> BB
																</a>
															</li>
														</ul>
													</div>
													<div class="tag-group " id="coll-filter-4">
														<p class="title cfc4 open" data-toggle="collapse" data-target="#cfc4">Price
															<span class="ficon">
																<i class="fa fa-minus"></i>
															</span>
														</p>
														<ul id="cfc4" class="collapse in">
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> Under 100
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> 100 - 200
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> 200 - 300
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> 300 - 400
																</a>
															</li>
															<li>
																<a href="#">
																	<span class="fe-checkbox"></span> 400 - 500
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="sb-wrapper featured-product-wrapper clearfix" data-animate="" data-delay="0">
											<div class="featured-product">
												<h6 class="sb-title no-icon">
													<span>Our Suggestion</span>
												</h6>
												<div class="sb-content featured-product-content beauty-health">
													<div class="element full_width" data-animate="fadeInUp" data-delay="0">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product10.png" alt="Etiam lobortis purus dictum">
																		<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product10x.png" alt="Etiam lobortis purus dictum" title="Etiam lobortis purus dictum">
																	</a>
																	<div class="product-label">
																		<div class="label-element deal-label">
																			<span style="color:#ff5722; background-color: #ffd839;">4% off</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam lobortis purus dictum</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<s class="product-price__price">
																			<span class="money">$70.00 USD</span>
																		</s>
																		<span class="product-price__price product-price__sale">
																		<span class="product__price">
																			<span class="money">$67.00 USD</span>
																		</span>
																		<span class="product-price__sale-label">On Sale</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="100">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product11.png" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product11x.png" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label">
																		<div class="label-element new-label">
																			<span style="color:#ffffff; background-color: #0f29f2;">New</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">				
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="200">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product12.png" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product12x.png" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label"></div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="300">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product13.png" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product13x.png" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label"></div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="400">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product14.png" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product14x.png" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label">
																		<div class="label-element new-label">
																			<span style="color:#ffffff; background-color: #0f29f2;">New</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="0">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product15.png" alt="Etiam lobortis purus dictum">
																		<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product15x.png" alt="Etiam lobortis purus dictum" title="Etiam lobortis purus dictum">
																	</a>
																	<div class="product-label">
																		<div class="label-element deal-label">
																			<span style="color:#ff5722; background-color: #ffd839;">4% off</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam lobortis purus dictum</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">
																		<s class="product-price__price">
																			<span class="money">$70.00 USD</span>
																		</s>
																		<span class="product-price__price product-price__sale">
																		<span class="product__price">
																			<span class="money">$67.00 USD</span>
																		</span>
																		<span class="product-price__sale-label">On Sale</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="element full_width" data-animate="fadeInUp" data-delay="100">
														<div class="grid-view-item">
															<div class="grid-normal-display grid__item one-half small-one-whole">
																<div class="grid__image product-image">
																	<a class="grid-view-item__link" href="./product.html">
																		<img class="grid-view-item__image" src="{{url('/')}}/forentend3/assets/images/product16.png" alt="Etiam dan lorem quis">
																		<img class="hover-image" src="{{url('/')}}/forentend3/assets/images/product16x.png" alt="Etiam dan lorem quis" title="Etiam dan lorem quis">
																	</a>
																	<div class="product-label">
																		<div class="label-element new-label">
																			<span style="color:#ffffff; background-color: #0f29f2;">New</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="grid-information style- grid__item one-half small-one-whole">
																<div class="h4 grid-view-item__title">
																	<a href="./product.html">Etiam dan lorem quis</a>
																</div>
																<div class="price-and-ship">
																	<div class="grid-view-item__meta grid__item large--one-whole">				
																		<span class="product-price__price">
																			<span class="money">$100.00 USD</span>
																		</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>		
						</div>
					</section>
				</div>
			</div>
        </main>
@endsection


