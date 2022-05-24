<?php

  if (!function_exists('TotalAfterShipingPrice'))

 {

     function TotalAfterShipingPrice()

   {
          /* $city_id=null;

        if ($city_id) {
              if(App\statDistrebutionToZones::where('city_id',$city_id)->first())
                  {
  $zone_id=App\statDistrebutionToZones::where('city_id',$city_id)->first()->zone_id;

                   $zoneprice=App\zones::where('id',$zone_id)->first()->price;

                 }

 

                 if(App\statDistrebutionToZones::where('city_id',$city_id)->first())

                {
                $zoneprice;
                 

                }
                 else
                 {
                 $zoneprice = DB::table('zones')->max('price');


                 }
        }

        else
        {
                 $zoneprice = DB::table('zones')->max('price');

        }
   
*/

                 

                 return $zoneprice = 0 ;
                  

                
        

   }


   function TotalAfterShipingPrice2($user)

   {



 

                  if($user->shapingplace     == 'address2')

                  {
                    if($user->city_id2 )
                    {


                      $city_id=App\cities::where('id',$user->city_id2 )->first()->id;



                    }

                  }


                  if($user->shapingplace     == 'address1')

                  {
                    if($user->city_id )
                    {


                      $city_id=App\cities::where('id',$user->city_id )->first()->id;



                    }

                  }




                  if(App\statDistrebutionToZones::where('city_id',$city_id)->first())
                  {

                   $zone_id=App\statDistrebutionToZones::where('city_id',$city_id)->first()->zone_id;

                   $zoneprice=App\zones::where('id',$zone_id)->first()->price;

                 }



                 


              

                 if(App\statDistrebutionToZones::where('city_id',$city_id)->first())

                {
                $zoneprice;
                 

                }
                 else
                 {
                 $zoneprice = DB::table('zones')->max('price');


                 }

                 return $zoneprice  ;
                  

                
        

   }





}


 
  function TotalAfterShipingPriceadmin($user_id)

   {



 

                  if(App\user::where('id',$user_id)->first()->shapingplace     == 'address2')

                  {
                    if(App\user::where('id',$user_id)->first()->city_id2 )
                    {


                      $city_id=App\cities::where('id',App\user::where('id',$user_id)->first()->city_id2 )->first()->id;



                    }

                  }


                  if(App\user::where('id',$user_id)->first()->shapingplace     == 'address1')

                  {
                    if(App\user::where('id',$user_id)->first()->city_id )
                    {


                      $city_id=App\cities::where('id',App\user::where('id',$user_id)->first()->city_id )->first()->id;



                    }

                  }




                  if(App\statDistrebutionToZones::where('city_id',$city_id)->first())
                  {

                   $zone_id=App\statDistrebutionToZones::where('city_id',$city_id)->first()->zone_id;

                   $zoneprice=App\zones::where('id',$zone_id)->first()->price;

                 }



                 


              

                 if(App\statDistrebutionToZones::where('city_id',$city_id)->first())

                {
                $zoneprice;
                 

                }
                 else
                 {
                 $zoneprice = DB::table('zones')->max('price');


                 }

                 return $zoneprice  ;
                  

                
        

   }





 



  if (!function_exists('shopings'))

 {

     function shopings()

   {



         return    DB::table('departments')

            ->whereNull('parent')->take(4)->get();

   }

}


  if (!function_exists('ratio'))

 {

     function ratio($price,$price_offer)

   {

         $price = (int)$price;//string to int
         $price_offer = (int)$price_offer;//string to int


          $percentChange = (($price - $price_offer) / $price) * 100;
    return round(abs($percentChange));

   }

}






  if (!function_exists('themostrecent'))

 {

     function themostrecent()

   {



         return    DB::table('departments')

            ->whereNull('parent')->inrandomOrder()->take(4)->get();

   }

}





 if (!function_exists('Offers'))

 {

     function Offers()

   {



         return    DB::table('departments')

            ->whereNull('parent')->inrandomOrder()->take(4)->get();

   }

}











  if (!function_exists('collections'))

 {

     function collections()

   {



         return    DB::table('departments')

            ->whereNotNull('parent')->take(4)->get();

   }

}





  if (!function_exists('Collectionssingleproduct'))

 {

     function Collectionssingleproduct()

   {



         return    DB::table('departments')

            ->take(25)->get();

   }

}







