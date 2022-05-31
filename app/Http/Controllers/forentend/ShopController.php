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
use App\Models\attribute_values;
use App\Models\product_variant;
use App\Models\Reviews;

 




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

   
 

     public function index()
    { 

           $pagination = 9;
            $query='';
       // $categories = Department::all();
        $categories = Department::take(4)->get();

        if (request()->id) 
        {

    $products = Product::where('status','active')->where('department_id',request()->id);
            
            $Department =Department::where('id',request()->id)->first(); 
            $categoryName_en = $Department ->dep_name_en; 
            $categoryName_ar = $Department ->dep_name_ar; 

    session('lang') == 'en'?   $categoryName = $categoryName_en :   $categoryName =  $categoryName_ar ;

            
        } else 
        {
            $products = Product::where('status','active');
           
    session('lang') == 'en'?   $categoryName = 'Featured' :   $categoryName = 'متميز';
        }

        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        }

        elseif (request('text_search') )
            {
                 $query=request('text_search');
            
    $products = $products->
    where('title_name_en', 'LIKE', "%{$query}%")
    ->paginate($pagination);

         }

         elseif (request()->trad_id  ) {
            $products = $products->where('trad_id', request()->trad_id)->paginate($pagination);
        }

         elseif (request()->tag_id  ) {
            $products = $products->where('color_id', request()->tag_id)->paginate($pagination);
        }


         else 
         {
             $products = $products->paginate($pagination);
        }

          

        return view('forentend4.shop.shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            'query'=> $query
        ]);
  }

   public function shop_Filter()
    { 
           
           $pagination = 9;
            $products = Product::where('status','active');
            $categoryName = 'Featured';
          $categories = Department::all();

 
              

                 if(
            request()->price_first   !==null  and 
            request()->price_second  !==null and
            request()->Brand_ids ==null     and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing ==null and
            request()->sort ==null and
            request()->department_id ==null  
        ) 

        {
             
               
              $products = 
             $products
             ->inRandomOrder()->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);
        }

               elseif 
             ( request()->price_first   ==null  and 
            request()->price_second  ==null and
            request()->Brand_ids !==null     and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing ==null and
            request()->sort ==null and
            request()->department_id ==null ) 
        {
          
             $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

             $products = $products->whereIn('trad_id',   $Brand_ids )->paginate($pagination);
        } 
     

 elseif 
         (
            request()->price_first  == null and 
            request()->price_second == null and
            request()->Brand_ids    == null   and
            request()->attribute_value_ids_Filter !=null and
            request()->Showing    == null and
            request()->sort == null and
            request()->department_id == null  
          ) 
        {
             
             $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
              
        $products = $products->whereIn('id',   $product_ids )->paginate($pagination);
        }


        elseif 
         (
          request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort !==null and
            request()->department_id ==null    
          ) 
        {
            
                ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products->paginate($pagination);
        }
        ///end sort 
             
              
              
         
        }

         elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    !==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {
          $pagination =request()->Showing; 
            $products = $products->inRandomOrder()->paginate($pagination);

             
         }

           elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort ==null and
            request()->department_id !==null  
         
         )
          {
             

 $products = $products->where('department_id', request()->department_id)->paginate($pagination);
         }

 
      
      elseif  
         (
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids     !==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort ==null and
            request()->department_id ==null  
          ) 
         
        {
            
           
            $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);
              
              $products = 
             $products
             
          ->whereIn('trad_id',   $Brand_ids )->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);
        }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and

            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter !==null and
            request()->Showing    ==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {


          //  return 'price_first price_second attribute_value_ids_Filter';
              $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
         
             $products = 
             $products
            ->whereIn('id',   $product_ids )->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);
         
             
         }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and

            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    !==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {
            // return 'price_first price_second Showing';
  $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }

           $pagination =request()->Showing; 
             $products = 
             $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);

         }
             elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and

            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort !==null and
            request()->department_id ==null  
         
         )
          {
            /// return price_first price_second sort
       $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
     ///sort
            if (request()->sort == 'low_high') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('price', 'desc')->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('id', 'desc')->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->inRandomOrder()->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        }
        ///end sort 

         
                   
         }
           

       

         ////start Brand_ids with all/////////////


         elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    !==null   and
            request()->attribute_value_ids_Filter !==null and
            request()->Showing    ==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {
           // return 'attribute_value_ids_Filter   Brand_ids';

            $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

             $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
              
        $products = $products
        ->whereIn('id',   $product_ids )
        ->whereIn('trad_id',   $Brand_ids )
        ->paginate($pagination);
         
                   
         }

          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    !==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    !==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {
           // return 'Showing   Brand_ids';
          $pagination =request()->Showing; 
         
                     $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

             $products = $products->whereIn('trad_id',   $Brand_ids )->paginate($pagination);
         }


          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    !==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort !==null and
            request()->department_id ==null  
         
         )
          {

            //return 'sort   Brand_ids';

                      $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);


                if (request()->sort == 'low_high') {
            $products = $products
            ->orderBy('price_offer')->
            whereIn('trad_id',   $Brand_ids )->
             paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->
orderBy('price_offer', 'desc')
  ->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->
            whereIn('trad_id',   $Brand_ids )
             ->inRandomOrder()
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->
            whereIn('trad_id',   $Brand_ids )
            ->inRandomOrder()
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
            
              
         }

          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    !==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort ==null and
            request()->department_id !==null  
         
         )
          {
          //  return 'department_id   Brand_ids ..';
              $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

       $products = $products
       ->where('department_id', request()->department_id)
       ->whereIn('trad_id',   $Brand_ids )
       ->paginate($pagination);
                
                   
         }
         ////start attribute_value_ids_Filter with all/////////////

           elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter !==null and
            request()->Showing    !==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {
           //return 'Showing   attribute_value_ids_Filter';

              $pagination =request()->Showing; 

              $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
              
        $products = $products->whereIn('id',   $product_ids )->paginate($pagination);

         
                      


         }

         elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter !==null and
            request()->Showing    ==null and
            request()->sort !==null and
            request()->department_id ==null  
         
         )
          {
            //return 'sort   attribute_value_ids_Filter';
         
                      
         
             $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
              

              if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }

        else {
            $products = $products->inRandomOrder()
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
         }

          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter !==null and
            request()->Showing    ==null and
            request()->sort ==null and
            request()->department_id !==null  
         
         )
          {
          //  return 'department_id   attribute_value_ids_Filter ';

             $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
              
        $products = $products
        ->where('department_id',request()->department_id)
        ->whereIn('id',   $product_ids )
        ->paginate($pagination);
           
                  
         }
         ////end attribute_value_ids_Filter with all/////////////

         ////start Showing with all/////////////
         elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    !==null and
            request()->sort !==null and
            request()->department_id ==null  
         
         )
          {


           // return '    Showing sort';
          $pagination =request()->Showing; 

              if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products->paginate($pagination);
        }

        else {
            $products = $products->inRandomOrder()->paginate($pagination);
        }



           
                    
         }
          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and

            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter !==null and
            request()->Showing    !==null and
            request()->sort ==null and
            request()->department_id !==null  
         
         )
          {

         //    return 'Showing attribute_value_ids_Filter  department_id';
          $pagination =request()->Showing; 
          $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
              
        $products = $products
        ->where('department_id', request()->department_id)
        ->whereIn('id',   $product_ids )
        ->paginate($pagination);

 
         
                   
         }
         ////start sort with all/////////////


         
         ////end sort with all/////////////
         elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing    ==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {
           /// return 'price_first price_second Brand_ids attribute_value_ids_Filter..............';

            $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
             $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);
              
        $products =
         $products
         ->whereIn('id',   $product_ids )->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )

         ->paginate($pagination);
 
         }

           elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing    !==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {


         // return 'price_first price_second Brand_ids Showing  ..';
           $pagination =request()->Showing;

             $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);
      $products = $products
 ->whereIn('trad_id',   $Brand_ids )->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
 ->paginate($pagination);

         
                    
         }

            elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort !==null and
            request()->department_id ==null  
         
         )
          {
           // return 'price_first price_second Brand_ids sort';

                $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);


                if (request()->sort == 'low_high') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('price_offer')->
            whereIn('trad_id',   $Brand_ids )->
             paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->orderBy('price_offer', 'desc')
  ->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('id', 'desc')
            ->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->inRandomOrder()
            ->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
            
    
                    
         }

              elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort  ==null and
            request()->department_id !==null  
         
         )
          {
           // return 'price_first price_second Brand_ids department_id xx';

              $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

           $products  = $products->
           where('department_id', request()->department_id)->
           whereIn('trad_id',   $Brand_ids )->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);
         
                   
         }


           elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing    !==null and
            request()->sort  ==null and
            request()->department_id ==null  
         
         )
          {
            //return 'price_first price_second Brand_ids attribute_value_ids_Filter Showing  ';
          $pagination =request()->Showing; 

              $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

       $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }


           $products =    $products
             ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
             ->paginate($pagination);


         
                    
         }

         elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     ==null and
            request()->sort  !==null and
            request()->department_id ==null  
         
         )
          {

         //return 'price_first price_second Brand_ids attribute_value_ids_Filter sort...';

              $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }

             $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);


                if (request()->sort == 'low_high') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('price_offer')->
            whereIn('trad_id',   $Brand_ids )->
            whereIn('id',   $product_ids )->
             paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->orderBy('price_offer', 'desc')
  ->
            whereIn('trad_id',   $Brand_ids )
            ->
            whereIn('id',   $product_ids )->
            paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('id', 'desc')
            ->
            whereIn('trad_id',   $Brand_ids )->
            whereIn('id',   $product_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->inRandomOrder()
            ->
            whereIn('trad_id',   $Brand_ids )->
             whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->
            whereIn('trad_id',   $Brand_ids )->
             whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
            
    

         
                    
         }

           elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     ==null and
            request()->sort  ==null and
            request()->department_id !==null  
         
         )
          {
            //return 'price_first price_second Brand_ids attribute_value_ids_Filter department_id ,,';

              $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

            $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }

           $products  = $products->
           where('department_id', request()->department_id)->
           whereIn('trad_id',   $Brand_ids )->
            whereIn('id',   $product_ids )->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);
         
                     
         }

           elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id ==null  
         
         )
          {
            //return 'price_first price_second Brand_ids attribute_value_ids_Filter  Showing sort.....';
          $pagination =request()->Showing; 


                   $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }

             $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);


                if (request()->sort == 'low_high') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('price_offer')->
            whereIn('trad_id',   $Brand_ids )->
            whereIn('id',   $product_ids )->
             paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->orderBy('price_offer', 'desc')
  ->
            whereIn('trad_id',   $Brand_ids )
            ->
            whereIn('id',   $product_ids )->
            paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('id', 'desc')
            ->
            whereIn('trad_id',   $Brand_ids )->
            whereIn('id',   $product_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->inRandomOrder()
            ->
            whereIn('trad_id',   $Brand_ids )->
             whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->
            whereIn('trad_id',   $Brand_ids )->
             whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
            
         
                  
         }


          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
           // return 'price_first price_second Brand_ids attribute_value_ids_Filter  Showing sort department_id ..';

               $pagination =request()->Showing; 
           $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);
        $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
              



            ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
    ->whereIn('trad_id',   $Brand_ids )
    ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
        ///end sort 

         
                   
         }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id ==null  
         
         )
          {

            //return 'price_first price_second      Showing sort  ';

          $pagination =request()->Showing; 

           ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
->whereBetween('price_offer',[request()->price_first,request()->price_second])


            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
->whereBetween('price_offer',[request()->price_first,request()->price_second])

            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
->whereBetween('price_offer',[request()->price_first,request()->price_second])

            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
->whereBetween('price_offer',[request()->price_first,request()->price_second])

            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
->whereBetween('price_offer',[request()->price_first,request()->price_second])

            ->paginate($pagination);
        }
        ///end sort 
     



          
                    
         }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id ==null  
         
         )
          {
           // return 'price_first price_second   Brand_ids   Showing sort .. ';
 
          $pagination =request()->Showing; 

             $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);


                if (request()->sort == 'low_high') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('price_offer')->
            whereIn('trad_id',   $Brand_ids )->
             paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->orderBy('price_offer', 'desc')
  ->
            whereIn('trad_id',   $Brand_ids )->
            paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->orderBy('id', 'desc')
            ->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->inRandomOrder()
            ->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->
            whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
            
         
                    
         }
          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     ==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
           // return 'sort department_id ';

                 ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        }
        ///end sort 
         
                    
         }

         elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     !==null and
            request()->sort  ==null and
            request()->department_id !==null  
         
         )
          {

           // return 'Showing department_id  ';
          $pagination =request()->Showing; 

         
                    $products = $products
                    ->where('department_id', request()->department_id)
                    ->paginate($pagination);
         }

          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     !==null and
            request()->sort  ==null and
            request()->department_id !==null  
         
         )
          {


           // return 'Showing department_id  Brand_ids ,,';
          $pagination =request()->Showing; 

            $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

             $products = $products
             ->whereIn('trad_id',   $Brand_ids )
             ->where('department_id', request()->department_id)
             ->paginate($pagination);
         
                   
         }

            

            elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     !==null and
            request()->sort  ==null and
            request()->department_id !==null  
         
         )
          {
            //return 'price_first price_second Brand_ids Showing department_id  Brand_ids attribute_value_ids_Filter';
          $pagination =request()->Showing; 

              $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

            $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }

           $products  = $products->
           where('department_id', request()->department_id)->
           whereIn('trad_id',   $Brand_ids )->
            whereIn('id',   $product_ids )->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);
         
         
                    
         }

         elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
            //return 'sort Showing department_id    ';

          $pagination =request()->Showing; 

            ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->paginate($pagination);
        }
        ///end sort 


         
                    
         }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
    //  return 'price_first price_second sort Showing department_id    ';

          $pagination =request()->Showing; 

            ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        }
        ///end sort 


         
                    
         }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
    // return 'price_first price_second sort Showing department_id  Brand_ids  ';

          $pagination =request()->Showing; 
           $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

            ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
        ///end sort 


         
                    
         }

           elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     ==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
           // return 'price_first price_second sort   department_id   ';

            
           
            ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        }
        ///end sort 
                     
         }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     ==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
          //  return 'price_first price_second sort Brand_ids  department_id    ';

                      $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

            ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
        ///end sort 
         
                 
         }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     ==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
           // return 'price_first price_second sort Brand_ids attribute_value_ids_Filter  department_id  xx ';

             $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
              

             $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);

            ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
  ->whereIn('trad_id',   $Brand_ids )
  ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
        ///end sort 
         
                   
         }

           

            elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     ==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
            //return '  sort     department_id  attribute_value_ids_Filter ';
                 
  $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
                 ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
            ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
        ///end sort 
         

         
                  
         }

          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
         //   return '  attribute_value_ids_Filter sort Showing    department_id    ';

          $pagination =request()->Showing; 
             $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }
      
  
     
 
     ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
             ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
              ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
              ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
              ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
              ->whereIn('id',   $product_ids )
            ->paginate($pagination);
        }
        ///end sort 
         

                     
         }

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     !==null and
            request()->sort  ==null and
            request()->department_id !==null  
         
         )
          {
          //  return 'price_first  price_second    Showing    department_id ';
         
          $pagination =request()->Showing; 
          $products= $products
             ->where('department_id',request()->department_id)->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);
                  

         }
          

          elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter !==null and
            request()->Showing     !==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
           // return '  attribute_value_ids_Filter sort Showing    department_id  Brand_ids    ';


          $pagination =request()->Showing; 

              $attribute_value_ids = request('attribute_value_ids_Filter');
