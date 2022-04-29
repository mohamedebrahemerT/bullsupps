 
@push('js')


<style type="text/css">
  
   
.bar {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 10;
  height: 45px;
  padding-right: 10px;
  padding-left: 10px;
  background-color: white;
  border-bottom: 1px solid #ddd;

  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}

.bar-header-secondary {
  top: 44px;
}

.bar-footer {
  bottom: 0;
}

.bar-footer-secondary {
  bottom: 44px;
}

.bar-footer-secondary-tab {
  bottom: 50px;
}

.bar-footer,
.bar-footer-secondary,
.bar-footer-secondary-tab {
  border-top: 1px solid #ddd;
  border-bottom: 0;
}

.bar-nav {
  top: 0;
}

.title {
  position: absolute;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0 -10px;
  font-size: 17px;
  font-weight: 500;
  line-height: 44px;
  color: #000;
  text-align: center;
  white-space: nowrap;
}

.title a {
  color: inherit;
}

.bar-tab {
  bottom: 0;
  display: table;
  width: 100%;
  height: 50px;
  padding: 0;
  table-layout: fixed;
  border-top: 1px solid #ddd;
  border-bottom: 0;
}
.bar-tab .tab-item {
  display: table-cell;
  width: 1%;
  height: 50px;
  color: #929292;
  text-align: center;
  vertical-align: middle;
}
.bar-tab .tab-item.active, .bar-tab .tab-item:active {
  color: #428bca;
}
.bar-tab .tab-item .icon {
  top: 3px;
  width: 24px;
  height: 24px;
  padding-top: 0;
  padding-bottom: 0;
}
.bar-tab .tab-item .icon ~ .tab-label {
  display: block;
  font-size: 11px;
}

.bar .btn {
  position: relative;
  top: 7px;
  z-index: 20;
  padding: 6px 12px 7px;
  margin-top: 0;
  font-weight: 400;
}
.bar .btn.pull-right {
  margin-left: 10px;
}
.bar .btn.pull-left {
  margin-right: 10px;
}

.bar .btn-link {
  top: 0;
  padding: 0;
  font-size: 16px;
  line-height: 44px;
  color: #428bca;
  border: 0;
}
.bar .btn-link:active, .bar .btn-link.active {
  color: #3071a9;
}

.bar .btn-block {
  top: 6px;
  padding: 7px 0;
  margin-bottom: 0;
  font-size: 16px;
}

.bar .btn-nav.pull-left {
  margin-left: -5px;
}
.bar .btn-nav.pull-left .icon-left-nav {
  margin-right: -3px;
}
.bar .btn-nav.pull-right {
  margin-right: -5px;
}
.bar .btn-nav.pull-right .icon-right-nav {
  margin-left: -3px;
}

.bar .icon {
  position: relative;
  z-index: 20;
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 24px;
}
.bar .btn .icon {
  top: 3px;
  padding: 0;
}
.bar .title .icon {
  padding: 0;
}
.bar .title .icon.icon-caret {
  top: 4px;
  margin-left: -5px;
}

.bar input[type="search"] {
  height: 29px;
  margin: 6px 0;
}

.bar .segmented-control {
  top: 7px;
  margin: 0 auto;
}

.badge {
  display: inline-block;
  padding: 2px 9px 3px;
  font-size: 12px;
  line-height: 1;
  color: #333;
  background-color: rgba(0, 0, 0, .15);
  border-radius: 100px;
}
.badge.badge-inverted {
  padding: 0 5px 0 0;
  background-color: transparent;
}

.badge-primary {
  color: #fff;
  background-color: #428bca;
}
.badge-primary.badge-inverted {
  color: #428bca;
}

.badge-positive {
  color: #fff;
  background-color: #5cb85c;
}
.badge-positive.badge-inverted {
  color: #5cb85c;
}

.badge-negative {
  color: #fff;
  background-color: #d9534f;
}
.badge-negative.badge-inverted {
  color: #d9534f;
}

.card {
  margin: 10px;
  overflow: hidden;
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 6px;
}

.card .table-view {
  margin-bottom: 0;
  border-top: 0;
  border-bottom: 0;
}
.card .table-view .table-view-divider:first-child {
  top: 0;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
}
.card .table-view .table-view-divider:last-child {
  border-bottom-right-radius: 6px;
  border-bottom-left-radius: 6px;
}

