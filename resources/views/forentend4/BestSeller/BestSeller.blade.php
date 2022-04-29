   @extends('forentend4.index')

@section('content')
 
 

<div id="content">
	<script type="text/javascript">
	
	function _SoQuickView(){
		var windowWidth = window.innerWidth || document.documentElement.clientWidth;
		if (windowWidth > 1200 ) {
			var $item_class = $('.so-quickview');
			if ($item_class.length > 0) {
				for (var i = 0; i < $item_class.length; i++) {
					if($($item_class[i]).find('.quickview_handler').length <= 0){
						var $product_id = $($item_class[i]).find('a', $(this)).attr('data-product');
						if($.isNumeric($product_id) ){
							var _quickviewbutton = "<a class='visible-lg btn-button quickview quickview_handler' href='https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=extension/soconfig/quickview&amp;product_id="+$product_id+"' title=\"نظرة سريعة\" data-title =\"نظرة سريعة\" data-fancybox-type=\"iframe\" ><i class=\"fa fa-eye\"></i><span>نظرة سريعة</span></a>";
							$($item_class[i]).append(_quickviewbutton);
						}
					}
				}
			}
		}
		
	}

	jQuery(document).ready(function ($) {
		_SoQuickView();
		// Hide tooltip when clicking on it
		var hasTooltip = $("[data-toggle='tooltip']").tooltip({container: 'body'});
		hasTooltip.on('click', function () {
				$(this).tooltip('hide')
		});
	});

	
</script>
<div class="so-page-builder">
						<div class="container page-builder-rtl">
				<div class="row row_2jda  row-style ">
																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_wr50  col-style">
																								<!-- default Grid  -->
