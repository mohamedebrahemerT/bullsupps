<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\OrderShareWithAllVendordatatables;

use App\OrderShareWithAllVendor;

use App\OrderProduct;

use App\Order;

        use Illuminate\Support\Facades\Mail;

        use App\Mail\OrderPlaced;



  use Hash;

  use up;

  use Storage;



class OrderShareWithAllVendorController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(OrderShareWithAllVendordatatables $dataTable)

    {

         return $dataTable->render('Admin.OrderShareWithAllVendor.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $OrderShareWithAllVendor=OrderShareWithAllVendor::create(['photo'=>'']);

 



             return redirect('admin/OrderShareWithAllVendor/'.$OrderShareWithAllVendor->id.'/edit'); 

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

              



          $data= $this->validate(request(),[    

                'OrderShareWithAllVendor_name_en' => ['required', 'string', 'max:1000'],

                'OrderShareWithAllVendor_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'OrderShareWithAllVendor_name_en'=>trans('admin.OrderShareWithAllVendor_name_en'),

            'OrderShareWithAllVendor_name_ar'=>trans('admin.OrderShareWithAllVendor_name_arr'),

         

             

            





            ]);

                   

      



         OrderShareWithAllVendor::create($data);



                return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

            {



                    
               $OrderProducts=OrderProduct::where('order_id',$id)->

                                where('admin_id',1)

                                           ->get();

                $order=Order::where('id',$id)->first();

        $shipped=OrderShareWithAllVendor::where('order_id',$id)->

                                         where('admin_id',1)

                                         ->first()->shipped;


                                        $OrderShareWithAllVendor=OrderShareWithAllVendor::where('order_id',$id)->

                                         where('admin_id',1)

                                         ->first();


            return view('Admin.OrderShareWithAllVendorinvoice.OrderShareWithAllVendorinvoice',compact('OrderShareWithAllVendor','OrderProducts','order','shipped','id'));

            }

             public function ViewTheinvoice($id)

            {

              

                    
               $OrderProducts=OrderProduct::where('order_id',$id)->

                                where('admin_id',1)

                                           ->get();

                $order=Order::where('id',$id)->first();

        $shipped=OrderShareWithAllVendor::where('order_id',$id)->

                                         where('admin_id',1)

                                         ->first()->shipped;


                                        $OrderShareWithAllVendor=OrderShareWithAllVendor::where('order_id',$id)->

                                         where('admin_id',1)

                                         ->first();


            return view('Admin.OrderShareWithAllVendorinvoice.ViewTheinvoice',compact('OrderShareWithAllVendor','OrderProducts','order','shipped','id'));

            }






public function ViewTheinvoiceprint($id)

            {

              

                    
               $OrderProducts=OrderProduct::where('order_id',$id)->

                                where('admin_id',1)

                                           ->get();

                $order=Order::where('id',$id)->first();

        $shipped=OrderShareWithAllVendor::where('order_id',$id)->

                                         where('admin_id',1)

                                         ->first()->shipped;


                                        $OrderShareWithAllVendor=OrderShareWithAllVendor::where('order_id',$id)->

                                         where('admin_id',1)

                                         ->first();


            return view('Admin.invoiceprint.ViewTheinvoiceprint',compact('OrderShareWithAllVendor','OrderProducts','order','shipped','id'));

            }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

             $title=trans('Admin.OrderShareWithAllVendor update');

           $OrderShareWithAllVendor=OrderShareWithAllVendor::find($id);



       return view('Admin.OrderShareWithAllVendor.update',compact('title','OrderShareWithAllVendor'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {       



         

         

        $data= $this->validate(request(),[    



               'title_name_en' => ['required', 'string', 'max:1000'],

                'title_name_ar' => ['required', 'string', 'max:1000'],

                



                'OrderShareWithAllVendor_name_en' => ['required', 'string', 'max:1000'],

                'OrderShareWithAllVendor_name_ar' => ['required', 'string', 'max:1000'],

             

                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     

            

            ],[],[

            'OrderShareWithAllVendor_name_en'=>trans('admin.OrderShareWithAllVendor_name_en'),

            'OrderShareWithAllVendor_name_ar'=>trans('admin.OrderShareWithAllVendor_name_arr'),

           

             

             'title_name_en'=>trans('admin.title_name_en'),

            'title_name_ar'=>trans('admin.title_name_arr'),

            

             

            





            ]);

                   

      



         OrderShareWithAllVendor::where('id',$id)->update($data);



                return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfully'),'data'=>$data],200);



  

 

        

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

             $OrderShareWithAllVendor=OrderShareWithAllVendor::find($id);

               Storage::delete($OrderShareWithAllVendor->photo);

         OrderShareWithAllVendor::find($id)->delete();

           session()->flash('success',trans('admin.deleteOrderShareWithAllVendor'));

       



         return redirect('admin/OrderShareWithAllVendor');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $OrderShareWithAllVendor=OrderShareWithAllVendor::find($id);

               Storage::delete($OrderShareWithAllVendor->photo);

                $OrderShareWithAllVendor->delete(); 

               }

            

          



        }

        else

        {

                    $OrderShareWithAllVendor=OrderShareWithAllVendor::find($id);

               Storage::delete($OrderShareWithAllVendor->photo);

                $OrderShareWithAllVendor->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/OrderShareWithAllVendor');



         

    }





      public function update_img_dropzon_OrderShareWithAllVendor($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "OrderShareWithAllVendor".$id,



                     ]



                  ); 



                    $settings = OrderShareWithAllVendor::find($id);  

      OrderShareWithAllVendor::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_OrderShareWithAllVendor($id)

               {

                    $OrderShareWithAllVendor = OrderShareWithAllVendor::find($id);



                   

                        Storage::delete( $OrderShareWithAllVendor->photo);

                           $OrderShareWithAllVendor->photo=null;

                        $OrderShareWithAllVendor->save();



                        return Response('كلو تمام');



               }

               public function ApprovalOfTheBillOrderShareWithAllVendor($orderID)

               {


                     $order=Order::where('id',$orderID)->first();
             

             $OrderProducts=OrderProduct::where('order_id',$orderID)->
                                where('admin_id',1)
                                           ->get(); 
                $items='';
           foreach ($OrderProducts as $key => $OrderProduct) 
                                 {
                                      $items.= '{
                  "name": "'.$OrderProduct->product_idd->title_name_en.'",
                  "quantity": '.$OrderProduct->quantity.',
                  "parcel_barcode": "'.$OrderProduct->product_idd->id.'"
                }';
                                }   
          
                                            
              
             $order->waitshiping=1;

                 $order->save();
                

      $OrderShareWithAllVendor=OrderShareWithAllVendor::where('order_id',$orderID)->

                                where('admin_id',auth()->guard('admin')->user()->id)

                                           ->first();



                 $OrderShareWithAllVendor->status='waitshiping';

                 $OrderShareWithAllVendor->save();



                $order=Order::where('id',$orderID)->first();

                Mail::send(new OrderPlaced($order));

            $ApprovalOfTheBills=OrderProduct::where('order_id',$orderID)->

                                       where('admin_id',auth()->guard('admin')->user()->id)->get();



                 foreach ($ApprovalOfTheBills as $key => $ApprovalOfTheBill) 

                           {

                             $ApprovalOfTheBill->orderStates=1;

                            $ApprovalOfTheBill->save();

                             }

                $access_token= access_token ();

                if ( $order->tracking_url == null) 
                {
                    
                 

         $endpoint_url="http://api.staging.quiqup.com/orders";
$string_json = '{
  "kind": "partner_same_day",
  "notes": "Here is a really important note",
  "payment_amount": '.$order->billing_total.',
  "payment_mode": "paid_on_delivery",
  "disallowed_payment_types": [
    "cash"
  ],
  
  "scheduled_for": null,
  "metadata": null,
  "partner_order_id": "'.$orderID.'",
  "required_documents": [
    "customer_identification_photo"
  ],
  "origin": {
    "contact_name": "'.settings()->nameen.'",
    "contact_phone": "'.settings()->phone.'",
    "partner_order_id": "'.$orderID.'",
    "notes": "Go directly to the kitchen on the first floor",
    "address": {
      "address1": "'.settings()->address_en.'",
      "address2": "'.settings()->address_en.'",
      "coords": [
        55.1631158,
        25.0559987
      ],
      "country": "UAE",
      "town": "Dubai"
    }
  },
 "destination": {
    "contact_name": "'.$order->billing_name.'",
    "contact_phone": "'.$order->billing_phone.'",
    "partner_order_id": "'.$orderID.'",
    "share_tracking": true,
    "notes": "Go directly to the kitchen on the first floor",
    "address": {
      "address1": "'.$order->address->address.'",
      "address2": "'.$order->address->address.'",
      "coords": [
        '.$order->address->lat.',
        '.$order->address->lng.'
      ],
      "country": "UAE",
      "town": "Dubai"
    }
  },
  "items": [
  '.$items.'
  ]
}';

$client = new \GuzzleHttp\Client();
$options= array(
  'headers'  => ['content-type' => 'application/json',    'Authorization' => 'Bearer ' . $access_token],
  'body' => $string_json,
 
);
     $res = $client->post($endpoint_url, $options);
        $response=$res->getBody()->getContents();
             $response = json_decode($response, true);

 
          $response=$response['order'];
              $state =$response['state'];
              $tracking_url =$response['tracking_url'];
 
      $order->response=$response;
      $order->state=$state;
      $order->tracking_url=$tracking_url;
      $order->save();

     
      }
     
/*
      ///make reday for collect
       $endpoint_url="http://api.staging.quiqup.com/orders/".$orderID."/ready_for_collection";
$client = new \GuzzleHttp\Client();
$options= array(
  'headers'  => ['content-type' => 'application/json',    'Authorization' => 'Bearer ' . $access_token]
 
);
     $res = $client->PUT($endpoint_url, $options);
        $response=$res->getBody()->getContents();
             $response = json_decode($response, true);

     $state =$response['state'];
      $order->state=$state;
      $order->save();
 ///end make reday for collect
  */

                session()->flash('success', trans('admin.agreebill'));


              return redirect('admin/OrderShareWithAllVendor/'.$orderID);
             

           

               }

               public function shipNow($id)
               {

                  $OrderShareWithAllVendor=OrderShareWithAllVendor::where('id',$id)->first();


                 $OrderShareWithAllVendor->status='shipped';

                 $OrderShareWithAllVendor->save();
                
      session()->flash('success', trans('admin.shippedcescusfully'));



              return  redirect('admin/OrderShareWithAllVendor?status=shipped'); 

             
                
               }

                 public function ReceivedNow($id)
               {

                   $OrderShareWithAllVendor=OrderShareWithAllVendor::where('id',$id)->first();


                 $OrderShareWithAllVendor->status='Received';

                 $OrderShareWithAllVendor->save();
                
      session()->flash('success', trans('admin.Receivedcescusfully'));



              return  redirect('admin/OrderShareWithAllVendor?status=Received'); 

             
                
               }

               

}





