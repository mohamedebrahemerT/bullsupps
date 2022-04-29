<?php

namespace App\Http\Controllers\forentend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Storage;

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



             /*   return view('forentend.cart.cart')->with([
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
                ]);  */

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

              public function addToCart()
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
               .trans('admin.Itemisalreadyinyourcart!').'
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


         Cart::add($product->id, $name,$qty, $price)
            ->associate('App\Product');
              $success_output = '<div class="alert alert-success">
              '.trans('admin.Dataaddtocart').'
                </div>';  
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
                        'qty'=>$qty
                      );

            return  $output;
                    return $output;
    
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

               

                      $id=substr($id, 0, -6);
                      // $id=Request('id');

                         Cart::remove($id);

           $success_output = '<div class="alert alert-danger" style="text-align: center;">
           '.trans('admin.Theproducthasbeenremovedfromthecart').'
           </div>';  
                      $output = array('success'     =>  $success_output);
               
                    return $output;
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

            
}
