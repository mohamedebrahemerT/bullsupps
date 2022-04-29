<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\WhoWeAre;
use App\Objectives;
use App\ourTeam;
use App\VisionMission;
    use Vinkla\Instagram\Instagram;
        use DB;

class instaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insta()
              { 

                $Instagram=new Instagram();

                 $Instagrams=$Instagram->get('anwartaleem');
                return view('forentend3.insta.insta',compact('Instagrams'));
 

            }

 
     
}
