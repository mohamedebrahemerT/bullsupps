<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\product;
use App\Orders;
use App\Department;




class shopPageController extends Controller
{
             function index()
             {


              $categories=Department::get();
             	//$productes=product::paginate();
              	 $productes=product::inRandomOrder()->paginate(12); 
                   

                   if (auth()->guard('cc')->user())
                    {
                   $idd=auth()->guard('cc')->user()->id ;
                   }
                   else
                   {
                    $idd=0;

                   }
                     $Orders=Orders::where('user_id',$idd)->get();
                     $Total_order=0;
                     $order_count=0;
                    foreach($Orders as $ors)
                    {  

                    foreach($ors->order_idc()->get()  as $or)
                        {
                        $Total_order=$Total_order + $or->Total ;
                        $order_count=$order_count + 1;
                        }                                            
                        }

             	return view('forentend.shopPage.shopPage',compact('productes','Total_order','order_count','categories'));
             }





             function getAllProductes()
             {


             	return view('forentend.shopPage.shopPage');
             }

             public function shopPage_LowtoHigh()
             {
         

                


              $categories=Department::get();
              //$productes=product::paginate();
                 
                     $productes  = product::orderBy('price_offer')->paginate(12);
                   

                   if (auth()->guard('cc')->user())
                    {
                   $idd=auth()->guard('cc')->user()->id ;
                   }
                   else
                   {
                    $idd=0;

                   }
                     $Orders=Orders::where('user_id',$idd)->get();
                     $Total_order=0;
                     $order_count=0;
                    foreach($Orders as $ors)
                    {  

                    foreach($ors->order_idc()->get()  as $or)
                        {
                        $Total_order=$Total_order + $or->Total ;
                        $order_count=$order_count + 1;
                        }                                            
                        }

              return view('forentend.shopPage.shopPage',compact('productes','Total_order','order_count','categories'));
             }


               public function shopPage_HightoLow()
             {
         

                

              $categories=Department::get();
              //$productes=product::paginate();
                 
            $productes  = product::orderBy('price_offer','desc')->paginate(12);
                   

                   if (auth()->guard('cc')->user())
                    {
                   $idd=auth()->guard('cc')->user()->id ;
                   }
                   else
                   {
                    $idd=0;

                   }
                     $Orders=Orders::where('user_id',$idd)->get();
                     $Total_order=0;
                     $order_count=0;
                    foreach($Orders as $ors)
                    {  

                    foreach($ors->order_idc()->get()  as $or)
                        {
                        $Total_order=$Total_order + $or->Total ;
                        $order_count=$order_count + 1;
                        }                                            
                        }

              return view('forentend.shopPage.shopPage',compact('productes','Total_order','order_count','categories'));
             }
                
                public function Category_LowtoHigh($id)
                {
                   $Department=Department::where('id',$id)->first();

              $categories=Department::get();
              //$productes=product::paginate();
                
                   
                $productes  = product::where('department_id',$id)->orderBy('price_offer')->paginate(12);

                
                   if (auth()->guard('cc')->user())
                    {
                   $idd=auth()->guard('cc')->user()->id ;
                   }
                   else
                   {
                    $idd=0;

                   }
                     $Orders=Orders::where('user_id',$idd)->get();
                     $Total_order=0;
                     $order_count=0;
                    foreach($Orders as $ors)
                    {  

                    foreach($ors->order_idc()->get()  as $or)
                        {
                        $Total_order=$Total_order + $or->Total ;
                        $order_count=$order_count + 1;
                        }                                            
                        }

              return view('forentend.showCat.showCat',compact('productes','Total_order','order_count','categories','Department'));
                  
                }

                 public function Category_HightoLow($id)
                {
                    $Department=Department::where('id',$id)->first();

              $categories=Department::get();
              //$productes=product::paginate();
                
                   
                $productes  = product::where('department_id',$id)->orderBy('price_offer','desc')->paginate(12);

                
                   if (auth()->guard('cc')->user())
                    {
                   $idd=auth()->guard('cc')->user()->id ;
                   }
                   else
                   {
                    $idd=0;

                   }
                     $Orders=Orders::where('user_id',$idd)->get();
                     $Total_order=0;
                     $order_count=0;
                    foreach($Orders as $ors)
                    {  

                    foreach($ors->order_idc()->get()  as $or)
                        {
                        $Total_order=$Total_order + $or->Total ;
                        $order_count=$order_count + 1;
                        }                                            
                        }

              return view('forentend.showCat.showCat',compact('productes','Total_order','order_count','categories','Department'));
                }


             



}