if (!function_exists('TotalProductsOFstore'))

 {

    function TotalProductsOFstore($id)

  {

          return  

          App\product::where('admin_id',$id)->count();



  }

}





   if (!function_exists('AllCategories'))

 {

     function AllCategories()

   {



         return    DB::table('departments')->get();

   }

}



   if (!function_exists('AllCategoriesshop'))

 {

     function AllCategoriesshop()

   {



         return    DB::table('departments')->take(57)->get();

   }

}



if (!function_exists('retrriveurl'))

 {

    function retrriveurl($id,$BannerTop)

  {

          return   $id;

          App\whoistarget::where('file_type',$BannerTop)->where('relation_id',$id)->department_id->first();



  }

}





if (!function_exists('ccc'))

 {

	  function aurl($url=null)

	{

         return  ('/admin'.$url);



	}

}



  if (!function_exists('presentDate')) {

    function presentDate($date)

{

    return Carbon::parse($date)->format('M d, Y');

}



}



 if (!function_exists('pendingProductCount')) {

    function pendingProductCount() 



    {

          $pendingProductCount=App\Product::where('status','مرفوض')->count();



          



        return $pendingProductCount;

    }

}





if (!function_exists('Totalproducts')) {

    function Totalproducts() 



    {

          $Totalproducts=App\Product::where('status','مفعل')->count();



          



        return $Totalproducts;

    }

}





if (!function_exists('Totalvendors')) {

    function Totalvendors() 



    {

          $Totalvendors=App\admin::where('Status',1)->count();



          



        return $Totalvendors;

    }

}











if (!function_exists('pendingProduct')) {

    function pendingProduct() 



    {

          $pendingProduct=App\Product::where('status','مرفوض')->take(5)->get();



          



        return $pendingProduct;

    }

}





if (!function_exists('NewOrders')) {

    function NewOrders() 



    {

        //  $NewOrders=App\OrderProduct::where('orderStates',0)->

                                    ///   where('admin_id',auth()->guard('admin')->user()->id)->count();

     $NewOrders=App\OrderShareWithAllVendor::where('status','neworder')->count();

          



        return $NewOrders;

    }

}


if (!function_exists('waitshiping')) {

    function waitshiping() 



    {

       
     $waitshiping=App\OrderShareWithAllVendor::where('status','waitshiping')->count();
          



        return $waitshiping;

    }

}





if (!function_exists('shipped'))
 {

    function shipped() 

    {

     

     $shipped=App\OrderShareWithAllVendor::where('status','shipped')->count();

        return $shipped;

    }

}



if (!function_exists('returned'))
 {

    function returned() 

    {

    

     $returned=App\OrderShareWithAllVendor::where('status','returned')->count();

        return $returned;

    }

}



if (!function_exists('Received'))
 {

    function Received() 

    {

 


     $Received=App\OrderShareWithAllVendor::where('status','Received')->count();

        return $Received;

    }

}


//affiliateID
///////////////////////////////////// affiliate //////// ///////////////////////////////////////////////////////




if (!function_exists('NewOrdersaffiliate')) {

    function NewOrdersaffiliate($id) 



    {

        //  $NewOrdersaffiliate=App\OrderProduct::where('orderStates',0)->

                                    ///   where('admin_id',auth()->guard('admin')->user()->id)->count();

     $NewOrdersaffiliate=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                    ->where('status','neworder')->count();

          



        return $NewOrdersaffiliate;

    }

}


