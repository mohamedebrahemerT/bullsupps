<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FAQs;
 
 
    
        use DB;

class FAQscontrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
              { 
         $FAQs2=FAQs::get();
                
    return view('forentend4.FAQs.FAQs',compact('FAQs2'));
 

            }

 
     
}
