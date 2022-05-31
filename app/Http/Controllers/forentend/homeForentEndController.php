<?php



namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



use App\Product;

use App\Department;

use App\newes;

use DB;

use App\TradeMark;

use App\photoes;

use App\photoesEN;

use App\filess;

use App\BannerTop;

use App\BannerTopEN;

use App\tags;

use App\admin;

use App\otherDataColorForSlider;

use App\otherDataColorForSliderEN;
use App\otherDataDepartmentbanners;
use App\Departmentbanners;



use Storage;


use App\user;

use Illuminate\Support\Facades\Auth;
use Session;
use App;
class homeForentEndController extends Controller

{


public function etisalatemirates()
{
           return  view('forentend4.etisalatemirates');
   
}

    public function app( )
            {
                          
       
      

        $photoes=photoes::orderBy('id','desc')->first();

      $photoes=$photoes->id;

      $file_id=$photoes;      

            $HomeSliders=filess::where('file_type','HomeSlider')->

      where('relation_id',$file_id)->orderBy('id','desc')->get(); 


         $DepartmentbannersSamallID=Departmentbanners::where('catname','بنرات صغيره')->first()->id;

     $otherDataDepartmentbanners= otherDataDepartmentbanners::where('Departmentbanners_id',$DepartmentbannersSamallID)->inrandomOrder()->take(4)->get();

        $DepartmentbannersBigID=Departmentbanners::where('catname','بنرات كبيره')->first()->id;

      
         $DepartmentbannersHomesliderID=Departmentbanners::where('catname','بنرات رئيسية')->first()->id;
         
     $otherDataDepartmentbannersHomeSliders= otherDataDepartmentbanners::where('Departmentbanners_id',$DepartmentbannersHomesliderID)->inrandomOrder()->take(4)->get();

           return  view('forentend4.app',compact('HomeSliders','otherDataDepartmentbanners','otherDataDepartmentbannersHomeSliders'));

            }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

            public function GuzzleHttppost( )
            {

                    $client = new \GuzzleHttp\Client();

    $url = "https://smsmisr.com/api/webapi/?username=Ot5e8xdH&password=SJt9cWkB7R&language=2&sender=Sale&mobile=201149880297&message=شوفت والنبي الخيبه مش عايز يبعت الاردر &DelayUntil=2017-09-13-13-30";

   

    

    $request = $client->post($url);

    $response = $request->send();

  

    dd($response);
             
            }

            public function OpenTicket( )
            {
              

           return  view('forentend4.OpenTicket.OpenTicket');

            }




            public function LiveChat( )
            {




                

        $photoes=photoes::orderBy('id','desc')->first();

      $photoes=$photoes->id;

      $file_id=$photoes;      

            $HomeSliders=filess::where('file_type','HomeSlider')->

      where('relation_id',$file_id)->orderBy('id','desc')->get(); 

      
       $users = User::where('id', 5)->get();

           return  view('forentend4.LiveChat.LiveChat',['users' => $users,'HomeSliders'=>$HomeSliders]);

            }

            

    public function load_dep_v_size_weight()

    {

      

       if (request()->ajax() and request('href') == 'theMostRecentHome')

               {



    $arrcolor=0;

  $productsgrid = Product::where('status','active')->orderBy('id','desc')->paginate(25); 

      return view('Admin.productes.ajax',[

          'arrcolor'=>$arrcolor,

          'productsgrid'=>$productsgrid,

           ])->render();





              }



            



              elseif (request()->ajax() and request('href') == 'moreRequests')

               {



       

      $productsgrid = Product::where('status','active')->inRandomOrder()->paginate(25);



      $arrcolor=0;



      return view('Admin.productes.ajax',[

          'arrcolor'=>$arrcolor,

          'productsgrid'=>$productsgrid,

           ])->render();

               

               }



               



                 elseif (request()->ajax() and request('href') == 'low_highHome')

               {



       

          $productsgrid = Product::where('status','active')->orderBy('price')->paginate(25);

   $TopRateds=Product::where('status','active')->inRandomOrder()->take(33)->get();

        $arrcolor=1;





      return view('Admin.productes.ajax',[

          'arrcolor'=>$arrcolor,

          'productsgrid'=>$productsgrid,

           ])->render();

               

               }



                  elseif (request()->ajax() and request('href') == 'low_highHome')

               {



       

          $productsgrid = Product::where('status','active')->orderBy('price')->paginate(25);

  

        $arrcolor=1;





      return view('Admin.productes.ajax',[

          'arrcolor'=>$arrcolor,

          'productsgrid'=>$productsgrid,

           ])->render();

               

               }







    elseif (request()->ajax() and request('href') == 'high_lowHome')

               {



        $productsgrid = Product::where('status','active')->orderBy('price','desc')->paginate(25);

        $arrcolor=2;

       





      return view('Admin.productes.ajax',[

          'arrcolor'=>$arrcolor,

          'productsgrid'=>$productsgrid,

           ])->render();

               

               }



 





       

    }

    



