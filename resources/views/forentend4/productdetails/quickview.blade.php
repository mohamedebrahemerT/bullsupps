    @extends('forentend4.index')



@section('content')

        

   @section('javascript')

 <script type="text/javascript">
    $('.product_color_switch span,.product_size_switch span')
    .on("click", function() {
        $(this).siblings(this).removeClass('active').end().addClass('active');

  
    });
      
  </script>

@endsection

   <div class="ajax_quick_view">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <div class="product-image">
                    <div class="product_img_box">
                        <img id="product_img" src='assets/images/1.jpg' data-zoom-image="assets/images/1-zoom.jpg" alt="product_img1" />
                        <a href="#" class="product_img_zoom" title="Zoom">
                            <span class="linearicons-zoom-in"></span>
                        </a>
                    </div>
                    <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                        <div class="item">
                            <a href="#" class="product_gallery_item active" data-image="assets/images/1.jpg" data-zoom-image="assets/images/1-zoom.jpg">
                                <img src="assets/images/1-thumb.jpg" alt="product_small_img1" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="assets/images/2.jpg" data-zoom-image="assets/images/2-zoom.jpg">
                                <img src="assets/images/2-thumb.jpg" alt="product_small_img2" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="assets/images/3.jpg" data-zoom-image="assets/images/3-zoom.jpg">
                                <img src="assets/images/3-thumb.jpg" alt="product_small_img3" />
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="product_gallery_item" data-image="assets/images/4.jpg" data-zoom-image="assets/images/4-zoom.jpg">
                                <img src="assets/images/4-thumb.jpg" alt="product_small_img4" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-12">
                        <div class="product_description">
                            <h4 class="product_title"><a href="#">Blue Dress For Woman</a></h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product_description">
                            <div class="rating_wrap">
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="rating_num"><a href="">(21)</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="product_description">
                            <div class="product_price">
                                <ul class="product-meta product_price">
                                    <li>Was: <del>AED 55.25</del></li>
                                    <li>Now: <span class="price pe-3">AED 45.00</span> (Inclusive of VAT)</li>
                                    <li>Saving:
                                        <div class="on_sale">
                                            <span>AED 20 (35% Off)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="product_description">
                            <div class="pr_switch_wrap">
                                <span class="switch_lable">Available in:</span>
                                <div class="product_size_switch">
                                    <span>1.6 lb</span>
                                    <span>3 lb</span>
                                    <span>5 lb</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="product_description">
                            <div class="pr_switch_wrap">
                                <span class="switch_lable">Flavor:</span>
                                <div class="product_size_switch">
                                    <span>Chocolate</span>
                                    <span>Vanilla</span>
                                    <span>Strawberry Vanilla</span>
                                    <span>Chocolate Vanilla</span>
                                    <span>Vanilla</span>
                                    <span>Strawberry</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                        <div class="cart_btn">
                            <a href="#" class="cart js-cart">

                                <button class="btn btn-primary btn-lg btn-addtocart cart js-cart " type="button">Add to cart</button>
                                <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                        </div>

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
            </div>
        </div>
    </div>
@endsection

