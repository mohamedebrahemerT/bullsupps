<?php

namespace App\Http\Controllers\forentend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Coupon;
use App\Models\attribute_values;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Storage;
use   Session;
class CartController extends Controller
{
     /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function index()
              {

  
            
                    $tax = config('cart.tax') / 100;

       $discount = session()->get('coupon')['discount'] ?? 0;

       $code = session()->get('coupon')['name'] ?? null;


          $subtotal=Cart::subtotal();
           $Total=$subtotal*(1 + $tax);
           $realmonytaxs=$Total-$subtotal;

    $newSubtotal = (Cart::subtotal() - $discount);
    if ($newSubtotal < 0) {
        $newSubtotal = 0;
    }
    
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);

   

     $mightAlsoLike  = Product::inRandomOrder()->take(4)->get();


    
 

                    return view('forentend4.cart.cart')->with([
                  'subtotal'=>$subtotal,
                  'Total'=>$Total,
                  'tax'=>$tax,
                  'realmonytaxs'=>$realmonytaxs,
                  'mightAlsoLike'=>$mightAlsoLike,
                      'tax' => $tax,
        'discount' => $discount,
        'code' => $code,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
                ]);  


              }

              public function store_attribute_value_id( )
              {

  
        $attribute_value_id=request('attribute_value_id');

     Session::store('attribute_value_ids', $attribute_value_id);



   return session('attribute_value_ids');

      
               
                 
              }

              public function addToCart(Request $request)
{

                

           

          $id=request('id');
                             $product=product::where('id',$id)->first();

                           $productprice=$product->price;

                 $productimage='<img src="'.Storage::url('/').$product->photo.'" width="500" height="300" style="margin-top:1px;">';
                           
                           $price_offer=$product->price_offer;
                  $alymarketcode=$product->alymarketcode;
                            

                 if (session('lang') == 'ar')
                  {
                     $productName=$product->title_name_ar;
                  $content_name_ar=$product->content_name_ar;
                  $admin_id=$product->admin_idd->name;
                  $department_id=$product->department_name->dep_name_ar;
                  
                  }
                  else
                  {
                    $productName=$product->title_name_en;
                  $content_name_ar=$product->content_name_en;
                  $admin_id=$product->admin_idd->name;
                  $department_id=$product->department_name->dep_name_en;

                  }
                 
                   
                    $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) 
                      {
            return $cartItem->id === $product->id;
                       });


        if ($duplicates->isNotEmpty()) 
        {
               $success_output = 
               '<div class="alert alert-danger">'
               .'Item already in your cart !'.'
</div>';  
                      $output = array('success'     =>  $success_output);
         return $output;
        }
 $qty=Request('qty');

         if ($qty == '')
          {
            $qty=1;
         }

             if (session('lang')=='en') {
        $name=$product->title_name_en;
               
             }
             elseif (session('lang')=='ar')
              {
        $name=$product->title_name_ar;
              
               }else
               {
        $name=$product->title_name_en;
                

               }


                if($product->price_offer  > 0)   
    {
     $price= $product->price_offer ;
    } 

    else

    {
     $price= $product->price ;

    }


   if ($request->attribute_value_ids !=null ) 
    {
          $attribute_value_ids = request('attribute_value_ids');
$attribute_value_ids = explode(',', $attribute_value_ids);

   $attribute_values =attribute_values::whereIn('id',$attribute_value_ids)->get();


        
         $options=[];
        foreach ($attribute_values as $key => $value) 
        {
         $attribute=  $value->attribute->name_en;
          $attributevalue =$value->value_en;
       $arr1 = array($attribute => $attributevalue);
           
 array_push($options,$arr1);
        }
          

Cart::add(['id' => $product->id, 'name' => $name, 'qty' =>$qty, 'price' => $price, 'weight' => 0 , 'options' => 
    $options
])  ->associate('App\Product');

    



    

    }
    else
    {

         Cart::add($product->id, $name,$qty, $price)
            ->associate('App\Product');

    }





              $success_output = '<div class="alert alert-success">
              '.trans('admin.Dataaddtocart').'
                </div>';  

                $count=Cart::count();
            $total=trans('admin.AED').Cart::total();
            $subtotal=trans('admin.AED').Cart::subtotal();
             $cart_add=Cart::content();
            $tax=trans('admin.AED').Cart::tax();

               $items='';
             foreach ($cart_add as   $item) 
        {

         if(session('lang') == 'ar')
           {
           $name= $item->model->title_name_ar;
           }
  elseif(session('lang') == 'en')
       {
           $name= $item->model->title_name_en;

       }
 else
 {
           $name= $item->model->title_name_en;

 }

            $items.='
            <li id="b'.$item->rowId.'">
     <form action="'.url('/').'/cartdestroy?'.$item->rowId.'" method="POST" id="dellshop">  
      <input type="hidden" name="_token" value="'.csrf_token().'">
    <input type="hidden" name="rowId" value="'.$item->rowId.'">

      <a class="item_remove" id="Removeshop"><span class="hidden">'.$item->rowId.'</span>  <i class="ion-close"></i></a>

                        </form>

                 <a href="'.url('/').'/shop/'.$item->model->id.'">
                 <img src="'.Storage::url($item->model->photo).'" alt="cart_thumb1">
      '.$name.'
                                            </a>
         <span class="cart_quantity"> '.$item->qty.' x <span class="cart_amount"> <span class="price_symbole">'.trans('admin.AED').'</span></span>'.$item->subtotal.'</span>
                                    </li>
            ';
             
        }


               $Cartcontent ='<ul class="cart_list">
                
                                     '.$items.'
                 
                                </ul>';
        //////////////////////////////////


                                $items2='';
             foreach ($cart_add as   $item) 
        {

if(session('lang') == 'ar')
           {
           $name= $item->model->title_name_ar;
           }
  elseif(session('lang') == 'en')
       {
           $name= $item->model->title_name_en;

       }
 else
 {
           $name= $item->model->title_name_en;

 }
            $items2.='
            <li id="b2'.$item->rowId.'">
     <form action="'.url('/').'/cartdestroy?'.$item->rowId.'" method="POST" id="dellshop">  
      <input type="hidden" name="_token" value="'.csrf_token().'">
    <input type="hidden" name="rowId" value="'.$item->rowId.'">

      <a class="item_remove" id="Removeshop"><span class="hidden">'.$item->rowId.'</span>  <i style="color: #fff;cursor: pointer;" class="ion-close"></i></a>

                        </form>

                 <a href="'.url('/').'/shop/'.$item->model->id.'" style="color: #fff;cursor: pointer;">
                 <img src="'.Storage::url($item->model->photo).'" alt="cart_thumb1">
      '.$name.'
                                            </a>
         <span class="cart_quantity"> '.$item->qty.' x <span class="cart_amount"> <span class="price_symbole">'.trans('admin.AED').'</span></span>'.$item->subtotal.'</span>
                                    </li>
            ';
             
        }


                        $Cartcontent2 ='<ul class="cart_list">
                
                                     '.$items2.'
                 
                                </ul>';

 

                          $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal,
                        'cart_add'     =>  $cart_add,
                        'tax'     =>  $tax,
                        'Cartcontent'=>$Cartcontent,
                        'Cartcontent2'=>$Cartcontent2
                        
                      );

            return  $output;
                   
    
}

               public function MyWishlist()
              {


                    $tax = config('cart.tax') / 100;

       $discount = session()->get('coupon')['discount'] ?? 0;

       $code = session()->get('coupon')['name'] ?? null;


          $subtotal=Cart::subtotal();
           $Total=$subtotal*(1 + $tax);
           $realmonytaxs=$Total-$subtotal;

    $newSubtotal = (Cart::subtotal() - $discount);
    if ($newSubtotal < 0) {
        $newSubtotal = 0;
    }
    
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);

   

     $mightAlsoLike  = Product::inRandomOrder()->take(4)->get();

                return view('forentend.MyWishlist.MyWishlist')->with([
                  'subtotal'=>$subtotal,
                  'Total'=>$Total,
                  'tax'=>$tax,
                  'realmonytaxs'=>$realmonytaxs,
                  'mightAlsoLike'=>$mightAlsoLike,
                      'tax' => $tax,
        'discount' => $discount,
        'code' => $code,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
                ]);
              }

            /**
             * Store a newly created resource in storage.
             *
             * @param  \App\Product  $product
             * @return \Illuminate\Http\Response
             */
            public function store($id)
            {
             
            
                        $id=request('id');
                         $product=product::where('id',$id)->first();
                   
                     $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) 
                      {
            return $cartItem->id === $product->id;
                       });


        if ($duplicates->isNotEmpty()) 
        {
                return redirect('cart');
        }
         $qty=Request('qty');

         if ($qty == '')
          {
            $qty=1;
         }

             if (session('lang')=='en') {
        $name=$product->title_name_en;
               
             }
             elseif (session('lang')=='ar')
              {
        $name=$product->title_name_ar;
              
               }else
               {
        $name=$product->title_name_en;
                

               }
    

  if (session('price'.$product->id ) ) 

    {
     $price= session('price'.$product->id );
     
    }


