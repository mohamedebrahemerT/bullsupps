 

 @extends('forentend4.index')



@section('content')


 @section('javascript')


  <script type="text/javascript">

      $(document).on('click','#Removesavforlater',function(){



                 $(this).closest("div.cart-table-row").hide();



              var tr = $(this).closest('div.cart-table-row');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });



              var text =$(this).text();



              text=text.toString();

              var iib = text;
 
       $("#Wishlist"+iib).hide();

            

        $.ajax({

            url:"{{ route('cart.Deletelater') }}",

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



            }

        });

             return false;

    

                    

                     

                    });

  </script>



  <script type="text/javascript">

      $(document).on('click','#switchToCart',function(){



                 $(this).closest("div.cart-table-row").hide();



              var tr = $(this).closest('div.cart-table-row');

                          tr.fadeOut(1000, function(){ // **addd this

                            $(this).remove();

                        });



              var text =$(this).text();



              text=text.toString();

              var iib = text;
 
       $("#Wishlist"+iib).hide();

            

        $.ajax({

            url:"{{ url('switchToCart') }}",

            method:"POST",

           data :{

            _token:'{{ csrf_token() }}',

            id:text,



           },

            dataType:"json",

            beforeSend:function(){

                      $('.cart_sucess').html('');

                        

            },

            success:function(data)

            {

             

            $('.cart_sucess').html(data.success);  


//$.notify("{{__('product added to cart')}}", "success");


            $('#cartEffect').text("{{__('Data add to cart')}}");
           
             
                $('.cart_count').html(data.count);
               $('.homesubtotal').html(data.total);

             $('.cart_listhide').hide();
             $('.cart_listhide').html('');
               
               $('.Cartcontent').html(data.Cartcontent);
             



            }

        });

             return false;

    

                    

                     

                    });

  </script>


