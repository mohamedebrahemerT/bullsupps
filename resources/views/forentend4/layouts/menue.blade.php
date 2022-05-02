
  <!-- START HEADER -->
    <header class="header_wrap">

        <div class="top-header light_skin bg_dark ">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_tab_header tobar">
                            <div class="heading_s2">
                                <ul class="icon_list text-center text-lg-start">
                                    <li><a href="{{url('/')}}/#"><i class="ion-android-globe me-2"></i>العربية</a></li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="ms-3 text_white ">
                                    <span>Deliver To:</span>
                                </div>
                                <div class="lng_dropdown">
                                    <a href="{{url('/')}}/" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <select name="countries" class="custome_select" disabled>
                                    <option value='UAE' data-image="assets/images/UAE.svg" data-title="English"> <a href="{{url('/')}}/#" alt="UAE-country" ><span>UAE</span></a></option>
                                    <!-- <option value='KSA' data-image="assets/images/KSA.svg" data-title="France"> <a href="{{url('/')}}/#" alt="KSA-country"><span>KSA</span></a></option> -->
                                </select>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle-header light_skin">
            <div class="custom-container">
                <div class="nav_block">
                    <a class="navbar-brand float-sm-none" href="{{url('/')}}/index.html">
                        <img class="logo_light" src="{{url('/')}}/assets/images/Logo.svg" alt="logo">
                        <img class="logo_dark" src="{{url('/')}}/assets/images/Logo.svg" alt="logo">
                    </a>
                    <div class="product_search_form rounded_input align-items-center">
                        <form>
                            <div class="input-group">
                                <input class="form-control" placeholder="Search Product..." required="" type="text">
                                <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li class="dropdown cart_dropdown">
                            <a class="nav-link cart_trigger" href="{{url('/')}}/#" data-bs-toggle="dropdown"><img src="{{url('/')}}/assets/images/User.svg"><span class="amount">Login</span></a>
                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li>
                                        <span class="cart_quantity mb-2">Welcome To BullSupps</span>
                                        <button type="submit" class="btn btn-primary btn-block" name="login">Log in</button>
                                    </li>

                                    <li>
                                        <span class="cart_quantity mb-2">Sign In With Social Media</span>
                                        <div><button type="submit" class="btn btn-facebook btn-block mb-2" name="Facebook"><i class="ion-social-facebook"></i>Facebook</button></div>
                                        <div><button type="submit" class="btn btn-google btn-block mb-2" name="Google"><i class="ion-social-googleplus"></i>Google</button></div>
                                    </li>
                                    <li>
                                        <span class="cart_quantity mb-2">Don't Have an Account?</span>
                                        <button type="submit" class="btn btn-secondary btn-block" name="login">Sign Up</button>
                                    </li>
                                </ul>
                                <!-- <div class="cart_footer">
                                    <span class="cart_quantity">Welcome To BullSupps</span>
                                    <button type="submit" class="btn btn-secondary btn-block" name="login">Sign Up</button>
                                </div> -->
                            </div>
                        </li>


                        <li class="li-divider"></li>
                        <li class="dropdown cart_dropdown">
                            <a class="nav-link cart_trigger" href="{{url('/')}}/#" data-bs-toggle="dropdown"><img src="{{url('/')}}/assets/images/cart_outline.svg"><span class="cart_count">2</span><span class="amount">Cart</span></a>
                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li>
                                        <a href="{{url('/')}}/#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/products/pr-01.png" alt="cart_thumb1">Variable product 001</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">AED</span></span>78.00</span>
                                    </li>

                                    <li>
                                        <a href="{{url('/')}}/#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/products/pr-02.png" alt="cart_thumb2">Ornare sed consequat</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">AED</span></span>81.00</span>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/products/pr-02.png" alt="cart_thumb2">Ornare sed consequat</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">AED</span></span>81.00</span>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/products/pr-02.png" alt="cart_thumb2">Ornare sed consequat</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">AED</span></span>81.00</span>
                                    </li>
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">AED</span></span>159.00</p>
                                    <p class="cart_buttons"><a href="{{url('/')}}/#" class="btn btn-secondary view-cart">View Cart</a><a href="{{url('/')}}/#" class="btn btn-primary checkout">Checkout</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom_header border-top dark_skin main_menu_uppercase navbar-dark bg-dark">
            <div class="custom-container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                        <div class="categories_wrap">
                            <button type="button" data-bs-toggle="collapse" data-bs-target="#navCatContent" aria-expanded="false" class="categories_btn categories_menu">
                            <span>All Categories </span><i class="linearicons-menu"></i>
                        </button>
                            <div id="navCatContent" class="navbar collapse">
                                <ul>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="{{url('/')}}/#" data-bs-toggle="dropdown"><i class="flaticon-tv"></i> <span>Computer</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Featured Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vestibulum sed</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec porttitor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Curabitur tempus</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Etiam ac rutrum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Quisque condimentum</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Popular Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Curabitur laoreet</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Quisque condimentum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Etiam ac rutrum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec porttitor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Curabitur tempus</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{url('/')}}/assets/images/menu_banner7.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>Computers</h4>
                                                            <a href="{{url('/')}}/#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{url('/')}}/assets/images/menu_banner8.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Top Laptops</h4>
                                                            <a href="{{url('/')}}/#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="{{url('/')}}/#" data-bs-toggle="dropdown"><i class="flaticon-responsive"></i> <span>Mobile & Tablet</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Featured Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vestibulum sed</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec porttitor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Curabitur tempus</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Etiam ac rutrum</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Popular Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Curabitur laoreet</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Quisque condimentum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Etiam ac rutrum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec porttitor</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/menu_banner6.jpg" alt="menu_banner"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="{{url('/')}}/#" data-bs-toggle="dropdown"><i class="flaticon-camera"></i> <span>Camera</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Featured Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vestibulum sed</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec porttitor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Curabitur tempus</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Etiam ac rutrum</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Popular Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Curabitur laoreet</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Vivamus in tortor</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae facilisis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Quisque condimentum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Etiam ac rutrum</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec vitae ante ante</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/#">Donec porttitor</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <a href="{{url('/')}}/#"><img src="{{url('/')}}/assets/images/menu_banner9.jpg" alt="menu_banner"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="{{url('/')}}/#" data-bs-toggle="dropdown"><i class="flaticon-plugins"></i> <span>Accessories</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Woman's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-left-sidebar.html">Donec porttitor</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-right-sidebar.html">Donec vitae facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-list.html">Curabitur tempus</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-load-more.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Men's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-cart.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/checkout.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/wishlist.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/compare.html">Curabitur laoreet</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/order-completed.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Kid's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail.html">Donec vitae facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/coming-soon.html"><i class="flaticon-headphones"></i> <span>Headphones</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/404.html"><i class="flaticon-console"></i> <span>Gaming</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/login.html"><i class="flaticon-watch"></i> <span>Watches</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/register.html"><i class="flaticon-music-system"></i> <span>Home Audio & Theater</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/coming-soon.html"><i class="flaticon-monitor"></i> <span>TV & Smart Box</span></a></li>
                                    <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/404.html"><i class="flaticon-printer"></i> <span>Printer</span></a></li>
                                    <li>
                                        <ul class="more_slide_open">
                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/login.html"><i class="flaticon-fax"></i> <span>Fax Machine</span></a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/register.html"><i class="flaticon-mouse"></i> <span>Mouse</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">More Categories</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler side_navbar_toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSidetoggle" aria-expanded="false"> 
                            <span class="ion-android-menu"></span>
                        </button>
                            <div class="pr_search_icon">
                                <a href="{{url('/')}}/javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                            </div>
                            <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                                <ul class="navbar-nav navbar-dark bg-dark">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle active" href="{{url('/')}}/#">Sport Supplements</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/index.html">Fashion 1</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/index-2.html">Fashion 2</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/index-3.html">Furniture 1</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/index-4.html">Furniture 2</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/index-5.html">Electronics 1</a></li>
                                                <li><a class="dropdown-item nav-link nav_item active" href="{{url('/')}}/index-6.html">Electronics 2</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle nav-link" href="{{url('/')}}/#" data-bs-toggle="dropdown">Vitamins & Health</a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/about.html">About Us</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/contact.html">Contact Us</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/faq.html">Faq</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/404.html">404 Error Page</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/login.html">Login</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/signup.html">Register</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/term-condition.html">Terms and Conditions</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-toggle nav-link" href="{{url('/')}}/#" data-bs-toggle="dropdown">Healthy Food</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Woman's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-left-sidebar.html">Donec porttitor</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-right-sidebar.html">Donec vitae facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-list.html">Curabitur tempus</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-load-more.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Men's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-cart.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/checkout.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/wishlist.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/compare.html">Curabitur laoreet</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/order-completed.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Kid's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail.html">Donec vitae facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Accessories</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail.html">Donec vitae facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="d-lg-flex menu_banners row g-3 px-3">
                                                <div class="col-lg-6">
                                                    <div class="header-banner">
                                                        <div class="sale-banner">
                                                            <a class="hover_effect1" href="{{url('/')}}/#">
                                                                <img src="{{url('/')}}/assets/images/shop_banner_img7.jpg" alt="shop_banner_img7">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="header-banner">
                                                        <div class="sale-banner">
                                                            <a class="hover_effect1" href="{{url('/')}}/#">
                                                                <img src="{{url('/')}}/assets/images/shop_banner_img8.jpg" alt="shop_banner_img8">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle nav-link" href="{{url('/')}}/#" data-bs-toggle="dropdown">BATH & BODY</a>
                                        <div class="dropdown-menu dropdown-reverse">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item menu-link dropdown-toggler" href="{{url('/')}}/#">Grids</a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-three-columns.html">3 columns</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-four-columns.html">4 columns</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-right-sidebar.html">right Sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-standard-left-sidebar.html">Standard Left Sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-standard-right-sidebar.html">Standard right Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item menu-link dropdown-toggler" href="{{url('/')}}/#">Masonry</a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-masonry-three-columns.html">3 columns</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-masonry-four-columns.html">4 columns</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-masonry-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-masonry-right-sidebar.html">right Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item menu-link dropdown-toggler" href="{{url('/')}}/#">Single Post</a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single.html">Default</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single-left-sidebar.html">left sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single-slider.html">slider post</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single-video.html">video post</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single-audio.html">audio post</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item menu-link dropdown-toggler" href="{{url('/')}}/#">List</a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-list-left-sidebar.html">left sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-list-right-sidebar.html">right sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-toggle nav-link" href="{{url('/')}}/#" data-bs-toggle="dropdown">Sports</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-9">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-4">
                                                            <ul>
                                                                <li class="dropdown-header">Shop Page Layout</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-list.html">shop List view</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-left-sidebar.html">Left Sidebar</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-right-sidebar.html">Right Sidebar</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-load-more.html">Shop Load More</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-4">
                                                            <ul>
                                                                <li class="dropdown-header">Other Pages</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-cart.html">Cart</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/checkout.html">Checkout</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/my-account.html">My Account</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/wishlist.html">Wishlist</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/compare.html">compare</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/order-completed.html">Order Completed</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-4">
                                                            <ul>
                                                                <li class="dropdown-header">Product Pages</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail.html">Default</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-left-sidebar.html">Left Sidebar</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-right-sidebar.html">Right Sidebar</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/shop-product-detail-thumbnails-left.html">Thumbnails Left</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <div class="header_banner">
                                                        <div class="header_banner_content">
                                                            <div class="shop_banner">
                                                                <div class="banner_img overlay_bg_40">
                                                                    <img src="{{url('/')}}/assets/images/shop_banner4.jpg" alt="shop_banner2" />
                                                                </div>
                                                                <div class="shop_bn_content">
                                                                    <h6 class="text-uppercase shop_subtitle">New Collection</h6>
                                                                    <h5 class="text-uppercase shop_title">Sale 30% Off</h5>
                                                                    <a href="{{url('/')}}/#" class="btn btn-white rounded-0 btn-xs text-uppercase">Shop Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle nav-link" href="{{url('/')}}/#" data-bs-toggle="dropdown">Women’s Only</a>
                                        <div class="dropdown-menu dropdown-reverse">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item menu-link dropdown-toggler" href="{{url('/')}}/#">Grids</a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-three-columns.html">3 columns</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-four-columns.html">4 columns</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-right-sidebar.html">right Sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-standard-left-sidebar.html">Standard Left Sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-standard-right-sidebar.html">Standard right Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item menu-link dropdown-toggler" href="{{url('/')}}/#">Masonry</a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-masonry-three-columns.html">3 columns</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-masonry-four-columns.html">4 columns</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-masonry-left-sidebar.html">Left Sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-masonry-right-sidebar.html">right Sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item menu-link dropdown-toggler" href="{{url('/')}}/#">Single Post</a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single.html">Default</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single-left-sidebar.html">left sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single-slider.html">slider post</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single-video.html">video post</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-single-audio.html">audio post</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item menu-link dropdown-toggler" href="{{url('/')}}/#">List</a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-list-left-sidebar.html">left sidebar</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="{{url('/')}}/blog-list-right-sidebar.html">right sidebar</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li><a class="nav-link nav_item" href="{{url('/')}}/contact.html">Promotions</a></li>
                                </ul>
                            </div>
                            <!-- <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>123-456-7689</span>
                        </div> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER --> 