<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use PayPal\Api\Amount;

use PayPal\Api\Details;

use PayPal\Api\Item;



/** All Paypal Details class **/

use PayPal\Api\ItemList;

use PayPal\Api\Payer;

use PayPal\Api\Payment;

use PayPal\Api\PaymentExecution;

use PayPal\Api\RedirectUrls;

use PayPal\Api\Transaction;

use PayPal\Auth\OAuthTokenCredential;

use PayPal\Rest\ApiContext;

use Redirect;

use Session;

use Carbon\Carbon;

 use App\AfterPyment;

 use App\Order;
 use App\admin;

 use App\countries;
 use App\cities;
 use App\states;
 use App\user;
  use App\Product;
        use App\OrderProduct;
        use App\Mail\OrderPlaced;
        use App\OrderShareWithAllVendor;

        use Illuminate\Support\Facades\Mail;

        use App\Http\Requests\CheckoutRequest;

        use Gloudemans\Shoppingcart\Facades\Cart;

        use Cartalyst\Stripe\Laravel\Facades\Stripe;

        use Cartalyst\Stripe\Exception\CardErrorException;

        use Braintree;



use URL;



class PaymentController extends Controller

{

    

    public function index()

    {

        return view('forentend.paywithpaypal');

    }

    public function payWithpaypal(Request $request)

    {

           

        $payer = new Payer();

        $payer->setPaymentMethod('paypal');



        $item_1 = new Item();



        $item_1->setName('Item 1') /** item name **/

            ->setCurrency('USD')

            ->setQuantity(1)

            ->setPrice( ( getNumbers()->get('newTotal')  + TotalAfterShipingPrice() ) /  15.75 ); /** unit price **/



        $item_list = new ItemList();

        $item_list->setItems(array($item_1));



        $amount = new Amount();

        $amount->setCurrency('USD')

            ->setTotal( ( getNumbers()->get('newTotal')  + TotalAfterShipingPrice()  ) /  15.75  );



        $transaction = new Transaction();

        $transaction->setAmount($amount)

            ->setItemList($item_list)

            ->setDescription('Your transaction description');



        $redirect_urls = new RedirectUrls();

        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/

            ->setCancelUrl(URL::to('status'));



        $payment = new Payment();

        $payment->setIntent('Sale')

            ->setPayer($payer)

            ->setRedirectUrls($redirect_urls)

            ->setTransactions(array($transaction));

        /** dd($payment->create($this->_api_context));exit; **/

        try {



            $payment->create($this->_api_context);



        } catch (\PayPal\Exception\PPConnectionException $ex) {



            if (\Config::get('app.debug')) {



                \Session::put('error', 'Connection timeout');

                return Redirect::to('/');



            } else {



                \Session::put('error', 'Some error occur, sorry for inconvenient');

                return Redirect::to('/');



            }



        }



        foreach ($payment->getLinks() as $link) {



            if ($link->getRel() == 'approval_url') {



                $redirect_url = $link->getHref();

                break;



            }



        }



        /** add payment ID to session **/

        Session::put('paypal_payment_id', $payment->getId());



        if (isset($redirect_url)) {



            /** redirect to paypal **/

            return Redirect::away($redirect_url);



        }



        \Session::put('error', 'Unknown error occurred');

        return Redirect::to('/');



    }



    public function getPaymentStatus()

    {





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



          //  return 'test to check';

           

            

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



      



         

 

        

           

               $order = $this->addToOrdersTablesPaypal($email,

                $first_name.' '.$last_name,

                null

            );



           Mail::send(new OrderPlaced($order));



            // decrease the quantities of all the products in the cart

            $this->decreaseQuantities();



            Cart::instance('default')->destroy();

            session()->forget('coupon');

         

             

      



           // session()->flash('success',trans('admin.Paymentsuccess'));



            return Redirect::to('/');



        }



        \Session::put('error', 'Payment failed');