$attribute_value_ids = explode(',', $attribute_value_ids);

     $product_variants =product_variant::whereIn('attribute_value_id',$attribute_value_ids)->get();

            $product_ids=[];
            foreach ($product_variants as $key => $product_variant) 
            {
                  $product_id=$product_variant->product_id;

                  array_push( $product_ids,$product_id);
            }

             $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);


                if (request()->sort == 'low_high') {
            $products = $products
            ->orderBy('price_offer')->
            whereIn('trad_id',   $Brand_ids )->
            whereIn('id',   $product_ids )->
            where('department_id', request()->department_id)->
             paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products
  ->orderBy('price_offer', 'desc')
  ->
            whereIn('trad_id',   $Brand_ids )
            ->
            whereIn('id',   $product_ids )->
            where('department_id', request()->department_id)->
            paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products
            ->orderBy('id', 'desc')
            ->
            whereIn('trad_id',   $Brand_ids )->
            whereIn('id',   $product_ids )->
            where('department_id', request()->department_id)
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products
            ->inRandomOrder()
            ->
            whereIn('trad_id',   $Brand_ids )->
             whereIn('id',   $product_ids )->
            where('department_id', request()->department_id)

            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
  ->
            whereIn('trad_id',   $Brand_ids )->
             whereIn('id',   $product_ids )->
            where('department_id', request()->department_id)

            ->paginate($pagination);
        }
            
    

   
         
                     
         }

           elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    !==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     ==null and
            request()->sort  !==null and
            request()->department_id !==null  
         
         )
          {
   // return '    sort      department_id  Brand_ids    ';

            
           $Brand_ids = request('Brand_ids');
      $Brand_ids = explode(',', $Brand_ids);
   

            ///sort
            if (request()->sort == 'low_high') {
            $products = $products->orderBy('price_offer')
            ->where('department_id', request()->department_id)
    ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price_offer', 'desc')
            ->where('department_id', request()->department_id)
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')
            ->where('department_id', request()->department_id)
    
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()
            ->where('department_id', request()->department_id)
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products
            ->where('department_id', request()->department_id)
  ->whereIn('trad_id',   $Brand_ids )
            ->paginate($pagination);

        
    
                     
         }
}
           

          elseif (
           
            request()->price_first  !==null and 
            request()->price_second !==null and
            request()->Brand_ids    ==null   and

            request()->attribute_value_ids_Filter ==null and
            request()->Showing     ==null and
            request()->sort  ==null and
            request()->department_id !==null  
         
         )
          {
          //  return 'price_first  price_second    department_id ..';
        $products = $products
          ->where('department_id', request()->department_id)->
  whereBetween('price_offer',[request()->price_first,request()->price_second])
             ->paginate($pagination);
         }

         elseif (
           
            request()->price_first  ==null and 
            request()->price_second ==null and
            request()->Brand_ids    ==null   and
            request()->attribute_value_ids_Filter ==null and
            request()->Showing    ==null and
            request()->sort ==null and
            request()->department_id ==null  
         
         )
          {
             return  request();

                    $products = $products->paginate($pagination);
         }
        

       
            
                    
       

         return view('forentend4.shop.shop_Filter',[
           'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
         ])->render();
  }

   public function shop_sorting()
    { 

        if (request()->Showing) {
          $pagination =request()->Showing; 
          


        }
        else
        {
           $pagination = 9; 
        }

           
       // $categories = Department::all();
        $categories = Department::take(4)->get();

        if (request()->id) 
        {

    $products = Product::where('status','active')->where('department_id',request()->id);
            
            $categoryName =Department::where('id',request()->id)->first()->dep_name_en; 
            
        } else {
            $products = Product::where('status','active');
            $categoryName = 'Featured';
        }

        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } 
        elseif (request()->sort == 'newness') {
            $products = $products->orderBy('id', 'desc')->paginate($pagination);
        }

        elseif (request()->sort == 'popularity') {
            $products = $products->inRandomOrder()->paginate($pagination);
        }
         elseif (request()->sort == 'Default') {
            $products = $products->paginate($pagination);
        }

        else {
            $products = $products->inRandomOrder()->paginate($pagination);
        }

        return view('forentend4.shop.shop_Filter',[
           'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
         ])->render();
  }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */


        public function show($id)
    {


        $Reviewscount = Reviews::where('product_id',$id)->count() ;
        $Reviews = Reviews::where('product_id',$id)->get() ;
  
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
            'mightAlsoLikes2'=>$mightAlsoLikes2,
            'Reviewscount'=>$Reviewscount,
            'Reviews'=>$Reviews,
            'id'=>$id
           
            
          
            
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
