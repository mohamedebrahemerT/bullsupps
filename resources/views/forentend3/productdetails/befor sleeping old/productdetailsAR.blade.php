  	<main class="main-content" style="background-color:#f5f5f5">
	<div id="html-section-product-horizontal" class="html-section">

<br>



		          

		          <div style="margin-top:2px;"> </div>



				<div class="product-horizontal-gallery" itemscope="" itemtype="http://schema.org/Product" id="ProductSection" data-section-id="product-horizontal" data-section-type="product-template" data-image-zoom-type="">
					<div class="wrapper">

						<div itemscope="" itemtype="http://schema.org/Product">
						 
						 
						 

							
	<u style="list-style: none; position: absolute;">
								 
							  @foreach($ProductFromSamCats as  $ProductFromSamCat )

								<li>
									   <div class="Recommended">
									<a href="{{url('/')}}/shop/{{$ProductFromSamCat->id}}"> 					   	
                <img src="{{Storage::url($ProductFromSamCat->photo)}}" alt="product"   id="currentImage" height="128" width="125">
                </a>
            </div>
									<a href="{{url('/')}}/shop/{{$ProductFromSamCat->id}}"> 					   	

              <div class="may-like-price">EG {{$ProductFromSamCat->price_offer}} ج.م  </div>
          </a>

								</li>

							  @endforeach


							</u>  


							<div class="grid product-single mainP">

 
 
								<div class="grid__item large--one-half text-center subP" style="width:400px; ">

						 
							 
							 
       <div class="exzoom hidden" id="exzoom">
    <div class="exzoom_img_box">
        <ul class='exzoom_img_ul'>

        		@foreach($filess as $file)
	 
            <li><img src="{{Storage::url($file->full_file)}} "/></li>

 
   @endforeach


    @foreach($product->other_otherDataForSize_R()->take(9)->get() as $i)
            <li><img src="{{url('/')}}/images/{{$i->color_photo}} "/></li>
                 
                    @endforeach
   
          
        </ul>

    </div>
    
    <div class="exzoom_nav"></div>
    <p class="exzoom_btn">
        <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
        <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
    </p>
</div>
								</div>


					<!---------product here------------------------------------->
                	<div class="grid__item product-single__meta--wrapper large--one-half" style="margin-left:309px;direction: rtl;">
									<div class="product-single__meta">
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

                   <h3>
                        @if(session('lang')=='ar')
                                                                                  
{{$product->title_name_ar }}

@endif

  @if(session('lang')=='en')
{{$product->title_name_en }} 
@endif
                   </h3>


									<div style="width:450px; margin-top:-17px;">
              <p>




 @if(session('lang')=='ar')                                                                              
{{ str_limit($product->content_name_ar, $limit =130, $end = '...') }}
@endif

  @if(session('lang')=='en')
{{ str_limit($product->content_name_en, $limit =130, $end = '...') }}
 
@endif
 
 
                      </p>         
                  </div>


											<span class="rating">
												<span class="spr-badge" id="spr_badge_1419644960857" data-rating="0.0">
													<span class="spr-starrating spr-badge-starrating">
														<i class="spr-icon spr-icon-star-empty"></i>
														<i class="spr-icon spr-icon-star-empty"></i>
														<i class="spr-icon spr-icon-star-empty"></i>
														<i class="spr-icon spr-icon-star-empty"></i>
														<i class="spr-icon spr-icon-star-empty"></i>
													</span>
				<span class="spr-badge-caption">{{trans('admin.Noreviews')}}</span>
												</span>
											</span>
											<div class="group-addditionaldata">
												<div class="watching-order">
													<div class="watching-area">
														<div class="watching-icon"></div>
														<div class="watching-count" data-watchingmin="100" data-watchingmax="300">269</div>
														<div class="watching-text">
													{{trans('admin.watching')}}	
													</div>
													</div>

													<!--div class="order-area">
														<div class="order-icon"></div>
														<div class="order-count" data-ordermin="10" data-ordermax="30">20</div>

														<div class="order-text">
														
                                          {{trans('admin.SoldInTheLastHour')}}

													</div >

													</div-->
												</div>

												<!--div class="qty-bar">
													<span class="order-process process" style="width: 78.9474%;"></span>
													<div class="order-text">
														<span class="qty-count" data-qtymin="5" data-qtymax="19">15</span> {{trans('admin.of')}} 20  {{trans('admin.sold')}} 

													</div>
												</div-->


											</div>
											<div class="price_wrapper">
												 

                        <span id="ProductPrice" class="product-single__price on-sale CF" itemprop="price" content="25.0">

                          <span class="money">{{$product->price_offer}} ج.م  </span>
                        </span>



							<span class="product-single__price--wrapper">

													<span id="ComparePrice" class="product-single__price--compare-at">
													<span class="money" style="margin-left:8px;">{{$product->price}}ج.م  </span>

												</span>

                 	

												</span>




								

<span id="ComparePriceA11y" class="visually-hidden">{{trans('admin.SalePrice')}}</span>

												 

