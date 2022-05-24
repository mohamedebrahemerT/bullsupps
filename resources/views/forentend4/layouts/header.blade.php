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
    <title>{{trans('admin.BullSupps')}} - {{trans('admin.Home Page')}}</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/bootstrap.min.css">
        @if(app()->getLocale() == 'ar')
     <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/rtl_bootstrap.min.css">
    @endif


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
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
        @if(app()->getLocale() == 'ar')

   <link rel="stylesheet" href="{{url('/')}}/assets/css/rtl-style.css"> 
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;500;600&family=Exo:wght@200&family=Roboto:wght@300&display=swap" rel="stylesheet"> 
    @endif


    <link rel="stylesheet" href="{{url('/')}}/assets/css/responsive.css">


   

    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

 
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- Slick CSS -->
 
 
<style type="text/css">
    .hidden
    {
        display: none;
    }

    .alert-info {
background-color: #000;
color: #fff;
border: 1px solid #000;
 
}

.alert-success {
  color: #fff !important;
  background-color: #c21232 !important;
  border-color: #fff !important;
}

.btn-close
{
    color: #fff;
  background-color: #fff  ;

}

.alert-danger {
  color: #fff;
  background-color: #bf0426;
  border-color: #f5c2c7;
  text-align: center;
}
    
</style>

 
</head>

<body   @if(app()->getLocale() == 'ar') style="font-family: 'Cairo', sans-serif;"  @endif>

    <!-- LOADER -->
    <!--div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div -->
    <!-- END LOADER -->          
     
  <aside class="sidebar bg-black ">
            <div class="toggle">
                <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                    <span class="bg-darkgray"></span>
                </a>

                <span class="bag-label">{{trans('admin.Your Cart')}} </span>
            </div>
            <div class="side-inner">

                <div class="cart_box cart_right dropdown-menu-right">
                        <span class="Cartcontent2"></span>
                @if (Cart::count() > 0)

                    <ul class="cart_list cart_listhide2">
                @foreach (Cart::content() as $item)

                            <li id="b2{{$item->rowId}}">
         <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST" id="dellshop">  
      {{ csrf_field() }}
    <input type="hidden" name="rowId" value="{{ $item->rowId }}">

      <a  class="item_remove" id="Removeshop"><span class="hidden">{{ $item->rowId }}</span>  <i style="color: #fff;cursor: pointer;" class="ion-close"></i></a>

                        </form>

                            <a href="{{url('/')}}/shop/{{ $item->model->id}}" style="color: #fff;cursor: pointer;">
            <img src="{{Storage::url($item->model->photo)}}" alt="cart_thumb1"></a>
                            @if(session('lang')=='ar')
   {{ $item->model->title_name_ar }}
   @endif
   @if(session('lang')=='en')
   {{ $item->model->title_name_en }}
    @endif
                            <span class="cart_quantity"> {{$item->qty}} x <span class="cart_amount"> <span class="price_symbole">{{trans('admin.AED')}}</span></span>{{ $item->model->price_offer }}</span>
                        </li>
                @endforeach

                        
                    </ul>
                      @else
          
            @endif
                    <div class="cart_footer">
                        <p class="cart_total"><strong>{{trans('admin.Subtotal')}}:</strong> 
                               <span class="cart_price">



<span class="homesubtotal">
<span class="price_symbole">{{trans('admin.AED')}}</span>

{{Cart::Subtotal()  }}
</span>
</span>
                        </p>
                        <p class="cart_buttons"><a href="{{url('/')}}/cart" class="btn btn-secondary view-cart">{{trans('admin.View Cart')}}</a><a href="{{url('/')}}/Checkout" class="btn btn-primary checkout">{{trans('admin.Checkout')}}</a></p>
                        <p class="cart_buttons"><a href="{{url('/')}}/shop" class="btn btn-primary btn-block">{{trans('admin.Continue Shopping')}}</a></p>

                    </div>

                </div>

            </div>

        </aside>