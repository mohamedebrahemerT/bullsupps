<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
      use App\product;
      use App\Department;
      use App\comment;
      use App\newes;
      use App\photoesFactory;
      use App\filess;
      use App\BannerTopFactory;
      use App\TradeMark;

        use DB;

class factoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
          { 

               //HomeSliderFactory
            $photoesFactory=photoesFactory::orderBy('id','desc')->first();
             $photoes=$photoesFactory->id;
             $file_id=$photoes;


          

             $HomeSliderFactory=filess::where('file_type','HomeSliderFactory')->
        where('relation_id',$file_id)->inrandomOrder()->get(); 

               
           // BannerTopFactory
              $Banner=BannerTopFactory::orderBy('id','desc')->first();
             $Banner=$Banner->id;
             $file_id_Banner=$Banner;
                 $BannerTopFactory=filess::where('file_type','BannerTopFactory')->
                                where('relation_id',$file_id_Banner)->take(3)->inrandomOrder()->get();

         $TradeMarks=TradeMark::inrandomOrder()->take(8)->get();

              $FlashDeals=product::where('status','مفعل')->inrandomOrder()->take(8)->get();

               $Todaysuggestions=product::where('status','مفعل')->inrandomOrder()->take(20)->get();

               $BestSeller2_id=rand(1,123);

               $BestSeller=product::where('status','مفعل')->where('department_id',$BestSeller2_id)->inrandomOrder()->take(30)->get();

                $BestSeller2=product::where('status','مفعل')->where('department_id',$BestSeller2_id)->inrandomOrder()->take(2)->get();


               


               

               $brands=Department::inrandomOrder()->take(6)->get();
               $Trends=Department::inrandomOrder()->take(15)->get();


           
        session()->put('lang','ar');

             return view('forentend3.factory.factory',compact('HomeSliderFactory','BannerTopFactory','TradeMarks','FlashDeals','brands','Trends','Todaysuggestions','BestSeller','BestSeller2'));
          }


 

       
 
     
}