<span id="ProductPrice" class="product-single__price on-sale" itemprop="price" content="25.0">

											<span class="money">
												<span class="cart_sucess"> </span>
													</span>
												</span>

                	 

												<div class="product-salelabel ">
													<span class="salelabel-area" style="color:#ff5722; background-color: #ffd839;margin-right:-3px;">-20%</span>
													<span class="salelabel-days">6 {{trans('admin.daysLeft')}}</span>
												</div>
											</div>

											<div class="sku">
		 
				
                  <span style="    color: red;
    letter-spacing: 0;
    font-size: 20px;
    padding-right: 10px;
   
    font-weight: 700;
">{{$product->Wholesaleprice }} <span style="margin-left:-4px">ج.م   </span></span>  <span style="padding: 2px;">{{trans('admin.minimamselloritem')}}  {{trans('admin.pecies')}}</span>

&nbsp; 
<span style="    border: 1px solid red;
        
    border-style: groove;
    padding-right: 8px;
    padding-left: 8px;
}">{{$product->WholesalepriceMinNum}} </span> 
                   

											</div>

											<div class="sku">
			  

	 

	<a href="{{url('/')}}/{{$product->admin_idd->TheNameOftheStore}}_id={{$product->admin_idd->AcountCode}}" >


												<strong>  {{trans('admin.store')}} : </strong> 
                   <span style="margin-left: -15px;
font-weight: 700;
font-size: 15px;
"> {{$product->admin_idd->TheNameOftheStore }} </span>  

                     </a>
             

											</div>

											<div class="collshow">
												<strong>{{trans('admin.Category')}}:  </strong>
							<a href="{{url('/')}}/shop?id={{$product->department_name->id}}"> 
                       <span style="margin-left: -15px;
font-weight: 700;
font-size: 15px;
"> 
												  @if(session('lang')=='ar')
												 {{$product->department_name->dep_name_ar }}
												  @endif
												  @if(session('lang')=='en')
												 {{$product->department_name->dep_name_en }}
												  @endif
												</a>,
                      </span>
											 
											</div>
											 
											<meta itemprop="priceCurrency" content="USD">
											<link itemprop="availability" href="http://schema.org/InStock">
				 
												
      <span> 

        <div style="margin-top:-13px;">   

	<div class="radio-wrapper js product-form__item radio-mode color-option colormode-color">
		<label class="single-option-radio__label" for="ProductSelect-option-1">
														{{trans('admin.color')}}	
													</label>

												 <br>
                          <br>

													<fieldset class="single-option-radio" name="color" id="ProductSelect-option-1">
 

 
            <div class="product-section-images2">   
    @foreach($product->other_otherDataForSize_R()->take(9)->get() as $i)
                    <div class="product-section-thumbnail2">

                    	<a href="" id="colors" aria-expanded="true">
  <span style="display: none;">{{ $i->id }}</span><span>
  	 <img src="{{url('/')}}/images/{{$i->color_photo}}" width="50" height="50" style="border-radius:0px;">
  </span></a>

               
                    </div>
                    @endforeach
              
            </div>

              <div class="product-section-images2">   
    @foreach($product->other_otherDataForSize_R()->groupBy('color_photo')->take(6)->get() as $i)
                    <div class="product-section-thumbnail2">

                      <a href="" id="colors" aria-expanded="true">
  <span style="display: none;">{{ $i->id }}</span><span>
     <img src="{{url('/')}}/images/{{$i->color_photo}}" width="50" height="50" style="border-radius:0px;">
  </span></a>

               
                    </div>
                    @endforeach
              
            </div>





												</div>

</div>

<div style="margin-top:-13px;"> 

                        <div class="radio-wrapper js product-form__item radio-mode ">
                          <label class="single-option-radio__label" for="ProductSelect-option-0">
                          {{trans('admin.sizes')}}  
                          </label>
                          <br>
                          <br>

                          <fieldset class="single-option-radio" name="title" id="ProductSelect-option-0">
               

  <fieldset class="single-option-radio" name="title" id="ProductSelect-option-0" style="border: 0;
padding-top: 0;
position: relative;
background-color: #f5f5f5;
margin-left: -57px;">

                       
          @foreach($product->other_otherDataForSize_R()->get() as $data)


      
            
          <a href="" id="sizes" aria-expanded="true" class="menucardmenu">
  <span style="display: none;">{{ $data->id }}</span> {{$data->sizeType}}</a> 

 
     

                              @endforeach
                            
                          </fieldset>
                         
                        </div>
