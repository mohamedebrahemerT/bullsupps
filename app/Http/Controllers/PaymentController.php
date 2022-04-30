<?php
namespace App\Http\Controllers;

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
use URL;
use App\orders;
use App\AfterPaymentOrders;
use App\order_product;
use App\AfterPaymentorder_product;
use App\AfterPyment;


class PaymentController extends Controller
{
     
    public function index()
    {
        return view('paywithpaypal');
    }
    public function payWithpaypal(Request $request)
    {



        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Item 1') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('Total_order')); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->get('Total_order'));

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

        if ($result->getState() == 'approved') {
        
       
          
  $orders=orders::where('user_id',auth()->guard('cc')->user()->id)->get();
  $order_product=order_product::where('user_id',auth()->guard('cc')->user()->id)->get();

 
   $TT=0;
  foreach ($orders as  $order) 

  {
          AfterPaymentOrders::create([
             'user_id'=>$order->user_id,
             'name'=>$order->name,
             'address'=>$order->address,
             'phone'=>$order->phone,
             'order_date'=>$order->order_date,

          ]);

   $order_product=order_product::where('order_id',$order->id)->first();


              AfterPaymentorder_product::create([
             'order_id'=>$order_product->order_id,
             'product_id'=>$order_product->product_id,
             'quantity'=>$order_product->quantity,
             'Total'=>$order_product->Total,
             'price'=>$order_product->price,
        
           

          ]);

          $TT=$TT+$order_product->Total;
    


  }

 
 
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
 
               $total=$TT;
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

  $orders=orders::where('user_id',auth()->guard('cc')->user()->id)->delete();
                    

            \Session::put('success', trans('admin.Paymentsuccess'));
            return Redirect::to('/');

        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('/');

    }

}
