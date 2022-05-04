  @extends('forentend4.index')


@section('content')
 @push('js')


 
 
 @endpush

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
                                            <select class="form-control form-control-sm">
                                        <option value="order">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="product_header_right">
                                        <div class="products_view">
                                            <a href="javascript:Void(0);" class="shorting_icon grid active"><i class="ti-view-grid"></i></a>
                                            <a href="javascript:Void(0);" class="shorting_icon list"><i class="ti-layout-list-thumb"></i></a>
                                        </div>
                                        <div class="custom_select">
                                            <select class="form-control form-control-sm">
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
                        <div class="row shop_container">
	@foreach($products2 as  $product)

                             <div class="col-md-4 col-6">
                                <div class="product">
                                    <div class="product_img2">
                                        <a href="{{url('/')}}/shop/{{$product->id}}">
                                            <img src="{{Storage::url($product->photo)}}" alt="product_img2">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="{{url('/')}}/#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="{{url('/')}}/shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="{{url('/')}}/#"><i class="icon-heart"></i></a></li>
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
          <span>{{ ratio($product->price,$product->price_offer) }}% OFF</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>

                                        <div class="list_product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="{{url('/')}}/#"><i class="icon-basket-loaded"></i></a></li>
                                                <li><a href="{{url('/')}}/shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="{{url('/')}}/#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                   @endforeach

                           
                        </div>
                        <div class="row">
                            <div class="col-12">
                                          {{ $products2->links('forentend4.pages.blocks.pagination') }}

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
                            <div class="widget">
                                <h5 class="widget_title">FILTER BY:</h5>
                                <ul class="widget_categories">
           @foreach(App\Department::InrandomOrder()->where('parent' ,'!=',null)->take(4)->get() as $key =>  $DepartmentFILTER)
                                    <li><a href="{{url('/')}}/#">
                                    	<span class="categories_name">
           @if(session('lang') == 'ar')
 {{$DepartmentFILTER->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$DepartmentFILTER->dep_name_en}}
 @else
 {{$DepartmentFILTER->dep_name_en}}
      @endif
                                    </span>
                  <span class="categories_num">(9)</span></a></li>
        @endforeach
                                   
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">Filter</h5>
                                <div class="filter_price">
                                    <div id="price_filter" data-min="0" data-max="500" data-min-value="50" data-max-value="300" data-price-sign="AED"></div>
                                    <div class="price_range">
                                        <span>Price: <span id="flt_price"></span></span>
                                        <input type="hidden" id="price_first">
                                        <input type="hidden" id="price_second">
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">Gender</h5>
                                <ul class="list_brand">
     @foreach(App\Models\attribute_values::where('attribute_id',2)->get() as $Gender)
                                    <li>
                <div class="custome-checkbox">
     <input class="form-check-input" type="checkbox" name="checkbox" 
     id="{{$Gender->id}}"  >
            <label class="form-check-label" for="{{$Gender->id}}"><span>
     @if(session('lang') == 'ar')
 {{$Gender->value_ar}}
  @elseif(session('lang') == 'en')
 {{$Gender->value_en}}
 @else
 {{$Gender->value_en}}
      @endif
                                        </span></label>
                                        </div>
                                    </li>
                                   @endforeach

                                    
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">Weight</h5>
                                <div class="product_size_switch">
  	@foreach(App\Models\attribute_values::where('attribute_id',6)->get() as $Weight)
                                    <span>
                                    	 @if(session('lang') == 'ar')
 {{$Weight->value_ar}}
  @elseif(session('lang') == 'en')
 {{$Weight->value_en}}
 @else
 {{$Weight->value_en}}
      @endif
                                    </span>
                                   @endforeach
                                     
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget_title">Brand</h5>
                                <ul class="list_brand">

  	@foreach(App\TradeMark::get() as $Brand)

                                    <li>
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="{{$Brand->id}}" value="{{$Brand->id}}">
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
                            <div class="widget">
                                <h5 class="widget_title">Flavor</h5>
                                <div class="product_size_switch">
 	@foreach(App\Models\attribute_values::where('attribute_id',1)->get() as $Flavor)
                                    <span>
            	 @if(session('lang') == 'ar')                         	
   {{$Flavor->value_ar}}
  @elseif(session('lang') == 'en')
 {{$Flavor->value_en}}
 @else
 {{$Flavor->value_en}}
      @endif
                                    </span>
                                   @endforeach
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->



    </div>
    <!-- END MAIN CONTENT -->

@endsection

