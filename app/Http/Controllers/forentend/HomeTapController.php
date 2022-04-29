<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\WhoWeAre;
use App\Objectives;
use App\ourTeam;
use App\VisionMission;
use App\product;
use App\tags;
    
        use DB;

class HomeTapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function HomeBestseller()
              { 

               
      $BestSellers=product::where('status','مفعل')->inrandomOrder()->take(5)->get();

    return view('forentend3.HomeTap.BestSellers',[
        'BestSellers'=>$BestSellers
        
       
         ])->render();
                  
    
 

            }

             public function homeTagAR()
              { 

               
       $tags1=tags::inrandomOrder()->take(10)->orderBy('id','desc')->get();
      $tags2=tags::inrandomOrder()->take(10)->orderBy('id','asc')->get();
      $tags3=tags::inrandomOrder()->take(10)->orderBy('id','desc')->get();
      $tags4=tags::inrandomOrder()->take(10)->orderBy('id','asc')->get();
      $tags5=tags::inrandomOrder()->take(10)->orderBy('id','desc')->get();

    return view('forentend3.HomeTap.homeTagAR',[
        'tags1'=>$tags1,
        'tags2'=>$tags2,
        'tags3'=>$tags3,
        'tags4'=>$tags4,
        'tags5'=>$tags5,
        
       
         ])->render();
                  
    
 

            }
}

 
 



