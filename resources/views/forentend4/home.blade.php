<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    <title>BullSupps - Home Page</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/rtl_bootstrap.min.css"> -->
    <!-- Google Font -->
    <link href="{{url('/')}}/https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="{{url('/')}}/https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/linearicons.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{url('/')}}/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/styles-m.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/styles-l.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
    <!-- <link rel="stylesheet" href="{{url('/')}}/assets/css/rtl-style.css"> -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/responsive.css">

</head>

<body>

    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->


    <!-- Home Popup Section -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select Delivery Address</h5>
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        <div class="ms-3">
                            <span class="text_dark"><b>Ship To:</b></span>
                        </div>
                        <div class="lng_dropdown">
                            <select name="countries" class="custome_select">
                            <option value='UAE' data-image="assets/images/UAE.svg" data-title="English"> <a href="{{url('/')}}/#" alt="UAE-country"><span>UAE</span></a></option>
                            <option value='KSA' data-image="assets/images/KSA.svg" data-title="France"> <a href="{{url('/')}}/#" alt="KSA-country"><span>KSA</span></a></option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="modal-body bg_light_gray">
                    <div class="container-fluid">
                        <form class="form cf">
                            <section class="plan cf">

                                <input type="radio" name="radio1" id="free" value="free" checked>
                                <label class="free-label four mb-2" for="free">
                                    <div class="col-12">
                                    <div class="border border-radius2 box_shadow1 p-3 p-md-4" style="background-color:#ffffff">
                                        <div class="contact_text">
                                            <row>
                                                <div class="d-flex bd-highlight">
                                                    <div class="p-2 flex-grow-1 bd-highlight">
                                                        <div class="bardhe">
                                                            <div class="kolonat-hom align-content-center">
                                                                <div class="ikonat-home"> <i class="linearicons-map"></i> </div>
                                                                <div class="contact_text">
                                                                    <span>Home</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Edit"><span><i class="linearicons-pencil5 text_green pe-2"></i>Edit</span></a>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <div class="defultaddress">Default</div>
                                                        <!-- <a class="alink" href="{{url('/')}}/#" Alt="Delete"><span><i class="linearicons-trash2 text_default pe-2"></i>Delete</span></a> -->
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody class="">
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Name:</td>
                                                                    <td class="cart_total_amount  noborderall">Ahmed Abo Ibrahim</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Address:</td>
                                                                    <td class="cart_total_amount  noborderall">2500, Escape Tower - 57R6+QR - Dubai, United Arab Emirates</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                                    <td class="cart_total_amount  noborderall">+971-50-10101010</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </row>
                                        </div>
                                    </div>
        
                                </div>
                            </label>
                                <input type="radio" name="radio1" id="basic" value="basic">
                                <label class="basic-label four mb-2" for="basic">
                                    <div class="col-12 ">
                                    <div class="border border-radius2 box_shadow1 p-3 p-md-4" style="background-color:#ffffff">
                                        <div class="contact_text">
                                            <row>
                                                <div class="d-flex bd-highlight">
                                                    <div class="p-2 flex-grow-1 bd-highlight">
                                                        <div class="bardhe">
                                                            <div class="kolonat-hom align-content-center">
                                                                <div class="ikonat-home"> <i class="linearicons-map"></i> </div>
                                                                <div class="contact_text">
                                                                    <span>Home</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Edit"><span><i class="linearicons-pencil5 text_green pe-2"></i>Edit</span></a>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Delete"><span><i class="linearicons-trash2 text_default pe-2"></i>Delete</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody class="">
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Name:</td>
                                                                    <td class="cart_total_amount  noborderall">Ahmed Abo Ibrahim</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Address:</td>
                                                                    <td class="cart_total_amount  noborderall">2500, Escape Tower - 57R6+QR - Dubai, United Arab Emirates</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                                    <td class="cart_total_amount  noborderall">+971-50-10101010</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </row>
                                        </div>
                                    </div>
        
                                </div>
                            </label>
                                <input type="radio" name="radio1" id="premium" value="premium">
                                <label class="premium-label four mb-2" for="premium"> 
                                    <div class="col-12 ">
                                    <div class="border border-radius2 box_shadow1 p-3 p-md-4" style="background-color:#ffffff">
                                        <div class="contact_text">
                                            <row>
                                                <div class="d-flex bd-highlight">
                                                    <div class="p-2 flex-grow-1 bd-highlight">
                                                        <div class="bardhe">
                                                            <div class="kolonat-hom align-content-center">
                                                                <div class="ikonat-home"> <i class="linearicons-map"></i> </div>
                                                                <div class="contact_text">
                                                                    <span>Home</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Edit"><span><i class="linearicons-pencil5 text_green pe-2"></i>Edit</span></a>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a class="alink" href="{{url('/')}}/#" Alt="Delete"><span><i class="linearicons-trash2 text_default pe-2"></i>Delete</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody class="">
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Name:</td>
                                                                    <td class="cart_total_amount  noborderall">Ahmed Abo Ibrahim</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Address:</td>
                                                                    <td class="cart_total_amount  noborderall">2500, Escape Tower - 57R6+QR - Dubai, United Arab Emirates</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                                    <td class="cart_total_amount  noborderall">+971-50-10101010</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </row>
                                        </div>
                                    </div>
        
                                </div>
                            </label>
                            </section>
                        </form>



                    </div>
                </div>
                <div class="modal-footer">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <a class="alink" href="{{url('/')}}/#" Alt="Edit"><span><i class="linearicons-plus pe-2"></i>Add New Address</span></a>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Screen Load Popup Section -->



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
                <div class="col-lg-2 col-md-4 col-sm-6 ">
                    <div class="widget">
                        <h6 class="widget_title">Sport Supplements</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/')}}/#">About Us</a></li>
                            <li><a href="{{url('/')}}/#">FAQ</a></li>
                            <li><a href="{{url('/')}}/#">Location</a></li>
                            <li><a href="{{url('/')}}/#">Affiliates</a></li>
                            <li><a href="{{url('/')}}/#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 ">
                    <div class="widget">
                        <h6 class="widget_title">Vitamins & Health</h6>
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
                        <h6 class="widget_title">Healthy Food</h6>
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
                        <h6 class="widget_title">BATH & BODY</h6>
                        <ul class="widget_links">
                            <li><a href="{{url('/')}}/#">My Account</a></li>
                            <li><a href="{{url('/')}}/#">Discount</a></li>
                            <li><a href="{{url('/')}}/#">Returns</a></li>
                            <li><a href="{{url('/')}}/#">Orders History</a></li>
                            <li><a href="{{url('/')}}/#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 ">
                    <div class="widget">
                        <h6 class="widget_title">Sports</h6>
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
                        <h6 class="widget_title">Women’s Only</h6>
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
                                <li><a href="{{url('/')}}/#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="{{url('/')}}/#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="{{url('/')}}/#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="{{url('/')}}/#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="{{url('/')}}/#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
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
                                <li><a href="{{url('/')}}/#" class="">Terms and Conditions </a></li>
                                <li><a href="{{url('/')}}/#" class="">Privacy Policy </a></li>

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
    <!-- footer End -->

    <a href="{{url('/')}}/# " class="scrollup " style="display: none; "><i class="ion-ios-arrow-up "></i></a>
    <!-- Latest jQuery -->
    <script src="{{url('/')}}/assets/js/jquery-3.6.0.min.js "></script>
    <!-- popper min js -->
    <script src="{{url('/')}}/assets/js/popper.min.js "></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{url('/')}}/assets/bootstrap/js/bootstrap.min.js "></script>
    <!-- owl-carousel min js  -->
    <script src="{{url('/')}}/assets/owlcarousel/js/owl.carousel.min.js "></script>
    <!-- magnific-popup min js  -->
    <script src="{{url('/')}}/assets/js/magnific-popup.min.js "></script>
    <!-- waypoints min js  -->
    <script src="{{url('/')}}/assets/js/waypoints.min.js "></script>
    <!-- parallax js  -->
    <script src="{{url('/')}}/assets/js/parallax.js "></script>
    <!-- countdown js  -->
    <script src="{{url('/')}}/assets/js/jquery.countdown.min.js "></script>
    <!-- imagesloaded js -->
    <script src="{{url('/')}}/assets/js/imagesloaded.pkgd.min.js "></script>
    <!-- isotope min js -->
    <script src="{{url('/')}}/assets/js/isotope.min.js "></script>
    <!-- jquery.dd.min js -->
    <script src="{{url('/')}}/assets/js/jquery.dd.min.js "></script>
    <!-- slick js -->
    <script src="{{url('/')}}/assets/js/slick.min.js "></script>
    <!-- elevatezoom js -->
    <script src="{{url('/')}}/assets/js/jquery.elevatezoom.js "></script>
    <!-- scripts js -->
    <script src="{{url('/')}}/assets/js/scripts.js "></script>
    <script src="{{url('/')}}/assets/js/main.js"></script>
</body>

</html>