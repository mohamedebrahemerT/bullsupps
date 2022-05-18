   @guest
                        @else

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
                           
                            <option value='UAE' data-image="{{url('/')}}/assets/images/UAE.svg" data-title="English"> <a href="#" alt="UAE-country"><span>UAE</span></a></option>

                            <option value='KSA' data-image="assets/images/KSA.svg" data-title="France"> <a href="#" alt="KSA-country"><span>KSA</span></a></option>
                        </select>
                        </div>
                    </div>
                </div>

                <div class="modal-body bg_light_gray">
                    <div class="container-fluid">
      <form class="form cf" method="post"  action="{{url('/')}}/Select_Delivery_Address">
        @csrf
                            <section class="plan cf">

                      

     @foreach(App\Models\user_addresses::where('user_id',auth()->user()->id)->get() as  $address)
  <input type="radio" name="radio1" id="free{{$address->id}}" value="{{$address->id}}" checked>

                       <label class="free-label four mb-2" 
                       for="free{{$address->id}}">
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
                                                                    <span>{{$address->type}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
             <a class="alink" href="{{url('/')}}/Add_New_Address_Step2/{{$address->id}}" Alt="Edit"><span><i class="linearicons-pencil5 text_green pe-2"></i>Edit</span></a>

              <a class="alink" href="{{url('/')}}/Delete_user_Address/{{$address->id}}" Alt="Delete"><span><i class="linearicons-trash2 text_default pe-2"></i>Delete</span></a> 
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                   @if($address->Primary == 1)
                                                        
                                                        <div class="defultaddress">Default</div>
               @endif

           
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <tbody class="">
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Name:</td>
                                                                    <td class="cart_total_amount  noborderall">{{$address->Name}}</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Address:</td>
                                                                    <td class="cart_total_amount  noborderall">{{$address->address}}</td>
                                                                </tr>
                                                                <tr class="noborderall">
                                                                    <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                                    <td class="cart_total_amount  noborderall">{{$address->Mobile}}</td>
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

                    @endforeach
                    
                                

                                
                            </section>
                       



                    </div>
                </div>
                <div class="modal-footer">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <a class="alink" href="{{url('/')}}/Add_New_Address_Map_Step" Alt="Edit"><span><i class="linearicons-plus pe-2"></i>Add New Address</span></a>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>

                     </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Screen Load Popup Section -->
    @endguest


    <!-- START HEADER -->
    <header class="header_wrap">

        <div class="top-header light_skin bg_dark ">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading_tab_header tobar">
                            <div class="heading_s2">
                                <ul class="icon_list text-center text-lg-start">
                                    <!--li><a href="#"><i class="ion-android-globe me-2"></i>العربية</a></li-->
                                </ul>
                            </div>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <div class="ms-3 text_white ">
                                    <span>Deliver To:</span>
                                </div>
                                <div class="lng_dropdown">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <select name="countries" class="custome_select" disabled>
                                    <option value='UAE' data-image="{{url('/')}}/assets/images/UAE.svg" data-title="English"> <a href="#" alt="UAE-country" ><span>UAE</span></a></option>
                                    <!-- <option value='KSA' data-image="assets/images/KSA.svg" data-title="France"> <a href="#" alt="KSA-country"><span>KSA</span></a></option> -->
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
                    <a class="navbar-brand float-sm-none" 
                    href="{{url('/')}}">
                        <img class="logo_light" src="{{Storage::url(settings()->siteflag) }}" alt="logo">
                        <img class="logo_dark" src="{{Storage::url(settings()->siteflag) }}" alt="logo">
                    </a>
                    <div class="product_search_form rounded_input align-items-center">
                        <form method="get" action="{{url('/')}}/search">

                            <div class="input-group">
                   <input class="form-control" placeholder="Search Product..." required="" type="text" name="text_search"
                     @isset($query)
                    value="{{$query}}"
                    @endisset
                    >


      <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        @guest

                        <li class="dropdown cart_dropdown">
                            <a class="nav-link cart_trigger" 
                            href="{{url('/')}}/login" >

                                <img src="{{url('/')}}/assets/images/User.svg"><span class="amount">Login</span>
                            </a>

                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li>
                                        <span class="cart_quantity mb-2">Welcome To BullSupps</span>
                                         <a href="{{url('/')}}/login"> 
                                        <button type="submit" class="btn btn-primary btn-block" name="login">
                                Log in
                                      
                                    </button>
                                    </a>
                                    </li>

                                    <li>
                                        <span class="cart_quantity mb-2">Sign In With Social Media</span>
                                        <div>
<a href="{{url('/')}}/auth/redirect/facebook">
                                            <button type="submit" class="btn btn-facebook btn-block mb-2" name="Facebook"><i class="ion-social-facebook"></i>Facebook</button>
                                            </a>

                                        </div>
                                        <div>
<a href="{{url('/')}}/auth/redirect/google">

                                            <button type="submit" class="btn btn-google btn-block mb-2" name="Google"><i class="ion-social-googleplus"></i>Google</button>
                                            </a>

                                        </div>
                                    </li>
                                    <li>
                                        <span class="cart_quantity mb-2">Don't Have an Account?</span>
                                          <a href="{{url('/')}}/register"> 
                                        <button type="submit" class="btn btn-secondary btn-block" name="login">Sign Up</button>
                                          <a href="{{url('/')}}/login"> 
                                    </li>
                                </ul>
                                <!-- <div class="cart_footer">
                                    <span class="cart_quantity">Welcome To BullSupps</span>
                                    <button type="submit" class="btn btn-secondary btn-block" name="login">Sign Up</button>
                                </div> -->
                            </div>
                        </li>
                        @else

                          <li class="dropdown cart_dropdown">

                            <a  href="{{url('/')}}/my-profile"
                             class="nav-link cart_trigger" 
                            >

                                <img src="{{url('/')}}/assets/images/User.svg"><span class="amount">{{ Auth::user()->name }}</span></a>

                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    

                                      <li>
                                        <span class="cart_quantity mb-2">My Profile</span>
                                          <a href="{{url('/')}}/my-profile"> 
                                        <button type="submit" class="btn btn-secondary btn-block" name="login">My Profile</button>
                                          <a href="{{url('/')}}/my-profile"> 
                                    </li>

                                    <li>
            <span class="cart_quantity mb-2">Welcome  {{ Auth::user()->name }}</span>
                                         <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
                                        <button type="submit" class="btn btn-primary btn-block" name="login">
                               Logout
                                      
                                    </button>
                                    </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

  
                                    
                                </ul>
                               
                            </div>
                        </li>

                        @endguest


                        <li class="li-divider"></li>
                        <li class="dropdown cart_dropdown">
                            <a class="nav-link cart_trigger" href="{{url('/')}}/cart"  ><img src="{{url('/')}}/assets/images/cart_outline.svg"><span class="cart_count">

                                {{Cart::instance('default')->count()}}
                            </span><span class="amount">Cart</span></a>
                            <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                                 <span class="Cartcontent"></span>
                @if (Cart::count() > 0)
   
                                <ul class="cart_list cart_listhide">
                @foreach (Cart::content() as $item)

                                    <li id="b{{$item->rowId}}">
     <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST" id="dellshop">  
      {{ csrf_field() }}
    <input type="hidden" name="rowId" value="{{ $item->rowId }}">

      <a  class="item_remove" id="Removeshop"><span class="hidden">{{ $item->rowId }}</span>  <i style="color: #fff;cursor: pointer;" class="ion-close"></i></a>

                        </form>

                                        <a href="{{url('/')}}/shop/{{ $item->model->id}}"><img src="{{Storage::url($item->model->photo)}}" alt="cart_thumb1">
  @if(session('lang')=='ar')
   {{ $item->model->title_name_ar }}
   @endif
   @if(session('lang')=='en')
   {{ $item->model->title_name_en }}
    @endif
                                        </a>
                                        <span class="cart_quantity"> {{$item->qty}} x 
                <span class="cart_amount"> 
        <span class="price_symbole">AED</span></span>    {{ $item->model->price_offer }}</span>
                                    </li>
                @endforeach
 
                                </ul>
                                  @else
          
            @endif
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> 

        <span class="cart_price">



<span class="homesubtotal">
<span class="price_symbole">AED</span>

{{Cart::Subtotal()  }}
</span>
</span>

</p>
                                    <p class="cart_buttons">
    <a href="{{url('/')}}/cart" class="btn btn-secondary view-cart">View Cart</a>
        <a href="{{url('/')}}/Checkout" class="btn btn-primary checkout">Checkout</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

       