else

{


                      if($product->price_offer  > 0)   
    {
     $price= $product->price_offer ;
    } 

  

    else

    {
     $price= $product->price ;
      
    }


}
         Cart::add($product->id, $name,$qty, $price)
            ->associate('App\Product');
               return redirect('cart');
}
             public function cartadd()
            {
          
              
                        $id=request('id');
                         $product=product::where('id',$id)->first();
                   
                    $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) 
                      {
            return $cartItem->id === $product->id;
                       });


        if ($duplicates->isNotEmpty()) 
        {
             
       
              $success_output = '<div class="alert alert-danger" style="text-align: center;">
                 '.trans('admin.Itemisalreadyinyourcart!').'
               

              </div>';  
                      $output = array('success'     =>  $success_output);
 
             
     
                   
                   
           
         return $output;
        }


                              if($product->price_offer  > 0)   
    {
     $price= $product->price_offer ;
    } 

    else

    {
     $price= $product->price ;
      
    }




        Cart::add($product->id, $product->title_name_ar, 1,  $price)
            ->associate('App\Product');

              

              if (session('lang')=='ar')
               {
                $success_output = '<div class="alert alert-success" style="text-align: center;">

                '.trans('admin.Dataaddtocart').'  

                </div>';  
                      $output = array('success'     =>  $success_output);
               
              }
              else
              {
                $success_output = '<div class="alert alert-success" style="text-align: center;">
 '.trans('admin.Dataaddtocart').'
                </div>';  
                      $output = array('success'     =>  $success_output);
              }
     
                   
                    return $output;
             
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function update(Request $request, $id)
            {

                $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('errors',
             collect([
              trans('admin.alert')
            ]));
            return response()->json(['success' => false], 400);
        }

      /*  if ($request->quantity > $request->stock) {
            session()->flash('errors', collect(['We currently do not have enough items in stock.']));
            return response()->json(['success' => false], 400);
        }*/

        Cart::update($id, $request->quantity);
        session()->flash('success_message', trans('admin.updateQty'));
        return response()->json(['success' => true]);
            }

            /**
             * Remove the specified resource from storage.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function destroy()
            {


                   $id=request('id');


                  if (request()->has('id'))
                   {

               

                    //  $id=substr($id, 0, -6);
                     $id=Request('id');

                          Cart::remove($id);

            $count=Cart::count();
            $total='<strong>'.trans('admin.AED').Cart::total().' </strong>';
            $subtotal=trans('admin.AED').Cart::subtotal();
            $cart_add=Cart::content();
            $tax=trans('admin.AED').Cart::tax();

            $success_output = '<div class="alert alert-danger">
                '.__("Item has been removed!").' 
            </div>';  
         return   $output = array(
                'success'     =>  $success_output,
                'count'     =>  $count,
                'total'     =>  $total,
                'subtotal'     =>  $subtotal,
                'cart_add'     =>  $cart_add,
                'tax'     =>  $tax
            );
                  }
                  else
                  {
                    return 'no  id';
                  }   
            }

            /**
             * Switch item for shopping cart to Save for Later.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
              public function switchToSaveForLater()
       {


          $id=request('id');
            $id=substr($id, 0, -14);
         
         //$id = trim(preg_replace('/\s+/','', $id));


        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) 
        {
      $success_output = '<div class="alert alert-danger" style="text-align: center;">

      '.trans('admin.Theproductwasalreadysavedlater!').'

      </div>';  
                      $output = array('success'     =>  $success_output);

            return  $output;
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Product');

             $success_output = '<div class="alert alert-success" style="text-align: center;">
             '.trans('admin.Theproductwasalreadysavedlater!').'
             </div>';  

           $output = array('success'=>  $success_output);
            return  $output;

        
      }


      /////////////// home switsh for later

       public function switchToSaveForLaterHome()
       {


                        $id=request('id');

                         $product=product::where('id',$id)->first();

                           $productprice=$product->price;
                           $productimage='<img src="'.Storage::url('/').$product->photo.'" width="500" height="300" style="margin-top:1px;">';
                           $price_offer=$product->price_offer;
                  $alymarketcode=$product->alymarketcode;
                            

                 if (session('lang') == 'ar')
                  {
                     $productName=$product->title_name_ar;
                  $content_name_ar=$product->content_name_ar;
                  $admin_id=$product->admin_idd->name;
                  $department_id=$product->department_name->dep_name_ar;
                  
                  }
                  else
                  {
                    $productName=$product->title_name_en;
                  $content_name_ar=$product->content_name_en;
                  $admin_id=$product->admin_idd->name;
                  $department_id=$product->department_name->dep_name_en;

                  }
                 

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });


         $qty=Request('qty');

         if ($qty == '')
          {
            $qty=1;
         }

             if (session('lang')=='en') {
        $name=$product->title_name_en;
               
             }
             elseif (session('lang')=='ar')
              {
        $name=$product->title_name_ar;
              
               }else
               {
        $name=$product->title_name_en;
                

               }
    
                          if ($duplicates->isNotEmpty()) 
        {

      $success_output = '<div class="alert alert-danger" style="text-align: center;">تم حفظ العنصر بالفعل في وقت لاحق!</div>';  

                      $output = array('success'     =>  $success_output);

            return  $output;
        }


                                      if($product->price_offer  > 0)   
    {
     $price= $product->price_offer ;
    } 

    else

    {
     $price= $product->price ;
      
    }


        Cart::instance('saveForLater')->add($product->id, $product->title_name_ar, 1, $price)
            ->associate('App\Product');



            


                if (session('lang') == 'ar')
                  {
                     
                   $success_output = '<div class="alert alert-success" style="text-align: center;">


          '.trans('admin.Theproducthasbeensavedtomyfavorites!').'

             </div>';  
                  }
                  else
                  {
                    
                      $success_output = '<div class="alert alert-success" style="text-align: center;">

         '.trans('admin.Theproducthasbeensavedtomyfavorites!').'

             </div>';  
                  }




                      $output = array(
                        'success'     =>  $success_output,
                        'productName'     =>  $productName,
                        'productimage'     =>  $productimage,
                        'productprice'     =>  $productprice,
                        'price_offer'     =>  $price_offer, 
                        'content_name_ar'     =>  $content_name_ar,
                        'admin_id'     =>  $admin_id,
                        'alymarketcode'     =>  $alymarketcode,
                        'department_id'     =>  $department_id,
                       
                      );

            return  $output;
          

        

        
      }

      public function addCartSingleProduct()
      {

              
                $id=request('PID');
                         $product=product::where('id',$id)->first();
                   
                     $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) 
                      {
            return $cartItem->id === $product->id;
                       });


        if ($duplicates->isNotEmpty()) 
        {
               return redirect('cart');
     
                   
                   
           
      
        }
         $qty=Request('qty');

         if ($qty == '')
          {
            $qty=1;
         }

             if (session('lang')=='en') {
        $name=$product->title_name_en;
               
             }
             elseif (session('lang')=='ar')
              {
        $name=$product->title_name_ar;
              
               }else
               {
        $name=$product->title_name_en;
                

               }
    
                 $qty=request('quantity');
                 $price=request('price');
                 $color=request('color');
                 $sizes=request('sizes');
                 $SRC=request('SRC');

              session()->put('price',$price);
              session()->put('color',$color);
              session()->put('sizes',$sizes);
              session()->put('SRC',$SRC);


                                                    if($product->price_offer  > 0)   
    {
     $price= $product->price_offer ;
    } 

    else

    {
     $price= $product->price ;
      
    }


          

         Cart::add($product->id, $name,$qty, $price)
            ->associate('App\Product');

              
               return redirect('cart');
      }


            public function compare()
            {
                 return view('forentend4.compare.compare');
            }

              public function featured()
            {
              
                 return view('forentend4.featured.featured');
            }

              public function cartquantity()
            {

                      $id=request('id');
                
                  if (request()->has('id'))
                   {

              

                  $Cart=Cart::get($id);
            
               $qty= request('qty');

               if ($qty==0) 
               {
                                 $qty=1;

               }
           Cart::instance('default')->update($id,$qty);

                           $Cart=Cart::get($id);

                    

            $count=Cart::count();
            $total=trans('admin.AED').Cart::total();
            $subtotal=trans('admin.AED').Cart::subtotal();
            $cart_add=Cart::content();
            $tax=trans('admin.AED').Cart::tax();

                $totprice=trans('admin.AED').$Cart->subtotal;
                $totIDS=$Cart->rowId; 


            
                       $output = array(
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal,
                        'cart_add'     =>  $cart_add,
                        'tax'     =>  $tax,
                        'totprice'     =>  $totprice,
                        'totIDS'     =>  $totIDS,
                          'qty'=>$qty
                         
                       
                    
                    );
     
                   
                    return $output;
     
                   
                   
                  }
                  else
                  {
                    return 'no  id';
                  }

             
        
            }

             public function plusservices()
            {

                      $id=request('id');
                
                  if (request()->has('id'))
                   {

              

                  $Cart=Cart::get($id);
               $qty=$Cart->qty;
               $qty= $qty + 1;
           Cart::instance('default')->update($id,$qty);

                           $Cart=Cart::get($id);

                    

            $count=Cart::count();
            $total='<strong>'.trans('admin.AED').Cart::total().' </strong>';
            $subtotal=trans('admin.AED').Cart::subtotal();
            $cart_add=Cart::content();
            $tax=trans('admin.AED').Cart::tax();

                $totprice=trans('admin.AED').$Cart->subtotal;
                $totIDS=$Cart->rowId; 


            
                       $output = array(
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal,
                        'cart_add'     =>  $cart_add,
                        'tax'     =>  $tax,
                        'totprice'     =>  $totprice,
                        'totIDS'     =>  $totIDS,
                          'qty'=>$qty
                         
                       
                    
                    );
     
                   
                    return $output;
     
                   
                   
                  }
                  else
                  {
                    return 'no  id';
                  }

             
        
            }

            

             public function minusservices()
            {

                     $id=request('id');
              
                  if (request()->has('id'))
                   {
 

                  $Cart=Cart::get($id);
               $qty=$Cart->qty;
               if ($qty != 1) 
               {
                  $qty= $qty - 1;
               }
              
           Cart::instance('default')->update($id,$qty);

                            $Cart=Cart::get($id);

                    

            $count=Cart::count();
              $total='<strong>'.trans('admin.AED').Cart::total().' </strong>';
            $subtotal=trans('admin.AED').Cart::subtotal();
            $cart_add=Cart::content();
            $tax=trans('admin.AED').Cart::tax();

                $totprice=trans('admin.AED').$Cart->subtotal;
                $totIDS=$Cart->rowId; 
            
                       $output = array(
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal,
                        'cart_add'     =>  $cart_add,
                        'tax'     =>  $tax,
                        'totprice'     =>  $totprice,
                        'totIDS'     =>  $totIDS,
                          'qty'=>$qty
                         
                       
                    
                    );
     
               
     
                   
                    return $output;
                  }
                  else
                  {
                    return 'no  id';
                  }

             
        
            }

             public function apply_coupon(Request $request)
    {
             
      
              $data = $request->all();
             $validator = Validator::make($data, [
                   'coupon_code' => 'required|max:50',
        ],[],
        [
        'coupon_code'=>trans('trans.coupon_code'),
      
        ]);

                $count=Cart::count();
            $total=trans('admin.AED').Cart::total();
            $subtotal=trans('admin.AED').Cart::subtotal();
            $cart_add=Cart::content();
            $tax=trans('admin.AED').Cart::tax();
               
      if ($validator->fails()) 
        {
              $success_output = '<div class="alert alert-danger">
            '.'The code field is required'.' 
           </div>';  
                      $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal,
                        'cart_add'     =>  $cart_add,
                        'tax'     =>  $tax
                    
                    );
                    return $output;
       

        }



      
        $code=Coupon::where('value',$request->coupon_code)->first();
        if (empty($code)) 
        {
              

           $success_output = '<div class="alert alert-danger">
            '.__("Coupon Code Not Found.").' 
           </div>';  
                      $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal
                    
                    );
                    return $output;

        }
         
       
            $coupon = Coupon::where('value', $request->coupon_code)->first();



        if (!$coupon) 

        {

             
         

   $success_output = '<div class="alert alert-danger">
            '.__("Invalid coupon number. Try again.").' 
           </div>';  
                      $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal
                    
                    );
                    return $output;
                

        }

        elseif($coupon->status == 0)
        {

 


               $success_output = '<div class="alert alert-danger">
            '.__("This coupon has been used before").' 
           </div>';  
                      $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal
                    
                    );
                    return $output;
        }

            $coupon = Coupon::where('value', $request->coupon_code)->first();

            $prcentage = Coupon::where('value', $request->coupon_code)->first()->prcentage;

            $department_id = Coupon::where('value', $request->coupon_code)->first()->department_id;
            $product_id = Coupon::where('value', $request->coupon_code)->first()->product_id;

         


            if($department_id and $product_id) 
                   {

                         $department_idproduct_id='department_id, product_id';

                            $prcentage;

             session()->put('cpn',$coupon);



               $prcentage2= $prcentage * Cart::subtotal()/100;

                $newsubtotal=Cart::subtotal()-$prcentage2;

          

             session()->put('newsubtotalcpn',$newsubtotal);

                $coupon->status=0;
                $coupon->save();

              Cart::setGlobalDiscount($code->prcentage);


               $success_output = '<div class="alert alert-success">

            '.'Your discount percentage is'.$prcentage.'%'.'The amount of capacity has been deducted'.$prcentage2.' AED '  .'The sum of the Arabic after the discount is'.$newsubtotal.' 
           </div>';  
                      $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal
                    
                    );
                    return $output;


                   }

            elseif ($department_id)
              {
                foreach (Cart::content() as $item)
                {
                  $department_idcart=$item->model->department_id;

                  if ($department_id == $department_idcart ) 
                  {
                    $department_idcart ='department_idcart='.$department_idcart;

                       $prcentage;

             session()->put('cpn',$coupon);



               $prcentage2= $prcentage * Cart::subtotal()/100;

                $newsubtotal=Cart::subtotal()-$prcentage2;
 

             session()->put('newsubtotalcpn',$newsubtotal);

                $coupon->status=0;
                $coupon->save();

               
                    
                  }
                }


                  $success_output = '<div class="alert alert-success">

            '.'Your discount percentage is'.$prcentage.'%'.'The amount of capacity has been deducted'.$prcentage2.'  AED '  .'The sum of the Arabic after the discount is'.$newsubtotal.' 
           </div>';  

              $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal
                    
                    );
                    return $output;

                }

                 elseif ($product_id) 
                  {

                    foreach (Cart::content() as $item)
                {
                  $product_idcart=$item->model->id;

                  if ($product_id == $product_idcart ) 
                  {
                    $product_idcart= 'product_idcart='.$product_idcart;
                       $prcentage;

             session()->put('cpn',$coupon);



               $prcentage2= $prcentage * Cart::subtotal()/100;

                $newsubtotal=Cart::subtotal()-$prcentage2;

          
             session()->put('newsubtotalcpn',$newsubtotal);

                $coupon->status=0;
                $coupon->save();

               

              

                    
                  }
                }

                  $success_output = '<div class="alert alert-success">

            '.'Your discount percentage is'.$prcentage.'%'.'The amount of capacity has been deducted'.$prcentage2.'  AED '  .'The sum of the Arabic after the discount is'.$newsubtotal.' 
           </div>';  

              $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal
                    
                    );
                    return $output;
                     
                  }

                  

                  else

                  {
                    

 


              $success_output = '<div class="alert alert-danger">

            '.'The coupon must be specific to a department or product and not a general coupon'.' 
           </div>';  

              $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal
                    
                    );
                    return $output;
                  }

       
  

    }


            
}
