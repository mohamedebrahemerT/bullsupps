    @extends('forentend4.index')



@section('content')

        

   @section('javascript')


 <script type="text/javascript">
      $(document).on('click','#cartEffect1',function(){

       


          var frm=$('#frm').serialize() ;
         
            
        $.ajax({
            url:"{{ url('/') }}/addToCart",
            method:"POST",
           data :frm,
            dataType:"json",
            beforeSend:function(){
                      $('.cart_sucess').html('');
            },
            success:function(data)
            {
             
             $('.cart_sucess').html(data.success);  


 


            $('#cartEffect').text("{{__('Data add to cart')}}");
           
             
                $('.cart_count').html(data.count);
               $('.homesubtotal').html(data.total);

             $('.cart_listhide').hide();
             $('.cart_listhide').html('');
                  $('.cart_listhide2').html('');
                   $('.Cartcontent2').html(data.Cartcontent2);
               $('.Cartcontent').html(data.Cartcontent);

               
              
             
   $('.js-menu-toggle').trigger('click');
             

            }
        });
             return false;
    
                    
                     
                    });
  </script>


  <script type="text/javascript">
    $('.product_color_switch span,.product_size_switch span')
    .on("click", function() {
        $(this).siblings(this).removeClass('active').end().addClass('active');

 
 
var arr = [] //create arry
     $(".product_size_switch span.active").each(function() {
  arr.push($(this).attr('data-attribute_value_id')) //push value in array
})

     

  $('input[name="attribute_value_ids"]').val(arr);

  
    });
      
  </script>

  <script type="text/javascript">
      
        /*===================================*
    23. RATING STAR JS
    *===================================*/
    $(document).ready(function() {
        $('.star_rating span').on('click', function() {
            var onStar = parseFloat($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('.star_rating span');
            for (var i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }
            for (i = 0; i < onStar; i++) 
            {
                $(stars[i]).addClass('selected');
            }

  $('input[name="rating"]').val(onStar);


            
        });
    });
  </script>


@endsection

 


  <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- START CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <!-- <h1>Product Detail</h1> -->
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="{{url('/')}}/#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/')}}/#">Pages</a></li>
                            <li class="breadcrumb-item active">Product Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">
 

     

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                                <div class="product-image">

                                    <div class="product_img_box">
        <img id="product_img" src="{{Storage::url($product->photo)}}"data-zoom-image="{{url('/')}}/{{$product->productzoomphoto}}" alt="product_img1"   />
                            <a href="#" class="product_img_zoom" title="Zoom">
                                            <span class="linearicons-zoom-in"></span>
                                        </a>
                                    </div>

                                    <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
            @foreach($filess as $key => $file)

                                        <div class="item">
    <a href="{{url('/')}}/" class="product_gallery_item @if($key == 0) active @endif"
                                             data-image="{{Storage::url($file->full_file)}}" data-zoom-image="{{Storage::url($file->full_file)}}">
                                              
                                                <img src="{{Storage::url($file->full_file)}}" alt="product_small_img1"  />

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
                                            <h4 class="product_title"><a href="{{url('/')}}/shop/{{$product->id }} ">

                                          @if(session('lang')=='ar')

{{$product->title_name_ar }}

@endif

  @if(session('lang')=='en')

{{$product->title_name_en }} 

@endif
                                        </a></h4>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="product_description">
                                            <div class="rating_wrap">
 

                     <div class="rating">
                     @if(rating($id) > 0 and  rating($id) < 1 )
        <div class="product_rate" style="width:10%;"></div>
        @elseif(rating($id) >= 1 and  rating($id) < 1.5)
        <div class="product_rate" style="width:20%;"></div>
          @elseif(rating($id) >= 1.5 and  rating($id) < 2)
        <div class="product_rate" style="width:30%;"></div>
        @elseif(rating($id) >= 2 and  rating($id) < 2.5)
        <div class="product_rate" style="width:40%;"></div>

           @elseif(rating($id) >= 2.5 and  rating($id) < 3)
        <div class="product_rate" style="width:50%;"></div>

        @elseif(rating($id) >= 3 and  rating($id) < 3.5)
        <div class="product_rate" style="width:60%;"></div>

         @elseif(rating($id) >= 3.5 and  rating($id) < 4)
        <div class="product_rate" style="width:70%;"></div>

           @elseif(rating($id) >= 4 and  rating($id) < 4.5)
        <div class="product_rate" style="width:80%;"></div>

         @elseif(rating($id) >= 4.5 and  rating($id) < 5)
        <div class="product_rate" style="width:90%;"></div>

         @elseif(rating($id) >= 5    )
        <div class="product_rate" style="width:100%;"></div>
        @endif


                                                </div>


        <span class="rating_num"><a href="{{url('/')
        }}/">({{ratingcount($id)}})</a></span>
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
                                      <span class="cart_sucess"> </span>
 <form action="{{ url('/') }}/addToCart" method="POST" id="frm" >
                             {{ csrf_field() }}

    <input type="hidden" name="id" value="{{$product->id}}">

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

    <span data-attribute_value_id="{{ $attribute_value->attribute_value_id}}">
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
                                                    <li>Free delivery by Tomorrow,{{ Carbon\Carbon::now()->addDay()->format('d-M-Y') }}</li>
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
                                            <a href="{{url('/')}}/#" class="cart ">

             <button id="cartEffect1" class="btn btn-primary btn-lg btn-addtocart cart  " type="button">Add to cart</button>

             <a  class="add_wishlist" id="add_to_Wishlist" href="javascript:void(0)" data-tip="{{__('Add to Wishlist')}}"><i class="icon-heart"></i>