    public function jory()

    {

           return  view('forentend4.jory');

    }







    public function index()

    {
   // return App::getLocale();
   
             
      session()->forget('ProdcutTitle');
         $DepartmentbannersHomesliderID=Departmentbanners::where('catname','بنرات رئيسية')->first()->id;

     $otherDataDepartmentbannersHomeSliders= otherDataDepartmentbanners::where('Departmentbanners_id',$DepartmentbannersHomesliderID)->inrandomOrder()->take(4)->get();
          
       $Products1=Product::where('status','active')->InrandomOrder()->take(5)->get();

      return view('forentend4.home', compact( 'otherDataDepartmentbannersHomeSliders','Products1'));



      

    }





       ////////////////////////////main////////////////////////////////////////////



    

    public function main()

    {

 


      $Departments = DB::table('departments')

      ->whereNull('parent')->inrandomOrder()->take(5)->get();



      $TradeMarks=TradeMark::inrandomOrder()->take(8)->get();



         ////////////////////////



        //// aliymarket 3



            //HomeSlider

      $photoes=photoesEN::orderBy('id','desc')->first();

      $photoes=$photoes->id;

      $file_id=$photoes;





      



       $HomeSlider=filess::where('file_type','HomeSliderEN')->

      where('relation_id',$file_id)->inrandomOrder()->get(); 



      

           // Banner Top

      $Banner=BannerTopEN::orderBy('id','desc')->first();

      $Banner=$Banner->id;

      $file_id_Banner=$Banner;



      

         $BannerTop1 = DB::table('admins')->where('Storepremsion',1)



      ->get();





   $BannerTop2 = DB::table('files')->

      where('file_type','BannerTop')->

      where('relation_id',$file_id_Banner)->inrandomOrder()

      ->get();







       $BannerTop3 = DB::table('files')->



      where('file_type','BannerTop')->



      where('relation_id',$file_id_Banner)



      ->get();


 
      

      $newalymarket1=product::where('status','active')

      -> orWhere('Storepremsion', 1)

      ->inrandomOrder()->take(3)->get();

      $newalymarket2=product::where('status','active')->inrandomOrder()->take(3)->get();



      $newalymarketsmalles1=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles2=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles3=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles4=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles5=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles15=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles115=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles6=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles7=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles8=product::where('status','active')->inrandomOrder()->take(15)->get();



      $newalymarketsmalles9=product::where('status','active')->where('VideoExst',1)->inrandomOrder()->take(2)->get();



      $newalymarketsmalles55=product::where('status','active')->inrandomOrder()->take(15)->get();





      $newalymarketsmalles10=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles110=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles1110=product::where('status','active')->inrandomOrder()->take(15)->get();

      $newalymarketsmalles2=product::where('status','active')->inrandomOrder()->take(15)->get();



      $wechoseforyou=product::where('status','active')->inrandomOrder()->take(8)->get();

      $wechoseforyouactive=product::where('status','active')->inrandomOrder()->take(1)->get();

      



      $Departments=DB::table('departments')

      ->whereNull('parent')->take(13)->get();



      $Morefeaturedproducts=product::where('status','active')->inrandomOrder()->get();



      $brandsSections=Department::where('id',1)->

      whereNull('parent')->inrandomOrder()->take(1)->get();

      $brandsSections2=Department::where('id',2)->

      whereNull('parent')->inrandomOrder()->take(1)->get();

      $brandsSections3=Department::where('id',3)->

      whereNull('parent')->inrandomOrder()->take(1)->get();





      $BestSellers=product::where('status','active') ->Where('discriminationForhome', 1)->take(5)->get();



    

      $tags1 = product::whereIn('id', [1, 2])->get();

      $tags2 = product::whereIn('id', [3, 4])->get();

      $tags3 = product::whereIn('id', [5, 6])->get();

      $tags4 = product::whereIn('id', [7, 8])->get();

      $tags5 = product::whereIn('id', [9,10])->get();



          $popularStores=admin::where('Storepremsion',1)->inrandomOrder()->take(3)->get();

       

      

  

             $back ='';

         $otherDataColorForSliderEN=otherDataColorForSliderEN::get();



        $COLORS=[];



             foreach ($otherDataColorForSliderEN as $ColorForSlideEN) 

             {

                array_push($COLORS,$ColorForSlideEN->input_key);

             }



      $bestevers1=product::where('status','active')->take(6)->get();

         $bestevers2=product::where('status','active')->take(6)->get();





         $moreorders1=product::where('status','active')->take(5)->get();

         $moreorders2=product::where('status','active')->take(5)->get();



               $fact1=product::where('status','active')->inrandomOrder()->take(3)->get();

         $fact2=product::where('status','active')->inrandomOrder()->take(3)->get();

  





    

      $supers = tags::whereIn('id', [1, 2,3,4,5])->get();

      $supers2 = tags::whereIn('id', [6, 7,8,9,10])->get();



      $supers3 = tags::whereIn('id', [11, 12,13,14,15])->get();

      $supers4 = tags::whereIn('id', [16, 17,18,19,20])->get();





      return   view('forentend3.home',compact(

        'supers',

        'supers2',

        'supers3',

        'supers4',

        'fact1',

        'fact2',

        'wechoseforyouactive',

        'newalymarketsmalles55',

        'HomeSlider',

        'BannerTop1',

        'BannerTop2',

        'BannerTop3',

        'tags1',

        'tags2',

        'tags3',

        'tags4',

        'tags5',

        'newalymarket1',

        'newalymarket2',

        'newalymarketsmalles1',

        'newalymarketsmalles2',

        'newalymarketsmalles3',

        'newalymarketsmalles4',

        'newalymarketsmalles5',

        'newalymarketsmalles15',

        'newalymarketsmalles115',

        'newalymarketsmalles6',

        'newalymarketsmalles7',

        'newalymarketsmalles8',

        'newalymarketsmalles9',

        'newalymarketsmalles10',

        'newalymarketsmalles110',

        'newalymarketsmalles1110',

        'newalymarketsmalles2',

        'wechoseforyou',

        'Departments',

        'Morefeaturedproducts',

        'brandsSections',

        'brandsSections2',

        'brandsSections3',

        'brandsSections4',

        'popularStores',

        'BestSellers',

        'back',

        'COLORS',

          'bestevers1',

        'bestevers2',

        'moreorders1',

'moreorders2'

      ));



      

    }



