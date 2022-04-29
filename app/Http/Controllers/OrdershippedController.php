<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\Ordershippeddatatables;
use App\Order;
use App\OrderProduct;
        use App\Mail\OrderPlaced;
        use Illuminate\Support\Facades\Mail;
use App\Jobs\SendMailjob;
  use Hash;
  use up;
  use Storage;

class OrdershippedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ordershippeddatatables $dataTable)
    {
         return $dataTable->render('Admin.Order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $Order=Order::create(['photo'=>'']);
 

             return redirect('admin/Order/'.$Order->id.'/edit'); 
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
                'Order_name_en' => ['required', 'string', 'max:1000'],
                'Order_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'Order_name_en'=>trans('admin.Order_name_en'),
            'Order_name_ar'=>trans('admin.Order_name_arr'),
         
             
            


            ]);
                   
      

         Order::create($data);

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
                                where('admin_id',auth()->guard('admin')->user()->id)
                                           ->get();

                $order=Order::where('id',$id)->first();
  $details['email'] = 'mohamedchi2013@gmail.com';


 /*$Jobs=(new SendMailjob)->delay(\Carbon\Carbon::now()->addSeconds(1));

     dispatch($Jobs);*/


                  Mail::send(new OrderPlaced($order));


            return view('Admin.invoice.invoice',compact('OrderProducts','order'));
          }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $title=trans('admin.Order update');
          $Order=Order::find($id);

       return view('Admin.Order.update',compact('title','Order'));
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

               'billing_name' => ['required', 'string', 'max:1000'],
               'billing_address' => ['required', 'string', 'max:1000'],
               'billing_city' => ['required', 'string', 'max:1000'],
               'billing_province' => ['required', 'string', 'max:1000'],
               'billing_postalcode' => ['required', 'string', 'max:1000'],
               'billing_phone' => ['required', 'string', 'max:1000'],
               'billing_name_on_card' => ['required', 'string', 'max:1000'],
               'billing_discount' => ['required', 'string', 'max:1000'],
               'billing_discount_code' => ['required', 'string', 'max:1000'],
               'billing_subtotal' => ['required', 'string', 'max:1000'],
               'billing_tax' => ['required', 'string', 'max:1000'],
               'billing_total' => ['required', 'string', 'max:1000'],
               'payment_gateway' => ['required', 'string', 'max:1000'],
               'error' => ['required', 'string', 'max:1000'],
               'Invoice' => ['required', 'string', 'max:1000'],
           
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'billing_name'=>trans('admin.billing_name'),
            'billing_address'=>trans('admin.billing_address'),
            'billing_city'=>trans('admin.billing_city'),
            'billing_province'=>trans('admin.billing_province'),
            'billing_postalcode'=>trans('admin.billing_postalcode'),
            'billing_phone'=>trans('admin.billing_phone'),
            'billing_name_on_card'=>trans('admin.billing_name_on_card'),
            'billing_discount'=>trans('admin.billing_discount'),
            'billing_discount_code'=>trans('admin.billing_discount_code'),
            'billing_subtotal'=>trans('admin.billing_subtotal'),
            'billing_tax'=>trans('admin.billing_tax'),
            'billing_total'=>trans('admin.billing_total'),
            'payment_gateway'=>trans('admin.payment_gateway'),
            'error'=>trans('admin.error'),
            'Invoice'=>trans('admin.Invoice'),
            
             
            


            ]);
                   
      

         Order::where('id',$id)->update($data);

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
             $Order=Order::find($id);
               Storage::delete($Order->photo);
         Order::find($id)->delete();
           session()->flash('success',trans('admin.deleteOrder'));
       

         return redirect('admin/Order');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $Order=Order::find($id);
               Storage::delete($Order->photo);
                $Order->delete(); 
               }
            
          

        }
        else
        {
                    $Order=Order::find($id);
               Storage::delete($Order->photo);
                $Order->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/Order');

         
    }


      public function update_img_dropzon_Order($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "Order".$id,

                     ]

                  ); 

                    $settings = Order::find($id);  
      Order::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_Order($id)
               {
                    $Order = Order::find($id);

                   
                        Storage::delete( $Order->photo);
                           $Order->photo=null;
                        $Order->save();

                        return Response('كلو تمام');

               }


               public function ApprovalOfTheBill($orderID)
               {

                 $Order=Order::where('id',$orderID)->first();

                 $Order->shipped=1;
                 $Order->save();


           $ApprovalOfTheBills=OrderProduct::where('order_id',$orderID)->
                                       where('admin_id',auth()->guard('admin')->user()->id)->get();

                 foreach ($ApprovalOfTheBills as $key => $ApprovalOfTheBill) 
                           {
                             $ApprovalOfTheBill->orderStates=1;
                            $ApprovalOfTheBill->save();
                             }

                session()->flash('success', trans('admin.agreebill'));

                 return redirect('admin/Order/'.$orderID);
               
               
               }
}