<div class="module so-extraslider-rtl page-extra">
		<h3 class="modtitle">
					<span>Best Seller Products</span>
			</h3>
	
	
	<div class="modcontent">
		
						
				
						
															
			<div id="so_extra_slider_4046966031591626292" class="so-extraslider buttom-type1 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type1">
				<!-- Begin extraslider-inner -->
				<div class="extraslider-inner products-list " data-effect="none">
																	 
						<div class="item ">
						 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=84" target="_self" title="Benderloin officia "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/1-270x270.jpg" alt="Benderloin officia" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('84');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('84');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('84');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='84' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=84" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$36.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=84" target="_self" title="Benderloin officia "  >
													Benderloin officia 
												</a>
											</h4>
																		
										<div class="caption">
																							<div class="wk_seller_info_container">
													<div class="wk_seller_info_profpic">
												      	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=17"><img src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/marketplace/avatar1-150x150-80x80.png" alt="Peter Thomas"></a>
												    </div>
												    <div class="wk_seller_info_box">
												    	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=17" class="text-bold">Peter Thomas</a>
												    	<div class="local">From: <span class="text-bold">Viet Nam</span></div>
												    	<div class="total-products">Total Products: <span class="text-bold">10</span></div>
												    	<div class="wk_seller_info_rating">
												    																        														        	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        													        <span>3.25 / 5</span> ( 2 )
												    	</div>
												    </div>
												</div>
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=101" target="_self" title="Corem ipsum dolor "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/14-270x270.jpg" alt="Corem ipsum dolor" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('101');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('101');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('101');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='101' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=101" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$165.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=101" target="_self" title="Corem ipsum dolor "  >
													Corem ipsum dolor 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=100" target="_self" title="Cupim should "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/16-270x270.jpg" alt="Cupim should" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('100');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('100');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('100');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='100' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=100" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$68.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=100" target="_self" title="Cupim should "  >
													Cupim should 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=96" target="_self" title="Doenpuis consuat "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/10-270x270.jpg" alt="Doenpuis consuat" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('96');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('96');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('96');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='96' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=96" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$60.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=96" target="_self" title="Doenpuis consuat "  >
													Doenpuis consuat 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 
						</div>
						 

																	 
						<div class="item ">
						 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=86" target="_self" title="Drutick lanaeger "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/11-270x270.jpg" alt="Drutick lanaeger" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('86');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('86');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('86');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='86' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=86" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$64.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=86" target="_self" title="Drutick lanaeger "  >
													Drutick lanaeger 
												</a>
											</h4>
																		
										<div class="caption">
																							<div class="wk_seller_info_container">
													<div class="wk_seller_info_profpic">
												      	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=18"><img src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/marketplace/avatar3-150x150-80x80.png" alt="david jame"></a>
												    </div>
												    <div class="wk_seller_info_box">
												    	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=18" class="text-bold">david jame</a>
												    	<div class="local">From: <span class="text-bold">United States</span></div>
												    	<div class="total-products">Total Products: <span class="text-bold">9</span></div>
												    	<div class="wk_seller_info_rating">
												    																        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        													        <span>0 / 5</span> ( 0 )
												    	</div>
												    </div>
												</div>
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=52" target="_self" title="Ercitation incididunt "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/12-270x270.jpg" alt="Ercitation incididunt" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('52');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('52');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('52');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='52' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=52" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$45.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=52" target="_self" title="Ercitation incididunt "  >
													Ercitation incididunt 
												</a>
											</h4>
																		
										<div class="caption">
																							<div class="wk_seller_info_container">
													<div class="wk_seller_info_profpic">
												      	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=18"><img src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/marketplace/avatar3-150x150-80x80.png" alt="david jame"></a>
												    </div>
												    <div class="wk_seller_info_box">
												    	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=18" class="text-bold">david jame</a>
												    	<div class="local">From: <span class="text-bold">United States</span></div>
												    	<div class="total-products">Total Products: <span class="text-bold">9</span></div>
												    	<div class="wk_seller_info_rating">
												    																        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        													        <span>0 / 5</span> ( 0 )
												    	</div>
												    </div>
												</div>
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=81" target="_self" title="Falcatra ground "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/13-270x270.jpg" alt="Falcatra ground" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('81');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('81');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('81');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='81' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=81" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$52.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=81" target="_self" title="Falcatra ground "  >
													Falcatra ground 
												</a>
											</h4>
																		
										<div class="caption">
																							<div class="wk_seller_info_container">
													<div class="wk_seller_info_profpic">
												      	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=18"><img src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/marketplace/avatar3-150x150-80x80.png" alt="david jame"></a>
												    </div>
												    <div class="wk_seller_info_box">
												    	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=18" class="text-bold">david jame</a>
												    	<div class="local">From: <span class="text-bold">United States</span></div>
												    	<div class="total-products">Total Products: <span class="text-bold">9</span></div>
												    	<div class="wk_seller_info_rating">
												    																        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        													        <span>0 / 5</span> ( 0 )
												    	</div>
												    </div>
												</div>
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=99" target="_self" title="Fatback picanha "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/15-270x270.jpg" alt="Fatback picanha" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('99');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('99');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('99');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='99' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=99" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$46.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=99" target="_self" title="Fatback picanha "  >
													Fatback picanha 
												</a>
											</h4>
																		
										<div class="caption">
																							<div class="wk_seller_info_container">
													<div class="wk_seller_info_profpic">
												      	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=18"><img src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/marketplace/avatar3-150x150-80x80.png" alt="david jame"></a>
												    </div>
												    <div class="wk_seller_info_box">
												    	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=18" class="text-bold">david jame</a>
												    	<div class="local">From: <span class="text-bold">United States</span></div>
												    	<div class="total-products">Total Products: <span class="text-bold">9</span></div>
												    	<div class="wk_seller_info_rating">
												    																        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        													        <span>0 / 5</span> ( 0 )
												    	</div>
												    </div>
												</div>
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 
						</div>
						 

																	 
						<div class="item ">
						 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=51" target="_self" title="Ground round enim "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/2-270x270.jpg" alt="Ground round enim" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('51');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('51');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('51');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='51' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=51" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														 
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
													 	 
																																									
														 
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
													 	 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$76.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=51" target="_self" title="Ground round enim "  >
													Ground round enim 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=82" target="_self" title="Hofficia chicken "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/3-270x270.jpg" alt="Hofficia chicken" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('82');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('82');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('82');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='82' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=82" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$100.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=82" target="_self" title="Hofficia chicken "  >
													Hofficia chicken 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=42" target="_self" title="Incididunt picanha "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/4-270x270.jpg" alt="Incididunt picanha" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('42');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('42');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('42');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='42' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=42" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$100.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=42" target="_self" title="Incididunt picanha "  >
													Incididunt picanha 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=66" target="_self" title="Jalapeno dolore "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/5-270x270.jpg" alt="Jalapeno dolore" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('66');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('66');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('66');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='66' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=66" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$100.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=66" target="_self" title="Jalapeno dolore "  >
													Jalapeno dolore 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 
						</div>
						 

																	 
						<div class="item ">
						 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=85" target="_self" title="Lastrami "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/6-270x270.jpg" alt="Lastrami" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('85');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('85');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('85');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='85' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=85" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$56.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=85" target="_self" title="Lastrami "  >
													Lastrami 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=95" target="_self" title="Lommodo quiutvenia "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/7-270x270.jpg" alt="Lommodo quiutvenia" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('95');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('95');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('95');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='95' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=95" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$59.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=95" target="_self" title="Lommodo quiutvenia "  >
													Lommodo quiutvenia 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=91" target="_self" title="Mapicola incididuv "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/8-270x270.jpg" alt="Mapicola incididuv" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('91');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('91');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('91');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='91' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=91" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														 
															<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
													 	 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$102.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=91" target="_self" title="Mapicola incididuv "  >
													Mapicola incididuv 
												</a>
											</h4>
																		
										<div class="caption">
																							<div class="wk_seller_info_container">
													<div class="wk_seller_info_profpic">
												      	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=21"><img src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/marketplace/ava5-80x80.png" alt="Jenny Lauren"></a>
												    </div>
												    <div class="wk_seller_info_box">
												    	<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=customerpartner/profile&id=21" class="text-bold">Jenny Lauren</a>
												    	<div class="local">From: <span class="text-bold">Canada</span></div>
												    	<div class="total-products">Total Products: <span class="text-bold">8</span></div>
												    	<div class="wk_seller_info_rating">
												    																        														        	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        														        														        	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
														        													        													        <span>5 / 5</span> ( 1 )
												    	</div>
												    </div>
												</div>
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 

																	 

							<div class="product-layout product-grid style1 ">
								<div class="product-item-container">
									<div class="left-block">									
										<div class="product-image-container 	">
											<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=104" target="_self" title="Ninim spareri magna aliqua "  >
																									<img data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/image/cache/catalog/demo/product/index2/19-270x270.jpg" alt="Ninim spareri magna aliqua" class="lazyload">
																							</a>						
										</div>
										<div class="box-label">
											 

											 											
										</div>
										 
											<div class="button-group so-quickview cartinfo--left">
												 
												<button type="button" class="addToCart btn-button" title="اضافة للسلة" onclick="cart.add('104');"><i class="fa fa-shopping-basket"></i>
													 
													<span>اضافة للسلة </span>
													 
												</button>
												 
												 
												<button type="button" class="wishlist btn-button" title="إضافة لرغباتي" onclick="wishlist.add('104');"><i class="fa fa-heart"></i><span>إضافة لرغباتي</span></button>
												 
												 
												<button type="button" class="compare btn-button" title="اضافة للمقارنة" onclick="compare.add('104');"><i class="fa fa-refresh"></i><span>اضافة للمقارنة</span></button>
												 

												<a class="hidden" data-product='104' href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=104" target="_self" ></a>
												
											</div>
										 
																	
									</div>

									<div class="right-block">
																																	<div class="rating">
																											
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																																									
														   
															<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
														 
																											 
												</div>
												
													

										 
											<div  class="price">
												 
													<span class="price-new">
														$96.00 
													</span>
												 
												
											</div>
										 

										 
											<h4>
												<a href="https://opencart.opencartworks.com/themes/so_emarket/webkul_marketplace/index.php?route=product/product&amp;product_id=104" target="_self" title="Ninim spareri magna aliqua "  >
													Ninim spareri magna aliqua 
												</a>
											</h4>
																		
										<div class="caption">
																																																
											 
																						
										</div>
										
									</div>

									
					
								</div>
								<!-- End item-wrap-inner -->
							</div>
							<!-- End item-wrap -->

						 
						</div>
						 

						 
				</div>
				<!--End extraslider-inner -->

				<script type="text/javascript">
				//<![CDATA[
				jQuery(document).ready(function ($) {
					(function (element) {
						var $element = $(element),
								$extraslider = $(".extraslider-inner", $element),
								_delay = 500 ,
								_duration = 800 ,
								_effect = 'none ';

						$extraslider.on("initialized.owl.carousel2", function () {
							var $item_active = $(".owl2-item.active", $element);
							if ($item_active.length > 1 && _effect != "none") {
								_getAnimate($item_active);
							}
							else {
								var $item = $(".owl2-item", $element);
								$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
							}
							
							 
								$(".owl2-controls", $element).insertBefore($extraslider);
								$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
							
						});

						$extraslider.owlCarousel2({
							rtl: true,
							margin: 30,
							slideBy: 1,
							autoplay: 0,
							autoplayHoverPause: 0,
							autoplayTimeout: 0 ,
							autoplaySpeed: 1000 ,
							startPosition: 0 ,
							mouseDrag: 1,
							touchDrag: 1 ,
							autoWidth: false,
							responsive: {
								0: 	{ items: 1 } ,
								480: { items: 2 },
								768: { items: 3 },
								992: { items: 4 },
								1200: {items: 4}
							},
							dotClass: "owl2-dot",
							dotsClass: "owl2-dots",
							dots: false ,
							dotsSpeed:500 ,
							nav: false ,
							loop: false ,
							navSpeed: 500 ,
							navText: ["&#171 ", "&#187 "],
							navClass: ["owl2-prev", "owl2-next"]

						});

						$extraslider.on("translate.owl.carousel2", function (e) {
				        	 
				        	var $item_active = $(".owl2-item.active", $element);
				        	_UngetAnimate($item_active);
				        	_getAnimate($item_active);
				        });
				        $extraslider.on("translated.owl.carousel2", function (e) {
				        	 
				        	var $item_active = $(".owl2-item.active", $element);
				        	var $item = $(".owl2-item", $element);
				        	_UngetAnimate($item);
				        	if ($item_active.length > 1 && _effect != "none") {
				        		_getAnimate($item_active);
				        	} else {
				        		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
				        	}
				        });
				        function _getAnimate($el) {
				        	if (_effect == "none") return;
				        	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
				        	$extraslider.removeClass("extra-animate");
				        	$el.each(function (i) {
				        		var $_el = $(this);
				        		var i= i + 1;
				        		$(this).css({
				        			"-webkit-animation": _effect + " " + _duration + "ms ease both",
				        			"-moz-animation": _effect + " " + _duration + "ms ease both",
				        			"-o-animation": _effect + " " + _duration + "ms ease both",
				        			"animation": _effect + " " + _duration + "ms ease both",
				        			"-webkit-animation-delay": +i * _delay + "ms",
				        			"-moz-animation-delay": +i * _delay + "ms",
				        			"-o-animation-delay": +i * _delay + "ms",
				        			"animation-delay": +i * _delay + "ms",
				        			
				        		}).animate({
				        			
				        		});
				        		if (i == $el.size() - 1) {
				        			$extraslider.addClass("extra-animate");
				        		}
				        	});
				        }
				        function _UngetAnimate($el) {
				        	$el.each(function (i) {
				        		$(this).css({
				        			"animation": "",
				        			"-webkit-animation": "",
				        			"-moz-animation": "",
				        			"-o-animation": "",
				        		});
				        	});
				        } 
					})("#so_extra_slider_4046966031591626292 ");
				});
				//]]>
			</script>

			</div>
			
	</div> 
	
</div>
																						
													</div>			
							
				</div>
			</div>

				</div>

	
</div>



@endsection