       /////////////////////////////////////////////////////////////////////



    public function home_carousel()

    {



      

      

      return view('forentend.home_carousel',compact('productes'));



    }



    public function home_sidebar()

    {



      

      

      return view('forentend.home_sidebar',compact('productes'));



    }



    public function allpeople()

    {

      return view('forentend.allpeople');

      

    }



    public function TestMode($id)

    {

        // $Departments1=Department::where('parent','')->inrandomOrder()->take(1)->get();











      if ($id == "32yZX10DShB_+@!~_+^&*)nfG1dg_+@!~_+^&*)FDDSB4nDn0Jzo_+@!~_+^&*)")

      {

       $Departments1 = DB::table('departments')

       ->whereNull('parent')->inrandomOrder()->take(3)->get();



       

       $Departments2 = DB::table('departments')

       ->whereNull('parent')->inrandomOrder()->take(6)->get();



       $featured_products=product::where('featured',1)->inrandomOrder()->take(4)->get();
 

       $productes=product::inrandomOrder()->take(8)->get();

       $productes2=product::inrandomOrder()->take(2)->get();

       $productes3=product::inrandomOrder()->take(10)->get();



       $newes=newes::inrandomOrder()->take(3)->get();





       return view('forentend.home',compact('productes','productes2','Departments1','featured_products','Departments2','productes3','newes'));

       

     }

     

     

     

   }



   public function Vue()

   {

       return    view('home');

   }



    public function includeHome()

   {



          $BestSellers=product::where('status','active')

                                  -> Where('discriminationForhome', 1)

      ->take(5)->orderBy('id','desc')->get();

      return   view('forentend3.includeHome',compact(

        'BestSellers'

     

      ))->render();



   }



          public function ThankYou( )
          {
               
           return  view('forentend4.ThankYou');
               
          }

   

   

 }

