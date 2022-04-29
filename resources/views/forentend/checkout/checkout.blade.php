@extends('forentend.index2')

@section('content')

   @push('js')
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

    <div class="container">

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

       <div class="row"> 

            <div class="col-sm-6"> 

  <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="{{ route('Checkout.store') }}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        @if (auth()->user())
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        @else
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <h2>Payment Details</h2>
                          <div class="form-row">
            <label for="card-element">
              Credit or debit card
            </label>
            <div id="card-element">
              <!-- A Stripe Element will be inserted here. -->
            </div>


            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
          </div>
                 <div class="spacer"></div>
                     <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>

                </form>

            <div class="mt-32">or </div>
            <div class="mt-32">
              <h2>pay with paypal </h2>
              <form method="post" id="paypal-form" action="{{ route('checkout.paypal') }}">
    @csrf
                <section>
                    

                    <div class="bt-drop-in-wrapper">

                        <div id="bt-dropin"></div>
                    </div>
                </section>

                <input id="nonce" name="payment_method_nonce" type="hidden" />
                <button class="button-primary" type="submit"><span>pay with paypal</span></button>
            </form>  
            </div>
            </div>

            </div>
            </div>

             <div class="col-sm-6"> 

 <div class="checkout-table-container">
            @if (Cart::count() > 0)
                                <table class="table">
                                    <thead>
                                    	     <br>
                                      <br>
                                      <br>
                                      <br>
                                      <br><br>
                                      <br>
                                        <tr>
                                        
                                            <th scope="col">product</th>
                                            <th scope="col">price</th>
                                            <th scope="col">qunatity</th>
                                            <th scope="col">total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                @foreach (Cart::content() as $item)

                                        <tr>
                                            
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
      <img src="{{Storage::url($item->model->photo)}}" alt="" style="width: 100px;height: 100px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>



   @if(session('lang')=='ar')
   {{ $item->model->title_name_ar }}

   @endif

   @if(session('lang')=='en')
   {{ $item->model->title_name_en }}

    @endif


                                                    </h4>
                                                    </div>
                                                </div>
                                            </td>
                               <td><p>L.E {{ $item->model->price }}</p></td>
           

           <td> {{ $item->qty }}  </td>


                           <td><p>{{ presentPrice($item->subtotal) }}</p></td>
                                        </tr>

                @endforeach

                                     
                                    </tbody>
                                </table>

                                     @else

                <h3>No items in Cart!</h3>
                    <br>
            
                <a href="{{ route('shop.index') }} " class="button cart_button_checkout">{{trans('admin.ContinueShopping')}}</a>
             <br>
             <br>

            @endif
             <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                        @if (session()->has('coupon'))
                            Discount ({{ session()->get('coupon')['name'] }}) :
                            <br>
                            <hr>
                            New Subtotal <br>
                        @endif
                        Tax ({{config('cart.tax')}}%)<br>
                        <span class="checkout-totals-total">Total</span>

                    </div>

                    <div class="checkout-totals-right">subtotal:
                        {{ presentPrice(Cart::subtotal()) }} <br>
                        @if (session()->has('coupon'))
                            -discount:{{ presentPrice($discount) }} <br>
                            <hr>
                            {{ presentPrice($newSubtotal) }} <br>
                        @endif
                        newTax:{{ presentPrice($newTax) }} <br>
                        <span class="checkout-totals-total">newTotal:{{ presentPrice($newTotal) }}</span>

                    </div>
                </div> <!-- end checkout-totals -->
            </div>
             </div>

           

        </div> <!-- end checkout-section -->

        </div>
    </div>

@endsection

 