</div>

					<form action="{{url('/')}}/addCartSingleProduct" method="post" method="post" enctype="multipart/form-data">   
						@csrf
												 
												<div class="product-single__quantity">
													<label for="Quantity" class="product-single__quantity-label js-quantity-selector">
														{{trans('admin.Quantity')}}
													
												</label>
													<div class="js-qty">
														<button type="button" class="js-qty__adjust js-qty__adjust--minus icon-fallback-text" data-id="" data-qty="0" aria-label="Reduce item quantity by one">
															<span class="icon icon-minus" aria-hidden="true"></span>
															<span class="fallback-text" aria-hidden="true">−</span>
														</button>
														<input type="text" class="js-qty__num" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="quantity" id="Quantity" name="Quantity">
														<button type="button" class="js-qty__adjust js-qty__adjust--plus icon-fallback-text" data-id="" data-qty="11" aria-label="Increase item quantity by one">
															<span class="icon icon-plus" aria-hidden="true"></span>
															<span class="fallback-text" aria-hidden="true">+</span>
														</button>


          
													</div>

                          <label style="margin-top: 5px;
position: absolute;
margin-left: 11px;
">
                            {{trans('admin.conntacttovendor')}}


                           <span> 
                            <a href="">
                            <i class="far fa-comment-dots" style="font-size:25px;color:#eb6625" aria-hidden="true"></i>
                            </a>
                          </span>
                        </label>




												</div>



	<input  type="hidden"   name="price" class="price">
 <input type="hidden"   name="color" class="color">
  <input type="hidden"   name="sizes"   class="sizes">
  <input type="hidden"   name="PID"   value="{{$product->id}}">
  <input type="hidden"   name="SRC" class="SRC">

 
												<div class="group-button">
		    	<div class="product-single__buynow">
			 

                 
													 

                    <a class="btn btn-primary" id="switchToSaveForLaterHome">
                <span class="BuynowText"> <i class="fa fa-heart-o" style="color:#fff;font-size:20px;"></i>{{trans('admin.favofrit')}} </span>

                            </a> 

                              <button class="btn btn-primary">
                                <span class="BuynowText"> <i class="fa fa-cart-plus" style="color:#fff;font-size:20px;"></i>{{trans('admin.BuyNow')}}</span>

                            </button> 

                             <button class="btn btn-primary">
                                <span class="BuynowText"> <i class="fa fa-shopping-cart" style="color:#fff;font-size:20px;"></i>{{trans('admin.AddToCart')}}</span>

                            </button> 

              

                         
 
                                    
                   
          
                     
												 

                        

									 
													</div>

													</form>
													<!--div class="product-single__add-to-cart">
                                                
														<button type="submit" name="add" class="btn AddToCart" title="Add this product to Cart">
															<span class="AddToCartText">Add to Cart</span>
														</button>
                                      

													</div-->
													<break></break>
												</div>
										 
											<div class="discount-code">
												<div class="block-element">
							<div class="element-text">
								{{trans('admin.BulkPrice(5items)')}}
							
						</div>
													<div class="element-content">
									<div class="code-cost">
									30%  خصم 

								</div>
														<div class="code-code">2YVFT37F7B77</div>
													</div>
												</div>
												<div class="block-element">
													<div class="element-text">
										{{trans('admin.WeeklyCoupon')}}
													
												</div>
													<div class="element-content">
														<div class="code-cost">10% خصم </div>
														<div class="code-code">J525RTJQV5VB</div>
													</div>
												</div>
												<div class="block-element">
													<div class="element-text">
													{{trans('admin.Shipping')}}
												</div>
													<div class="element-content">
														<div class="code-cost">{{trans('admin.Free')}}</div>
														<div class="code-code">ZK1QZDBG9NVS</div>
													</div>
												</div>
											</div>
											<div class="returnpolicy">
												<div class="block-element">
													<div class="element-text">
                                                       {{trans('admin.ReturnPolicy')}}
													</div>
													<div class="element-content">
														<div class="text">
									{{trans('admin.ReturnPolicy1')}}
															

															<a href="pages/contact-us">
                                                {{trans('admin.Viewdetails')}}
															</a>
														</div>
													</div>
												</div>
												<div class="block-element">
													<div class="element-text">
								 {{trans('admin.SellerGuarantees')}}
													
												</div>
													<div class="element-content">
														<div class="text">
								 {{trans('admin.On-timeDelivery')}}

															
															<span>
								 {{trans('admin.25days')}}

															
														</span>
														</div>
													</div>
												</div>
											</div>
											<div class="payment">
												<div class="block-element">
													<div class="element-text">
								 {{trans('admin.Payment')}}

												 
												</div>
													<div class="element-content">
														<img src="{{url('/')}}/forentend3/assets/images/payment.png" alt="">
													</div>
												</div>
											</div>
											<div class="buyerprotection">
												<div class="block-element">
													<div class="element-content">
														<div class="buyer-heading">
								 {{trans('admin.BuyerProtection')}}

														
													</div>
														<div class="buyer-text1">
															<i class="fa fa-check-square-o" aria-hidden="true"></i>
															<strong>
								 {{trans('admin.FullRefund')}}

															</strong>
															{{trans('admin.FullRefund2')}}
														</div>
														<div class="buyer-text2">
															<i class="fa fa-check-square-o" aria-hidden="true"></i>
															<strong>
															{{trans('admin.FullRefund3')}}

															
														</strong>
												{{trans('admin.FullRefund4')}}

															 
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


							<!----------------end prodcut---------------------------------> 



 
                               	   
							
