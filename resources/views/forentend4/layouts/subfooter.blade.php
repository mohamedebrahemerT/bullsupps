

   <!-- Footer Start -->
    <footer class="bg_light_gray mt-5">

        <div class="footer_top small_pt pb_20">
            <!-- START SECTION SUBSCRIBE NEWSLETTER -->


            <div class="col-xl-9 col-lg-10 col-md-10 col-sm-12 bg_dark small_pt small_pb p-5 rounded-newsbox">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-md-3">

                        <div class="newsletter_text text_white">
                            <h3><img src="{{url('/')}}/assets/images/newsletter_icon.svg" alt="news letter icon"> Join Our Newsletter Now</h3>
                            <p>Subscribe to our newsletter, so that you can be the first to know about new offers and promotions. </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="newsletter_form2 rounded_input">
                            <form>
                                <input type="text" required="" class="form-control" placeholder="Enter Email Address">
                                <button type="submit" class="btn newsletter btn-dark btn-radius" name="submit" value="Submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <div class="custom-container">
            <div class="row">
                <!-- <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/footerlogo.svg" alt="logo" /></a>
                        </div>
                         <p class="mb-3 d-flex justify-content-center">If you are going to use of Lorem Ipsum need to be sure there isn't anything hidden of text</p> 
                        <ul class="contact_info">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>123 Street, Old Trafford, NewYork, USA</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="{{url('/')}}/mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+ 457 789 789 65</p>
                            </li>
                        </ul>
                    </div>
                </div> -->
                @foreach(App\Department::where('parent' ,null)->get() as $key =>  $Department)

                <div class="col-lg-2 col-md-4 col-sm-6 ">
                    <div class="widget">
                        <h6 class="widget_title">
                            @if(session('lang') == 'ar')
 {{$subDepartment->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$Department->dep_name_en}}
 @else
 {{$Department->dep_name_en}}
      @endif
                        </h6>
                        <ul class="widget_links">
                              @foreach(App\Department::where('parent' ,$Department->id)->take(5)->get() as $key =>  $subsubDepartment)
                            <li><a href="{{url('/')}}/shop?id={{$subsubDepartment->id}}">
                                @if(session('lang') == 'ar')
 {{$subsubDepartment->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$subsubDepartment->dep_name_en}}
 @else
 {{$subsubDepartment->dep_name_en}}
      @endif
                            </a></li>
        @endforeach
                            
                        </ul>
                    </div>
                </div>
        @endforeach

                
               
                

              

                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Promotions</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/')}}/my-profile">My Account</a></li>
                            <li><a href="{{url('/')}}/#">Discount</a></li>
                            <li><a href="{{url('/')}}/my-profile">Returns</a></li>
         <li><a href="{{url('/')}}/my-profile">Orders History</a></li>
                            <li><a href="{{url('/')}}/tracking-order">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Offers</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/')}}/#">My Account</a></li>
                            <li><a href="{{url('/')}}/#">Discount</a></li>
                            <li><a href="{{url('/')}}/#">Returns</a></li>
                            <li><a href="{{url('/')}}/#">Orders History</a></li>
                            <li><a href="{{url('/')}}/#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/')}}/#">My Account</a></li>
                            <li><a href="{{url('/')}}/#">Discount</a></li>
                            <li><a href="{{url('/')}}/#">Returns</a></li>
                            <li><a href="{{url('/')}}/#">Orders History</a></li>
                            <li><a href="{{url('/')}}/#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Promotions</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/')}}/#">My Account</a></li>
                            <li><a href="{{url('/')}}/#">Discount</a></li>
                            <li><a href="{{url('/')}}/#">Returns</a></li>
                            <li><a href="{{url('/')}}/#">Orders History</a></li>
                            <li><a href="{{url('/')}}/#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Offers</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/')}}/#">My Account</a></li>
                            <li><a href="{{url('/')}}/#">Discount</a></li>
                            <li><a href="{{url('/')}}/#">Returns</a></li>
                            <li><a href="{{url('/')}}/#">Orders History</a></li>
                            <li><a href="{{url('/')}}/#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/')}}/#">My Account</a></li>
                            <li><a href="{{url('/')}}/#">Discount</a></li>
                            <li><a href="{{url('/')}}/#">Returns</a></li>
                            <li><a href="{{url('/')}}/#">Orders History</a></li>
                            <li><a href="{{url('/')}}/#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="bottom_footer bg-white mt-5">
            <div class="custom-container">
                <div class="row text-lg-end">

                    <div class="col-lg-4 order-lg-first">
                        <div class="widget mb-lg-0">
                            <ul class="social_icons text-center text-lg-start">





                        <li>
    <a href="{{settings()->facebooklink}}" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                <li>
                <a href="{{settings()->twitterlink}}" class="sc_twitter"><i class="ion-social-twitter"></i></a>
            </li>
                                <li>
        <a href="{{settings()->gmaillink}}" class="sc_google"><i class="ion-social-googleplus"></i></a></li>

                                <li>
        <a href="{{settings()->GmailLink}}" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>

                                <li><a href="{{settings()->instgramlink}}" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 widget mb-lg-0">
                        <ul class="footer_payment text-center align-items-center">
                            <li>
                                <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/amex-black-v2.svg" alt="visa"></a>
                            </li>
                            <li>
                                <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/cash-black.svg" alt="discover"></a>
                            </li>
                            <li>
                                <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/visa-black.svg" alt="master_card"></a>
                            </li>
                            <li>
                                <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/mastercard-black.svg" alt="paypal"></a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-4 order-lg-last">
                        <div class="widget mb-lg-0">
                            <ul class="terms-ul text-center align-items-center">
                                <li><a href="{{url('/')}}/term-condition" class="">Terms and Conditions </a></li>
                                <li><a href="{{url('/')}}/Privacy-Policy" class="">Privacy Policy </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_footer-dark bg-dark">
            <div class="custom-container">
                <div class="row text-lg-end">
                    <div class="col-lg-12">
                        <p class="mb-lg-0 text-center">© 2021 All Rights Reserved by Bullsupps.com</p>
                    </div>



                </div>
            </div>
        </div>

    </footer>

 




  @foreach(App\Product::get() as  $product)


