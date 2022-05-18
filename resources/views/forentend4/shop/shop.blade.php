@include('forentend4.layouts.header')
@include('forentend4.layouts.navbar')
@include('forentend4.layouts.menue')
@include('forentend4.layouts.message')

 

   <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <!-- <h1>Product Detail</h1> -->
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="{{url('/')}}/#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/')}}/shop">All Categories </a></li>
                            <li class="breadcrumb-item active">
                         {{ $categoryName}}</li>
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
                    <div class="col-lg-9">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="product_header">
                                    <div class="product_header_left">
                                        <div class="custom_select">

                                              

     <select class="form-control form-control-sm" id="sorting" name="sort">
                  <option value="Default">Default sorting</option>
                     <option value="popularity">Sort by popularity</option>
                     <option value="newness">Sort by newness</option>
            <option value="low_high">Sort by price: low to high</option>
             <option value="high_low">Sort by price: high to low</option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="product_header_right">
                                        <div class="products_view">
                                            <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                            <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                        </div>
                                        <div class="custom_select">
                       <select class="form-control form-control-sm" id="Showing" name="Showing">
                                        <option value="">Showing</option>
                                        <option value="9">9</option>
                                        <option value="12">12</option>
                                        <option value="18">18</option>
                                    </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 <span class="shop_Filter"></span>

                        <div class="row shop_container zzzzzzzzzz">

                           
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

                                                       <li>
        <a id="add_to_Wishlist" href="javascript:void(0)" data-tip="{{__('Add to Wishlist')}}"><i class="icon-heart"></i>
