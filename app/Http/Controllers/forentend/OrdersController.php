<?php

 namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;

use App\Order;
use App\OrderShareWithAllVendor;
use App\order_product;


use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $orders = auth()->user()->orders()->with('products')->orderBy('id','desc')->get(); // fix n + 1 issues

        return view('forentend4.my-orders.my-orders')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
         /*if (auth()->id() !== $order->user_id) {
            return back()->withErrors('You do not have access to this!');
        }*/


   

           $products = $order->products;

          return view('forentend4.my-orders.OrderDetails')->with([
            'order' => $order,
            'products' => $products,
        ]);

        return view('forentend3.my-orders.OrderDetails')->with([ 'orders' => $orders, 'products' =>
$products, ]);

 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function returningOrder()
    {

          $orderID=request('orderID');

     

         $OrderShareWithAllVendor=OrderShareWithAllVendor::where('order_id',$orderID)->first();

        $OrderShareWithAllVendor->status='returned';
        $OrderShareWithAllVendor->ReasonForReturn=request('ReasonForReturn');

        $OrderShareWithAllVendor->save();

        session()->flash('success',trans('admin.returnsuccfully'));



          return redirect('/my-orders/'.$orderID);
    }

     public function openticket()
    {


            Request();

          $orderID=request('orderID');

     

         $OrderShareWithAllVendor=OrderShareWithAllVendor::where('order_id',$orderID)->first();
 
        $OrderShareWithAllVendor->openticket=request('openticket');

        $OrderShareWithAllVendor->save();

        session()->flash('success','تم  فتح  الشكوي  ');



          return redirect('/my-orders/'.$orderID);
    }


                public function MyOrdersGet()
                {

                       $inputOrderTrackingID=Request('inputOrderTrackingID');

                  return redirect('/my-orderszzzzz/'.$inputOrderTrackingID);

                 
    
                }

                 public function MyOrdersGet2($id)
                {

                      $order=Order::where('id',$id)
                                      ->where('user_id',auth()->guard('web')->user()->id)->first();

                             if ($order) 
                             {


                                            $products = $order->products;

      

        return view('forentend4.tracking-order.tracking-orderGet')->with([ 'order' => $order, 'products' =>
$products, ]);
                          }

                          else
                          {
                              $order=Order::where('id',$id)->first();

                                $products = $order->products;

      

        return view('forentend4.tracking-order.tracking-orderGet')->with([ 'order' => $order, 'products' =>
$products, ]);


                          }

          
    
                }

                


    
}