<!-- Modal -->
<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="padding: 10px;">

           
      
     <div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <div class="product-image">
                    <div class="product_img_box">

                        <img id="product_img" src="{{url('/')}}/{{$product->productzoomphoto}}" data-zoom-image="{{url('/')}}/{{$product->productzoomphoto}}" alt="product_img1" />

                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                        @php
                         $filess=App\filess::where('file_type','productes')->
                where('relation_id',$product->id)->orderBy('id','desc')->get();
                        @endphp

            @foreach($filess as $key => $file)

                        <div class="item">
                            <a href="#" class="product_gallery_item @if($key == 0) active @endif" data-image="{{Storage::url($file->full_file)}}" data-zoom-image="{{Storage::url($file->full_file)}}">
                                <img src="{{Storage::url($file->full_file)}}" alt="product_small_img1" />
                            </a>
                        </div>
                      @endforeach

                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="product_description">
                            <h4 class="product_title"><a href="{{url('/')}}/shop/{{$product->id}}">
                            @if(session('lang') == 'ar')
 {{$product->title_name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->title_name_en}}
 @else
 {{$product->title_name_en}}
      @endif
                        </a></h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product_description">
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

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product_description">
                            <div class="product_price">
                                <ul class="product-meta product_price">
                                    <li>Was: <del>AED {{$product->price }}</del></li>
                                    <li>Now: <span class="price pe-3">AED {{$product->price_offer }}</span> (Inclusive of VAT)</li>
                                    <li>Saving:
                                        <div class="on_sale">
                                            <span>AED {{$product->price - $product->price_offer }} ({{ ratio($product->price,$product->price_offer) }}% Off)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                     <!--span class="cart_sucess"> </span -->
 <form action="{{ url('/') }}/addToCart" method="POST" id="frm{{$product->id}}" >
                             {{ csrf_field() }}

    <input type="hidden" name="id" value="{{$product->id}}">
<input type="hidden" id="attribute_value_ids{{$product->id}}" name="attribute_value_ids" value="">

                                    @php
                $product_variants = DB::table('product_variants')
             ->select('attribute_id')
             ->where('product_id', $product->id)
             ->whereIn('attribute_id',[1,4,6])
             ->groupBy('attribute_id')

             ->get();
                                    @endphp
                                 

                 @foreach($product_variants  as $attribut)

                                    <div class="col-12 mt-3">
                                        <div class="product_description">
                                            <div class="pr_switch_wrap">
        <span class="switch_lable">
            @php
           if(App\Models\attributes::where('id',$attribut->attribute_id)->first())
           {
            $attribute_ar =App\Models\attributes::where('id',$attribut->attribute_id)->first()->name_ar;
         $attribute_en=App\Models\attributes::where('id',$attribut->attribute_id)->first()->name_en;

           }
           else
           {
        $attribute_ar ='';
         $attribute_en='';


           }
            @endphp
            @if($attribut->attribute_id)

  @if(session('lang')=='ar')
{{$attribute_ar }}
@endif
  @if(session('lang')=='en')
{{$attribute_en }} 
@endif



            @else
            no attribut
            @endif


             :
        </span>
       <div class="product_size_switch">
        @foreach(
        App\Models\product_variant::
        where('product_id',$product->id)->
        where('attribute_id',$attribut->attribute_id)->get() as $attribute_value )

    <span data-attribute_value_id="{{ $attribute_value->attribute_value_id}}" 

data-attribute_value-produt-id="{{$product->id}}"
        >
                   {{ $attribute_value->value_en}}


                  
               </span>
                   @endforeach
                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>

       @endforeach


                    <div class="col-12">
                        <div class="product_description">
                            <div class="deliveryinst product_sort_info">
                                <ul>
                                    <li>Order in 3 hrs 24 mins</li>
                                    <li>Free delivery by Tomorrow, Dec 11</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pr_detail">
                    <hr />
                    <div class="cart_extra">
                        <div class="cart-product-quantity">
                            <div class="quantity">
                                <input type="button" value="-" class="minus">
                                <input type="text" name="qty" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            <a href="#" class="cart js-cart">

     <button class="btn btn-primary btn-lg btn-addtocart cart js-cart " id="cartEffect2" type="button" data-produt-id="{{ $product->id }}">
                                    Add to cart
                                </button>

                                  <a  class="add_wishlist" id="add_to_Wishlist" href="javascript:void(0)" data-tip="{{__('Add to Wishlist')}}"><i class="icon-heart"></i>
<span class="hidden">{{ $product->id }}</span>
</a>

   
                                        </div>
                             </form>


                                    </div>
                                    <hr />

                    <div class="product_share">
                        <span>Share:</span>
                        <ul class="social_icons">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                    <div class="modal-footer">
                    
                    
                     
                </div>
            </div>
        </div>
       
    </div>
  </div>
</div>

        @endforeach