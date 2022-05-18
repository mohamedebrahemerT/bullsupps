    

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
                                <li class="step-item active">
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
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-style">
                                    <div class="row nav nav-tabs" role="tablist">
                                     
                                       <!--div class="col-md-6 active" id="Description-tab" data-bs-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">
                                            <div class="contact_wrap Addressbox_style1 mb-3">
                                                <div class="contact_text">
                                                    <div class="row bardhe justify-content-center">
                                                        <div class="feature-col col-xs-12 col-sm-6 col-md-6 kolonat-hom align-content-center">
                                                            <div class="ikonat-home"> <i class="linearicons-credit-card"></i> </div>
                                                            <div class="contact_text">
                                                                <span class="tabbtn">Pay With Card</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div -->
                                        
                   <div class="col-md-6   active" id="Additional-info-tab" data-bs-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">

                                            <div class="contact_wrap Addressbox_style1 mb-3">
                                                <div class="contact_text">
                                                    <div class="row bardhe justify-content-center">
                                                        <div class="feature-col col-xs-12 col-sm-6 col-md-6 kolonat-hom align-content-center">
                                                            <div class="ikonat-home"> <i class="linearicons-cash-dollar"></i> </div>
                                                            <div class="contact_text">
                                                                <span>Pay With Cash</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content shop_info_tab">
                                        <!--div class="tab-pane fade " id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="border border-radius2 box_shadow1 p-3 p-md-4">
                                                        <div class="heading_s1 pb-3 underline">
                                                            <h5><img class="back-arrow pe-3" src="assets/images/Back_arrow.svg" alt="">Back to Saved Cards</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-8">
                                                              
                                                                <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div class="form-group mb-3">
                                                                                <label for="cardNumber">CARD NUMBER</label>
                                                                                <div class="input-group pt-2">
                                                                                    <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div class="form-group mb-3">
                                                                                <label for="cardNumber">CARD Name</label>
                                                                                <div class="input-group pt-2">
                                                                                    <input type="tel" class="form-control" name="cardName" placeholder="Valid Card Name" autocomplete="cc-number" required autofocus />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xs-7 col-md-7">
                                                                            <div class="form-group mb-3">
                                                                                <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                                                                <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5 col-md-5 pull-right">
                                                                            <div class="form-group mb-3">
                                                                                <label for="cardCVC">CV CODE</label>
                                                                                <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <button class="subscribe btn btn-primary btn-lg btn-block" type="button">Add Card</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                          
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 mb-2">
                                                            <div class="form-group mb-3 mt-3">
                                                                <div class="chek-form">
                                                                    <div class="custome-checkbox">

      <input class="form-check-input" type="checkbox" name="checkbox" id="456"    >
              <label class="form-check-label label_info" for="456"><span>I agree to the <u><strong>
                   <a href="{{url('/')}}/term-condition" target="_blank">
                                                                        Terms & Conditions
                                                                        </a>

                                                                    </strong></u></span></label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="d-grid gap-2">

 

<button class="btn btn-primary m-0" type="button" disabled readonly>Proceed To CheckOut</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div  -->

                                        <div class="tab-pane fade show active" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="product_description">
                                                        <div class="cashdeliveryinst product_sort_info">
                                                            <ul>
                                                                <li>Please note there is a non-refundable fee of AED 10.00 for our cash on delivery service. To save on this amount, <strong>please proceed with debit/credit card.</strong></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form method="post" action="{{url('/')}}/Confirmtheorderandpayonreceipt"  >
                                                    @csrf

                  <input type="hidden" name="user_addresses_id" value="{{session('Addressbox_style1active')}}">

                                                <div class="col-12 mb-2">
                                                    <div class="form-group mb-3 mt-3">
                                                        <div class="chek-form">
                                                            <div class="custome-checkbox">

          <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount22">
                <label class="form-check-label label_info" for="createaccount22"><span>I agree to the <u><strong>

                <a href="{{url('/')}}/term-condition" target="_blank">
                Terms & Conditions
            </a>

            </strong></u></span></label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2">
           <button class="btn btn-primary m-0" type="submit">Proceed To CheckOut  </button>
                                                    </div>

                                                </div>

