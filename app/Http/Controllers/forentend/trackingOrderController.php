<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\WhoWeAre;
use App\Objectives;
use App\ourTeam;
use App\VisionMission;
    
        use DB;

class trackingOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
              { 
                   
    return view('forentend4.tracking-order.tracking-order');
 

            }

 
     
}
