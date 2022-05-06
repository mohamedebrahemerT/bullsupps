<?php

namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;
 

use App\Product;
use App\Category;
use App\Department;
use App\filess;
use App\TradeMark;
use App\admin;
use App\photoes;
use App\colorName_photoColor_size;
use App\PurchaseAndDeliveryPolicy;
use App\PaymentAndDeliveryPolicy;
use App\tags;
use App\newes;
use App\photoesEN;
use App\BannerTop;
use App\BannerTopEN;
use App\otherDataColorForSlider;
use App\otherDataColorForSliderEN;
use App\affilaiateLinks;
use App\otherData;
use App\OtherDatasٍSiZes;
 




use Illuminate\Support\Str;
        use DB;
        use Storage;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function quickview()
{
   
      return    view('forentend4.productdetails.quickview');

 
}

public function Testzoom()
{
   $product=product::where('id',1)->first();
        $filess=filess::where('file_type','productes')->
                where('relation_id',1)->get();

      
  
      return    view('forentend3.zoom.Testzoom',compact('product','filess'));

 
}
    public function zoom()
    {

       $product=product::where('id',1)->first();
        $filess=filess::where('file_type','productes')->
                where('relation_id',1)->get();

      return    view('forentend3.zoom.zoom',compact('product','filess'));
    }

    public function zoom2()
    {

       $product=product::where('id',1)->first();
        $filess=filess::where('file_type','productes')->
                where('relation_id',1)->get();

      return    view('forentend3.zoom.zoom2',compact('product','filess'));
    }



