<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OrderShareWithAllVendor;

use App\OrderProduct;

use App\Order;

class invoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice()
    {

        return view('Admin.invoice.invoice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoiceprint($id)
    {

      

               $OrderProducts=OrderProduct::where('order_id',$id)->

                                where('admin_id',auth()->guard('admin')->user()->id)

                                           ->get();



                $order=Order::where('id',$id)->first();



        $shipped=OrderShareWithAllVendor::where('order_id',$id)->

                                         where('admin_id',auth()->guard('admin')->user()->id)

                                         ->first()->shipped;


                    
                

 
 
        return view('Admin.invoiceprint.invoiceprint',compact('OrderProducts','order','shipped'));
    
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
    public function show($id)
    {
        //
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
}
