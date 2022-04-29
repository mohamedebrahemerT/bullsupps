  @extends('forentend3.index')
@section('content')
 <div id="html-section-page-template" class="html-section">
				<div id="PageSection">
					<header class="section-header wrapper-breadcrumb">
						<div class="wrapper">
							<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
								<a href="{{url('/')}}" title="Back to the frontpage">{{trans('admin.Home')}}</a>
								<span aria-hidden="true">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</span>
								<span>{{trans('admin.SaleOff')}}</span>
							</nav>
						</div>
					</header>
					<div class="wrapper">
						<div class="grid">
							<div class="grid__item">
								<header class="section-header text-center sticky affix animated">
									<h1 class="text-center">{{trans('admin.SaleOff')}}</h1>
									<hr class="hr--small">
								</header>
								<hr class="hr--medium hr--clear">

								<div class="grid-uniform">
                        
                 @foreach($products as  $product)

									<div class="grid-element grid__item medium-up--one-quarter one-quarter">
											<div class="grid-view-item">
												<div class="grid-normal-display">
													<div class="grid__image product-image">
														<a class="grid-view-item__link" href="{{url('/')}}/shop/{{$product->id}}">
			<img class="grid-view-item__image" src="{{Storage::url($product->photo)}}" alt="Consequuntur magni dolores" height="150" >
															<img class="hover-image" src="{{Storage::url($product->photo2)}}" alt="Consequuntur magni dolores" title="Consequuntur magni dolores">
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
																<form action="{{url('/')}}/shop/{{$product->id}}" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
																	<input type="hidden" name="quantity" value="1">
																	<div class="product-single__add-to-cart">
																		<button type="submit" name="add" class="btn AddToCart">
																			<span class="AddToCartText">
												{{trans('admin.show')}}
																		
																			</span>
																		</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
												<div class="group-information style-">
													<div class="grid-view-item__vendor"> 
														  @if(session('lang')=='ar')

  {{ $product->department_name->dep_name_ar }}

  @endif

  @if(session('lang')=='en')

  {{ $product->department_name->dep_name_en }}

  @endif
													</div>
													<div class="h4 grid-view-item__title"><a href="./product.html">
														@if(session('lang')=='ar')

{{$product->title_name_ar }}
@endif
  @if(session('lang')=='en')
{{$product->title_name_en }} 
@endif

												</a></div>
													<div class="price-and-ship">
														<div class="grid-view-item__meta grid__item large--three-quarters">																
															<s class="product-price__price"><span class="money">{{$product->price}} L.E</span></s>
															<span class="product-price__price product-price__sale">
															<span class="money">{{$product->price_offer}} L.E</span>
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
                                          <div class="pagination-wrapper row">
						  
                    <?php  echo $products->render(); ?>

        

						</div><!-- ne dpagi -->
                  
              
                                     
									 
										 
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection
