<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\WhoWeAre;
use App\Objectives;
use App\ourTeam;
use App\VisionMission;
    
        use DB;

class sellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sell()
           {      
    return view('forentend4.sellers.sell');
              }

                public function profile()
              {      
    return view('forentend4.sellers.profile');
              }
              
 
 
     
}
