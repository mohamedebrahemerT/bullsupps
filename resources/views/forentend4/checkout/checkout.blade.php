    

@extends('forentend4.index')



@section('content') 





@push('js')

<script type="text/javascript">



  $(document).ready(function(){



    @if(old('country_id')) 





    $.ajax({

     type:'GET',

     url:'{{ url('states/create') }}',

     data:{country_id:'{{ old('country_id') }}',select:'{{ old('city_id') }}'},

     dataType: "html",

     success: function(data) {

      $('.city').html(data);

    },

    error: function(data){

      alert("fail");

    }

  });



    @endif



    $(document).on('change','.country_id',function(){



      var country= $('.country_id option:selected').val();

      if (country > 0)

      {



        $.ajax({

         type:'GET',

         url:'{{ url('states/create') }}',

         data:{country_id:country,select:''},

         dataType: "html",

         success: function(data) {

          $('.city').html(data);

        },

        error: function(data){

          alert("fail");

        }

      });



      }

      else

      {

        $('.city').html('');

      }







    });

  });





</script>



<script>

  function myFunction() {

    window.print();

  }



  function buttonFunction(el) {

    el.style.backgroundColor = "green";

    el.value = "Close Curtain";







  }







</script>



<script type="text/javascript">

  function change( el )

  {



    el.style.backgroundColor = "green";



    if ( el.value === "{{trans('admin.presstoagree')}}" )

      el.value = "{{trans('admin.thankstoagree')}}";

    else

      el.value = "{{trans('admin.thankstoagree')}}";

  }

</script>

@endpush





@push('js')





<script type="text/javascript">



  $(document).ready(function(){



    @if(old('stat_id')) 





    $.ajax({

     type:'GET',

     url:'{{ url('states/create') }}',

     data:{city_id:'{{ old('city_id') }}',select:'{{ old('city_id') }}'},

     dataType: "html",

     success: function(data) {

      $('.stat').html(data);

    },

    error: function(data){

      alert("fail");

    }

  });



    @endif



    $(document).on('change','.city_id',function(){



      var city= $('.city_id option:selected').val();

      if (city > 0)

      {



        $.ajax({

         type:'GET',

         url:'{{ url('states/create') }}',

         data:{city_id:city,select:''},

         dataType: "html",

         success: function(data) {

          $('.stat').html(data);

        },

        error: function(data){

          alert("fail");

        }

      });



      }

      else

      {

        $('.stat').html('');

      }







    });

  });





</script>

@endpush



@push('js')




<script type="text/javascript"><!--

$('.date').datetimepicker({

	language: 'ar',

	pickTime: false

});



$('.time').datetimepicker({

	language: 'ar',

	pickDate: false

});



$('.datetime').datetimepicker({

	language: 'ar',

	pickDate: true,

	pickTime: true

});

//--></script>





<script type="text/javascript"><!--

$('input[name=\'payment\']').on('change', function() {

	$('.payment').hide();



	$('#payment-' + this.value).show();

});



$('input[name=\'payment\']:checked').trigger('change');

//--></script> 









<script src="https://js.stripe.com/v3/"></script>

<script src="https://js.braintreegateway.com/web/dropin/1.18.0/js/dropin.min.js"></script>



<script type="text/javascript">

     // Create a Stripe client.

     var stripe = Stripe('{{ config('services.stripe.key') }}');

// Create an instance of Elements.

var elements = stripe.elements();



// Custom styling can be passed to options when creating an Element.

// (Note that this demo uses a wider set of styles than the guide below.)

var style = {

  base: {

    color: '#32325d',

    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',

    fontSmoothing: 'antialiased',

    fontSize: '16px',

    '::placeholder': {

      color: '#aab7c4'

    }

  },

  invalid: {

    color: '#fa755a',

    iconColor: '#fa755a'

  }

};



// Create an instance of the card Element.

var card = elements.create('card', {style: style});



// Add an instance of the card Element into the `card-element` <div>.

card.mount('#card-element');



// Handle real-time validation errors from the card Element.

card.addEventListener('Checkout', function(event) {

  var displayError = document.getElementById('card-errors');

  if (event.error) {

    displayError.textContent = event.error.message;

  } else {

    displayError.textContent = '';

  }

});



// Handle form submission.

var form = document.getElementById('payment-form');

