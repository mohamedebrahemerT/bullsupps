

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

 