.card .table-view-cell:last-child {
  border-bottom: 0;
}

.table-view {
  padding-left: 0;
  margin-top: 0;
  margin-bottom: 15px;
  list-style: none;
  background-color: #fff;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}

.table-view-cell {
  position: relative;
  padding: 11px 15px 11px 15px;
  overflow: hidden;
  border-bottom: 1px solid #ddd;
}
.table-view-cell:last-child {
  border-bottom: 0;
}
.table-view-cell > a:not(.btn) {
  position: relative;
  display: block;
  padding: inherit;
  margin: -11px -15px -11px -15px;
  overflow: hidden;
  color: inherit;
}
.table-view-cell > a:not(.btn):active {
}
.table-view-cell p {
  margin-bottom: 0;
}

.table-view-divider {
  padding-top: 6px;
  padding-bottom: 6px;
  padding-left: 15px;
  margin-top: -1px;
  margin-left: 0;
  font-weight: 500;
  color: #999;
  background-color: #fafafa;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}

.table-view .media,
.table-view .media-body {
  overflow: hidden;
}

.table-view .media-object.pull-left {
  margin-right: 10px;
}
.table-view .media-object.pull-right {
  margin-left: 10px;
}

.table-view-cell > .btn,
.table-view-cell > .badge,
.table-view-cell > .toggle,
.table-view-cell > a > .btn,
.table-view-cell > a > .badge,
.table-view-cell > a > .toggle {
  position: absolute;
  top: 50%;
  right: 15px;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
}
.table-view-cell .navigate-left > .btn,
.table-view-cell .navigate-left > .badge,
.table-view-cell .navigate-left > .toggle,
.table-view-cell .navigate-right > .btn,
.table-view-cell .navigate-right > .badge,
.table-view-cell .navigate-right > .toggle,
.table-view-cell .push-left > .btn,
.table-view-cell .push-left > .badge,
.table-view-cell .push-left > .toggle,
.table-view-cell .push-right > .btn,
.table-view-cell .push-right > .badge,
.table-view-cell .push-right > .toggle,
.table-view-cell > a .navigate-left > .btn,
.table-view-cell > a .navigate-left > .badge,
.table-view-cell > a .navigate-left > .toggle,
.table-view-cell > a .navigate-right > .btn,
.table-view-cell > a .navigate-right > .badge,
.table-view-cell > a .navigate-right > .toggle,
.table-view-cell > a .push-left > .btn,
.table-view-cell > a .push-left > .badge,
.table-view-cell > a .push-left > .toggle,
.table-view-cell > a .push-right > .btn,
.table-view-cell > a .push-right > .badge,
.table-view-cell > a .push-right > .toggle {
  right: 35px;
}

.content > .table-view:first-child {
  margin-top: 15px;
}
 /************************************************************************************************
    SHORT CODE CONTENT SLIDER BRAND
*************************************************************************************************/
/************************************************************************************************
    BLOCK FEATURED CATE
*************************************************************************************************/
.container {
  padding: 0 10px; }

.loading-placeholder {
  background: url("../image/theme/ajax-loader.gif") no-repeat center center white;
  height: 100%;
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  right: 0;
  opacity: 1; }

.module .block-categories .cate-content {
  padding-bottom: 5px; }
  .module .block-categories .cate-content .cate {
    display: inline-block;
    vertical-align: top;
    width: 150px; }
    .module .block-categories .cate-content .cate .inner {
      box-shadow: 0px 2px 3px 0px rgba(100, 100, 100, 0.3);
      text-align: center;
      margin-bottom: 5px; }
    .module .block-categories .cate-content .cate a.title-cate {
      color: #222;
      font-weight: 700;
      font-size: 16px;
      text-transform: uppercase;
      line-height: 52px;
      -webkit-transition: all 0.3s ease 0s;
      -moz-transition: all 0.3s ease 0s;
      transition: all 0.3s ease 0s;
      display: block; }
    .module .block-categories .cate-content .cate:hover img {
      opacity: 0.7;
      visibility: visible; }
    .module .block-categories .cate-content .cate:hover a.title-cate {
      background: #222;
      color: #fff; }

.panel .panel-group .panel .panel-heading .head a:before {
  color: #333; }

.form-control {
  font-size: 12px; }

/*HTML BANNER 1*/
.mobile-bn3-h1,
.mobile-bn1-h1 {
  padding: 0 10px;
  margin-bottom: 10px; }
  .mobile-bn3-h1 .banner21,
  .mobile-bn1-h1 .banner21 {
    display: inline-block;
    float: left;
    width: 50%;
    padding: 0 5px; }

.mobile-bn3-h1 {
  margin: 10px 0 10px; }

.mobile-bn2-h1 {
  margin: 0 0 5px; }

/*DEAL SLIDER*/
.mobile-brand {
  margin: 0;
  overflow: hidden; }

.module.mobile_deals {
  margin: 0 0 10px;
  overflow: hidden; }

/*EXTRA SLIDER*/
/*FOOTER*/
.footer-content {
  overflow: hidden; }

/*NABAR*/
.bar-tab .tab-item .icon ~ .tab-label {
  font-size: 10px;
  text-transform: uppercase;
  line-height: 100%;
  margin-top: 2px;
  white-space: nowrap; }

.item-cart {
  position: relative; }
  .item-cart .btn-shopping-cart {
    position: absolute;
    top: 0;
    right: 30%;
    z-index: 99; }
    .item-cart .btn-shopping-cart .total-shopping-cart {
      background: #ff5561;
      width: 15px;
      height: 15px;
      display: inline-block;
      text-align: center;
      border-radius: 100%;
      font-size: 10px;
      line-height: 15px;
      color: #fff; }

.block-mobile {
  padding: 10px 0 15px;
  overflow: hidden;
  margin-bottom: 0; }
  .block-mobile .info {
    float: left;
    width: 33.33%; }
    .block-mobile .info .fa {
      font-size: 28px;
      color: #ff5561;
      float: left; }
    .block-mobile .info .info-content {
      position: relative;
      top: -5px;
      padding-left: 38px; }
    .block-mobile .info .info-content span {
      font-size: 10px;
      color: #222;
      text-transform: uppercase;
      font-weight: 600;
      line-height: 100%; }
    .block-mobile .info p {
      text-transform: capitalize;
      margin-bottom: 3px;
      font-size: 10px;
      line-height: 100%; }

.title-heading {
  margin-top: 10px;
  font-size: 14px;
  text-transform: uppercase;
  color: #222; }

.panel-search .input-group-btn {
  background: #ff5561;
  padding: 0 5px; }
  .panel-search .input-group-btn .btn-link {
    color: #fff; }
.panel-search .input-group input {
  border-radius: 0; }

.form-searchs {
  overflow: hidden; }

   
 
  


 


  

  

    .xcxcxcxcxc
    {
       height:500px;
    width: 500px;

    }

  }



.bar-navhome {
  padding: 7px 10px;
  top: 0; }
  .bar-navhome .input-group {
    background: #f2f2f2;
    border-radius: 3px;
    padding: 0 10px; }
    .bar-navhome .input-group .btn-link {
      color: #555555;
      line-height: inherit;
      font-size: 13px; }
    .bar-navhome .input-group .form-control {
      border: none;
      font-size: 13px;
      height: auto;
      background: transparent;
      margin: 4px 0; }

.bar-static {
  position: static; }

.navbar-menu .toggle-panel {
  background: #333333;
  border-radius: 3px;
  color: #ff5561;
  padding: 4px 6px;
  display: inline-block; }
  .navbar-menu .toggle-panel .icon-bar {
    height: 2px;
    width: 16px;
    margin: 3px 0px;
    background: #ff5561;
    display: block; }
    .navbar-menu .toggle-panel .icon-bar:first-child {
      width: 12px; }
    .navbar-menu .toggle-panel .icon-bar:last-child {
      width: 14px; }

/*============HEADER V1 ==================*/
.typeheader-0 {
  border: none !important; }
  .typeheader-0.bar-navhome {
    height: auto; }
    .typeheader-0.bar-navhome .navbar-logo {
      padding: 0; }
      .typeheader-0.bar-navhome .navbar-logo img {
        max-height: 32px; }
    .typeheader-0.bar-navhome .navbar-search {
      position: relative;
      top: 2px; }
      .typeheader-0.bar-navhome .navbar-search #search {
        padding: 0;
        width: 100%; }
      .typeheader-0.bar-navhome .navbar-search .input-group .form-control {
        margin: 0;
        line-height: 25px;
        font-size: 11px;
        color: #9c9c9c; }
      .typeheader-0.bar-navhome .navbar-search .input-group-btn {
        position: absolute;
        text-align: center;
        width: 30px;
        right: 5px; }
  .typeheader-0 .header-menu-page .menu-mobile1 li a {
    font-size: 12px;
    color: #222; }
    .typeheader-0 .header-menu-page .menu-mobile1 li a:hover {
      color: #ff5561; }

/*============HEADER V2 ==================*/
.typeheader-1 {
  display: block;
  width: 100%;
  box-shadow: none;
  background: #ff5561;
  border: none; }
  .typeheader-1 .navbar-menu .toggle-panel {
    background: #fff; }

/*============HEADER V3 ==================*/
.typeheader-2 {
  box-shadow: none; }
  .typeheader-2.bar-navhome {
    height: auto; }
  .typeheader-2.bar-nav {
    box-shadow: none; }
  .typeheader-2 .navbar-menu .toggle-panel {
    background: #e3e3e3; }
  .typeheader-2 .navbar-menu .toggle-panel .icon-bar {
    background: #222; }
  .typeheader-2 .navbar-bar {
    text-align: center; }
  .typeheader-2 .navbar-menu {
    float: left; }
   
  .typeheader-2 .navbar-search {
    display: block;
    overflow: hidden;
    margin-top: 8px;
    border-top: 1px solid #e8e8e8; }
    .typeheader-2 .navbar-search #search {
      padding: 0;
      background: #fff;
      border-radius: 0; }
      .typeheader-2 .navbar-search #search .form-control {
        padding: 0;
        outline: none;
        box-shadow: none; }
  .typeheader-2 .header-link {
    display: inline-block;
    overflow: hidden;
    margin: 0 10px 0 0; }
  .typeheader-2 .header-cart {
    float: right;
    margin: 0 8px 0 10px; }
  .typeheader-2 .header-wishlist {
    float: left;
    font-size: 18px; }
  .typeheader-2 .header-cart a {
    text-indent: -9999px;
    display: inline-block;
    width: 17px;
    height: 19px;
    background: url("../image/theme/icon/icon-cart2.png") no-repeat center center; }





</style>


<style type="text/css">
  .typefooter-2 .footer-links li a
  {
        color: #308146;
}
  }
</style>
 
@endpush


  <nav class="bar bar-tab zzzzzzzzxxx" style="direction: rtl;" id="xcxcxc">
      <a class="tab-item " href="{{url('/')}}/" data-transition="slide-in">
        <span  ><i class="fa fa-home"></i></span>
        <span class="tab-label"> {{trans('admin.Home')}} </span>
      </a>
      <a class="tab-item" href="{{url('/')}}/shop" data-transition="slide-in">
        <span  ><i class="fa fa-search"></i></span>
        <span class="tab-label"> {{trans('admin.Shop')}} </span>
      </a>
      <a class="tab-item item-cart" href="{{url('/')}}/cart" data-transition="slide-in">

        <span  ><i class="fa fa-shopping-cart"></i></span>

        <div id="cart" class="btn-shopping-cart">
          <span class="total-shopping-cart cart-total-full">
             <span class="items_cart">
              
                 @if (Cart::instance('default')->count() > 0)

         {{ Cart::instance('default')->count() }}

    @else

0

    @endif
             </span>      </span>
        </div>
        
        <span class="tab-label">   {{trans('admin.cart')}}</span>
      </a>

        @guest

      <a class="tab-item" href="{{url('/')}}/my-profile" data-transition="slide-in">
        <span><i class="fa fa-user"></i></span>
        <span class="tab-label"> {{trans('admin.MyAccount')}} </span>
      </a>

    @else

    <a class="tab-item" href="{{url('/')}}/my-profile" data-transition="slide-in">
        <span><i class="fa fa-user"></i></span>
        <span class="tab-label">  
                   {{auth()->guard('web')->user()->name}}


         </span>
      </a>

        @endguest



        @guest


      <a class="tab-item tab-item--more tooltip-popovers" href="{{ route('login') }}">
        <span ><i class="fa fa-user"></i></span>
        <span class="tab-label"> دخول </span>
      </a>

    @else

    <a class="tab-item tab-item--more tooltip-popovers"   href="{{ route('logout') }}"

            onclick="event.preventDefault();

                     document.getElementById('logout-form').submit();">
        <span >   
          <i class="fa fa-sign-out"></i>

        </span>
        <span class="tab-label"> 

            {{trans('admin.Logout')}}


    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

        {{ csrf_field() }}

        </form>

         </span>
      </a>

        @endguest

    </nav>
   
  <footer class="footer-container typefooter-2" style=" 
height: 450px;
left: 0px;
top: 6431px;

/* dark brown */
background: #4A2F28;">

    

    <div class="footer-main desc-collapse showdown" id="collapse-footer">

  

      <div class="so-page-builder ">

             



                  <div class="container page-builder-rtl">

          <div class="row row_560y  footer-middle footerdata">


             <div class="infos-footer">

                <a href="{{url('/')}}"><img src="{{url('/')}}/forentend4/iconified/logo.png" alt="image"></a>

                
              </div>

<hr style="width: 1300px;
height: 0px;
left: 310px;
top: 6581px;

opacity: 0.3;

/* cappuchino */
border: 1px solid #D0C0B3;">
              

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col_njm1  col-style">

              <div class="box-information box-footer">

                <div class="module clearfix">

                  <h3 class="sadasdasd"  >{{trans('admin.Information')}}</h3>

                  <div class="modcontent">

                    <ul class="menu footerdata">

                      <li  ><a href="{{url('/')}}/about">

                        {{trans('admin.AboutUs')}}

                      

                    </a></li>

                     

                      <li><a href="{{url('/')}}/WarrantyAndServices">{{trans('admin.PurchaseAndDeliveryPolicy')}}</a></li>



                      <li><a href="{{url('/')}}/contact">{{trans('admin.Support24/7')}}</a></li>

                      

                       

                      <li><a href="{{url('/')}}/contact">{{trans('admin.ProductSupport')}}</a></li>

                    </ul>

                  </div>

                </div>

              </div>



            </div>      

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col_py4d  col-style">

              <div class="box-account box-footer">

                <div class="module clearfix">

                  <h3 class="  sadasdasd">{{trans('admin.MyAccount')}}</h3>

                  <div class="modcontent">

                    <ul class="menu">

                      <li><a href="{{url('/')}}/title=Brands">{{trans('admin.Brands')}}</a></li>

                      <li><a href="{{url('/')}}/title=special">{{trans('admin.GiftCertificates')}}</a></li>

                  

                      <li><a href="{{url('/')}}/title=special">{{trans('admin.Specials')}}</a></li>

                      

                       

                    </ul>

                  </div>

                </div>

              </div>





            </div>      

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col_slxc  col-style">

              <div class="box-service box-footer">

                <div class="module clearfix">

                  <h3 class="sadasdasd">{{trans('admin.Services')}}</h3>

                  <div class="modcontent">

                    <ul class="menu">

                      <li><a href="{{url('/')}}/contact">

                      {{trans('admin.ContactUs')}}</a></li>

               

                      <li><a href="{{url('/')}}/contact">{{trans('admin.Support')}}</a></li>

                      <li><a href="{{url('/')}}/contact">{{trans('admin.SiteMap')}}</a></li>

                      <li><a href="{{url('/')}}/contact">{{trans('admin.CustomerService')}}</a></li>

                       

                    </ul>

                  </div>

                </div>

              </div>



            </div>      

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_5rbh  col-style">





              <div class="module box-footer so-instagram-gallery-rtl  ">



             

  <h3 class="sadasdasd">{{trans('admin.Services')}}</h3>

                  <div class="modcontent">

                    <ul class="menu">

                      <li><a href="{{url('/')}}/contact">

                      {{trans('admin.ContactUs')}}</a></li>

               

                      <li><a href="{{url('/')}}/contact">{{trans('admin.Support')}}</a></li>

                      <li><a href="{{url('/')}}/contact">{{trans('admin.SiteMap')}}</a></li>

                      <li><a href="{{url('/')}}/contact">{{trans('admin.CustomerService')}}</a></li>

                       

                    </ul>

                  </div>


              </div>



 


            </div>      

  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_i76p  col-style">

             

          
  <div class="subsabsolute">
    
    <span class="sustxt"> {{ trans('admin.Subscribe') }}</span>
<form method="post" action="{{url('/')}}/subscrib">
  @csrf
<div  style=" display: flex;
    flex-flow: row;">
  
     <button style=" 
background: #904476;
"><img src="{{url('/')}}/forentend4/img/arrow.png"></button>
  <input type="email" name="email" class="form-control sdffmemail" style="background-color: #fff;border-radius: 0px;" >
</div>
</form>

  




<p style="font-family: Larsseit;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 20px;

/* or 170% */

/* White */
color: #FFFFFF;
margin-top: 11%;
opacity: 0.6;">
   {{ trans('admin.By subscribing to the newsletter, you will get more offers') }}
</p>
  </div>
 



            </div>  

          </div>

        </div>





                  <div class="container page-builder-rtl">

        <div class="row row_wqs0  row-style ">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_in3d  col-style">

                                                  

 

   



 





                                            

                          </div>      

              

        </div>

      </div>



        </div>



      

  </div>

  <div class="button-toggle hidden-lg hidden-md">

         <a class="showmore" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapse-footer">

            <span class="toggle-more">أظهر المزيد <i class="fa fa-angle-down"></i></span> 

            <span class="toggle-less">إظهار أقل <i class="fa fa-angle-up"></i></span>           

    </a>        

  </div>

    

  

   

  <div class="footer-bottom ">

    <div class="container">   

    <div class="row">

     

      <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 payment-w">
             <ul  style="float: right;
margin-top: 0;

font-size: 22px;display: flex;c">

      <li style="margin-right: 13px;"><a style="
font-family: Larsseit;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 18px;

/* White */
color: #FFFFFF;" href="{{url('/')}}/WarrantyAndServices">{{trans('admin.Terms')}}</a></li>
      <li style="margin-right: 13px;"><a  style="
font-family: Larsseit;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 18px;

/* White */
color: #FFFFFF;" href="{{url('/')}}/PaymentAndDeliveryPolicy">{{trans('admin.privacy')}}</a></li>
      <li style="margin-right: 13px;"><a style="
font-family: Larsseit;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 18px;

/* White */
color: #FFFFFF;" href="{{url('/')}}">{{trans('admin.cookies')}}</a></li>
 

</ul>
        

      </div>


       <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 copyright-w"> 

        <div class="copyright">

 


                      <ul class="socials">

  <li class="facebook" ><a  href="{{settings()->facebookLink}}" target="_blank"><i class="fa fa-facebook" style="color: #fff;"></i></a></li>

  <li class="twitter"><a class="_blank" href="{{settings()->TwitterLink}}" target="_blank"><i class="fa fa-twitter" style="color: #fff;"></i></a></li>

  <li><a  href="{{settings()->instagramLink}}" ><i class="fa fa-instagram" style="color: #fff;"></i></a></li>
 

</ul>

   

               

                  </div>  

      </div>

       

          </div>

    </div>



    

  </div>

</footer>



  



    

        

<!-- <div class="back-to-top"><i class="fa fa-angle-up"></i></div>-->

<div id="previewModal" class="modal fade" tabindex="-1" role="dialog">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

    <div class="modal-header">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      <h4 class="modal-title">{{trans('admin.Successfully added to cart.')}}</h4>

      <div class="checkout clearfix  ">

    <a href="{{url('/')}}/cart" class="btn btn-view-cart inverse">{{trans('admin.cart')}}</a>



    <a href="{{url('/')}}/Checkout" class="btn btn-checkout pull-right">{{trans('admin.Checkout')}}</a>

    </div>

    </div>

    <div class="modal-body"></div>

    </div>

  </div>

</div>



 



</div>



                <script type="text/javascript">

                    $(function(){$.post("https://opencart.opencartworks.com/themes/so_emarket/layout2/index.php?route=extension/module/d_security_module/check_for_shedule",function(t){})});

                </script>





  

<script src="catalog/view/javascript/soconfig/js/jquery.elevateZoom-3.0.8.min.js"></script>

  

<script type="text/javascript">

  $(document).on('click','#addtocart',function(){



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

                                id:text,



                              },

                              dataType:"json",

                              beforeSend:function(){

                                $('.cart_sucess').html('');

                                $('.cc').addClass('hidden');

                              },

                              success:function(data)

                              {



                                $('.cart_sucess').html(data.success); 



                                $('.cart_sucess').html(data.success);

                                $('.productName').html(data.productName);

                                $('.productimage').html(data.productimage);

                                $('.productprice').html(data.productprice);

                                $('.price_offer').html(data.price_offer);

                                $('.content_name_ar').html(data.content_name_ar);

                                $('.admin_id').html(data.admin_id);

                                $('.alymarketcode').html(data.alymarketcode);

                                $('.department_id').html(data.department_id);



                                $("#control-qid13228").click();   



                              }

                            });

                            return false;







                        });

                    </script>



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

            id:text,



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













               $("#control-qid13228").click();  



            }

        });

             return false;

    

                    

                     

                    });

  </script>









 

<script>

var myIndex = 0;

carousel();



function carousel() {

  var i;

  var x = document.getElementsByClassName("mySlides25");

  for (i = 0; i < x.length; i++) {

    x[i].style.display = "none";  

  }

  myIndex++;

  if (myIndex > x.length) {myIndex = 1}    

  x[myIndex-1].style.display = "block";  

  setTimeout(carousel, 3000); // Change image every 2 seconds

}

</script>





 

<script>

var slideIndex = 0;

showSlides();



function showSlides() {

  var i;

  var slides = document.getElementsByClassName("mySlides");

  var dots = document.getElementsByClassName("dot");

  for (i = 0; i < slides.length; i++) {

    slides[i].style.display = "none";  

  }

  slideIndex++;

  if (slideIndex > slides.length) {slideIndex = 1}    

  for (i = 0; i < dots.length; i++) {

    dots[i].className = dots[i].className.replace(" active", "");

  }

  slides[slideIndex-1].style.display = "block";  

  dots[slideIndex-1].className += " active";

  setTimeout(showSlides, 10000); //                  Change image every 2 seconds

}

</script>





<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>



  @stack('js') 


  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76359968-2"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-76359968-2');
</script>






<script>
$(document).ready(function(){



 $('#search').keyup(function(){ 

            

  document.getElementById("ttttttt").style.display = "block";
  
        var query = $(this).val();


        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{url('/')}}/autocomplete/fetch",
          method:"POST",
          data:
          {
            query:query,
        "_token": "{{ csrf_token() }}",
               
            },
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#ttttttt').html(data);

                  
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#search').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

});


$(document).click(function() {
  document.getElementById("ttttttt").style.display = "none";

   
});
</script>


<script type="text/javascript">(function () {
        var options = {
            facebook: "", // Facebook page ID
            whatsapp: "+966566700005", // WhatsApp number
            snapchat: "مثني", // Snapchat username
            sms: "+966566700005", // Sms phone number
            call: "+966566700005", // Call phone number
            company_logo_url: "{{url('/')}}/forentend4/iconified/logo.png", // URL of company logo (png, jpg, gif)
            greeting_message: "مرحبا كيف يمكننا مساعدتك؟ ", // Text of greeting message
            call_to_action: "{{trans('admin.call us')}}", // Call to action
            button_color: "#904476", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,snapchat,sms,call,email", // Order of buttons
            ga: true, // Google Analytics enabled
            branding: true, // Show branding string
            mobile: true, // Mobile version enabled
            desktop: true, // Desktop version enabled
            greeting: false, // Greeting message enabled
            shift_vertical: 0, // Vertical position, px
            shift_horizontal: 0, // Horizontal position, px
            domain: "rowad-alkhaleej.edu.sa", // site domain
            key: "ORmspsJFSc--aYssQ1w5lQ", // pro-widget key
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();</script>


</body>

</html>