form.addEventListener('submit', function(event) {

  event.preventDefault();



  var options={ country: 'US',

  currency: 'usd',

  routing_number: '110000000',

  account_number: '000123456789',

  account_holder_name: 'Jenny Rosen',

  account_holder_type: 'individual'

};



stripe.createToken(card,options).then(function(result) {

 if (result.error) {

      // Inform the user if there was an error.

      var errorElement = document.getElementById('card-errors');

      errorElement.textContent = result.error.message;

    } else {

      // Send the token to your server.

      stripeTokenHandler(result.token);

    }

  });

});



// Submit the form with the token ID.

function stripeTokenHandler(token) {

  // Insert the token ID into the form so it gets submitted to the server

  var form = document.getElementById('payment-form');

  var hiddenInput = document.createElement('input');

  hiddenInput.setAttribute('type', 'hidden');

  hiddenInput.setAttribute('name', 'stripeToken');

  hiddenInput.setAttribute('value', token.id);

  form.appendChild(hiddenInput);



  // Submit the form

  form.submit();

}



   ////////// paypalll

   var form = document.querySelector('#paypal-form');

   var client_token = "";



   braintree.dropin.create({

    authorization: client_token,

    selector: '#bt-dropin',

    paypal: {

      flow: 'vault'

    }

  }, function (createErr, instance) {

    if (createErr) {

      console.log('Create Error', createErr);

      return;

    }

              // var elem = document.querySelector('.braintree-option__card');

              //elem.parentNode.removeChild(elem);



              form.addEventListener('submit', function (event) {

                event.preventDefault();



                instance.requestPaymentMethod(function (err, payload) {

                  if (err) {

                    console.log('Request Payment Method Error', err);

                    return;

                  }





              // Add the nonce to the form and submit

              document.querySelector('#nonce').value = payload.nonce;

              form.submit();

            });

              });

            });







          </script>

          @endpush







          <div class="container">

           <ul class="breadcrumb">

            <li><a href="{{url('/')}}">{{trans('admin.Homepage')}}</a></li>

            <li><a href="{{url('/')}}/cart">{{trans('admin.cart')}}</a></li>

            <li><a href="{{url('/')}}/checkout">{{trans('admin.Endtherequest')}}</a></li>

          </ul>

          <div class="row">



            <div id="content" class="col-sm-12">



              <h1>{{trans('admin.payment')}}</h1>

              <div class="so-onepagecheckout layout1 ">

                <div class="col-left col-lg-6 col-md-6 col-sm-6 col-xs-12">






                  <div class="checkout-content checkout-register">

                    <fieldset id="account">

                      <h2 class="secondary-title"><i class="fa fa-user-plus"></i>

                      {{trans('admin.Yourpersonalinformation')}}</h2>

                      <div class="payment-new box-inner">

                      
    <div class="form-group input-lastname required" style="width: 49%; float: right;">

                          <input type="text" name="lastname" value="{{ auth()->user()->lastname }}"

                          placeholder="{{trans('admin.familyname')}}" id="input-payment-lastname" class="form-control"/>

                        </div>



                        <div class="form-group input-firstname required" style="width: 49%; float: left;">



                          @if (auth()->user())

                          <input type="name" class="form-control"   name="name" value="{{ auth()->user()->name }}" placeholder="البريد الالكتروني  *" id="input-payment-email" placeholder="{{trans('admin.FirstName')}}" readonly>

                          @else

                          <input type="firstname" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="{{trans('admin.FirstName')}}" required>

                          @endif

                        </div>




                    





                        <div class="form-group required">





                         <label for="email">{{trans('admin.email')}}</label>

                         @if (auth()->user())

                         <input type="email" class="form-control"   name="email" value="{{ auth()->user()->email }}" placeholder="البريد الالكتروني  *" id="input-payment-email" readonly>

                         @else

                         <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>

                         @endif

                       </div>




                     </div>

                   </fieldset>



                   <fieldset id="address">

                    <h2 class="secondary-title"><i class="fa fa-map-marker"></i>

                      {{trans('admin.Yourtitles')}}





                    </h2>

                    <div class=" checkout-payment-form">

                      <div class="box-inner">



                        <div id="payment-new" style="display: block">


                          <form method="post" action="{{url('/')}}/Confirmtheorderandpayonreceipt" id="form2">

                           @if(auth()->user()->country_id2)

                           @if(auth()->user()->shapingplace     == 'address1')
                           <input type="radio" id="this" name="shapingplace" value="address1" checked>


                           @else
                           <input type="radio" id="this" name="shapingplace" value="address1">

                           @endif

                           <label for="male"> 

                           </label><br>

                           @endif


                           @if(auth()->user()->country_id)

                           <div class="form-group col-lg-12 col-sm-12 col-md-12" style="border: 1px solid #0000f4;"> 

                            <a href="{{url('/')}}/my-profile"> 
                              <span style="float: left;">  <i class="fa fa-edit" style="font-size:36px;color:blue"></i></span>
                            </a>


                            <a href="{{url('/')}}/my-profile"> 
                              <span style="float: left; margin-left: 16px;">  <i class="fa fa-trash-o" style="font-size:36px;color:red"></i></span>
                            </a>

                            {{trans('admin.country')}}   :


                            {{ App\countries::where('id',auth()->user()->country_id )->first()->countries_name_ar  }}

                            <br>
                             {{trans('admin.city')}}    :

                            {{ App\cities::where('id',auth()->user()->city_id )->first()->cities_name_ar  }}
                         
                 <!--span>   <br>  المركز  : </span-->
                          

                            {{-- App\states::where('id',auth()->user()->stat_id )->first()->states_name_ar  --}}
                            <br>
                            {{trans('admin.MoreDetailsAboutYourAddress')}} :
                            {{ auth()->user()->MoreDetailsAboutYourAddress }}
                            <br>


                            {{trans('admin.phone')}} ::   {{ auth()->user()->phone }}



                          </div>

                          @endif


                          @if(auth()->user()->country_id2)


                          @if(auth()->user()->shapingplace     == 'address2')
                          <input type="radio" id="this" name="shapingplace" value="address2" checked>


                          @else
                          <input type="radio" id="this" name="shapingplace" value="address2">

                          @endif


                          <label for="this"> </label><br>

                          <div class="form-group col-lg-12 col-sm-12 col-md-12" style="border: 1px solid #0000f4;"> 



                            <a href="{{url('/')}}/my-profile"> 

                              <span style="float: left;">  <i class="fa fa-edit" style="font-size:36px;color:blue"></i></span>
                            </a>


                            <a href="{{url('/')}}/my-profile"> 

                              <span style="float: left; margin-left: 16px;">  <i class="fa fa-trash-o" style="font-size:36px;color:red"></i></span>
                            </a>
                              {{trans('admin.country')}}    :  :{{ App\countries::where('id',auth()->user()->country_id2 )->first()->countries_name_ar  }}

                            <br>
                           {{trans('admin.city')}}  :{{ App\cities::where('id',auth()->user()->city_id2 )->first()->cities_name_ar  }}
                          

                          <!--span>  <br>  المركز     </span --> : {{-- App\states::where('id',auth()->user()->stat_id2 )->first()->states_name_ar  --}}
                            <br>

                            {{trans('admin.MoreDetailsAboutYourAddress')}} :{{ auth()->user()->MoreDetailsAboutYourAddress2 }}
                            <br>

                            {{trans('admin.phone')}}: {{ auth()->user()->phone }}



                          </div >
                          @endif

 

                          <div id="Create" style="display:none">
                            <div class="form-group col-lg-12 col-sm-12 col-md-12"> 

                             {{ Form::label('country_id', trans('admin.country2'))  }}

                             {{ Form::select('country_id',App\countries::pluck('countries_name_ar','id'),old('country_id'),['class'=>'form-control country_id',"placeholder"=>"........"] )  }}

                           </div> 


                           <div class="form-group col-lg-12 col-sm-12 col-md-12">            
                             {{ Form::label('city', trans('admin.city'))  }}
                             <span class="city"></span>

                           </div> 


                           <div class="form-group col-lg-12 col-sm-12 col-md-12"> 
                             {{ Form::label('city', trans('admin.stat'))  }}
 

                             <label class="control-label" for="input-MoreDetailsAboutYourAddress">
                              {{trans('admin.MoreDetailsAboutYourAddress')}}
                            </label>

                            <input type="text" name="MoreDetailsAboutYourAddress2" value="{{ old('MoreDetailsAboutYourAddress') }}" 
                            placeholder="{{trans('admin.MoreDetailsAboutYourAddress')}}" id="input-email" class="form-control"  />
                            <strong>{{ $errors->first('MoreDetailsAboutYourAddress') }}</strong>
                          </div> 

                          <input type="hidden" name="updateadress" value="" id="updateadress">

                          <input type="hidden" name="shipingupdate" value="" id="shipingupdate">


                          @csrf



                          <br>

                          <button type="submit" style="margin-bottom: 15px;" id="btn"    type="button" class="btn btn-primary"><i class="fa fa-plus" style="font-size:19px;color:red"></i> أضافة  </button>





                        </div>



                        <script type="text/javascript">
                          $(document).ready(function () {
                            $("#btn").click(function () {
                              $("#Create").toggle();

                              $('#updateadress').val("updateadress"); 


                            });
                          });



                          $('input[name=shapingplace]').change(function () {

                            $('#shipingupdate').val("shipingupdate"); 


                            $("#form2").submit();

                          });

                        </script>






                        <div class="form-group required">





                          <div class="form-group required">

                            <textarea type="text" name="billing_address" value="" placeholder="ملاحظات الشحن " id="input-payment-postcode" class="form-control"/>
                          </textarea>
                        </div>


                        <div class="form-group required">

                          <div class="form-group required">
                            <input type="text" name="phone2" value="" 
                placeholder="{{trans('admin.anatherphone')}}" id="input-phone2-phone2" class="form-control"/>

                          </div>


                        </div>


                      </div>





                    </div>

                  </div>



                </fieldset>








            



            </div>


              <fieldset id="affiliate">

          <legend>  {{trans('admin.payment methods')}}</legend>

       
 
 

          <div class="form-group">

            <label class="col-sm-2 control-label"> {{trans('admin.payment methods')}}</label>

            <div class="col-sm-10">

              <div class="radio">

                <label>                   <input type="radio" name="payment" value="cheque" checked="checked" />
{{trans('admin.cash')}}
                              </label>

              </div>

          
 


            </div>

          </div>

          <div class="form-group payment required" id="payment-cheque">

           
            <div class="col-sm-10">

                 <input type="submit" value="{{trans('admin.cash2')}}"  data-loading-text="جاري ..." class="btn btn-primary xcdgjhg" style="    margin-bottom: 4%;">





              </form>

               </div>

          </div>

         
 
        
             </div>

        </fieldset>

     


        </div>



        <div class="col-right col-lg-6 col-md-6 col-sm-6 col-xs-12">

         

          <section class="section-right">

         

            <div class="checkout-content checkout-cart">



              <div class="box-inner">

                <div class="table-responsive checkout-product">

                  <table class="table table-bordered table-hover"  
           @if(session('lang') == 'ar') style="direction: rtl !important;" @endif>

                    <thead>

                      <tr>

                        <th class="text-left name" colspan="2">{{trans('admin.name')}}</th>

                        <th class="text-center quantity">{{trans('admin.Quantity')}}</th>

                        <th class="text-center  ">{{trans('admin.unitprice')}}</th>

                        <th class="text-right total">{{trans('admin.Total')}}</th>

                      </tr>

                    </thead>

                    <tbody>

                      @foreach (Cart::content() as $item)



                      <tr>
                      	<td>


 @if(session('lang') == 'ar')
 {{ $item->model->title_name_ar }}
  @elseif(session('lang') == 'en')
 {{ $item->model->title_name_en }}
 @else
 {{ $item->model->title_name_en }}
      @endif

                      		

                      	</td>
                       <td class="text-center">

                         <a href="{{url('/')}}/shop/{{ $item->model->id}}">



                          <?php if(session('SRC'.$item->model->id)) {?>



                            <img src="{{url('/')}}/{{session('SRC'.$item->model->id)}}" alt="Drutick lanaeger" title="Drutick lanaeger" class="img-thumbnail"  style="width:47px;height:47px" />



                          <?php   }  else {?>



                           <img src="{{Storage::url($item->model->photo)}}" alt="Drutick lanaeger" title="Drutick lanaeger" class="img-thumbnail" style="width:47px;height:47px" />





                         <?php  } ?>





                       </a> 

                     </td>

 
 


 



                

                   <td class="text-left quantity">

                    <div class="input-group">



                      <input type="text" name="quantity[269]" value="{{$item->qty}}" size="1" class="form-control" />



                      <span class="input-group-btn">

                       <span data-toggle="tooltip" title="حذف" data-product-key="269" class="btn-delete"><i class="fa fa-trash-o"></i></span>

                     </span>

                   </div>

                 </td>

                 <td class="text-right  ">

                   @if(session('price'))

                   {{ session('price') }} {{trans('admin.pound')}}   

                   @else



                   @if($item->model->price_offer  > 0)

                   {{ $item->model->price_offer }}  {{trans('admin.pound')}}  
                   @else

                   {{ $item->model->price }}  {{trans('admin.pound')}}  

                   @endif

                   @endif

                 </td>

                 <td class="text-right total">

                   {{$item->subtotal}} {{trans('admin.pound')}}

                 </td>

               </tr>

               @endforeach



             </tbody>

             <tfoot>

              <tr>

                <td colspan="4" class="text-left">{{trans('admin.totol')}} </td>

                <td class="text-right">{{Cart::Total()}} {{trans('admin.pound')}}</td>

              </tr>

              <tr>

                <td colspan="4" class="text-left">{{trans('admin.shipingprice')}} :</td>

                <td class="text-right">

                  @php

                  if(auth()->user()->shapingplace     == 'address2')

                  {
                    if(auth()->user()->city_id2 )
                    {


                      $city_id=App\cities::where('id',auth()->user()->city_id2 )->first()->id;



                    }

                  }


                  if(auth()->user()->shapingplace     == 'address1')

                  {
                    if(auth()->user()->city_id )
                    {


                      $city_id=App\cities::where('id',auth()->user()->city_id )->first()->id;



                    }

                  }




                  if(App\statDistrebutionToZones::where('city_id',$city_id)->first())
                  {

                   $zone_id=App\statDistrebutionToZones::where('city_id',$city_id)->first()->zone_id;

                   $zoneprice=App\zones::where('id',$zone_id)->first()->price;

                 }



                 


                 @endphp

                 @if(App\statDistrebutionToZones::where('city_id',$city_id)->first())


                 {{$zoneprice}}
                 {{trans('admin.pound')}}


                 @else
                 @php
                 $zoneprice = DB::table('zones')->max('price');


                 @endphp

                 {{$zoneprice}}
                 {{trans('admin.pound')}}

                 @endif

               </td>

             </tr>




  @php
          $vat_value=0;
  foreach (Cart::content() as $item)
  { 
     if($item->model->vat == 1)
     {
          $vat_value=$vat_value + $item->model->vat_value; 

     }
   }