        return Redirect::to('/');



    }





       protected function addToOrdersTablesPaypal($email, $name,$billing_address , $error)

            {
 
                     $order = Order::create([

            'user_id' => auth()->user() ? auth()->user()->id : null,

            'billing_email' => $email,

            'billing_name' => $name,
            'billing_address' => $billing_address,
            'address_id' => $billing_address,

            'billing_discount' => getNumbers()->get('discount'),

            'billing_discount_code' => getNumbers()->get('code'),

            'billing_subtotal' => getNumbers()->get('newSubtotal'),

            'billing_tax' => getNumbers()->get('newTax'),

            'billing_total' => getNumbers()->get('newTotal') + TotalAfterShipingPrice(),

            'error' => $error,

            'payment_gateway' => '  Pay With Cash ',

            'Invoice '=>substr(md5(microtime()),rand(0,1000000),10),

            'PaymentDue'=>date('Y-m-d H:i:s'),

             

        ]);

                  

                    OrderShareWithAllVendor::create([

                    'order_id' => $order->id,

                    'admin_id' => 1,
                    'affiliateID' =>    $affiliateID= session()->get('affiliateID')

                      



                    ]);

            

              

                   





            

        // Insert into order_product table

        foreach (Cart::content() as $item) {
                
  

            $OrderProduct=OrderProduct::create([

                'order_id' => $order->id,

                'product_id' => $item->model->id,

                'admin_id' => $item->model->admin_id,

                'price'=>$item->model->price,

                'quantity' => $item->qty,

                'Subtotal'=>$item->subtotal,

                'Serial'=>substr(md5(microtime()),rand(0,1000000),10),

            ]);
 
        }

    

        return $order;

            }


             protected function addToOrdersTablesPaypal2($email, $name,$billing_address , $error)

            {



               
               

                     $order = Order::create([

            'user_id' => auth()->user() ? auth()->user()->id : null,

            'billing_email' => $email,

            'billing_name' => $name,
            'billing_address' => $billing_address,

            'billing_discount' => getNumbers()->get('discount'),

            'billing_discount_code' => getNumbers()->get('code'),

            'billing_subtotal' => getNumbers()->get('newSubtotal'),

            'billing_tax' => getNumbers()->get('newTax'),

            'billing_total' => getNumbers()->get('newTotal') + TotalAfterShipingPrice(),

            'error' => $error,

            'payment_gateway' => ' الدفع بالفيزا ',

            'Invoice '=>substr(md5(microtime()),rand(0,1000000),10),

            'PaymentDue'=>date('Y-m-d H:i:s'),

             

        ]);

                  

                    OrderShareWithAllVendor::create([

                    'order_id' => $order->id,

                    'admin_id' => 1,
                    'affiliateID' =>    $affiliateID= session()->get('affiliateID')

                      



                    ]);

            

              

                   





                

        // Insert into order_product table

        foreach (Cart::content() as $item) {

            OrderProduct::create([

                'order_id' => $order->id,

                'product_id' => $item->model->id,

                'admin_id' => $item->model->admin_id,

                'price'=>$item->model->price,

                'quantity' => $item->qty,

                'Subtotal'=>$item->subtotal,

                'Serial'=>substr(md5(microtime()),rand(0,1000000),10),

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

        foreach (Cart::content() as $item) {

            $product = Product::find($item->model->id);

            if ($product->stock < $item->qty) {

                return true;

            }

        }



        return false;

    }



    public function Confirmtheorderandpayonreceipt( )

    {
         
 

                $email= auth()->user()->email  ;

               $first_name=  auth()->user()->name    ;

               $last_name= auth()->user()->lastname   ;
               $billing_address= request('user_addresses_id') ;   

    $amount =round( getNumbers()->get('newTotal') /100,2);
               $order = $this->addToOrdersTablesPaypal($email,

                $first_name.' '.$last_name,$billing_address,

                null

            );



         Mail::send(new OrderPlaced($order));



            // decrease the quantities of all the products in the cart

            $this->decreaseQuantities();

 
            Cart::instance('default')->destroy();

            session()->forget('coupon');

          //  session()->flash('success',trans('admin.Paymentsuccess'));

            return Redirect::to('/Placed_Order_Confirmation/'.$order->id);

       

                }



     

    public function return_url2( )

    {
         

               $PAYID=rand(1,1000);

                $email= auth()->user()->email  ;

               $first_name=  auth()->user()->name    ;

               $last_name= auth()->user()->lastname   ;

             

               $payer_id= rand(1,1000);

             $recipient_name= rand(1,1000);

               $line1=
               countries::where('id',auth()->user()->country_id )->first()->countries_name_ar .
              cities::where('id',auth()->user()->city_id )->first()->cities_name_ar 
       
    // states::where('id',auth()->user()->stat_id )->first()->states_name_ar  

               
               ;  

               $billing_address= request('billing_address') ;   

               $city=auth()->user()->city_id   ;

               $state= auth()->user()->stat_id; 

               $postal_code= rand(1,1000);

               $country_code=rand(1,1000);

          
 
 



                    $AfterPyment = AfterPyment::create([

            'PAYID' =>rand(1,1000),

            'email' =>$email,

            'first_name' =>$first_name,

            'last_name' =>$last_name,

            'last_name' =>$last_name,

            'payer_id' =>$payer_id,

            'recipient_name' =>$recipient_name,

            'line1' =>$line1,

            'city' =>$city,

            'state' =>'',

            'postal_code' =>rand(1,1000),

            'country_code' =>rand(1,1000),

            'total' =>rand(1,1000),

            'currency' =>rand(1,1000),

         

        ]);





                      $amount =round( getNumbers()->get('newTotal') /100,2);

 

           

               $order = $this->addToOrdersTablesPaypal2($email,

                $first_name.' '.$last_name,$billing_address,

                null

            );



          // Mail::send(new OrderPlaced($order));



            // decrease the quantities of all the products in the cart

            $this->decreaseQuantities();


                if (session()->get('affiliateID')) 
                {
                       $affiliateID= session()->get('affiliateID');

                   $commistion=0;

                foreach (Cart::content() as $item)
                   {

                $commistion=$item->model->commistion +$commistion; 

                   }


             $affiliateMan= admin::where('id',$affiliateID)->first();

             $oldcommistion=$affiliateMan->Totolcommistion;

             $FinalTotolcommistion=$oldcommistion+$commistion;

            $affiliateMan->Totolcommistion=$FinalTotolcommistion;

            $affiliateMan->save();

           session()->forget('affiliateID');
            
             
                }

       


            Cart::instance('default')->destroy();

            session()->forget('coupon');

            //session()->flash('success',trans('admin.Paymentsuccess'));

            return Redirect::to('/ThankYou');

       

    }

     public function return_url( )

    {              return redirect('/return_url2');
              /* //   return request();

                  $user=user::where('email',request('customerEmail'))->first();
                   
               $PAYID=rand(1,1000);

                $email= $user->email  ;

               $first_name=  $user->name    ;

               $last_name= $user->lastname   ;

             

               $payer_id= rand(1,1000);

             $recipient_name= rand(1,1000);

               $line1=
               countries::where('id',$user->country_id )->first()->countries_name_ar .
              cities::where('id',$user->city_id )->first()->cities_name_ar 
       
    // states::where('id',$user->stat_id )->first()->states_name_ar  

               
               ;  

               $billing_address= request('billing_address') ;   

               $city=$user->city_id   ;

               $state= $user->stat_id; 

               $postal_code= rand(1,1000);

               $country_code=rand(1,1000);

          
 
 



                    $AfterPyment = AfterPyment::create([

            'PAYID' =>rand(1,1000),

            'email' =>$email,

            'first_name' =>$first_name,

            'last_name' =>$last_name,

            'last_name' =>$last_name,

            'payer_id' =>$payer_id,

            'recipient_name' =>$recipient_name,

            'line1' =>$line1,

            'city' =>$city,

            'state' =>'',

            'postal_code' =>rand(1,1000),

            'country_code' =>rand(1,1000),

            'total' =>rand(1,1000),

            'currency' =>rand(1,1000),

         

        ]);





                      $amount =round( getNumbers()->get('newTotal') /100,2);

 

           

               $order = $this->addToOrdersTablesPaypal2($email,

                $first_name.' '.$last_name,$billing_address,

                null

            );



           Mail::send(new OrderPlaced($order));



            // decrease the quantities of all the products in the cart

            $this->decreaseQuantities();


                 

            Cart::instance('default')->destroy();

            session()->forget('coupon');

            session()->flash('success',trans('admin.Paymentsuccess'));
            session()->flash('success',trans('admin.Paymentsuccess'));

            return Redirect::to('/');

         */

    }
     
            

}

