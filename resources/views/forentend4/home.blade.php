@extends('forentend4.index')
@section('content')
    <div class="custom-container plr-0">
        <!-- START SECTION BANNER -->
        <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
            <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
                <div class="carousel-inner">
   @foreach($otherDataDepartmentbannersHomeSliders as $key =>  $data)

                    <div class="carousel-item background_bg @if($key == 0) active @endif"  >
<a href="{{$data->input_key}}"> 
                        <img src="{{url('/')}}/{{$data->input_value}}">
            </a>

                    </div>
            </a>

                              @endforeach
 

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><i class="ion-chevron-left"></i></a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><i class="ion-chevron-right"></i></a>
            </div>
        </div>
        <!-- END SECTION BANNER -->

        <!-- START Why Us section -->
        <div class="container-fluid bg_light_gray ptb">
            <div class="custom-container">
                <!-- START SECTION SHOP INFO -->

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-4 ">
                            <div class="icon_box icon_box_style1 border-radius plr">
                                <div class="icon">
                                    <i class="flaticon-shipped"></i>
                                </div>
                                <div class="icon_box_content">
                                    <h5>Free Delivery</h5>
                                    <p>If you are going to use of Lorem, you need to be sure there anything</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon_box icon_box_style1 border-radius plr">
                                <div class="icon">
                                    <i class="flaticon-money-back"></i>
                                </div>
                                <div class="icon_box_content">
                                    <h5>30 Day Return</h5>
                                    <p>If you are going to use of Lorem, you need to be sure there anything</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon_box icon_box_style1 border-radius plr">
                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <div class="icon_box_content">
                                    <h5>27/4 Support</h5>
                                    <p>If you are going to use of Lorem, you need to be sure there anything</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END SECTION SHOP INFO -->

            </div>
        </div>
        <!-- END Why Us section -->

        <!-- START MAIN CONTENT -->
        <div class="main_content">
            <!-- START MEGA SALE SECTION-->
            <div class="container-fluid bg-darkgray plr-0">

                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{url('/')}}/shop" alt="Mega Sale"><img class="headerimg" src="{{url('/')}}/assets/images/megaBG.svg" alt="mega sale header" /></a>

                    </div>


                </div>
                <div class="custom-container ptb pt-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading_tab_header pt-2 pb-2">
                                    <div class="deal_timer">
                                        <div class="countdown_time countdown_style1" data-time="2022/06/06 13:22:15"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
      @foreach(App\Product::where('status','active')->InrandomOrder()->take(5)->get() as  $product)

                                    <div class="item">
                                        <div class="product">
                                            <div class="megahearder">
                            <h6 class="product_title">
          @if(session('lang') == 'ar')
 {{$product->name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->department->dep_name_en}}
 @else
 {{$product->title_name_en}}
      @endif
                                               
                                            </h6>
                                            </div>
                                            <div class="product_img">
                                                <a href="{{url('/')}}/shop/{{$product->id}}">
 <img src="{{Storage::url($product->photo)}}" alt="product_img2"  >
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

        @if(session('lang') == 'ar')
 {{$product->BRAND->name_ar}}
  @elseif(session('lang') == 'en')
 {{$product->BRAND->name_en}}
 @else
 {{$product->BRAND->name_en}}
      @endif
                                                    
                                                </p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
              <span class="price xtra">AED {{$product->price }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                      <div class="product_price">
                        <del>AED {{$product->price_offer }}</del>
                              <div class="on_sale">
     <span>{{ ratio($product->price,$product->price_offer) }}% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
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
            </div>
            <!-- END MEGA SALE SECTION -->

            <!-- START NEW ARRIVAL SECTION-->
            <div class="container-fluid plr-0">
                <div class="container-fluid bg-darkgray plr-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{url('/')}}/shop" alt="NEW ARRIVAL"><img class="headerimg" src="{{url('/')}}/assets/images/NewArrival_BG.svg" alt="mega sale header" class="center" /></a>

                        </div>
                    </div>
                </div>

                <div class="container-fluid bg_light_gray">
                    <div class="custom-container ptb">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
 @foreach(App\Product::where('status','active')->InrandomOrder()->take(5)->get() as  $product)
                                    <div class="item">
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
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

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
                                            </div>
                                        </div>
                                    </div>
        @endforeach
                                     
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- END NEW ARRIVAL SECTION -->

            <!-- START MEGA SALE BANNER SECTION-->
            <div class="container-fluid bg_light_gray plr-0 ptb2">
                <div class="custom-container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{url('/')}}/shop"><img src="{{url('/')}}/assets/images/MegaSale_Banner.svg" class=" mx-auto d-block" alt="Mega Sale Banner" /></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- END MEGA SALE BANNER SECTION-->

            <!-- START TOP SELLERS SECTION -->
            <div class="container-fluid mb-2 plr-0" style="overflow: hidden;">
                <div class="custom-container ptb">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h2>TOP SELLERS</h2>
                                    </div>
                                    <div class="view_all">
                                        <a href="{{url('/')}}/shop" class="seeall"><span>SEE ALL</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-style1 ptb3">
                                    <ul class="nav nav-tabs justify-content-center" role="tablist">
  @foreach(App\Department::where('parent','!=',null)->take(8)->get() as $key =>  $Department)
                                        <li class="nav-item mb-10">
                                            <a class="nav-link  @if($key == 0)active @endif" 
                    id="arrival{{$key}}-tab" data-bs-toggle="tab" href="#arrival{{$key}}" role="tab" aria-controls="arrival{{$key}}" aria-selected="true">
                                                
      @if(session('lang') == 'ar')
 {{$Department->dep_name_ar}}
  @elseif(session('lang') == 'en')
 {{$Department->dep_name_en}}
 @else
 {{$Department->dep_name_en}}
      @endif
                                            </a>
                                        </li>
        @endforeach

                                       
                                      
                                       
                                       
                                    </ul>
                                </div>
                                <div class="tab_slider">
  @foreach(App\Department::take(7)->get() as $key =>  $Department)

                                    <div class="tab-pane fade @if($key == 0) show active @endif" id="arrival{{$key}}" role="tabpanel" aria-labelledby="arrival{{$key}}-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
    @foreach(App\product::
    where('status','active')->
    where('department_id',$Department->id)
    ->InrandomOrder()->take(7)
    ->get() as  $product)
                                            <div class="item">
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
           <h5 class="product_title">
            <a href="{{url('/')}}/shop/{{$product->id}}">
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
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

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
                                                    </div>
                                                </div>
                                            </div>
        @endforeach

                                            
                                        </div>
                                    </div>
        @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TOP SELLERS SECTION -->
            <!-- START FLASH BANNER SECTION-->
            <div class="container-fluid bg_light_gray plr-0 ptb3">
                <div class="custom-container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{url('/')}}/shop"><img src="{{url('/')}}/assets/images/Flash_Banner.svg" class=" mx-auto d-block" alt="Mega Sale Banner" /></a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- END FLASH BANNER SECTION-->
            <!-- START SHOP BY BRAND SECTION -->
            <div class="container-fluid">
                <div class="custom-container ptb">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading_tab_header">
                                    <div class="heading_s2">
                                        <h2>SHOP BY BRAND</h2>
                                    </div>
                                    <div class="view_all">
                                        <a href="{{url('/')}}/shop" class="seeall"><span>SEE ALL</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ptb">

                                <div class="brand product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="true" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "480":{"items": "2"}, "767":{"items": "3"}, "1199":{"items": "5"}}'>
  @foreach(App\TradeMark::get() as  $TradeMark)
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <a href="{{url('/')}}/shop">
 <img src="{{ Storage::url($TradeMark->logo) }}" alt="
@if(session('lang') == 'ar')
 {{$TradeMark->name_ar}}
  @elseif(session('lang') == 'en')
 {{$TradeMark->name_en}}
 @else
 {{$TradeMark->name_en}}
      @endif
 ">
 </a>
                                            </div>
                                        </div>
                                    </div>
        @endforeach
                             
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TOP SELLERS SECTION -->

        </div>
        <!-- END MAIN CONTENT -->



    </div>


   
@endsection