@endsection


   <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- START CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="#">{{trans('admin.Home')}}</a></li>
                            <li class="breadcrumb-item active">{{trans('admin.User Profile')}}</li>
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
                    <div class="col-lg-3 col-md-12 mb-4">
                        <div class="dashboard_menu">
                            <ul class="nav nav-tabs flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i class="icon-basket-loaded"></i>{{trans('admin.Orders')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="wishlist-tab" data-bs-toggle="tab" href="#wishlist" role="tab" aria-controls="wishlist" aria-selected="true"><i class="ti-heart"></i>{{trans('admin.WishList')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="ti-location-pin"></i>{{trans('admin.My Address')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="ti-id-badge"></i>{{trans('admin.Account details')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-lock"></i>{{trans('admin.Logout')}}</a>

                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>


                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 border border-radius2 box_shadow1 p-3 p-md-4">
                        <div class="tab-content dashboard_content ">

                            <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="order-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{trans('admin.Order')}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>{{trans('admin.id')}}</th>
                                                        <th>{{trans('admin.Date')}}</th>
                                                        <th>{{trans('admin.Status')}}</th>
                                                        <th>{{trans('admin.Total')}}</th>
                                                        <th>{{trans('admin.Actions')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                @foreach ($orders as $order) 

                                                    <tr>
                                                        <td>#{{ $order->id }}</td>
                                                        <td>
                                     {{ $order->created_at }}
                                                       
                                                      </td>
                                                        <td>{{trans('admin.Processing')}}</td>
                                                        <td> 
                         {{ presentPrice($order->billing_total) }} {{trans('admin.for')}} {{$order->products->count()}} {{trans('admin.product')}}  (s)</td>
                                                        <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary btn-sm">{{trans('admin.view')}}</a></td>
                                                    </tr>
                        @endforeach
                                                     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">

                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{trans('admin.Your Address')}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                             @foreach(App\Models\user_addresses::where('user_id',auth()->user()->id)->get() as  $address)
                                            <div class="col-md-12">


                                                <div class="contact_wrap Addressbox_style1" style="position:relative; overflow: hidden;">
                   @if($address->Primary == 1)

                                                    <div class="ribbon"><span>{{trans('admin.Primary')}}</span></div>
                                                    <!-- <div class="ribbon ribbon-top-right"><span>Primary</span></div> -->
               @endif


                                                    <div class="contact_text">
                                                        <div class="row bardhe mb-2">
                                                            <div class="feature-col col-xs-12 col-sm-6 col-md-6 kolonat-hom align-content-center">
                                                                <div class="ikonat-home"> <i class="linearicons-map2"></i> </div>
                                                                <div class="contact_text">
                                                                    <span>
                                                                            @if($address->type == 'Home')
                       {{trans('admin.Home1')}}
                                @else
                                 {{trans('admin.work')}}

                                @endif
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <row>
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0">
                                                                        <tbody class="">
                                                                            <tr class="noborderall">
                                                                                <td class="cart_total_label noborderall text_gray">{{trans('admin.Name')}}:</td>
                                                                                <td class="cart_total_amount text-right noborderall">{{$address->Name}}</td>
                                                                            </tr>
                                                                            <tr class="noborderall">
                                                                                <td class="cart_total_label noborderall text_gray">{{trans('admin.Address')}}:</td>
                                                                                <td class="cart_total_amount text-right noborderall">
                                                                                  {{$address->address}}
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="noborderall">
                                                                                <td class="cart_total_label noborderall text_gray">{{trans('admin.Mobile Number')}}:</td>
                                                                                <td class="cart_total_amount text-right noborderall">{{$address->Mobile}}</td>
                                                                            </tr>
                                                                            <tr class="noborderall">
                                                                                <td class="cart_total_label noborderall text_gray"> </td>
                                                                                <td class="cart_total_amount text-right noborderall ">

                                                                                    <a href="{{url('/')}}/Add_New_Address_Step2/{{$address->id}}" class="btn btn-primary btn-sm">{{trans('admin.Edit')}}</a>
<br>
<br>
                                                                                        <a class="alink" href="{{url('/')}}/Delete_user_Address/{{$address->id}}" Alt="Delete"><span><i class="linearicons-trash2 text_default pe-2"></i>{{trans('admin.Delete')}}</span></a> 

                                                                                </td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>



                                                                </div>
                                                            </div>
                                                        </row>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                    @endforeach
 
                                            <div class="col-md-6">
                                                <a href="{{url('/')}}/Add_New_Address_Map_Step">
                                                    <div class="contact_wrap Addressbox_style1">

                                                        <div class="contact_text">
                                                            <div class="row bardhe justify-content-center">
                                                                <div class="feature-col col-xs-12 col-sm-6 col-md-6 kolonat-hom align-content-center">
                                                                    <div class="ikonat-home"> <i class="linearicons-plus"></i> </div>
                                                                    <div class="contact_text">
                                                                        <span>{{trans('admin.Add New Address')}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{trans('admin.Account Details')}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>{{trans('admin.Already have an account?')}} <a href="#">{{trans('admin.Log in instead!')}}</a></p>
                                      

           <form action="{{url('/')}}/my-profile" method="POST" name="enq">

                    @method('patch')

                    @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-3">
           <label>{{trans('admin.First Name')}}<span class="required">*</span></label>
   <input required="" class="form-control" name="name" type="text" value="{{ old('name', $user->name) }}" >
                                                </div>
                                                <div class="form-group col-md-6 mb-3">
                                                    <label>{{trans('admin.Last Name')}} <span class="required">*</span></label>
           <input required="" class="form-control" name="lastname" value="{{ old('lastname', $user->lastname) }}" >
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{trans('admin.Display Name')}}<span class="required">*</span></label>
             <input required="" class="form-control" name="dname" type="text"  value="{{ old('dname', $user->dname) }}" >
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{trans('admin.Email')}} <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="email" type="email" value="{{ old('email', $user->email) }}" >
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{trans('admin.Current Password')}} <span class="required">*</span></label>
                                                    <input  class="form-control" name="password" type="password"  >
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{trans('admin.New Password')}} <span class="required">*</span></label>
                                                    <input  class="form-control" name="npassword" type="password">
                                                </div>
                                                <div class="form-group col-md-12 mb-3">
                                                    <label>{{trans('admin.Confirm Password')}} <span class="required">*</span></label>
                                                    <input  class="form-control" name="password_confirmation" type="password">
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">{{trans('admin.Save')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{trans('admin.Your Wishlist')}}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row shop_container list">
          <!-- span class="cart_sucess"></span -->