if (!function_exists('waitshipingaffiliate')) {

    function waitshipingaffiliate($id) 



    {

       
     $waitshipingaffiliate=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                       ->where('status','waitshiping')->count();
          



        return $waitshipingaffiliate;

    }

}





if (!function_exists('shippedaffiliate'))
 {

    function shippedaffiliate($id) 

    {

     

     $shippedaffiliate=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                   -> where('status','shipped')->count();

        return $shippedaffiliate;

    }

}



if (!function_exists('returnedaffiliate'))
 {

    function returnedaffiliate($id) 

    {

    

     $returnedaffiliate=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                    ->where('status','returned')->count();

        return $returnedaffiliate;

    }

}



if (!function_exists('Receivedaffiliate'))
 {

    function Receivedaffiliate($id) 

    {

 


     $Receivedaffiliate=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                  ->where('status','Received')->count();

        return $Receivedaffiliate;

    }

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////







//Balance
///////////////////////////////////// Balance //////// ///////////////////////////////////////////////////////




if (!function_exists('NewOrdersaffiliateBalance')) {

    function NewOrdersaffiliateBalance($id) 



    {

        //  $NewOrdersaffiliateBalance=App\OrderProduct::where('orderStates',0)->

                                    ///   where('admin_id',auth()->guard('admin')->user()->id)->count();



     $NewOrdersaffiliateBalance=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                    ->where('status','neworder')->get();



   
          
                       $Balance=0;
                   foreach ($NewOrdersaffiliateBalance    as  $value) 

                   {
                          $orderID=$value->order_id;

                         $billing_total= App\Order::where('id',$orderID)->first()->billing_total;

                         $Balance=$billing_total+$Balance;


                   }

        return $Balance;

    }

}


if (!function_exists('waitshipingaffiliateBalance')) {

    function waitshipingaffiliateBalance($id) 



    {

       
     $waitshipingaffiliateBalance=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                       ->where('status','waitshiping')->get();
          



         
                       $Balance=0;
                   foreach ($waitshipingaffiliateBalance    as  $value) 

                   {
                          $orderID=$value->order_id;

                         $billing_total= App\Order::where('id',$orderID)->first()->billing_total;

                         $Balance=$billing_total+$Balance;


                   }

        return $Balance;

    }

}





if (!function_exists('shippedaffiliateBalance'))
 {

    function shippedaffiliateBalance($id) 

    {

     

     $shippedaffiliateBalance=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                   -> where('status','shipped')->get();

               $Balance=0;
                   foreach ($shippedaffiliateBalance    as  $value) 

                   {
                          $orderID=$value->order_id;

                         $billing_total= App\Order::where('id',$orderID)->first()->billing_total;

                         $Balance=$billing_total+$Balance;


                   }

        return $Balance;

    }

}



if (!function_exists('returnedaffiliateBalance'))
 {

    function returnedaffiliateBalance($id) 

    {

    

     $returnedaffiliateBalance=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                    ->where('status','returned')->get();

         $Balance=0;
                   foreach ($returnedaffiliateBalance    as  $value) 

                   {
                          $orderID=$value->order_id;

                         $billing_total= App\Order::where('id',$orderID)->first()->billing_total;

                         $Balance=$billing_total+$Balance;


                   }

        return $Balance;

    }

}



if (!function_exists('ReceivedaffiliateBalance'))
 {

    function ReceivedaffiliateBalance($id) 

    {

 


     $ReceivedaffiliateBalance=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                  ->where('status','Received')->get();

            $Balance=0;
                   foreach ($ReceivedaffiliateBalance    as  $value) 

                   {
                          $orderID=$value->order_id;

                         $billing_total= App\Order::where('id',$orderID)->first()->billing_total;

                         $Balance=$billing_total+$Balance;


                   }

        return $Balance;

    }

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////


if (!function_exists('AmountsInprogress'))
 {

    function AmountsInprogress($id) 

    {

 


     $AmountsInprogress=App\OrderShareWithAllVendor::where('affiliateID',$id)->get();

            $Balance=0;
                   foreach ($AmountsInprogress    as  $value) 

                   {
                          $orderID=$value->order_id;

                         $billing_total= App\Order::where('id',$orderID)->first()->billing_total;

                         $Balance=$billing_total+$Balance;


                   }

        return $Balance;

    }

}




////////////////////////////////////////////////////////////////////////////////////////////////////////////




if (!function_exists('Withdrawable'))
 {

    function Withdrawable($id) 

    {

 


     $Withdrawable=App\OrderShareWithAllVendor::where('affiliateID',$id)
                                                  ->where('status','Received')->get();

            $Balance=0;
                   foreach ($Withdrawable    as  $value) 

                   {
                          $orderID=$value->order_id;

                         $billing_total= App\Order::where('id',$orderID)->first()->billing_total;

                         $Balance=$billing_total+$Balance;


                   }

                    $withdrawFromTotalMoneytotal=0;

                $withdrawFromTotalMoneys=App\withdrawFromTotalMoney::where('Accountant_id',$id)->get();


                foreach ($withdrawFromTotalMoneys as $withdrawFromTotalMoney)
                 { 

                 $withdrawFromTotalMoneytotal= $withdrawFromTotalMoneytotal+$withdrawFromTotalMoney->TheAmountToBeWithdrawn;
                  
                  }

        return $Balance - $withdrawFromTotalMoneytotal;

    }

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////



if (!function_exists('Productbalance')) {

    function Productbalance() 



    {

          $Productbalance=App\Product::where('admin_id',auth()->guard('admin')->user()->id)->count();



          



        return $Productbalance;

    }

}



if (!function_exists('moneybalance')) {

    function moneybalance() 



    {

   $moneybalance=App\Product::where('admin_id',auth()->guard('admin')->user()->id)->get();

            

            $Totalmoneybalance=0;



          foreach ($moneybalance as  $moneybalan) {

           $Totalmoneybalance=$Totalmoneybalance +$moneybalan->price;

          }



        return $Totalmoneybalance;

    }

}



if (!function_exists('moneybalancesalled')) {

    function moneybalancesalled() 



    {

   $moneybalancesalled=App\OrderProduct::where('admin_id',auth()->guard('admin')->user()->id)->

                                            where('orderStates',1)->get();

            

            $Totalmoneybalancesalled=0;



          foreach ($moneybalancesalled as  $moneybalancesalled) {

           $Totalmoneybalancesalled=$Totalmoneybalancesalled +$moneybalancesalled->Subtotal;

          }



        return $Totalmoneybalancesalled;

    }

}









if (!function_exists('Productbalancesalled')) {

    function Productbalancesalled() 



    { 

 



               $Productbalancesalled=App\OrderProduct::where('admin_id',auth()->guard('admin')->user()->id)->

                                            where('orderStates',1)->count();



        return $Productbalancesalled;

    }

}





if (!function_exists('valueRate')) {

    function valueRate() 



    { 

 



                $OrderProducts=App\OrderProduct::where('admin_id',auth()->guard('admin')->user()->id)->

                                            where('orderStates',1)->get();



                  $valueRate=0;

        foreach ($OrderProducts as   $OrderProduct)

         {

           $valueRate=$valueRate+$OrderProduct->Subtotal;

        }





                $percentage=auth()->guard('admin')->user()->percentage/100;

 



            $final=$percentage*$valueRate;

                   

     

        return $final;



    }

}











function setActiveCategory($category, $output = 'active')

{

    return request()->category == $category ? $output : '';

}





if (!function_exists('comm')) {

    function comm($id) 



    {

          $newes=App\newes::find($id);



         $NumberOFcomment=$newes->comment->count();



        return $NumberOFcomment;

    }

}





if (!function_exists('MenueControll')) {

    function MenueControll() 



    {

          $MenueControll=App\MenueControll::where('id',1)->first();



        



        return $MenueControll;

    }

}



if (!function_exists('admincount')) {

    function admincount() 



    {

          $admincount=App\admin::where('Status',0)->count();



        



        return $admincount;

    }

}



if (!function_exists('adminNeedAprove')) {

    function adminNeedAprove() 



    {

          $adminNeedAprove=App\admin::where('Status',0)->orderBy('id','desc')->get();



        



        return $adminNeedAprove;

    }

}



if (!function_exists('bps')) {

    function bps($id) 



    {

          if ($id== null)

           {

            $id=rand(1,123);

           

          }

  $bps=App\product::where('department_id',$id)->inrandomOrder()->take(3)->get();



        



        return $bps;

    }

}



if (!function_exists('countp')) {

    function countp($id) 



    {

          

  $countp=App\product::where('department_id',$id)->count();



        



        return $countp;

    }

}



if (!function_exists('BestSeller2')) {

    function BestSeller2($id) 



    {

          

  $BestSeller2=App\product::where('department_id',$id)->inrandomOrder()->take(2)->get();



        



        return $BestSeller2;

    }

}









if (!function_exists('langs'))

 {

	  function langs()

	{

         if (session()->has('lang'))

          {

         	return session('lang');

         }

         else

         {

         	return settings()->language;

         }



	}



}







   if (!function_exists('factmenues'))

 {

     function factmenues()

   {



         return    DB::table('departmentsFactories')

            ->whereNull('parent')->inrandomOrder()->take(5)->get();

   }

}





 if (!function_exists('collectionmenues'))

 {

     function collectionmenues()

   {



         return    DB::table('departments')

            ->whereNull('parent')->inrandomOrder()->take(5)->get();

   }

}



 if (!function_exists('NewArrivalsmenues'))

 {

     function NewArrivalsmenues()

   {



   return   $NewArrivalsmenues=App\product::where('status','مفعل')->inrandomOrder()->take(5)->orderBy('id','desc')->get();

   }

}





 if (!function_exists('SpecialDeals'))

 {

     function SpecialDeals()

   {



     return    DB::table('departments')

            ->whereNull('parent')->inrandomOrder()->take(3)->get();

   }

}



 if (!function_exists('imagegrid__items'))

 {

     function imagegrid__items()

   {



     return    DB::table('departments')

            ->whereNull('parent')->inrandomOrder()->take(4)->get();

   }

}







  

 if (!function_exists('brandsSections'))

 {

     function brandsSections($id)

   {





   return   $brandsSections=App\product::where('status','مفعل')->where('department_id',$id)

                                                               ->Where('discriminationForDpartment', 1)

                                                               ->inrandomOrder()->take(3)->get();

   }

}



if (!function_exists('dirction'))

 {

	  function dirction()

	{

         if (session()->has('lang'))

          {

         	 if (session('lang') == 'ar')

         	 {

         	 	return 'rtl';

         	 }

         	 else

         	 {

         	    return 'ltr';	

         	 }

         }

         else

         {

         	return 'ltr';

         }



	}

	

}



if (!function_exists('settings'))

 {

     function settings()

   {

         return   App\settings::orderBy('id','desc')->first();



   }

}



   if (!function_exists('departmentstag'))

 {

     function departmentstag()

   {



         return    DB::table('departments')

            ->whereNull('parent')->take(11)->get();

   }

}

 



   if (!function_exists('departments'))

 {

     function departments()

   {



         return    DB::table('departments')

            ->whereNull('parent')->take(16)->get();

   }

}



   if (!function_exists('departmentsFactories'))

 {

     function departmentsFactories()

   {



         return    DB::table('departmentsFactories')

            ->whereNull('parent')->take(16)->get();

   }

}











   if (!function_exists('departmentsMenue'))

 {

     function departmentsMenue($Department_id,$not_Department_id)

   {



       return  $Departments = \DB::table('departments')->where('parent',$Department_id)

                                     ->where('parent','!=',$not_Department_id)

            ->inrandomOrder()->take(1)->first();



   }

}



  if (!function_exists('departmentsFactoriesMenue'))

 {

     function departmentsFactoriesMenue($Department_id,$not_Department_id)

   {



       return  $departmentsFactories = \DB::table('departmentsFactories')->where('parent',$Department_id)

                                     ->where('parent','!=',$not_Department_id)

            ->inrandomOrder()->take(1)->first();



   }

}











if (!function_exists('departmentsMenue2'))

 {

     function departmentsMenue2()

   {



       return  $Departments = \DB::table('departments')

            ->whereNull('parent')->inrandomOrder()->take(6)->get();



   }

}





 





///////////////////



if (!function_exists('UserRegistration'))

 {

     function UserRegistration()

   {

         return   App\user::count('id');



   }

}

//////////////////



/////////////////////



if (!function_exists('numberAcessWebsite'))

 {

     function numberAcessWebsite()

   {

    $maxValue=DB::table('numberAcessWebsite')->select('*')->max('numberAcess');

         

           return  $maxValue;

   }

}



/////////////////////



if (!function_exists('get_parent')) {

    function get_parent($id) 

    {

          $dep_arr = [];

           



        $departments = \App\Department::find($id);



       if ( $departments->parent !==null  && $departments->parent > 0)

         {



              

               return get_parent($departments->parent).','.$id;

        }

        else

        {

            return $id;

        }

      

       

       // return json_encode($dep_arr, JSON_UNESCAPED_UNICODE);

    }

}



if (!function_exists('load_dep')) {

    function load_dep($select = null, $dep_hide = null) {



        $departments = \App\Department::selectRaw('dep_name_'.session('lang').' as text')

            ->selectRaw('id as id')

            ->selectRaw('parent as parent')

            ->get(['text', 'parent', 'id']);

        $dep_arr = [];

        foreach ($departments as $department) {

            $list_arr             = [];

            $list_arr['icon']     = '';

            $list_arr['li_attr']  = '';

            $list_arr['a_attr']   = '';

            $list_arr['children'] = [];



            if ($select !== null and $select == $department->id) {



                $list_arr['state'] = [

                    'opened'   => true,

                    'selected' => true,

                    'disabled' => false,

                ];

            }



            if ($dep_hide !== null and $dep_hide == $department->id) {



                $list_arr['state'] = [

                    'opened'   => false,

                    'selected' => false,

                    'disabled' => true,

                    'hidden'   => true,

                ];

            }



            $list_arr['id']     = $department->id;

            $list_arr['parent'] = $department->parent > 0?$department->parent:'#';

            $list_arr['text']   = $department->text;

            array_push($dep_arr, $list_arr);

        }



        return json_encode($dep_arr, JSON_UNESCAPED_UNICODE);

    }

}



if (!function_exists('active_menu')) {

    function active_menu($link) {



        if (preg_match('/'.$link.'/i', Request::segment(2))) {

            return ['menu-open', 'display:block'];

        } else {

            return ['', ''];

        }

    }

}



if (!function_exists('v_image')) {

    function v_image($ext = null) {

        if ($ext === null) {

            return 'image|mimes:jpg,jpeg,png,gif,bmp';

        } else {

            return 'image|mimes:'.$ext;

        }



    }

}



if (!function_exists('aurl')) {

    function aurl($url = null) {

        return url('admin/'.$url);

    }

}



if (!function_exists('datatable_lang')) {

    function datatable_lang() {

        return ['sProcessing' => trans('admin.sProcessing'),

            'sLengthMenu'        => trans('admin.sLengthMenu'),

            'sZeroRecords'       => trans('admin.sZeroRecords'),

            'sEmptyTable'        => trans('admin.sEmptyTable'),

            'sInfo'              => trans('admin.sInfo'),

            'sInfoEmpty'         => trans('admin.sInfoEmpty'),

            'sInfoFiltered'      => trans('admin.sInfoFiltered'),

            'sInfoPostFix'       => trans('admin.sInfoPostFix'),

            'sSearch'            => trans('admin.sSearch'),

            'sUrl'               => trans('admin.sUrl'),

            'sInfoThousands'     => trans('admin.sInfoThousands'),

            'sLoadingRecords'    => trans('admin.sLoadingRecords'),

            'oPaginate'          => [

                'sFirst'            => trans('admin.sFirst'),

                'sLast'             => trans('admin.sLast'),

                'sNext'             => trans('admin.sNext'),

                'sPrevious'         => trans('admin.sPrevious'),

            ],

            'oAria'            => [

                'sSortAscending'  => trans('admin.sSortAscending'),

                'sSortDescending' => trans('admin.sSortDescending'),

            ],

        ];

    }

}









use Carbon\Carbon;



function presentPrice($price)

{

 

     return number_format($price).' '.trans('admin.SAR');

}



function presentDate($date)

{

   

}

 



function productImage($path)

{

         

    

       if (file_exists('storage/'.$path)  && $path!=null)

        {

          $path=asset('storage/'.$path);

        }

        else

        {

             

              $path= asset('img/not-found.jpg');

         

        }



        return $path;

                 

        

}      



function getNumbers()

{

  

    $tax = config('cart.tax') / 100;

    $discount = session()->get('coupon')['discount'] ?? 0;

    $code = session()->get('coupon')['name'] ?? null;

    $newSubtotal = (Cart::subtotal() - $discount);

    if ($newSubtotal < 0) {

        $newSubtotal = 0;

    }

    $newTax = $newSubtotal * $tax;

    $newTotal = $newSubtotal * (1 + $tax);



    return collect([

        'tax' => $tax,

        'discount' => $discount,

        'code' => $code,

        'newSubtotal' => $newSubtotal,

        'newTax' => $newTax,

        'newTotal' => $newTotal,

    ]);

    

}



function getStockLevel($quantity)

{

    if ($quantity > 5) {

        $stockLevel = '<div class="badge badge-success">In Stock</div>';

    } elseif ($quantity <= 5 && $quantity > 0) {

        $stockLevel = '<div class="badge badge-warning">Low Stock</div>';

    } else {

        $stockLevel = '<div class="badge badge-danger">Not available</div>';

    }



    return $stockLevel;

}



function cheeckHaveCoupon ()

 {

       if (!session()->has('coupon')) 

       {

          return ' ';   

       }

       else

       {

        return 'hidden';

       }

        

 }



 function after_coupon ()

 {

       if (!session()->has('coupon')) 

       {

          return 'hidden';  

       }

       else

       {

        return ' ';

       }

        

 }


if (!function_exists('WhoWeAre')) {

    function WhoWeAre() 

    {
          $WhoWeAre=App\WhoWeAre::first();

        return $WhoWeAre;

    }

}

if (!function_exists('rating')) {

    function rating($product_id) 

    {
 $Reviews=App\Models\Reviews::where('product_id',$product_id)->get();
 $Reviewscount=App\Models\Reviews::where('product_id',$product_id)->count();

       $rating=0;
   foreach($Reviews as   $Review)
   {
      $rating= $Review->rating +$rating;
   }
     
        if ($Reviewscount == 0) 
        {
           $Reviewscount = 1;
        }
       return   $rating=$rating / $Reviewscount ;

            

    }


}

if (!function_exists('ratingcount')) {

    function ratingcount($product_id) 

    {
  
 $ratingcount=App\Models\Reviews::where('product_id',$product_id)->count();
 
  return     $ratingcount ;

}
}

 



 