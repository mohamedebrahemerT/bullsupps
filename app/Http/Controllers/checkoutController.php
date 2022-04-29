<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\order_product;
use App\product;
use App\department;
use App\newes;

class checkoutController extends Controller
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
  $productes=product::inrandomOrder()->take(4)->get();

             	return view('forentend.checkout.checkout',compact('order_products','Orders','Total_order','order_count','productes'));
             }

public function Category( )
{

        $productes=product::orderBy('id', 'desc')->take(6)->get();
         $departments=department::get();
 
$TopViewproductes=product::orderBy('id', 'desc')->take(3)->get();
  $RecentlyVieweds=product::inrandomOrder()->take(3)->get();
  $TopSellers=product::orderBy('id', 'asc')->take(3)->get();
      return view('forentend.Category.Category',compact(
            'productes',
         'TopViewproductes',
            'RecentlyVieweds',
            'TopSellers',
            'departments'
      ));
}

  function Catshow($id)
             {

            

                 $Department=Department::where('id',$id)->first();

              $categories=Department::get();
              //$productes=product::paginate();
                $productes=product::where('department_id',$id)->paginate(12); 
                   

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





public function blog()
{

                  $newess= newes::paginate(3);
                   $randomNewess= newes::inrandomOrder()->take(3)->get();

    return view('forentend.blog.blog',compact('newess','randomNewess'));
     
}


    public function show($id)
    {
            $randomNewess= newes::take(5)->inRandomOrder()->get();
             
              

              
        $newes=newes::find($id);

         $NumberOFcomment=$newes->comment->count();

         if ($NumberOFcomment)
          {
             $NumberOFcomment=$NumberOFcomment;
         }
         else
         {
            $NumberOFcomment=0;
         }

        return view('forentend.blog-single.blog-single',compact('newes','NumberOFcomment','randomNewess'));
    }

  public function addcomment(Request $request)
    {

          if (Auth()->guard('cc')->check())
           {
              //return request();
              $data= $this->validate(request(),[
            'comment'=>'required',
           
          
            ],[],[
          'comment'=>'comment',
  
           
            ]);

          $data['user_id']=auth()->guard('cc')->user()->id;
         $data['newes_id']=Request('newes_id');
             comment::create($data);

               session()->flash('success',' comment add Successfully');

                 return back()->withInput();
     
          }
          else
          {
              session()->flash('errors','shoud register to add comment');

                 return back()->withInput();    
          }
        
    }


}
