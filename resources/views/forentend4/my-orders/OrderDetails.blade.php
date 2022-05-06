 

 @extends('forentend4.index')



@section('content')

   <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- START CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
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
                                    <a class="nav-link active"   href="{{url('/')}}/my-profile"  ><i class="icon-basket-loaded"></i>Order Details </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="login.html"><i class="ti-lock"></i>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 border border-radius2 box_shadow1 p-3 p-md-4">
                        <div class="tab-content dashboard_content ">

                            <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="order-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Orders</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                              <table class=" table-fill">

                                    <tbody class="table-hover cart">

               @foreach ($products as $product)

                                        <tr class="noborder">
                                            <td class="product-thumbnail">
                              <a href="{{url('/')}}//shop/{{$product->id}}"><img src="{{Storage::url($product->photo)}}" alt="product1"></a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                          <a href="{{url('/')}}//shop/{{$product->id}}">


                                                 @if(session('lang')=='ar')

                {{$product->title_name_ar}}

                @endif

                 @if(session('lang')=='en')

                {{$product->title_name_en}}

                @endif
                                            </a>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <input class="form-control qtydisabled" type="text" size="4" value="{{ $product->pivot->quantity }}" title="Qty" aria-label="" disabled readonly>
                                                </div>
                                                <div class="quantity">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">AED {{ presentPrice($product->price) }}</td>
                                        </tr>
            @endforeach
                                         
                                    </tbody>

                                </table>
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



 