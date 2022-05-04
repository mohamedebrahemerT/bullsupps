    @extends('forentend4.index')



@section('content')

        

   @push('js')



        <script type="text/javascript">

           $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });

          $(document).on('click','#button-checkout',function()

  {

                  alert('alymarket');

  }

        </script>







   <script type="text/javascript">



      $(document).on('click','.product-section-thumbnail2',function(){




                      var text =$(this).text();

               sessionStorage.setItem("old", text);



            var old = sessionStorage.getItem("old");


  

                        $('.bbb').css('border-color', '#ddd');



    $('a.thumbnail.active').css('border-color', 'red');

                        



              text=text.toString();    

        $.ajax({



            url:"{{ url('changePriceDependOncolors') }}",



            method:"POST",



           data :{



            _token:'{{ csrf_token() }}',



            id:text,







           },



            dataType:"html",



            beforeSend:function(){



            },



            success:function(data)



            {

               
            
            
       $('.size_and_weight_cc').html(data);
           

             



            }



        });



          $.ajax({



            url:"{{ url('changePriceDependOncolors2') }}",



            method:"POST",



           data :{



            _token:'{{ csrf_token() }}',



            id:text,







           },



            dataType:"json",



            beforeSend:function(){



            },



            success:function(data)



            {

               
            
 
            
               $('#zzzzzzzzzzzzz').addClass('hidden');
             
                   document.getElementById("zzzzzzzzzzzzz2").style.display = "block"; 



             $('.cart_sucess').html(data.success+" {{trans('admin.pound')}}");




 



            

             $('.price_offer').html(data.price_offer);



             $('.content_name_ar').html(data.content_name_ar);



             $('.admin_id').html(data.admin_id);



             $('.alymarketcode').html(data.alymarketcode);



             $('.department_id').html(data.department_id);



                  $('#zzzzzzzzzzzzz').addClass('hidden');

             

             $('.price_size').html(data.colorprice +"{{trans('admin.pound')}}");

                 

                   document.getElementById("ccccccc").style.display = "block"; 


             $('.price_size').html(data.colorprice);





                  $('.price').val(data.success);



                  $('.sizes').val(data.sizeType);

                     

                       




             



            }



        });




             return false;



    



                    



                     



                    });



  </script>







<style type="text/css">


img
{
    max-width: 100%;
}
.panel-default > .panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #fff;
}

  a.thumbnail:hover {

    border-color:   blue !important;

}

 
@media(max-width:992px){
 .wrapper{
  width:100%;
} 
}
.panel-heading {
  padding: 0;
    border:0;
}
.panel-title>a, .panel-title>a:active{
    display:block;
    padding:15px;
  color:#555;
  font-size:16px;
  font-weight:bold;
    text-transform:uppercase;
    letter-spacing:1px;
  word-spacing:3px;
    text-decoration:none;
}
 
.panel-heading.active a:before {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    transform: rotate(180deg);
} 

</style>



   <script type="text/javascript">

      $(document).on('click','#sizes',function(){







                      var text =$(this).text();







              text=text.toString();   







               $(".backgroundmenucard").removeClass("backgroundmenucard");



     $(this).addClass("backgroundmenucard");



                 $('.cccc').css('border-color', '#ddd');



    $('a.thumbnail.active').css('border-color', 'red');



var text = parseInt(text, 10); 



      



        $.ajax({



            url:"{{ url('changePriceDependOnsize') }}",



            method:"POST",



           data :{



            _token:'{{ csrf_token() }}',



            id:text,







           },



            dataType:"json",



            beforeSend:function(){



                      



                         $('.cc').addClass('hidden');



                         $('.CF').addClass('hidden');











            }, 



            success:function(data)



            {



               $('#zzzzzzzzzzzzz').addClass('hidden');
             
                   document.getElementById("zzzzzzzzzzzzz2").style.display = "block"; 



             $('.cart_sucess').html(data.success+" {{trans('admin.pound')}}");





            



             $('.productName').html(data.productName);



        



            

             $('.price_offer').html(data.price_offer);



             $('.content_name_ar').html(data.content_name_ar);



             $('.admin_id').html(data.admin_id);



             $('.alymarketcode').html(data.alymarketcode);



             $('.department_id').html(data.department_id);



                  $('#zzzzzzzzzzzzz').addClass('hidden');

             

             $('.price_size').html(data.success +"{{trans('admin.pound')}}");

                 

                   document.getElementById("ccccccc").style.display = "block"; 


             $('.price_size').html(data.success);





                  $('.price').val(data.success);



                  $('.sizes').val(data.sizeType);

                     

                       





            }



        });



             return false;



    



                    



                     



                    });



  </script>























