<?php
namespace App\Http\Controllers\forentend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\user_addresses;
use App\Order;
use App\OrderProduct;
        use Gloudemans\Shoppingcart\Facades\Cart;
 use App\Models\Reviews;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

           $orders = auth()->user()->orders()->with('products')->orderBy('id','desc')->get();
           $user=auth()->user();

return view('forentend4.my-profile.my-profile',compact('user', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.auth()->id(),
            'password' => 'sometimes|nullable|string|min:6|confirmed',
        ]);

        $user = auth()->user();
        $input = $request->except('password', 'password_confirmation');

        if (! $request->filled('password')) 
        {
            $user->fill($input)->save();

            return back()->with('success', 'trans.Profile updated successfully!');
        }

        $user->password = bcrypt($request->password);
        $user->fill($input)->save();

        return back()->with('success', 'trans.Profile (and password) updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function Add_New_Address()
    {
        return view('forentend4.Add_New_Address.Add_New_Address');
    }

      public function edit_New_Address_Map_Step($id)
    {
     $user_address =user_addresses::where('id',$id)->first();

        return view('forentend4.Add_New_Address.edit_New_Address_Map_Step',compact('user_address'));
    }

     public function Add_New_Address_Map_Step()
    {

        return view('forentend4.Add_New_Address.Add_New_Address_Map_Step');
    }

     public function Add_New_Address_Map ()
    {
         
          $data = $this->validate(request(),
         [
            'lat' => 'required',
            'lng' => 'required',
         
            'address' => 'required',
            'gift' => 'sometimes|nullable',

           

         ], [], [
            'lat' => trans('admin.lat'),
            'lng' => trans('admin.lng'),
             
            'address' => trans('admin.address2'),
            'gift' => trans('admin.gift'),
            
         ]);

             $data['user_id'] =auth()->user()->id;

     $user_addresses=user_addresses::create($data);

      session()->flash('success', trans('admin.address added succesfully'));
      return redirect('Add_New_Address_Step2/'.$user_addresses->id);
    }

     public function edit_New_Address_Map ()
    {
        
          $data = $this->validate(request(),
         [
            'lat' => 'required',
            'lng' => 'required',
             
            'address' => 'required',
           

         ], [], [
            'lat' => trans('admin.lat'),
            'lng' => trans('admin.lng'),
            
            'address' => trans('admin.address'),
            
         ]);
                      $data['user_id'] =auth()->user()->id;

 $user_addresses=user_addresses::where('id',request('id'))->update($data);

      session()->flash('success', trans('admin.address updated succesfully'));
      return redirect('Add_New_Address_Step2/'.request('id'));
    }



    


    

    public function Add_New_Address_Step2($id)
    {
     $user_address =user_addresses::where('id',$id)->first();
        return view('forentend4.Add_New_Address.Add_New_Address_Step2',compact('user_address'));
     
        
    }


    public function Delete_user_Address($id)
    {
       
 $Ordersaddress=Order::where('address_id',$id)->where('user_id',auth()->user()->id)->get();

 if ($Ordersaddress->count() > 0 )
        {

      session()->flash('danger',trans('admin.You can not delete this Address, It already associated with a Order...'));
             return back();
            
        }


     $user_address =user_addresses::where('id',$id)->first();
     $user_address->delete();
      session()->flash('danger',trans('admin.Address Delete succesfully'));
       
     
         return back();
    }

    public function Save_AddressAddress_Step2( )
    {
        
       $data = $this->validate(request(),
         [
            'additional_info' => 'required',
            'type' => 'required',
            'Mobile' => 'required',
            'FirstName' => 'required',
            'LastName' => 'required',
           

         ], [], [
            'additional_info' => trans('admin.additional_info'),
            'type' => trans('admin.type'),
            'Mobile' => trans('admin.Mobile'),
            'FirstName' => trans('admin.FirstName'),
            'LastName' => trans('admin.LastName'),
            
         ]);

       if (request('Primary') == '1') 
       {

      $user_addresses=user_addresses::where('user_id',auth()->user()->id)->get();

     foreach ($user_addresses as $key => $user_address) 
     {
        $user_address->Primary='0';
        $user_address->save();
     }

       }
 $user_addresses=user_addresses::where('id',request('id'))
 ->update([
    'additional_info'=> request('additional_info'),
'type'=>  request('type'),
'Mobile'=>  request('Mobile'),
'Name'=>  request('FirstName').' '.request('LastName'),
    'gift'=> request('gift'),
    'FirstName'=> request('FirstName'),
    'LastName'=> request('LastName'),
    'Primary'=> request('Primary'),
    'RecipientName'=> request('RecipientName'),
    'RecipientMobileNumber'=> request('RecipientMobileNumber'),

 ]);

      session()->flash('success', trans('admin.address updated succesfully'));
      return redirect('/Payment_Method');
    }


  public function Payment_Method()
    {

         if (user_addresses::where('user_id',auth()->user()->id)->count() ==0) 
              {
      session()->flash('danger', trans('You have to Add Your Address'));
     
       return redirect('Add_New_Address');
              }

              

               if (Cart::instance('default')->count() == 0) 
            {
            return redirect()->route('shop.index');
             }

          
             if (!session('Addressbox_style1active')) 
              {
      session()->flash('danger', trans('admin.You have to Select Delivery Address'));
     
       return redirect('Add_New_Address');
              }

         if (user_addresses::where('id',session('Addressbox_style1active'))->count() ==0) {
             session()->flash('danger', trans('admin.You have to Select Delivery Address'));
     
       return redirect('Add_New_Address');
         }





        return view('forentend4.checkout.Payment_Method');
    }

    
  public function Placed_Order_Confirmation($id)
    {
         $order=Order::where('id',$id)->first();

              $OrderProducts=OrderProduct::where('order_id',$id)->

                                where('admin_id',1)

                                           ->get();
 
        return view('forentend4.checkout.Placed_Order_Confirmation',compact('OrderProducts','order'));
    }

    public function active_user_addresses_id()
    {

 session()->put('Addressbox_style1active',request('user_addresses_id'));

      return   session('Addressbox_style1active');

        
    }

    public function Select_Delivery_Address()
    {

    
 session()->put('Addressbox_style1active',request('radio1'));

     return redirect('Payment_Method');

        
    }



      public function Add_review ()
    {
        
    
          $data = $this->validate(request(),
         [
            'rating' => 'required',
            'review' => 'required',
            'name' => 'required',
            'email' => 'required',
            'product_id' => 'required',
            
         ], [], [
            'rating' => trans('admin.rating'),
            'review' => trans('admin.review'),
            'name' => trans('admin.name'),
            'email' => trans('admin.email'),
            'product_id' => trans('admin.product_id'),
            
            
         ]);

          if(auth()->user())
          {
             $data['user_id'] =auth()->user()->id;
          }
                     

 $Reviews=Reviews::create($data);

      session()->flash('success', trans('Reviewed  succesfully'));
      return back();
    }

    



}