<span class="hidden">{{ $product->id }}</span>
</a>
     </li>
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
                        <div class="row  paginationblocks">
                            <div class="col-12 ">
                                 {{ $products->links('forentend4.pages.blocks.pagination') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
                            <div class="widget">
                                <h5 class="widget_title">FILTER BY:</h5>
                                <ul class="widget_categories">
                                     @foreach($categories as $key =>  $DepartmentFILTER)
                                    <li><a href="{{url('/')}}/shop?id={{$DepartmentFILTER->id}}">
                                        <span class="categories_name">
           @if(session('lang') == 'ar')
 {{$DepartmentFILTER->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$DepartmentFILTER->dep_name_en}}
 @else
 {{$DepartmentFILTER->dep_name_en}}
      @endif
                                    </span>
                  <span class="categories_num">

                  ( {{  App\product::where('department_id',$DepartmentFILTER->id)->count()}})


              </span></a></li>
        @endforeach
                                </ul>
                            </div>
                            <br>

            <form method="post" id="Filter_form">  

                @csrf

         

          
                            <div class="widget">
                                <h5 class="widget_title"><a id="Filter_Price" class="btn btn-primary  " type="button">Filter Price</a></h5>

                                <div class="filter_price">
                                    <div id="price_filter" data-min="1" data-max="500" data-min-value="50" data-max-value="300" data-price-sign="AED"></div>
                                    <div class="price_range">
                                        <span>Price: <span id="flt_price"></span></span>

       <input type="hidden" id="price_first" name="price_first">
        <input type="hidden" id="price_second" name="price_second">

            <input type="hidden" name="Brand_ids"  value="">
            <input type="hidden" name="attribute_value_ids_Filter" value="">
            <input type="hidden" name="Showing" value="">
            <input type="hidden" name="sort" value="">
      <input type="hidden" name="department_id" value="{{request('id')}}">


                                    </div>
                                </div>
                            </div>

                              </form>


                            <br>


 <div class="widget">
                                <h5 class="widget_title">Brand</h5>
                                <ul class="list_brand">

    @foreach(App\TradeMark::get() as $Brand)

                                    <li>
                                        <div class="custome-checkbox">
             <input class="form-check-input searchType" type="checkbox" 
             name="Brand_id" id="{{$Brand->id}}" value="{{$Brand->id}}" data-id="{{$Brand->id}}">
                                            <label class="form-check-label" for="{{$Brand->id}}"><span>
                 @if(session('lang') == 'ar')
 {{$Brand->name_ar}}
  @elseif(session('lang') == 'en')
 {{$Brand->name_en}}
 @else
 {{$Brand->name_en}}
      @endif
                                            </span></label>
                                        </div>
                                    </li>
                                   @endforeach
                                    
                                    
                                   
                                </ul>
                            </div>

                        


    @foreach(App\Models\attributes::get() as $attribute)


                            <div class="widget">
             <h5 class="widget_title">{{$attribute->name_en}}</h5>
                                <div class="product_size_switch">
    @foreach(App\Models\attribute_values::where('attribute_id',$attribute->id)->get() as $attribute_value)
             <span data-attribute_value_id="{{$attribute_value->id}}">
                                         @if(session('lang') == 'ar')
 {{$attribute_value->value_ar}}
  @elseif(session('lang') == 'en')
 {{$attribute_value->value_en}}
 @else
 {{$attribute_value->value_en}}
      @endif
                                    </span>
                                   @endforeach
                                     
                                </div>
                            </div>
                                   @endforeach

 



                               

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->



    </div>
    <!-- END MAIN CONTENT -->


@include('forentend4.layouts.subfooter')



  
    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="{{url('/')}}/assets/js/jquery-3.6.0.min.js"></script>
    <!-- jquery-ui -->
    <script src="{{url('/')}}/assets/js/jquery-ui.js"></script>
    <!-- popper min js -->
    <script src="{{url('/')}}/assets/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{url('/')}}/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="{{url('/')}}/assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="{{url('/')}}/assets/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="{{url('/')}}/assets/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="{{url('/')}}/assets/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="{{url('/')}}/assets/js/jquery.countdown.min.js"></script>
    <!-- imagesloaded js -->
    <script src="{{url('/')}}/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="{{url('/')}}/assets/js/isotope.min.js"></script>
    <!-- jquery.dd.min js -->
    <script src="{{url('/')}}/assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="{{url('/')}}/assets/js/slick.min.js"></script>
    <!-- elevatezoom js -->
    <script src="{{url('/')}}/assets/js/jquery.elevatezoom.js"></script>
    <!-- scripts js -->
    <script src="{{url('/')}}/assets/js/scripts.js"></script>
@include('forentend4.layouts.extra-js')
 

 <!--script type="text/javascript">
    $('.product_color_switch span,.product_size_switch span')
    .on("click", function() {
        $(this).siblings(this).removeClass('active').end().addClass('active');

 

     var arr = [] //create arry
     $(".product_size_switch span.active").each(function() {
  arr.push($(this).attr('data-attribute_value_id')) //push value in array
})

     

  $('input[name="attribute_value_ids"]').val(arr);
      var From_data=$('#Filter_form').serialize();


    $.ajax({
            url:'{{ url("/shop_Filter") }}',
            dataType:'html',
            type:'post',
            data:From_data,
            success:function(data)
            {
                $('.shop_Filter').html(data);
                $('.shop_Filter').removeClass('hidden');
                $('.zzzzzzzzzz').addClass('hidden');
                $('.paginationblocks').addClass('hidden');
             
            },

           });

  
    });
      
  </script -->


  <script type="text/javascript">
    $('.searchType').click(function() {

var array = []
    $("input:checkbox[name=Brand_id]:checked").each(function(){
    array.push($(this).val());
}); 

  $('input[name="Brand_ids"]').val(array);

      var From_data=$('#Filter_form').serialize();

      
      
           $.ajax({
            url:'{{ url("/shop_Filter") }}',
            dataType:'html',
            type:'post',
            data:From_data,
            success:function(data)
            {
                $('.shop_Filter').html(data);
                $('.shop_Filter').removeClass('hidden');
                $('.zzzzzzzzzz').addClass('hidden');
                $('.paginationblocks').addClass('hidden');
             
            },

           });

           
      });
      
  </script>


  <script type="text/javascript">

      /*===================================*
    22. PRICE FILTER JS
    *===================================*/
    $('#price_filter').each(function() {
        var $filter_selector = $(this);
        var a = $filter_selector.data("min-value");
        var b = $filter_selector.data("max-value");
        var c = $filter_selector.data("price-sign");
        $filter_selector.slider({
            range: true,
            isRTL: true,
            min: $filter_selector.data("min"),
            max: $filter_selector.data("max"),
            values: [a, b],
            slide: function(event, ui) {
                $("#flt_price").html(c + ui.values[0] + " - " + c + ui.values[1]);
           $("#price_first").val(ui.values[0]);
                $("#price_second").val(ui.values[1]);

           

            $('input[name="price_first"]').val(ui.values[0]);
            $('input[name="price_second"]').val(ui.values[1]);

         
            }
    

        });
       
        $("#flt_price").html(c + $filter_selector.slider("values", 0) + " - " + c + $filter_selector.slider("values", 1));
 

    });
      
  </script>


   <script>

        $('#sorting').on('change', function() 
        {   
               var sort=this.value;

                $('input[name="sort"]').val(sort);

      var From_data=$('#Filter_form').serialize();

      
      
           $.ajax({
            url:'{{ url("/shop_Filter") }}',
            dataType:'html',
            type:'post',
            data:From_data,
            success:function(data)
            {
                $('.shop_Filter').html(data);
                $('.shop_Filter').removeClass('hidden');
                $('.zzzzzzzzzz').addClass('hidden');
                $('.paginationblocks').addClass('hidden');
             
            },

           });

                

        });
    </script>

     <script>

        $('#Showing').on('change', function() 
        {   
               var Showing=this.value;

               $('input[name="Showing"]').val(Showing);

      var From_data=$('#Filter_form').serialize();

      
      
           $.ajax({
            url:'{{ url("/shop_Filter") }}',
            dataType:'html',
            type:'post',
            data:From_data,
            success:function(data)
            {
                $('.shop_Filter').html(data);
                $('.shop_Filter').removeClass('hidden');
                $('.zzzzzzzzzz').addClass('hidden');
                $('.paginationblocks').addClass('hidden');
             
            },

           });

        });
    </script>

    

 

 <script type="text/javascript">
      $(document).on('click','#Filter_Price',function(){

       
 
            
       var From_data=$('#Filter_form').serialize();
           $.ajax({
            url:'{{ url("/shop_Filter") }}',
            dataType:'html',
            type:'post',
            data:From_data,
            success:function(data)
            {
                $('.shop_Filter').html(data);
                $('.shop_Filter').removeClass('hidden');
                $('.zzzzzzzzzz').addClass('hidden');
                $('.paginationblocks').addClass('hidden');
             
            },

           });

 return 0; 
    
                    
                     
                    });



  </script>
    <script src="{{url('/')}}/assets/js/main.js"></script>

</body>

</html>