</form>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                            <div class="comments">
                                                <h5 class="product_tab_title">2 Review For <span>Blue Dress For Woman</span></h5>
                                                <ul class="list_none comment_list mt-4">
                                                    <li>
                                                        <div class="comment_img">
                                                            <img src="assets/images/user1.jpg" alt="user1" />
                                                        </div>
                                                        <div class="comment_block">
                                                            <div class="rating_wrap">
                                                                <div class="rating">
                                                                    <div class="product_rate" style="width:80%"></div>
                                                                </div>
                                                            </div>
                                                            <p class="customer_meta">
                                                                <span class="review_author">Alea Brooks</span>
                                                                <span class="comment-date">March 5, 2018</span>
                                                            </p>
                                                            <div class="description">
                                                                <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
                                                                    vulputate
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comment_img">
                                                            <img src="assets/images/user2.jpg" alt="user2" />
                                                        </div>
                                                        <div class="comment_block">
                                                            <div class="rating_wrap">
                                                                <div class="rating">
                                                                    <div class="product_rate" style="width:60%"></div>
                                                                </div>
                                                            </div>
                                                            <p class="customer_meta">
                                                                <span class="review_author">Grace Wong</span>
                                                                <span class="comment-date">June 17, 2018</span>
                                                            </p>
                                                            <div class="description">
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                                                                    distribution of letters</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="review_form field_form">
                                                <h5>Add a review</h5>
                                                <form class="row mt-3">
                                                    <div class="form-group col-12 mb-3">
                                                        <div class="star_rating">
                                                            <span data-value="1"><i class="far fa-star"></i></span>
                                                            <span data-value="2"><i class="far fa-star"></i></span>
                                                            <span data-value="3"><i class="far fa-star"></i></span>
                                                            <span data-value="4"><i class="far fa-star"></i></span>
                                                            <span data-value="5"><i class="far fa-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-12 mb-3">
                                                        <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-3">
                                                        <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6 mb-3">
                                                        <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                                                    </div>

                                                    <div class="form-group col-12 mb-3">
                                                        <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Submit Review</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-4">
                                <div class="border border-radius2 box_shadow1 p-3 p-md-4">

                                    <div class="heading_s1 pb-3 underline">
                                        <h5 class="">Your Order</h5>
                                    </div>

                                    <div class="table-responsive shop_cart_table">
  @if (Cart::count() > 0)
                                        <table class=" table-fill">

                                            <tbody class="table-hover cart">
                @foreach (Cart::content() as $item)

                                                <tr class="noborder">
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img src="{{Storage::url($item->model->photo)}}" alt="product1"></a>
                                                    </td>
                                                    <td class="product-name" data-title="Product">
                                                        <a href="{{url('/')}}/shop/{{ $item->model->id}}">
                                                         @if(session('lang')=='ar')

   {{ $item->model->title_name_ar }}



   @endif



   @if(session('lang')=='en')

   {{ $item->model->title_name_en }}



    @endif
 

   
      {{$item->options}}
                                                    </a>
                                                    </td>
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity">
                                                            <input class="form-control qtydisabled" type="text" size="4" value="{{$item->qty}}" title="Qty" aria-label="" disabled readonly>
                                                        </div>
                                                        <div class="quantity">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">AED {{$item->subtotal}}</td>
                                                </tr>
                @endforeach
                                                
                                            </tbody>

                                        </table>
                                            @else
          <h3> {{__('No items in Cart!')}}</h3>
            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border border-radius2 box_shadow1 p-3 p-md-4">

                            <div class="heading_s1 mb-3">
                                <h5>Order Summary</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody class="">
                                        <tr class="noborder">
                                            <td class="cart_total_label">Subtotal</td>
                                            <td class="cart_total_amount">AED {{Cart::Subtotal()  }}</td>
                                        </tr>
                                        <tr class="noborder">
                                            <td class="cart_total_label">Shipping Fee</td>
                                            <td class="cart_total_amount">Free Shipping</td>
                                        </tr>
                                        <tr class="noborder">
                                            <td class="cart_total_label">Total<span class="text_gray float-end"> (Inclusive  of VAT)</span></td>
                                            <td class="cart_total_amount"><strong>AED {{Cart::Total()  }}</strong></td>
                                        </tr>
                                        <tr class="noborder">
                                            <td class="cart_total_label "><span class="text_gray">Estimate VAT</span>
                                            </td>
                                            <td class="cart_total_amount text_gray">
                                                <span class="text_gray">AED {{ Cart::tax() }}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                         @php

            $user_addresses_id  =session('Addressbox_style1active');

         if(App\Models\user_addresses::
              where('id',$user_addresses_id)
              ->first())
                                            {
             $user_address=App\Models\user_addresses::
             where('id',$user_addresses_id)
              ->first();  
                                            }
          
                                            @endphp

                                            
                    @isset( $user_address)
                        <div class="fluid-container mb-2 px-2">
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <div class="heading_tab_header">
                                        <div class="heading_s2">
                                            <h4>Ship To</h4>
                                           
                                        </div>
                                        <div class="view_all">
                              <a href="{{url('/')}}/Add_New_Address_Step2/{{$user_address->id}}" class="text_default"><span>Edit</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border border-radius2 box_shadow1 p-3 p-md-4 ">

                            <div class="contact_text">

                                <row>
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody class="">
                                                    <tr class="noborderall">
                                                        <td class="cart_total_label noborderall text_gray">Name:</td>
                                                        <td class="cart_total_amount text-right noborderall">{{$user_address->Name}}
                                                            <br>

                                                        </td>
                                                    </tr>
                                                    <tr class="noborderall">
                                                        <td class="cart_total_label noborderall text_gray">Address:</td>
                                                        <td class="cart_total_amount text-right noborderall">
                                      {{$user_address->address}}
                                        {{$user_address->additional_info}}
                                                        </td>
                                                    </tr>
                                                    <tr class="noborderall">
                                                        <td class="cart_total_label noborderall text_gray">Mobile Number:</td>
                                                        <td class="cart_total_amount text-right noborderall"> 
                                    {{$user_address->Mobile}}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </row>
                            </div>
                        </div>
                        @endif


                    </div>

                </div>
            </div>
            <!-- END SECTION SHOP -->


        </div>
        <!-- END MAIN CONTENT -->

 
@endsection

