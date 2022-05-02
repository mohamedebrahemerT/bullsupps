


 @extends('forentend4.index')



@section('content')

  

    <div class="custom-container plr-0">
        <!-- START SECTION BANNER -->
        <div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
            <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item background_bg active" data-img-src="{{url('/')}}/assets/images/banner03.png">
                    </div>
                    <div class="carousel-item background_bg" data-img-src="{{url('/')}}/assets/images/banner04.png">

                    </div>
                    <div class="carousel-item background_bg" data-img-src="{{url('/')}}/assets/images/banner05.png">

                    </div>
                </div>
                <a class="carousel-control-prev" href="{{url('/')}}/#carouselExampleControls" role="button" data-bs-slide="prev"><i class="ion-chevron-left"></i></a>
                <a class="carousel-control-next" href="{{url('/')}}/#carouselExampleControls" role="button" data-bs-slide="next"><i class="ion-chevron-right"></i></a>
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
                        <a href="{{url('/')}}/#" alt="Mega Sale"><img class="headerimg" src="{{url('/')}}/assets/images/megaBG.svg" alt="mega sale header" /></a>

                    </div>


                </div>
                <div class="custom-container ptb pt-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading_tab_header pt-2 pb-2">
                                    <div class="deal_timer">
                                        <div class="countdown_time countdown_style1" data-time="2021/12/28 13:22:15"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style1" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                    <div class="item">
                                        <div class="product">
                                            <div class="megahearder">
                                                <h6 class="product_title">CATEGORY TITLE11</h6>
                                            </div>
                                            <div class="product_img">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-01.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="megahearder">
                                                <h6 class="product_title">CATEGORY TITLE</h6>
                                            </div>
                                            <div class="product_img">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="megahearder">
                                                <h6 class="product_title">CATEGORY TITLE</h6>
                                            </div>
                                            <div class="product_img">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-03.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="megahearder">
                                                <h6 class="product_title">CATEGORY TITLE</h6>
                                            </div>
                                            <div class="product_img">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="megahearder">
                                                <h6 class="product_title">CATEGORY TITLE</h6>
                                            </div>
                                            <div class="product_img">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            <a href="{{url('/')}}/#" alt="NEW ARRIVAL"><img class="headerimg" src="{{url('/')}}/assets/images/NewArrival_BG.svg" alt="mega sale header" class="center" /></a>

                        </div>
                    </div>
                </div>

                <div class="container-fluid bg_light_gray">
                    <div class="custom-container ptb">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                    <div class="item">
                                        <div class="product">

                                            <div class="product_img2">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-01.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="product_img2">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="product_img2">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-03.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="product_img2">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-04.png" class="proimg" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="product_img2">
                                                <a href="{{url('/')}}/shop-product-detail.html">
                                                    <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                <p>BRAND NAME</p>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width:68%"></div>
                                                    </div>
                                                    <span class="rating_num">(15)</span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-auto me-auto">
                                                        <div class="product_price">
                                                            <span class="price xtra">AED 25.60</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product_price">
                                                            <del>AED 32.00</del>
                                                            <div class="on_sale">
                                                                <span>30% OFF</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/MegaSale_Banner.svg" class=" mx-auto d-block" alt="Mega Sale Banner" /></a>
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
                                        <a href="{{url('/')}}/#" class="seeall"><span>SEE ALL</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-style1 ptb3">
                                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                                        <li class="nav-item mb-10">
                                            <a class="nav-link active" id="arrival-tab" data-bs-toggle="tab" href="{{url('/')}}/#arrival" role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link" id="sellers-tab" data-bs-toggle="tab" href="{{url('/')}}/#sellers" role="tab" aria-controls="sellers" aria-selected="false">Best Sellers</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link" id="featured-tab" data-bs-toggle="tab" href="{{url('/')}}/#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link" id="special-tab" data-bs-toggle="tab" href="{{url('/')}}/#special" role="tab" aria-controls="special" aria-selected="false">Special Offer
            </a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link" id="arrival-tab" data-bs-toggle="tab" href="{{url('/')}}/#arrival" role="tab" aria-controls="arrival" aria-selected="true">New Arrival</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link" id="sellers-tab" data-bs-toggle="tab" href="{{url('/')}}/#sellers" role="tab" aria-controls="sellers" aria-selected="false">Best Sellers</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link" id="featured-tab" data-bs-toggle="tab" href="{{url('/')}}/#featured" role="tab" aria-controls="featured" aria-selected="false">Featured</a>
                                        </li>
                                        <li class="nav-item mb-10">
                                            <a class="nav-link" id="special-tab" data-bs-toggle="tab" href="{{url('/')}}/#special" role="tab" aria-controls="special" aria-selected="false">Special Offer
            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab_slider">
                                    <div class="tab-pane fade show active" id="arrival" role="tabpanel" aria-labelledby="arrival-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-01.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-05.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-01.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-03.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-01.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-03.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
                                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="false" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-01.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-03.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-02.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop-product-detail.html">
                                                            <img src="{{url('/')}}/assets/images/products/pr-04.png" alt="product_img2">
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
                                                        <h5 class="product_title"><a href="{{url('/')}}/shop-product-detail.html">Product Title Goes Here</a></h5>
                                                        <p>BRAND NAME</p>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width:68%"></div>
                                                            </div>
                                                            <span class="rating_num">(15)</span>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-auto me-auto">
                                                                <div class="product_price">
                                                                    <span class="price xtra">AED 25.60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="product_price">
                                                                    <del>AED 32.00</del>
                                                                    <div class="on_sale">
                                                                        <span>30% OFF</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/Flash_Banner.svg" class=" mx-auto d-block" alt="Mega Sale Banner" /></a>
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
                                        <a href="{{url('/')}}/#" class="seeall"><span>SEE ALL</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 ptb">

                                <div class="brand product_slider carousel_slider owl-carousel owl-theme nav_style10" data-loop="true" data-dots="true" data-nav="true" data-margin="20" data-responsive='{"0":{"items": "1"}, "480":{"items": "2"}, "767":{"items": "3"}, "1199":{"items": "5"}}'>
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <img src="{{url('/')}}/assets/images/Brands/Brand01.png" alt="Brand Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <img src="{{url('/')}}/assets/images/Brands/Brand02.png" alt="Brand Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <img src="{{url('/')}}/assets/images/Brands/Brand03.png" alt="Brand Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <img src="{{url('/')}}/assets/images/Brands/Brand04.png" alt="Brand Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <img src="{{url('/')}}/assets/images/Brands/Brand05.png" alt="Brand Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <img src="{{url('/')}}/assets/images/Brands/Brand01.png" alt="Brand Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <img src="{{url('/')}}/assets/images/Brands/Brand04.png" alt="Brand Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product">
                                            <div class="brand-img">
                                                <img src="{{url('/')}}/assets/images/Brands/Brand01.png" alt="Brand Name">
                                            </div>
                                        </div>
                                    </div>
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
