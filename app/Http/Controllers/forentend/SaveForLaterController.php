<?php

namespace App\Http\Controllers\forentend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Storage;
class SaveForLaterController extends Controller
{
     
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

                    
                
        Cart::instance('saveForLater')->remove($id);
                      
                       
           $success_output = '<div class="alert alert-danger">Item removed from  Wishlist !</div>';  

                      $output = array('success'     =>  $success_output);
     
                   
                    return $output;
                  }
                  else
                  {
                    return 'no  id';
                  }
        


      
    }

    /**
     * Switch item from Saved for Later  to Cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToCart()
    {
          $id=request('id');
               
       

           

          $item = Cart::instance('saveForLater')->get($id);

      
        

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {

                  $success_output = '<div class="alert alert-danger" style="text-align: center;"> The item is already in your cart! </div>';


                      $output = array('success'     =>  $success_output);
                                   Cart::instance('saveForLater')->remove($id);


                      return $output;
     
          
        }

                                              if($item->price_offer  > 0)   
    {
     $price= $item->price_offer ;
    } 

    else

    {
     $price= $item->price ;
      
    }


        Cart::instance('default')->add($item->id, $item->name, 1, $price)
            ->associate('App\Product');

      $success_output = '<div class="alert alert-success">
              '.trans('admin.Dataaddtocart').'
                </div>';  

                $count=Cart::count();
            $total='AED '.Cart::total();
            $subtotal='AED '.Cart::subtotal();
             $cart_add=Cart::content();
            $tax='AED '.Cart::tax();

               $items='';
             foreach ($cart_add as   $item) 
        {
            $items.='
            <li id="b'.$item->rowId.'">
     <form action="'.url('/').'/cartdestroy?'.$item->rowId.'" method="POST" id="dellshop">  
      <input type="hidden" name="_token" value="'.csrf_token().'">
    <input type="hidden" name="rowId" value="'.$item->rowId.'">

      <a class="item_remove" id="Removeshop"><span class="hidden">'.$item->rowId.'</span>  <i class="ion-close"></i></a>

                        </form>

                 <a href="'.url('/').'/shop/'.$item->model->id.'">
                 <img src="'.Storage::url($item->model->photo).'" alt="cart_thumb1">
      '.$item->model->title_name_en.'
                                            </a>
         <span class="cart_quantity"> '.$item->qty.' x <span class="cart_amount"> <span class="price_symbole">AED</span></span>'.$item->subtotal.'</span>
                                    </li>
            ';
             
        }


               $Cartcontent ='<ul class="cart_list">
                
                                     '.$items.'
                 
                                </ul>';

                                   Cart::instance('saveForLater')->remove($id);

                          $output = array(
                        'success'     =>  $success_output,
                        'count'     =>  $count,
                        'total'     =>  $total,
                        'subtotal'     =>  $subtotal,
                        'cart_add'     =>  $cart_add,
                        'tax'     =>  $tax,
                        'Cartcontent'=>$Cartcontent
                        
                      );

            return  $output;

 
       

    }
}