public function Tags($id)
{
   
               $categoryName =tags::where('id',$id)->first()->title_name_ar;

              $Department =tags::where('id',$id)->first();

                $Departments = DB::table('tags')->take(8)->get();
                         
          $products = Product::where('tag_id',
                  $id)->where('status','active')->inrandomOrder()->paginate(9);


                return view('forentend3.Tags.Tags')->with([
            'products' => $products,
            'Departments' => $Departments,
            'categoryName'=>$categoryName,
            'Department'=>$Department
          
        ]);
}



   


     public function index()
    { 

       if (request('id') and request()->sort == 'low_high')
             {        
                      $id=request('id');
            

   $products = Product::where('department_id',
                  $id)->where('status','active')->orderBy('price')->paginate(10);

              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);
                  

              return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=1

        ]);
        } elseif (request('id') and request()->sort == 'high_low' )
            {

                      $id=request('id');
   $products = Product::where('department_id',
                  $id)->where('status','active')->orderBy('price','desc')->paginate(10);

              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);
  

              return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor1=2

        ]);
        } 


        elseif (request('id') and request()->sort == 'theMostRecent' )
             {

                      $id=request('id');
     $products = Product::where('department_id',
                  $id)->where('status','active')->orderBy('id','desc')->paginate(10);

              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);
  

              return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0


        ]);
        } 

          elseif (request('id') and request()->sort == 'moreRequests' )
             {

                      $id=request('id');
      $products = Product::where('department_id',
                  $id)->where('status','active')->inRandomOrder()->paginate(10);

              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);
  

              return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0


        ]);
        } 

              elseif (request('id') and request('color') )
             {
  
          

                    $color=request('color'); 
               
            $colorName_photoColor_size = DB::table('colorName_photoColor_size')
        ->where('color_name', 'LIKE', "%{$color}%")->groupBy('color_name')->
        get();

                          $IDOFPRODCUTS=[];
                     foreach ($colorName_photoColor_size  as $value)
                      {
                       array_push($IDOFPRODCUTS, $value->product_id);
                     }

                      


                      $id=request('id');
       $products = Product::whereIn('id',$IDOFPRODCUTS)->where('department_id',
                  $id)->where('status','active')->inRandomOrder()->paginate(10);

              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);
  

              return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0


        ]);
              }

          elseif (request('id') and request('size') )
             {

          

                    $size=request('size'); 
               
            $colorName_photoColor_size = DB::table('colorName_photoColor_size')
        ->where('sizeType', 'LIKE', "%{$size}%")->groupBy('sizeType')->
        get();

                          $IDOFPRODCUTS=[];
                     foreach ($colorName_photoColor_size  as $value)
                      {
                       array_push($IDOFPRODCUTS, $value->product_id);
                     }

                      


                      $id=request('id');
        $products = Product::whereIn('id',$IDOFPRODCUTS)->where('department_id',
                  $id)->where('status','active')->inRandomOrder()->paginate(10);

              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);
  

              return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0


        ]);
        }



             elseif (request('id') and request('TradeMark') )
             {

          

                     $TradeMark_id=request('TradeMark'); 
               
     
                      


                      $id=request('id');
        $products = Product::where('trad_id',$TradeMark_id)->where('department_id',
                  $id)->where('status','active')->inRandomOrder()->paginate(10);

              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);
  

              return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0


        ]);
            }
         
          elseif (request('id') and request('text_search') )
            {



          
                 $query=request('text_search');

                      $id=request('id');

           

            $products = Product::
        where('title_name_ar', 'LIKE', "%{$query}%")
        ->where('department_id',$id)
        ->where('status','active')->inRandomOrder()->paginate(10);



              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                   $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

  
                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);

              return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0


        ]);
 
           }
         

          elseif (request()->id) 
              {


             

          


               $id=request('id');


                        $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


   $depIDS=[];
foreach ($Departments as   $Department) 

{
    array_push($depIDS, $Department->id);
}

 
 
           
 
 


                  $Department2 = Department::whereIn('parent',
                 $depIDS)->inrandomOrder()->get();



   $depIDS2=[];
foreach ($Department2 as   $Department) 

{
    array_push($depIDS2, $Department->id);
}

 

        

             $products = Product::whereIn('department_id',
                 $depIDS)->where('stock','>',0)->inrandomOrder()->get();


             $products2 = Product::where('department_id',
                  $id)->where('stock','>',0)->inrandomOrder()->paginate(15);


         

               if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
     $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

 

                return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName'=>$categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0
          
        ]);
 
           
        
          
               

                
            }




             else {

        
  

                    $products = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);
                    $products2 = Product::where('status','active')->inrandomOrder()->orderBy('id','DESC')->paginate(15);

                    if (session('lang')=='ar')
                                 {
                $categoryName = 'التصنيفات';
                                 }     

                                  elseif (session('lang')=='en')
                                 {
                $categoryName = 'All Categories ';
                                 }     
           
     
  
        
 $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
    $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);
           

    $Departments = DB::table('departments')
            ->where('parent',null)->inrandomOrder()->get();

        return view('forentend4.shop.shop')->with([
            'products' => $products,
            'products2' => $products2,
            'Departments' => $Departments,
            'categoryName'=>$categoryName,
             'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0

          
        ]);
 
         
    }
  }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */


        public function show($id)
    {



  
          Session()->forget('attribute_value_ids');

           $product = Product::where('status','active')->where('id', $id)->firstOrFail();
          $department_id=$product->department_id;
         
     $mightAlsoLikes = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(10)->get();

     $mightAlsoLikes2 = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(10)->get();
                         
                   $filess=filess::where('file_type','productes')->
                where('relation_id',$id)->orderBy('id','desc')->get();
   
     $ProductFromSamCats = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(10)->get();

                   $filessitems=[];
                   
                   foreach ($filess as $key => $file) {
                       array_push($filessitems, ['src' => Storage::url($file->full_file) ] );
                   }

                       
  $filessitems = json_encode($filessitems);

               session()->put('ProdcutTitle',$product->title_name_ar);

                  'تسوق اونلاين  '.session('ProdcutTitle').' باقل سعر في مصر';
           
          return view('forentend4.productdetails.productdetails')->with([
            'filessitems'=>$filessitems,
            'product' => $product,
            'mightAlsoLikes'=>$mightAlsoLikes,
            'filess'=>$filess,
            'ProductFromSamCats'=>$ProductFromSamCats,
            'mightAlsoLikes2'=>$mightAlsoLikes2
           
            
          
            
        ]);




    }

       public function showaffiliateID($id,$showaffiliateID)
    {

     

                    
        
          $product = Product::where('status','active')->where('id', $id)->firstOrFail();
               session()->put('ProdcutTitle',$product->title_name_ar);
          
          $department_id=$product->department_id;
         
     $mightAlsoLikes = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(10)->get();

     $mightAlsoLikes2 = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(10)->get();
                         
                  $filess=filess::where('file_type','productes')->
                where('relation_id',$id)->get();
   
     $ProductFromSamCats = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(10)->get();


              

                   session()->put('affiliateID',$showaffiliateID);
 
                     
             $url='/'.'shop'.'/'.$id.'/'.$showaffiliateID ; 


             affilaiateLinks::create(['adminID'=>$showaffiliateID,'link'=>$url]);
                  
           
          return view('forentend4.productdetails.productdetails')->with([
            'product' => $product,
            'mightAlsoLikes'=>$mightAlsoLikes,
            'filess'=>$filess,
            'ProductFromSamCats'=>$ProductFromSamCats,
            'mightAlsoLikes2'=>$mightAlsoLikes2
            
          
            
        ]);




    }


    

    public function show2($dep,$ven,$PN,$AlyCode,$randstr,$id)
    {

                 
              
     
         $product = Product::where('status','active')->where('id', $id)->firstOrFail();
          $department_id=$product->department_id;
         
     $mightAlsoLikes = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(5)->get();
     $mightAlsoLikes2 = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(5)->get();
                         
                  $filess=filess::where('file_type','productes')->
                where('relation_id',$id)->get();
   
     $ProductFromSamCats = Product::where('status','active')->where('department_id',$department_id)->inRandomOrder()->take(10)->get();
           
          return view('forentend4.productdetails.productdetails')->with([
            'product' => $product,
            'mightAlsoLikes'=>$mightAlsoLikes,
            'filess'=>$filess,
            'ProductFromSamCats'=>$ProductFromSamCats,
            'mightAlsoLikes2'=>$mightAlsoLikes2
            
          
            
        ]);




    }

    public function search(Request $request)
    { 




         $query = $request->input('search');

            $products = product::where('title_name_ar', 'like','%'. $query .'%')
                            ->orWhere('title_name_en', 'like', '%'.$query .'%')
                            ->orWhere('content_name_ar', 'like','%'. $query .'%')
                            ->get();

      return view('forentend4.search.search',compact('products','query'));


    }

    public function searchAlgolia(Request $request)
    {
        
    }

    public function TheProductsOfThisMerchant($id)
    {
           


          if (request()->id) 
          {

               $AcountCode=Request('id');
           }

                 $vendor=admin::where('AcountCode',$AcountCode)->first();

                 $id=$vendor->id;
         
           $products = Product::where('admin_id',$id)->inrandomOrder()->paginate(60);
            $categoryName = 'Categories';


                          $vendorslider=filess::where('file_type','admin')->
        where('relation_id',$id)->inrandomOrder()->get(); 

         //////////////////////////////

               $photoes=photoes::orderBy('id','desc')->first();
      $photoes=$photoes->id;
      $file_id=$photoes;


      

          $HomeSliders=filess::where('file_type','HomeSlider')->
      where('relation_id',$file_id)->get(); 
         

                return view('forentend3.TheProductsOfThisMerchant.TheProductsOfThisMerchant')->with([
            'products' => $products,
            'categoryName'=>$categoryName,
            'vendor'=>$vendor,
            'vendorslider'=>$vendorslider,
            'HomeSliders'=>$HomeSliders
         
          
        ]);
    }


    public function changePriceDependOnsize()
    {

                     
              $id=request('id');

              

        $success_output=OtherDatasٍSiZes::where('id',$id)->first()->sizePrice;
        $sizeNAme=OtherDatasٍSiZes::where('id',$id)->first()->sizeNAme;

     $output = array(
      'success'     =>  $success_output,
      'sizeNAme'     =>  $sizeNAme

    );
     
                   
                    return $output;
    }

                public function changePriceDependOncolors()
                {

   $id=request('id');


   if (request()->ajax() && request()->has('id') )
               {
               $id=request('id');

         
    
             $success_output=otherData::where('id',$id)->first()->input_value;
        $colorprice=otherData::where('id',$id)->first()->colorprice;


         $SRC=otherData::where('id',$id)->first()->colorphoto;

        $color_name=otherData::where('id',$id)->first()->input_value;

  $product_id=otherData::where('id',$id)->first()->product_id;

              

              $SRC =substr($SRC,30,50);

           $productimage='<img src="'.url('/').$SRC.'" width="500" height="300" style="margin-top:1px;">';

        session()->put('color_name'.$product_id,$color_name);
        session()->put('SRC'.$product_id,$SRC);

               $OtherDatasٍSiZes=  OtherDatasٍSiZes::where('product_id',$product_id)->where('color',$color_name)->get();

 


    return view('forentend4.productdetails.ajax',[
        'OtherDatasٍSiZes'=>$OtherDatasٍSiZes,
        'color_name'=>$color_name,
        'colorprice'=>$colorprice
         ])->render();


   
         
              }

      
 


 
     
                   
                
                }


                 public function changePriceDependOncolors2()
                {

   $id=request('id');


   if (request()->ajax() && request()->has('id') )
               {
               $id=request('id');

         
    
     
         $colorprice=otherData::where('id',$id)->first()->colorprice;

  $product_id=otherData::where('id',$id)->first()->product_id;
        session()->put('price'.$product_id,$colorprice);

  

        return  $output = array(
      'success'     =>  $colorprice,
      'colorprice'     =>  $colorprice,
    

    );
     

   
         
              }

      
 


 
     
                   
                
                }


                 public function submit_text_search()
    {


                 $query=request('text_search');

                      $id=request('id');
          $products=DB::table('productes')
        ->where('title_name_ar', 'LIKE', "%{$query}%")
        ->where('department_id',
                  $id)->where('status','active')->inRandomOrder()->paginate(10);
        

              if(session('lang') =='ar')
        {
 $categoryName =Department::where('id',$id)->first()->dep_name_ar;
        }
        else
        {
            $categoryName =Department::where('id',$id)->first()->dep_name_en; 
        }
                 $photo =Department::where('id',$id)->first()->icon;

                  $Departments = DB::table('departments')
            ->where('parent',$id)->inrandomOrder()->take(7)->get();


    $Bestsellers=Product::where('status','active')->inrandomOrder()->paginate(9);
      $NewArrivals=Product::where('status','active')->inrandomOrder()->paginate(9);

  

              return view('forentend3.shop.shop')->with([
            'products' => $products,
            'Departments' => $Departments,
            'categoryName' => $categoryName,
            'photo'=>$photo,
            'Bestsellers'=>$Bestsellers,
            'NewArrivals'=>$NewArrivals,
            'arrcolor'=>$arrcolor=0


        ]);
 
    }


        public function indexHome()
        {

          

                    
              $arrcolor=0;
  $productsgrid = Product::where('status','active')->orderBy('id','desc')->paginate(10); 
    return view('forentend4.productsgrid',[
        'productsgrid'=>$productsgrid,
        'arrcolor'=>$arrcolor,
         ])->render();


             

              if (request()->sort == 'low_highHome')
         {    

      
     $productsgrid = Product::where('status','active')->orderBy('price')->paginate(10);
   $TopRateds=Product::where('status','active')->inRandomOrder()->take(33)->get();
        $arrcolor=1;

      
    
        
        } elseif ( request()->sort == 'high_lowHome' )
         {
   $TopRateds=Product::where('status','active')->inRandomOrder()->take(33)->get();

        $arrcolor=2;

              
        } 


        elseif (  request()->sort == 'theMostRecentHome' )
         {

 

    if (request()->ajax() && request()->has('id') )
               {

              $arrcolor=0;
  $productsgrid = Product::where('status','active')->orderBy('id','desc')->paginate(10);

      
 
            } 

          }

          elseif ( request()->sort == 'moreRequestsHome' )
         {

            
    

      $productsgrid = Product::where('status','active')->inRandomOrder()->paginate(10);

      $arrcolor=0;

         }
            
        }

       
    
}