<span class="hidden">{{ $product->id }}</span>
</a>

   
                                        </div>
<input type="hidden" name="attribute_value_ids" value="">
                             </form>


                                    </div>
                                    <hr />

                                    <div class="product_share">
                                        <span>Share:</span>
                                        <ul class="social_icons">
                                            <li><a href="{{url('/')}}/#"><i class="ion-social-facebook"></i></a></li>
                                            <li><a href="{{url('/')}}/#"><i class="ion-social-twitter"></i></a></li>
                                            <li><a href="{{url('/')}}/#"><i class="ion-social-googleplus"></i></a></li>
                                            <li><a href="{{url('/')}}/#"><i class="ion-social-youtube-outline"></i></a></li>
                                            <li><a href="{{url('/')}}/#"><i class="ion-social-instagram-outline"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-4 mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
                            <div class="widget">
                                <h5 class="widget_title">TOP RELATED</h5>
                                <ul class="widget_recent_post">
      @foreach(App\Product::
      where('status','active')->
      where('department_id',$product->department_id)
      ->InrandomOrder()
      ->take(3)->get() as  $product)

                                    <li>
                                        <div class="post_img">
                                            <a href="{{url('/')}}/shop/{{$product->id}}"><img src="{{Storage::url($product->photo)}}" alt="shop_small1"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6 class="product_title"><a href="{{url('/')}}/shop/{{$product->id}}">  
                @if(session('lang') == 'ar')
 {{$product->title_name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->title_name_en}}
 @else
 {{$product->title_name_en}}
      @endif</a></h6>

                                            <div class="rating_wrap">
 

                     <div class="rating">
                     @if(rating($id) > 0 and  rating($id) < 1 )
        <div class="product_rate" style="width:10%;"></div>
        @elseif(rating($id) >= 1 and  rating($id) < 1.5)
        <div class="product_rate" style="width:20%;"></div>
          @elseif(rating($id) >= 1.5 and  rating($id) < 2)
        <div class="product_rate" style="width:30%;"></div>
        @elseif(rating($id) >= 2 and  rating($id) < 2.5)
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

                                            <div class="product_price"><span class="price">AED {{$product->price_offer }}</span></div>
                                        </div>
                                    </li>
        @endforeach
                                    
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">tags</h5>
                                <div class="tags">
                                    @foreach(App\Color::get() as $tag)
                                    <a href="{{url('/')}}/shop?tag_id={{$tag->id}}">
                                       {{  $tag->name_en}}
                                    </a>
                                    
        @endforeach
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="row">
                    <!--div class="custom-container mt-5 mb-3 border border-radius2 box_shadow1 p-4 ">
                        <div class="row ">
                            <div class="col-12">
                                <div class="table-title">
                                    <h3>Nutrition Info</h3>
                                </div>
                                <table class="table-fill">

                                    <tbody class="table-hover">
                                        <tr>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                            <td class="text-left">Vestibulum ante ipsum, semper at aliquet eu, ultrices eget lectus. </td>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                            <td class="text-left">Vestibulum ante ipsum, semper at aliquet eu, ultrices eget lectus. </td>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                            <td class="text-left">Vestibulum ante ipsum, semper at aliquet eu, ultrices eget lectus. </td>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                            <td class="text-left">Vestibulum ante ipsum, semper at aliquet eu, ultrices eget lectus. </td>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                            <td class="text-left">Vestibulum ante ipsum, semper at aliquet eu, ultrices eget lectus. </td>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                            <td class="text-left">Vestibulum ante ipsum, semper at aliquet eu, ultrices eget lectus. </td>
                                            <td class="text-left">Nullam a dui vel magna.</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div -->

                    <!-- Reviews Start -->
                    <div class="custom-container mb-3 border border-radius2 box_shadow1 p-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="product_tab_title">Product Details</h5>
                                <div class="col-lg-12">
                                      @if(session('lang')=='ar')
{!! $product->content_name_ar !!}
@endif
  @if(session('lang')=='en')
{!! $product->content_name_ar !!} 
@endif
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Reviews Start -->
                    <div class="custom-container mb-3 border border-radius2 box_shadow1 p-4">
                        <div class="row">
         <h5 class="product_tab_title">Reviews 

            ( {{$Reviewscount}}  )</h5>

            @foreach($Reviews as $Review)

                            <div class="col-lg-6">
                                <ul class="list_none comment_list mt-4">

                                    <li>
                                        <div class="comment_img">
                                            <img src="{{url('/')}}/assets/images/user1.jpg" alt="user1" />
                                        </div>
                                        <div class="comment_block">
                                           <div class="rating_wrap">
 

                     <div class="rating">
                     @if(rating($id) > 0 and  rating($id) < 1 )
        <div class="product_rate" style="width:10%;"></div>
        @elseif(rating($id) >= 1 and  rating($id) < 1.5)
        <div class="product_rate" style="width:20%;"></div>
          @elseif(rating($id) >= 1.5 and  rating($id) < 2)
        <div class="product_rate" style="width:30%;"></div>
        @elseif(rating($id) >= 2 and  rating($id) < 2.5)
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
                                            <p class="customer_meta">
                                                <span class="review_author">{{$Review->name}}</span>
                                                <span class="comment-date">{{$Review->created_at}}</span>
                                            </p>
                                            <div class="description">
                                                <p>
                                                   {{$Review->review}} 
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            @endforeach
                            
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="review_form field_form">
                                    <h5>Add a review</h5>
         <form class="row mt-3" method="post" action="{{url('/')}}/Add_review">
            @csrf
                                        <div class="form-group col-12 mb-3">
                                            <div class="star_rating">

                    <span data-value="1"><i class="far fa-star"></i></span>
                     <span data-value="2"><i class="far fa-star"></i></span>
                      <span data-value="3"><i class="far fa-star"></i></span>
                        <span data-value="4"><i class="far fa-star"></i></span>
                 <span data-value="5"><i class="far fa-star"></i></span>

                                            </div>
                                        </div>
                                        <div class="form-group col-12 mb-3">
                                            <textarea required="required" placeholder="Your review *" class="form-control" name="review" rows="4"></textarea>
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <input required="required" placeholder="Enter Name *" class="form-control"
                                             name="name" type="text"
            }
            }
