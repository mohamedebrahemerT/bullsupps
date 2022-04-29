<?php



namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

 use App\WhoWeAre;

use App\Objectives;

use App\ourTeam;

use App\VisionMission;

use Gloudemans\Shoppingcart\Facades\Cart;
    
use App\Product;

        use DB;



class wishlistcontrller extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

              { 

               

    return view('forentend4.wishlist.wishlist');

 



            }



  public function switchToSaveForLater($id)
       {


          $id=$id;
           
         
         //$id = trim(preg_replace('/\s+/','', $id));

 

        $item=product::where('id',$id)->first();

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

        Cart::instance('saveForLater')->add($item->id, $item->title_name_ar, 1, $item->price)
            ->associate('App\Product');

             $success_output = '<div class="alert alert-success" style="text-align: center;">
             '.trans('admin.Theproductwasalreadysavedlater!').'
             </div>';  

          return redirect('/wishlist');
   
            

        
      }


     

}

