<?php

namespace App\Http\Controllers\forentend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

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

                    $id=substr($id, 0, -6);
                
        Cart::instance('saveForLater')->remove($id);
                      
                       
           $success_output = '<div class="alert alert-danger">تمت إزالة العنصر من الحفظ!</div>';  

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
             $id=substr($id, 0, -13);
        // $id = trim(preg_replace('/\s+/','', $id));

                
        

         $item = Cart::instance('saveForLater')->get($id);

         Cart::instance('saveForLater')->remove($id);
        

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {

                  $success_output = '<div class="alert alert-danger" style="text-align: center;"> العنصر موجود بالفعل في سلة التسوق الخاصة بك! </div>';


                      $output = array('success'     =>  $success_output);


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

      $success_output = '<div class="alert alert-success" style="text-align: center;"> تم نقل العنصر إلى سلة التسوق!</div>';  

                 

                      $output = array('success'     =>  $success_output);
                      return $output;

 
       

    }
}
