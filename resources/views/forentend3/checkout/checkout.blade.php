@extends('forentend3.index')

@section('content')

   @push('js')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
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

@section('extra-css')
    <style type="text/css">
            /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
 
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;

        </style>
    <style>
        .mt-32 {
            margin-top: 32px;
        }
    </style>

    <script src="https://js.stripe.com/v3/"></script>

@endsection

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

    <div class="container" style="background-color:#fdfcfc">

        @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            
 


                      <h2>{{trans('admin.CheckoutForm')}}</h2>
<p class="payy">{{ presentPrice($newTotal) }}{{trans('admin.dsd')}} 
<br>   
{{trans('admin.paywithvisa')}}
<input type="radio"  name="payment_method" >

 </p>

  @if(session('lang')== 'ar')

<div class="row" >

   <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
            @if (Cart::count() > 0)
                @foreach (Cart::content() as $item)

      <p><a href="{{url('/')}}/shop/{{ $item->model->id }}">
        
   @if(session('lang')=='ar')
   {{ $item->model->title_name_ar }}

   @endif

   @if(session('lang')=='en')
   {{ $item->model->title_name_en }}

    @endif
      </a> 
      <span class="price"> {{ $item->model->price }} L.E</span>

    </p>
                @endforeach
    @endif
      
      <hr>
      <p>Total <span class="price" style="color:black"><b>{{ presentPrice($newTotal) }}</b></span></p>
    </div>
  </div>
  <div class="col-75" style="text-align: right;">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>{{trans('admin.Payment')}}</h3>
            <label for="fname">{{trans('admin.AcceptedCards')}} </label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">{{trans('admin.NameonCard')}}</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" class="form-control" >
            <label for="ccnum">{{trans('admin.Creditcardnumber')}}</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" class="form-control" >
            <label for="expmonth">{{trans('admin.ExpMonth')}}</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" class="form-control" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">{{trans('admin.ExpYear')}}</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" class="form-control" >
              </div>
              <div class="col-50">
                <label for="cvv">{{trans('admin.CVV')}}</label>
                <input type="text" id="cvv" name="cvv" placeholder="352"  class="form-control" >
              </div>
            </div>
          </div>

           <div class="col-50">
            <h3>{{trans('admin.BillingAddress')}} </h3>
            <label for="fname">{{trans('admin.FullName')}} <i class="fa fa-user"></i></label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" class="form-control" >
            <label for="email">{{trans('admin.Email')}} <i class="fa fa-envelope"> </i></label>
@if (auth()->user())
                  <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                       @else
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @endif


            <label for="adr">{{trans('admin.Address')}} <i class="fa fa-address-card-o"></i></label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" class="form-control" >
            <label for="city">{{trans('admin.City')}} <i class="fa fa-institution"></i> </label>
            <input type="text" id="city" name="city" placeholder="New York" class="form-control" >

            <div class="row">
              <div class="col-50">
                <label for="state">{{trans('admin.State')}}</label>
                <input type="text" id="state" name="state" placeholder="NY" class="form-control" >
              </div>
              <div class="col-50">
                <label for="zip">{{trans('admin.Zip')}}</label>
                <input type="text" id="zip" name="zip" placeholder="10001" class="form-control" >
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr" class="form-control" >
          {{trans('admin.Shippingaddresssameasbilling')}}
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>

       <h2>{{trans('admin.paywithpaypal')}} </h2>
              <form method="post" id="paypal-form" action="{{ route('checkout.paypal') }}">
    @csrf
                <section>
                    

                    <div class="bt-drop-in-wrapper">

                        <div id="bt-dropin"></div>
                    </div>
                </section>

                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <button class="button-primary" type="submit"><span>{{trans('admin.paywithpaypal')}}</span></button>
            </form>  

             

<p class="payy">

{{trans('admin.payinresice')}}
<input type="radio"  name="payment_method" >

 

 </p>


    </div>
  </div>

 
</div>


                      @endif

           @if(session('lang')== 'en')

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>{{trans('admin.BillingAddress')}} </h3>
            <label for="fname"><i class="fa fa-user"></i>{{trans('admin.FullName')}}</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe" class="form-control" >
            <label for="email"><i class="fa fa-envelope"></i>{{trans('admin.Email')}} </label>
@if (auth()->user())
                  <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                       @else
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @endif


            <label for="adr"><i class="fa fa-address-card-o"></i>{{trans('admin.Address')}} </label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" class="form-control" >
            <label for="city"><i class="fa fa-institution"></i>{{trans('admin.City')}} </label>
            <input type="text" id="city" name="city" placeholder="New York" class="form-control" >

            <div class="row">
              <div class="col-50">
                <label for="state">{{trans('admin.State')}}</label>
                <input type="text" id="state" name="state" placeholder="NY" class="form-control" >
              </div>
              <div class="col-50">
                <label for="zip">{{trans('admin.Zip')}}</label>
                <input type="text" id="zip" name="zip" placeholder="10001" class="form-control" >
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>{{trans('admin.Payment')}}</h3>
            <label for="fname">{{trans('admin.AcceptedCards')}} </label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">{{trans('admin.NameonCard')}}</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" class="form-control" >
            <label for="ccnum">{{trans('admin.Creditcardnumber')}}</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" class="form-control" >
            <label for="expmonth">{{trans('admin.ExpMonth')}}</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" class="form-control" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">{{trans('admin.ExpYear')}}</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" class="form-control" >
              </div>
              <div class="col-50">
                <label for="cvv">{{trans('admin.CVV')}}</label>
                <input type="text" id="cvv" name="cvv" placeholder="352"  class="form-control" >
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr" class="form-control" >
          {{trans('admin.Shippingaddresssameasbilling')}}
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>

       <h2>{{trans('admin.paywithpaypal')}} </h2>
              <form method="post" id="paypal-form" action="{{ route('checkout.paypal') }}">
    @csrf
                <section>
                    

                    <div class="bt-drop-in-wrapper">

                        <div id="bt-dropin"></div>
                    </div>
                </section>

                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <button class="button-primary" type="submit"><span>{{trans('admin.paywithpaypal')}}</span></button>
            </form>  

             

<p class="payy">

{{trans('admin.payinresice')}}
<input type="radio"  name="payment_method" >

 

 </p>


    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
            @if (Cart::count() > 0)
                @foreach (Cart::content() as $item)

      <p><a href="{{url('/')}}/shop/{{ $item->model->id }}">
        
   @if(session('lang')=='ar')
   {{ $item->model->title_name_ar }}

   @endif

   @if(session('lang')=='en')
   {{ $item->model->title_name_en }}

    @endif
      </a> 
      <span class="price"> {{ $item->model->price }} L.E</span>

    </p>
                @endforeach
    @endif
      
      <hr>
      <p>Total <span class="price" style="color:black"><b>{{ presentPrice($newTotal) }}</b></span></p>
    </div>
  </div>
</div>


                      @endif
       

@endsection

 