@endphp
           @isset($vat_value)
               <tr>

              <td colspan="4" class="text-left"><strong> {{trans('admin.vat')}}     </strong></td>
              <td class="text-right">{{$vat_value}} {{trans('admin.pound')}}</td>
           

            
            </tr>
            @endisset


             <tr>





              <td colspan="4" class="text-left">{{trans('admin.Total')}}:</td>

              <td class="text-right">{{Cart::Total() +  $zoneprice + $vat_value }} {{trans('admin.pound')}}</td>

            </tr>

            <tr>
             @if(session('cpn'))

             <tr>

              <td colspan="4" class="text-left">جموع العربيه بعد الخصم هو  </td>

              <td class="text-right">

                {{session('newsubtotalcpn')}} {{trans('admin.pound')}}
              </td>

            </tr>
            @endif



          </tfoot>

        </table>

      </div>



  
   


    </div>



  </div>









</section>

 <section class="section-right">

            <div id="coupon_voucher_reward">

             <div class="checkout-content coupon-voucher">

              <h2 class="secondary-title"><i class="fa fa-gift"></i>

                {{trans('admin.DoyouHaveaCouponorVoucher?')}}                         

              </h2>

              <div class="box-inner">



                <div class="panel-body checkout-voucher">

                  <label class="col-sm-2 control-label" for="input-voucher">

                    {{trans('admin.Entervouchercode')}}                         





                  </label>

                  <form action="{{ route('coupon.store') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="input-group">

                      <input type="text" name="coupon_code" value="" placeholder=" {{trans('admin.Pleaseenterthegiftvouchercode')}}" id="input-voucher" class="form-control" />

                      <span class="input-group-btn">

                        <input type="submit" value="{{trans('admin.submit')}}"   data-loading-text="جاري ..."  class="btn btn-primary" />

                      </span> </div>

                    </form>

                  </div>



                </div>

              </div>



            </div>

</section>

</div>

</div>

</div>

</div>

</div>



<br>

<br>

<br>

<br>

 

@endsection

