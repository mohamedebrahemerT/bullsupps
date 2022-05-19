<?php
namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;

    
 use App\Order;
 use App\AfterPyment;

        use App\Product;
        use App\OrderProduct;
        use App\Mail\OrderPlaced;
        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Mail;
        use App\Http\Requests\CheckoutRequest;
        use Gloudemans\Shoppingcart\Facades\Cart;
        use Cartalyst\Stripe\Laravel\Facades\Stripe;
        use Cartalyst\Stripe\Exception\CardErrorException;
        use Braintree;


 ;
use App\Mail\ExceptionOccured;
       
          //require 'vendor/autoload.php';
           use Mailgun\Mailgun;
 use App\Models\user_addresses;
        class CheckoutController extends Controller
        {
          public function testpaypal()

          {
          return view('testpaypal');
        
          }

          public function testpaypal2()

          {
                $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

                  try {
            $Token = $gateway->ClientToken()->generate();
        } catch (\Exception $e) {
            $Token = null;
        }

          return view('testpaypal2',compact('Token'));
        
          }

          public function testcheekout2(request $request)

          {

             $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

                       $amount =$request->amount;
          $nonce = $request->payment_method_nonce;

          $result = $gateway->transaction()->sale([
              'amount' => $amount,
              'paymentMethodNonce' => $nonce,
              'options' => [
                  'submitForSettlement' => true
              ]
          ]);

          if ($result->success) {
              $transaction = $result->transaction;
              //header("Location: " . $baseUrl . "transaction.php?id=" . $transaction->id);
              return back()->with('success_message','transaction success. the ID'.$transaction->id);
          } else {
              $errorString = "";

              foreach($result->errors->deepAll() as $error) {
                  $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
              }

              //$_SESSION["errors"] = $errorString;
              //header("Location: " . $baseUrl . "index.php");

              return back()->withErrors('an error occured with the message'.$result->message);
          }
        
          }


 

            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
 

      

                if (Cart::instance('default')->count() == 0) 
            {
      session()->flash('danger', 'Your cart is empty. Shop now');

            return redirect()->route('shop.index');
             }

              if (auth()->user() && request()->is('guestCheckout')) 
              {
            return redirect('Checkout');
                }

    if (user_addresses::where('user_id',auth()->user()->id)->count() ==0) 
              {
     
       return redirect('Add_New_Address');
              }
              
       return redirect('Add_New_Address');


                    

            }


            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
            public function store(CheckoutRequest $request)
            {
                 if ($this->productsAreNoLongerAvailable()) 
                 {
            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
                  }
 
         
     return   $contents = Cart::content()->map(function ($item) {
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => round( getNumbers()->get('newTotal') /100,2),
                'currency' => 'CAD',
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => $request->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => Cart::instance('default')->count(),
                  'discount' => collect(session()->get('coupon'))->toJson(),
                ],
            ]);
            $order = $this->addToOrdersTables($request, null);
            $this->decreaseQuantities();
            
            Mail::send(new OrderPlaced($order));


            Cart::instance('default')->destroy();
 
             
            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');

        } catch (CardErrorException $e) {
             
            $this->addToOrdersTables($request, $e->getMessage());
            return back()->withErrors('Error! ' . $e->getMessage());
        }
               
            }

            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
            public function paypalCheckout(Request $request)
            {
                       if ($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
             }
 

                   //////////////////////  start here
          /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

            \Session::put('error', 'Payment failed');
            return Redirect::to('/');

        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') 
        {
           
            
               $PAYID=$result->id;
               $email= $result->payer->payer_info->email;
               $first_name= $result->payer->payer_info->first_name;
               $last_name= $result->payer->payer_info->last_name;
               $last_name= $result->payer->payer_info->last_name;
               $payer_id= $result->payer->payer_info->payer_id;
               /////shipping_address
               $recipient_name= $result->payer->payer_info->shipping_address->recipient_name;
               $line1= $result->payer->payer_info->shipping_address->line1;
               $city= $result->payer->payer_info->shipping_address->city;
               $state= $result->payer->payer_info->shipping_address->state;
               $postal_code= $result->payer->payer_info->shipping_address->postal_code;
               $country_code= $result->payer->payer_info->shipping_address->country_code;
               $total= '25.00';
               $currency= 'USD';

                    $AfterPyment = AfterPyment::create([
            'PAYID' =>$PAYID,
            'email' =>$email,
            'first_name' =>$first_name,
            'last_name' =>$last_name,
            'last_name' =>$last_name,
            'payer_id' =>$payer_id,
            'recipient_name' =>$recipient_name,
            'line1' =>$line1,
            'city' =>$city,
            'state' =>$state,
            'postal_code' =>$postal_code,
            'country_code' =>$country_code,
            'total' =>$total,
            'currency' =>$currency,
         
        ]);

                         $amount =round( getNumbers()->get('newTotal') /100,2);

      

         
 
          if ($result->success) {
           
               $order = $this->addToOrdersTablesPaypal($email,
                $first_name.' '.$last_name,
                null
            );

           Mail::send(new OrderPlaced($order));

            // decrease the quantities of all the products in the cart
            $this->decreaseQuantities();

            Cart::instance('default')->destroy();
            session()->forget('coupon');
             
             
            return Redirect::to('/');

        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/');

    }

                   //////////////////////   end here

     
                 

           

              
             // return back()->with('success_message','transaction success. the ID'.$transaction->id);
              return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');

          }  
            

               protected function addToOrdersTables($request, $error)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_name' => $request->name,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_province' => $request->province,
            'billing_postalcode' => $request->postalcode,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' => getNumbers()->get('discount'),
            'billing_discount_code' => getNumbers()->get('code'),
            'billing_subtotal' => getNumbers()->get('newSubtotal'),
            'billing_tax' => getNumbers()->get('newTax'),
            'billing_total' => getNumbers()->get('newTotal'),
            'error' => $error,
        ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
    }

            protected function addToOrdersTablesPaypal($email, $name, $error)
            {
                 $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $email,
            'billing_name' => $name,
            'billing_discount' => getNumbers()->get('discount'),
            'billing_discount_code' => getNumbers()->get('code'),
            'billing_subtotal' => getNumbers()->get('newSubtotal'),
            'billing_tax' => getNumbers()->get('newTax'),
            'billing_total' => getNumbers()->get('newTotal'),
            'error' => $error,
            'payment_gateway' => 'paypal',
        ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
            }

           protected function decreaseQuantities()
    {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);

            $product->update(['stock' => $product->stock - $item->qty]);
        }
    }

             protected function productsAreNoLongerAvailable()
    {
        foreach (Cart::content() as $item) 
        {
            $product = Product::find($item->model->id);
            if ($product->stock < $item->qty) {
                return true;
            }
        }

        return false;
    }
        }