<style type="text/css">

  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-info

  {

  margin-right: 130px;

  }



  .content-aside .product-simple .so-extraslider .extraslider-inner .item .item-inner .item-image {

  width: 120px;

  float: right;

}



a.thumbnail.active, a.thumbnail:focus, a.thumbnail:hover {

    border-color: red;

}



</style>





   <script type="text/javascript">

             



      $(document).on('click','#switchToSaveForLaterHome',function(){



                      var tr = $(this).closest('tr');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });

                  



                      var text =$(this).text();



              text=text.toString();



      

         

            

        $.ajax({

            url:"{{ url('switchToSaveForLaterHome') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

                id:'{{$product->id}}',



           },

            dataType:"json",

            beforeSend:function(){

                      $('.cart_sucess').html('');

                         $('.cc').addClass('hidden');

            },

            success:function(data)

            {

             







             $('.cart_sucess').html(data.success);

             $('.productName').html(data.productName);

             $('.productimage').html(data.productimage);

             $('.productprice').html(data.productprice);

             $('.price_offer').html(data.price_offer);

             $('.content_name_ar').html(data.content_name_ar);

             $('.admin_id').html(data.admin_id);

             $('.alymarketcode').html(data.alymarketcode);

             $('.department_id').html(data.department_id);

                  

  $('#previewModal').modal('show'); 

        $('#previewModal .modal-body').load('index.php?route=extension/soconfig/cart/info&product_id='+ 75);





               $("#control-qid13228").click();  



            }

        });

             return false;

    

                    

                     

                    });

  </script>





 <script type="text/javascript">

             

  





      $(document).on('click','#button-cart',function(){



                      var tr = $(this).closest('tr');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });

                  



                      var text =$(this).text();



              text=text.toString();



      

         

            

        $.ajax({

            url:"{{url('/')}}/addToCart",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            id:'{{$product->id}}',



           },

            dataType:"json",

            beforeSend:function(){

                      $('.cart_sucess').html('');

                         $('.cc').addClass('hidden');

            },

            success:function(data)

            {

      

             $('.cart_sucess').html(data.success);

             $('.productName').html(data.productName);

          

             $('.content_name_ar').html(data.content_name_ar);

             $('.admin_id').html(data.admin_id);

             $('.alymarketcode').html(data.alymarketcode);

             $('.department_id').html(data.department_id);

             $('.qty').html(data.qty);

 





  $('#previewModal').modal('show'); 

        $('#previewModal .modal-body').load('index.php?route=extension/soconfig/cart/info&product_id='+ 75);





               $("#control-qid13228").click();  



            }

        });

             return false;

    

                    

                     

                    });

  </script>







 





</style>



