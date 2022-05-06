    

@extends('forentend4.index')



@section('content') 

      <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section page-title-mini">
        <div class="custom-container">
            <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <!-- <h1>Product Detail</h1> -->
                        <ol class="breadcrumb justify-content-md-start">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item"><a href="#">Shopping Cart</a></li>
                            <li class="breadcrumb-item active">Payment Method</li>
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
            <div class="custom-container mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">
                            <ul class="step d-flex flex-nowrap">
                                <li class="step-item ">
                                    <a href="{{url('/')}}/Add_New_Address" class="">Shipping Address</a>
                                </li>
                                <li class="step-item ">
                                    <a href="{{url('/')}}/Payment_Method" class="">Payment</a>
                                </li>
                                <li class="step-item ">
                                    <a href="#!" class="">Order Placed </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-8">
                        <div class="text-center order_complete">
                            <i class="fas fa-check-circle"></i>
                            <div class="heading_s1">
                                <h3>Your order is completed!</h3>
                            </div>
                            <p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p>
                            <a href="{{url('/')}}/shop" class="btn btn-primary">Continue Shopping</a>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6 col-md-10 col-sm-12 ">
                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">

                            <div class="heading_s1 pb-3 underline">
                                <h5 class="">Your Order</h5>
                            </div>

                            <div class="table-responsive shop_cart_table">

                                <table class=" table-fill">

                                    <tbody class="table-hover cart">

              @foreach($OrderProducts as $OrderProduct)

                                        <tr class="noborder">
                                            <td class="product-thumbnail">
                              <a href="{{url('')}}/shop/{{$OrderProduct->product_idd->id}}"><img src="{{Storage::url($OrderProduct->product_idd->photo)}}" alt="product1"></a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                          <a href="{{url('')}}/shop/{{$OrderProduct->product_idd->id}}">
                                                 @if(session('lang')=='ar')

                {{$OrderProduct->product_idd->title_name_ar}}

                @endif

                 @if(session('lang')=='en')

                {{$OrderProduct->product_idd->title_name_en}}

                @endif
                                            </a>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <input class="form-control qtydisabled" type="text" size="4" value="{{$OrderProduct->quantity}}" title="Qty" aria-label="" disabled readonly>
                                                </div>
                                                <div class="quantity">
                                                </div>
                                            </td>
                                            <td class="product-subtotal" data-title="Total">AED {{$OrderProduct->Subtotal}}</td>
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

@endsection

