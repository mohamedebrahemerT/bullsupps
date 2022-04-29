<?php



namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

 

      use App\admin;

      use auth;

      use Hash;

       

class affiliateController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function TheSupport()

           { 



            return view('forentend4.TheSupport.TheSupport');

           }

    public function login()

           { 



            return view('forentend4.affiliate.login');

           }



  public function register()

           { 



            return view('forentend4.affiliate.register');

           }





 public function post_login()

           { 



             

        $remeber=Request('Remember')==1? true:false ;

     

  if(auth::guard('admin')->attempt( ['email'=>Request('email'),'password'=>Request('password') ],$remeber) )

     {   



          if ( auth()->guard('admin')->user()->level =='affiliate' and  auth()->guard('admin')->user()->Status ==1 )
                  {

                    
                session()->put('lang','ar');
                
                 return redirect ('/admin/productes');
               
                  }




                   elseif ( auth()->guard('admin')->user()->level =='affiliate' and  auth()->guard('admin')->user()->Status ==0 )
                  {

                    
                session()->put('lang','ar');

                     session()->flash('danger',trans('admin.affiliateNotaccpted'));
                
              return redirect('affiliate/login'); 
                 
               
                  } 








        /*     elseif ( auth()->guard('admin')->user()->level =='admin')

                  {

                session()->put('lang','ar');

                

                 return redirect ('admin');

               

                  } */



              else

                    {     

                     session()->flash('danger',trans('admin.acountunderRevision'));

              return redirect('affiliate/login'); 

                 }

     }

             

              

             

          

             else

             {

                    session()->flash('danger','البريد الإلكتروني أو كلمة السر خاطئة');

              return redirect('affiliate/login');

             }



 

        

        

          }



  public function post_register()

           { 



          $data= $this->validate(request(),[

               'firstname' => ['required', 'string', 'max:255'],

               'lastname' => ['required', 'string', 'max:255'],

               'email' => ['required', 'string', 'max:255'],

               'telephone' => ['required', 'string', 'max:255'],

               'company' => 'sometimes|nullable',

               'website' => 'sometimes|nullable',

               'tax' => 'sometimes|nullable',

               'payment' =>'sometimes|nullable',

               'cheque' => 'sometimes|nullable',

               'paypal' =>'sometimes|nullable',

               'bank_name' =>'sometimes|nullable',

               'bank_branch_number' =>'sometimes|nullable',

               'bank_swift_code' =>'sometimes|nullable',

               'bank_account_name' =>'sometimes|nullable',

               'bank_account_number' => 'sometimes|nullable',
               'VodafoneCash' => 'sometimes|nullable',


               'password' => ['required', 'string', 'max:255'],

            ],[],[

          'firstname'=>trans('admin.firstname'),

          'lastname'=>trans('admin.lastname'),

          'email'=>trans('admin.email'),

          'telephone'=>trans('admin.telephone'),

          'company'=>trans('admin.company'),

          'website'=>trans('admin.website'),

          'tax'=>trans('admin.tax'),

          'payment'=>trans('admin.payment'),

          'cheque'=>trans('admin.cheque'),

          'paypal'=>trans('admin.paypal'),

          'bank_name'=>trans('admin.bank_name'),

          'bank_branch_number'=>trans('admin.bank_branch_number'),

          'bank_swift_code'=>trans('admin.bank_swift_code'),

          'bank_account_name'=>trans('admin.bank_account_name'),

          'bank_account_number'=>trans('admin.bank_account_number'),

          'password'=>trans('admin.password'),
          'VodafoneCash'=>trans('admin.VodafoneCash'),
          

            ]);

                   

                  

          

                  $data['level']='affiliate';

                  $data['Status']=0;



        

        $data['password']=Hash::make($data['password']);

       



         admin::create($data);



             session()->flash('success',trans('admin.cvf'));

       



         return redirect('affiliate/login');

        



            

           }



              public function affiliateData( )
              {
                return 'affiliateData';
              }

 


       

 

     

}

