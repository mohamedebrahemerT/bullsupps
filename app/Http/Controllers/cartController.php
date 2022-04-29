<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\order_product;
use App\product;
use App\Coupon;
use App\AfterPyment;

use auth;



class cartController extends Controller
{
    
          function index()
             {
               $order_products=order_product::get();

                    if (auth()->guard('cc')->user())
                    {
                   $idd=auth()->guard('cc')->user()->id ;
                   }
                   else
                   {
                    $idd=0;

                   }
      $Orders=Orders::where('user_id',$idd )->get();
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
                           
                
  $productes=product::inrandomOrder()->take(4)->get();
    $Youmaybeinterestedin=product::orderBy('id','asc')->take(2)->get();

          return view('forentend.cart.cart',compact('order_products','Orders','Total_order','order_count','productes','Youmaybeinterestedin'));
             }

              function cartAdd()
             {
                  if (!auth()->guard('cc')->user())
                    {
$success_output = '<div class="alert alert-danger">'.trans('admin.mustrigsterfrist').'</div>';
                     
                         $Total_order=0;
$order_count=0;
                     
                      $output = array( 
           
            'success'   =>  $success_output,
                'Total_order' =>$Total_order,
            'order_count' =>$order_count,
        );
         return  $output;
     
                
                   }

             	if (Request()->has('id')) 
             	{
             		 $product_id=Request('id');
                     $products= product::where('id',$product_id)->get();
                $price='';
              foreach ($products as  $product) 
              {
              	$price=$product->price;
               }
              $Orders=Orders::create([
                 'user_id'=>auth()->guard('cc')->user()->id,
                  'name'=>auth()->guard('cc')->user()->name,
                  'address'=>auth()->guard('cc')->user()->email,
                  'phone'=>auth()->guard('cc')->user()->phone, 
               ]);
                $Orders_id=$Orders->id;
             $order_product=order_product::create([
                'product_id'=>$product_id,
                'order_id'=>$Orders_id,
                  'price'=>$price,
                  'quantity'=>1,
                  'Total'=>$price,                 
              ]);
             $order_products=order_product::get();
      $Orders=Orders::where('user_id',auth()->guard('cc')->user()->id )->get();
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
              $success_output = '<div class="alert alert-success"> '.trans('admin.Dataaddtocart').'</div>';  
                      $output = array(
           
            'success'     =>  $success_output,
            'Total_order' =>$Total_order,
            'order_count' =>$order_count
        );
        echo json_encode($output);
                 
               // return $order_product;

     
                    
             		 
             	}
             	else
             	{
             			return  'مش معاه اي دي ';
             	}
             
             }

            public function cartAdd_single_product()
            {
                  if (!auth()->guard('cc')->user())
                    {
                        

                        $success_output = '<div class="alert alert-danger">'.trans('admin.mustrigsterfrist').'</div>';
                     
                         $Total_order=0;
$order_count=0;
                     
                      $output = array( 
           
            'success'   =>  $success_output,
                'Total_order' =>$Total_order,
            'order_count' =>$order_count,
        );
         return  $output;
     
                
                   }
                   
                if (Request()->has('id')) 
              {
                 
                 $product_id=Request('id');           
                 $price_offer=Request('price_offer');
                 $qty=Request('qty');
                 $Total=Request('Total');   
           
              $Orders=Orders::create([
                 'user_id'=>auth()->guard('cc')->user()->id,
                  'name'=>auth()->guard('cc')->user()->name,
                  'address'=>auth()->guard('cc')->user()->email,
                  'phone'=>auth()->guard('cc')->user()->phone,
                 
               ]);
               
                $Orders_id=$Orders->id;
             $order_product=order_product::create([
                'product_id'=>$product_id,
                'order_id'=>$Orders_id,
                  'price'=>$price_offer,
                  'quantity'=>$qty,
                  'Total'=>$Total,
                 
              ]);
               $Orders=Orders::where('user_id',auth()->guard('cc')->user()->id )->get();
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
            $success_output = '<div class="alert alert-success"> '.trans('admin.Dataaddtocart').'</div>'; 
                     
                      $output = array(
           
            'success'   =>  $success_output,
                'Total_order' =>$Total_order,
            'order_count' =>$order_count,
        );
        echo json_encode($output);
                 
               // return $order_product;

     
                    
                 
              }
              else
              {
                  return  'مش معاه اي دي ';
              }
            }

           public  function cartremove()
           {

              if (Request()->has('id')) 
              {
                 $oerderProduct_id=Request('id');

        $REmoveOerder_products=order_product::where('id',$oerderProduct_id)->get();

                  foreach ($REmoveOerder_products as $REmoveOerder_product)
                   {
                     $REmoveOerder_product->Delete();
                  }
                        $order_products=order_product::get();
      $Orders=Orders::where('user_id',auth()->guard('cc')->user()->id )->get();
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
              $success_output = '<div class="alert alert-danger">removed</div>';
                     
                               $output = array(
           
            'success'   =>  $success_output,
            'Total_order' =>$Total_order,
            'order_count'=>$order_count,
        );
        echo json_encode($output);

              }
              else
              {
                  return  'مش معاه اي دي ';

              }
           }


          function ApplyCoupon()
             {
               
             
               if (Request()->has('Coupon'))
                {
                   $TotalOrder=Request('TotalOrder');
                  $Coupon=Request('Coupon');

                  
                  $getCoupons= Coupon::where('value',$Coupon)->get();
                 
                if ($getCoupons->first()) 
                  { 
                    foreach ($getCoupons as $getCoupon)
                     {
                      $cheek= $getCoupon->status; 
                      $prcentage= $getCoupon->prcentage;
                      $id=$getCoupon->id;
                    }
                    if ($cheek == '1')
                     {

                     

 
 
                      
                   
                       
           $Orders=Orders::where('user_id',auth()->guard('cc')->user()->id )->get();
                     $Total_order=0;
                     
                    foreach($Orders as $ors)
                    {        
                    foreach($ors->order_idc()->get()  as $or)
                        {
                                $idd=$or->id;
                               $myNumber=$or->Total;
                              
$percentInDecimal = $prcentage / 100;
$TotalFterDC= $percentInDecimal * $myNumber;

             order_product::where('id',$idd)->update(['Total'=>$TotalFterDC]);

                       
                            
                        }                                            
                        }
                             $Orders=Orders::where('user_id',auth()->guard('cc')->user()->id )->get();
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
                    
 
                        Coupon::where('id', $id)->update(['status'=>'0']);

             $success_output = '<div class="alert alert-success">order descount succesfully </div>';

 
                      
                    }
                    else
                    {
                        $success_output = '<div class="alert alert-danger"> Coupon already used </div>';
                    $Total_order= $TotalOrder;

                    }
                   
                  } 
                  else
                  {
                    $success_output = '<div class="alert alert-danger"> Coupon not found </div>';
                    $Total_order= $TotalOrder;
                  }


                               $output = array(
           
            'success'   =>  $success_output,
            'Total_order' =>$Total_order,
             
        );
        echo json_encode($output);

                
              
               }
             }  
}
