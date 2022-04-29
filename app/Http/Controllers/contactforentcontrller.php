<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Sendcontact;



class contactforentcontrller extends Controller

{

      public function contact()

    {

    	

  return view('forentend.contact.contact');



    }



       public function Sendcontact()

         {



 

          

            

                   $data= $this->validate(request(),[

               'name' => ['required', 'string', 'max:255'],

          

                 'email' =>'required',

                'phone'    => 'sometimes|nullable|',

                'CompanyName'    => 'sometimes|nullable|',

                'Date1'    => 'sometimes|nullable|',

                'Time1'    => 'sometimes|nullable|',

                



                'subject'    => 'sometimes|nullable|',

                'message'    => 'sometimes|nullable|',

                'level'    => 'sometimes|nullable|',



            

             

            

            ],[],[

          'name'=>trans('admin.fname'),

          'email'=>trans('admin.email'),

          'phone'=>trans('admin.phone'),

          'CompanyName'=>trans('admin.CompanyName'),

          'subject'=>trans('admin.subject'),

          'message'=>trans('admin.message'),

          'Date1'=>trans('admin.Date1'),

          'Time1'=>trans('admin.Time1'),

          'level'=>trans('admin.level'),

           

       

          



            



            ]);



                   



         Sendcontact::create($data);





             session()->flash('success',trans('admin.subsharesucess'));

          



         return redirect('/');

               





       

            }



}

