<?php



namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;



use App\Jobs\UpdateCoupon;

use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\Coupon;

use Auth;







class CouponsController extends Controller

{





    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
 
                






             $coupon = Coupon::where('value', $request->coupon_code)->first();



        if (!$coupon) 

        {

             session()->flash('danger',trans('رقم قسيمه غير صالح. حاول مرة اخرى.'));
         


              return back()->withInput();
                

        }

        elseif($coupon->status == 0)
        {


 session()->flash('danger',trans(' تم استخدام هذا الكوبون من قبل '));


              return back()->withInput();
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

            session()->flash('success',trans(' نسبة الخصم الخاصة بك هي ').$prcentage.'%'.' ولقد تم خصم مبلغ قدرة '.$prcentage2.' جنية'  .' مجموع العربيه بعد الخصم هو '.$newsubtotal);

             session()->put('newsubtotalcpn',$newsubtotal);

                $coupon->status=0;
                $coupon->save();

              return back()->withInput();


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

            session()->flash('success',trans(' نسبة الخصم الخاصة بك هي ').$prcentage.'%'.' ولقد تم خصم مبلغ قدرة '.$prcentage2.' جنية'  .' مجموع العربيه بعد الخصم هو '.$newsubtotal);

             session()->put('newsubtotalcpn',$newsubtotal);

                $coupon->status=0;
                $coupon->save();

              return back()->withInput();
                    
                  }
                }

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

            session()->flash('success',trans(' نسبة الخصم الخاصة بك هي ').$prcentage.'%'.' ولقد تم خصم مبلغ قدرة '.$prcentage2.' جنية'  .' مجموع العربيه بعد الخصم هو '.$newsubtotal);

             session()->put('newsubtotalcpn',$newsubtotal);

                $coupon->status=0;
                $coupon->save();

              return back()->withInput();


                    
                  }
                }
                     
                  }

                  

                  else

                  {
                    

 session()->flash('danger',trans(' يجب ان يكون الكوبون مخصص لقسم او منتج وليس كوبون عام '));


              return back()->withInput();
                  }


              }


            
             


              

                   



    






    /**

     * Remove the specified resource from storage.

     *

     * @return \Illuminate\Http\Response

     */

    public function destroy()

    {

           session()->forget('coupon');



         

             /*  $cheeckHaveCoupon=cheeckHaveCoupon();

    

           $DC11="

              <div  id='AC' class='$cheeckHaveCoupon'>



              <div class='cart-totals'>

                <div class='cart-totals-left'>

                    Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).

                </div>



              <table style='border: 1px'>

                

                <thead>

                  <tr>

                   

                  </tr>

                </thead>

                <tbody>

                  <tr>

                    <td>Subtotal</td>    <td> {{ presentPrice(Cart::subtotal()) }} <br>





                  </tr>

                  <tr>

                    

               <td>Tax ({{config('cart.tax')}}%)  &nbsp; </td>

                   <td> {{ presentPrice(Cart::tax()) }} </td>    



                  </tr>

                    <tr>

                    

               <td>  <span class='cart-totals-total'>Total</span>   </td>

                   <td> {{ presentPrice(Cart::Total()) }}<br> </td>



                  </tr>

                  



                </tbody>

              </table>   

             



              

                      

            </div> <!-- end cart-totals -->

          

        </div>

           ";

                */

            return $success_output = '<div class="alert alert-danger">coupon has been removed!</div>';  

                      $output = array([

                    'TT'     =>  $success_output,

                   // 'DC11'         =>  $DC11

                ]);





    }

}