@endpush

 


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
        <aside class="sidebar bg-black">
            <div class="toggle">
                <a href="{{url('/')}}/#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                    <span class="bg-darkgray"></span>
                </a>

                <span class="bag-label">Your Cart</span>
            </div>
            <div class="side-inner">

                <div class="cart_box cart_right dropdown-menu-right">
                    <ul class="cart_list">
                        <li>
                            <a href="{{url('/')}}/#" class="item_remove"><i class="ion-close"></i></a>
                            <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/products/pr-01.png" alt="cart_thumb1"></a>Variable product 001
                            <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">AED</span></span>78.00</span>
                        </li>

                        <li>
                            <a href="{{url('/')}}/#" class="item_remove"><i class="ion-close"></i></a>
                            <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/products/pr-02.png" alt="cart_thumb2"></a>Ornare sed consequat
                            <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">AED</span></span>81.00</span>
                        </li>
                        <li>
                            <a href="{{url('/')}}/#" class="item_remove"><i class="ion-close"></i></a>
                            <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/products/pr-02.png" alt="cart_thumb2"></a>Ornare sed consequat
                            <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">AED</span></span>81.00</span>
                        </li>
                        <li>
                            <a href="{{url('/')}}/#" class="item_remove"><i class="ion-close"></i></a>
                            <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/products/pr-02.png" alt="cart_thumb2"></a>Ornare sed consequat
                            <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">AED</span></span>81.00</span>
                        </li>
                    </ul>
                    <div class="cart_footer">
                        <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">AED</span></span>159.00</p>
                        <p class="cart_buttons"><a href="{{url('/')}}/#" class="btn btn-secondary view-cart">View Cart</a><a href="{{url('/')}}/#" class="btn btn-primary checkout">Checkout</a></p>
                        <p class="cart_buttons"><a href="{{url('/')}}/#" class="btn btn-primary btn-block">Continue Shopping</a></p>

                    </div>

                </div>

            </div>

        </aside>
        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                                <div class="product-image">

                                    <div class="product_img_box">
        <img id="product_img" src="{{Storage::url($product->photo)}}"data-zoom-image="{{Storage::url($product->photo)}}" alt="product_img1"   />
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
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                                <span class="rating_num"><a href="{{url('/')}}/">(21)</a></span>
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
                   <span>
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
                                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                                <input type="button" value="+" class="plus">
                                            </div>
                                        </div>
                                        <div class="cart_btn">
                                            <a href="{{url('/')}}/#" class="cart js-cart">

                                                <button class="btn btn-primary btn-lg btn-addtocart cart js-cart " type="button">Add to cart</button>
                                                <a class="add_wishlist" href="{{url('/')}}/#"><i class="icon-heart"></i></a>
                                        </div>

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
      @foreach(App\product::
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
                                                    <div class="product_rate" style="width:68%"></div>
                                                </div>
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
                                    <!--a href="{{url('/')}}/#">General</a>
                                    <a href="{{url('/')}}/#">Design</a>
                                    <a href="{{url('/')}}/#">jQuery</a>
                                    <a href="{{url('/')}}/#">Branding</a>
                                    <a href="{{url('/')}}/#">Modern</a>
                                    <a href="{{url('/')}}/#">Blog</a>
                                    <a href="{{url('/')}}/#">Quotes</a>
                                    <a href="{{url('/')}}/#">Advertisement</a -->
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
                            <h5 class="product_tab_title">Reviews (2)</h5>
                            <div class="col-lg-6">
                                <ul class="list_none comment_list mt-4">
                                    <li>
                                        <div class="comment_img">
                                            <img src="{{url('/')}}/assets/images/user1.jpg" alt="user1" />
                                        </div>
                                        <div class="comment_block">
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                            </div>
                                            <p class="customer_meta">
                                                <span class="review_author">Alea Brooks</span>
                                                <span class="comment-date">March 5, 2018</span>
                                            </p>
                                            <div class="description">
                                                <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list_none comment_list mt-4">
                                    <li>
                                        <div class="comment_img">
                                            <img src="{{url('/')}}/assets/images/user1.jpg" alt="user1" />
                                        </div>
                                        <div class="comment_block">
                                            <div class="rating_wrap">
                                                <div class="rating">
                                                    <div class="product_rate" style="width:80%"></div>
                                                </div>
                                            </div>
                                            <p class="customer_meta">
                                                <span class="review_author">Grace Wong</span>
                                                <span class="comment-date">June 17, 2018</span>
                                            </p>
                                            <div class="description">
                                                <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="review_form field_form">
                                    <h5>Add a review</h5>
                                    <form class="row mt-3">
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
                                            <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                                        </div>
                                        <div class="form-group col-md-6 mb-3">
                                            <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
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
                                                            <li class="add-to-cart"><a href="{{url('/')}}/#" class="cart js-cart"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                            <li><a href="{{url('/')}}/shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
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
                                                            <div class="rating_wrap pt-2">
                                                                <div class="rating">
                                                                    <div class="product_rate" style="width:68%"></div>
                                                                </div>
                                                                <span class="rating_num">(15)</span>
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

