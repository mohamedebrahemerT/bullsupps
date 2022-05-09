   <div class="row shop_container ">

                           
    @if($products->count() > 0 )
    @foreach($products as  $product)
                            <div class="col-md-4 col-6 ">
                                <div class="product">
                                    <div class="product_img2">
                                        <a href="{{url('/')}}/shop/{{$product->id}}">
                                            <img src="{{Storage::url($product->photo)}}" alt="product_img2">
                                        </a>
                                          <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                              
                                                <li class="add-to-cart">
           

 <a  id="add_to_cart" href="javascript:void(0)" data-tip="{{__('Add To Cart')}}" class="cart js-cart">
  <i class="icon-basket-loaded"></i>
<span class="hidden">{{ $product->id }}</span>

                   </a>


            </li>
                                                
                                               <li>
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}" >
                <i class="icon-magnifier-add"></i>
            </a>
        </li>


                                                
                                                <li>
                                                    <a id="add_to_Wishlist" href="javascript:void(0)" data-tip="{{__('Add to Wishlist')}}"><i class="icon-heart"></i>
<span class="hidden">{{ $product->id }}</span>
</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="product_info">
                                        <h6 class="product_title"><a href="{{url('/')}}/shop/{{$product->id}}">
                                          @if(session('lang') == 'ar')
 {{$product->title_name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->title_name_en}}
 @else
 {{$product->title_name_en}}
      @endif
                                    </a></h6>
                                        <div class="product_price">
                 <span class="price">AED {{$product->price_offer }}</span>
                                            <del>AED {{$product->price }}</del>
                                            <div class="on_sale">
                                                <span>{{ ratio($product->price,$product->price_offer) }}% OFF</span>
                                            </div>
                                        </div>
                                         <div class="rating_wrap">
 

                     <div class="rating">
                     @if(rating($product->id) > 0 and  rating($product->id) < 1 )
        <div class="product_rate" style="width:10%;"></div>
        @elseif(rating($product->id) >= 1 and  rating($product->id) < 1.5)
        <div class="product_rate" style="width:20%;"></div>
          @elseif(rating($product->id) >= 1.5 and  rating($product->id) < 2)
        <div class="product_rate" style="width:30%;"></div>
        @elseif(rating($product->id) >= 2 and  rating($product->id) < 2.5)
        <div class="product_rate" style="width:40%;"></div>

           @elseif(rating($product->id) >= 2.5 and  rating($product->id) < 3)
        <div class="product_rate" style="width:50%;"></div>

        @elseif(rating($product->id) >= 3 and  rating($product->id) < 3.5)
        <div class="product_rate" style="width:60%;"></div>

         @elseif(rating($product->id) >= 3.5 and  rating($product->id) < 4)
        <div class="product_rate" style="width:70%;"></div>

           @elseif(rating($product->id) >= 4 and  rating($product->id) < 4.5)
        <div class="product_rate" style="width:80%;"></div>

         @elseif(rating($product->id) >= 4.5 and  rating($product->id) < 5)
        <div class="product_rate" style="width:90%;"></div>

         @elseif(rating($product->id) >= 5    )
        <div class="product_rate" style="width:100%;"></div>
        @endif


                                                </div>


        <span class="rating_num"><a href="{{url('/')
        }}/">({{ratingcount($product->id)}})</a></span>
                                            </div>
                                        <div class="pr_desc">
                                             @if(session('lang')=='ar')
{!! $product->content_name_ar !!}
@endif
  @if(session('lang')=='en')
{!! $product->content_name_ar !!} 
@endif
                                        </div>

                                        <div class="list_product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
  @endforeach

                                   @else
   <img src="{{url('/')}}/assets/images/no-product.png" class="img-fluid">

                                   @endif
                           
                        </div>

                         <div class="row   ">
                            <div class="col-12 ">
                                 {{ $products->links('forentend4.pages.blocks.pagination') }}
                            </div>
                        </div>