@if(Cart::instance('saveForLater')->count() > 0)
                @foreach (Cart::instance('saveForLater')->content() as $item)

                    <div class="col-md-4 col-6" id="Wishlist{{$item->rowId}}">
                                                <div class="product">
                                                    <div class="product_img2">
                                                        <a href="{{url('/')}}/shop/{{ $item->model->id}}">
            <img src="{{Storage::url($item->model->photo)}}" alt="product_img2">
                                                        </a>
                                                        <div class="product_action_box">
                                                            <ul class="list_none pr_action_btn">
                                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_title"><a href="{{url('/')}}/shop/{{ $item->model->id}}">

                                                         @if(session('lang')=='ar')

   {{ $item->model->title_name_ar }}



   @endif



   @if(session('lang')=='en')

   {{ $item->model->title_name_en }}



    @endif
                                                      </a></h6>
                                                        <div class="product_price">
                                                            <span class="price">{{trans('admin.AED')}} 
                                          {{ $item->model->price_offer }}</span>
                                                            <del>AED  {{ $item->model->price }}</del>
                                                            <div class="on_sale">
                           <span>{{ ratio($item->model->price,$item->model->price_offer) }}%  {{trans('admin.OFF')}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="rating_wrap">
                                                            
                                <div class="rating">
                     @if(rating($item->model->id) > 0 and  rating($item->model->id) < 1 )
        <div class="product_rate" style="width:10%;"></div>
        @elseif(rating($item->model->id) >= 1 and  rating($item->model->id) < 1.5)
        <div class="product_rate" style="width:20%;"></div>
          @elseif(rating($item->model->id) >= 1.5 and  rating($item->model->id) < 2)
        <div class="product_rate" style="width:30%;"></div>
        @elseif(rating($item->model->id) >= 2 and  rating($item->model->id) < 2.5)
        <div class="product_rate" style="width:40%;"></div>

           @elseif(rating($item->model->id) >= 2.5 and  rating($item->model->id) < 3)
        <div class="product_rate" style="width:50%;"></div>

        @elseif(rating($item->model->id) >= 3 and  rating($item->model->id) < 3.5)
        <div class="product_rate" style="width:60%;"></div>

         @elseif(rating($item->model->id) >= 3.5 and  rating($item->model->id) < 4)
        <div class="product_rate" style="width:70%;"></div>

           @elseif(rating($item->model->id) >= 4 and  rating($item->model->id) < 4.5)
        <div class="product_rate" style="width:80%;"></div>

         @elseif(rating($item->model->id) >= 4.5 and  rating($item->model->id) < 5)
        <div class="product_rate" style="width:90%;"></div>

         @elseif(rating($item->model->id) >= 5    )
        <div class="product_rate" style="width:100%;"></div>
        @endif


                                                </div>

                                                            <span class="rating_num">(15)</span>
                                                        </div>
                                                        <div class="pr_desc">
                                        @if(session('lang')=='ar')
{!! $item->model->content_name_ar !!}
@endif
  @if(session('lang')=='en')
{!! $item->model->content_name_ar !!} 
@endif
                                                        </div>

                                                        <div class="list_product_action_box">
                                                            <ul class="list_none pr_action_btn">

                                                               <li>
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->model->id}}" >
                <i class="icon-magnifier-add"></i>
            </a>
        </li>

                                                                <li class="add-to-cart">



            

                <form action="#" method="POST">
                       <span>

                                                     {{ csrf_field() }}
                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
<a class="cart-options" id="switchToCart"><span class="hidden">{{ $item->rowId }}
</span><i class="icon-basket-loaded"></i></a>

                            </form>



                                                                </li>


                                                                <li>
                     



                         <form action="#" method="POST">
                       <span>

                                                     {{ csrf_field() }}
                <input type="hidden" name="rowId" value="{{ $item->rowId }}">
<a class="cart-options" id="Removesavforlater"><span class="hidden">{{ $item->rowId }}</span><i class="ion-close"></i></a>
                            </form>



                      </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
          @endforeach

                   @else
          <h5> {{__('admin.No items in Wishlist !')}}</h5>
            @endif


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
        </div>
    </div>
  

@endsection



 