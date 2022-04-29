<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
    
        use DB;

class SaleOffcontrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
              { 

      $products=product::where('status','مفعل')->inrandomOrder()->paginate(100);

                 
    return view('forentend3.SaleOff.SaleOff',compact('products'));
 

            }

 
     
}