@if(auth()->user())
value="{{ old('email', auth()->user()->name) }}" 
 
                                                 @endif


                                            >
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email" 

                                            @if(auth()->user())
value="{{ old('email', auth()->user()->email) }}" 
                                                 @endif

                                             >

      <input type="hidden" name="product_id" value="{{ $id}}">
      <input type="hidden" name="rating" value="">



 


                                        </div>

                                        <div class="form-group col-12 mb-3">
                                            <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit Review</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Reviews End -->


                    <!-- Related Products Start -->
                    <div class="custom-container mt-4">
                        <div class="row">
                            <div class="col">
                                <div class="col-12">
                                    <div class="heading_s1">
                                        <h3>Releted Products</h3>
                                    </div>
                                    <div class="product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
 @foreach($mightAlsoLikes  as  $product)

                                        <div class="item">
                                            <div class="product">

                                                <div class="product_img2">
                                                    <a href="{{url('/')}}/shop/{{$product->id}}">
                                                        <img src="{{Storage::url($product->photo)}}" class="proimg" alt="product_img2">
                                                    </a>
                                                    <div class="product_action_box">
                                                        <ul class="list_none pr_action_btn">
                                                          
                                                           <li class="add-to-cart">
           

 <a  id="add_to_cart" href="javascript:void(0)" data-tip="{{__('Add To Cart')}}" class="cart ">
  <i class="icon-basket-loaded"></i>
<span class="hidden">{{ $product->id }}</span>

                   </a>


            </li>
                                                           
                                                            <li>
                                                                
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}" >
                <i class="icon-magnifier-add"></i>
            </a>
        </li>

                                                            
                                                            <li><a href="{{url('/')}}/#"><i class="icon-heart"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_info">
                                                    <h5 class="product_title"><a href="{{url('/')}}/shop/{{$product->id}}">
                  @if(session('lang') == 'ar')
 {{$product->title_name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->title_name_en}}
 @else
 {{$product->title_name_en}}
      @endif
                                                    </a></h5>
                                                    <p>
                    @if(session('lang') == 'ar')
 {{$product->BRAND->name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->BRAND->name_en}}
 @else
 {{$product->BRAND->name_en}}
      @endif
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-auto me-auto">
                                                            <div class="product_price">
                 <span class="price xtra">AED {{$product->price_offer }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="product_price">
                           <del>AED {{$product->price }}</del>
                                                                <div class="on_sale">
           <span>{{ ratio($product->price,$product->price_offer) }}% OFF</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-auto me-auto">
                                                             <div class="rating_wrap">
 

                     <div class="rating">
                     @if(rating($id) > 0 and  rating($id) < 1 )
        <div class="product_rate" style="width:10%;"></div>
        @elseif(rating($id) >= 1 and  rating($id) < 1.5)
        <div class="product_rate" style="width:20%;"></div>
          @elseif(rating($id) >= 1.5 and  rating($id) < 2)
        <div class="product_rate" style="width:30%;"></div>
        @elseif(rating($id) >= 2 and  rating($id) < 2.5)
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
        }}/">({{ratingcount($id)}})</a></span>
                                            </div>
                                                        </div>
                                                        <!-- <div class="col-auto">
                                                            <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/Addtocart_BTN.svg" alt="Add to cart"></a>
                                                        </div> -->
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
                    <!-- Related Products End -->
                </div>
                <!-- END SECTION SHOP -->


            </div>
            <!-- END MAIN CONTENT -->
        </div>
    </div>
 



@endsection

