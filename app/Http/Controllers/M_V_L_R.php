<?php







namespace App\Http\Controllers;







use Illuminate\Http\Request;



use Validator;



use App\user;



use Hash;



use auth;



  use carbon\carbon;



  use App\admin;



  use Mail;



  use DB;



  use up;



  use App\Mail\Email_verfiy;



  use App\Mail\user_pasword_rest;



  use  App\useruploadpdf;



  use App\numberAcessWebsite;



    



  







  



   







class M_V_L_R extends Controller



{







   















	public function get_register()



	{



		return view('forentend.USERS.M_V_Register');



	}







	public function post_register(Request $request)



	{


 

		     $data=$this->Validate(request(),[

            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
       

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
          
           
         
            
		     ],[],[
         'name' =>    'name',
         'lastname' =>    'lastname',
		    
         
            'email' =>    'email' ,
       
            'password' => 'password',
             
          

		     ]);   

               $data['password']=  bcrypt($data['password']);
               $data['shapingplace']= 'address1';
                   
           

                  $user=User::create($data);



             session()->flash('success',trans(' 
تم التسجيل بنجاح'));

             Auth::login($user);
         
                  return redirect('/Checkout');




	}











	  public function getverfiy ()



     {



     	return view('forentend.USERS.verify');



     }







     public function postverfiy(Request $request)



     {







     	     if ($user=User::where('code',$request->code)->first() )



     	      {







               $code=$user->code;







     	      	$user->active=1;



     	      	$user->code=null;



     	      	$user->save();







     



            session()->flash('success',trans('admin.yhaveAcout'));



             



     	               Auth::loginUsingId($user->id);



    return  redirect('Checkout');











     	      }



     	     else



     	     {



     	        session()->flash('success','code is not correct');



     	          return redirect('verify');







     	     }















     }







         public  function Email_verfiy($token)



               {



                







                 $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();



    if (!empty($check_token)) {



      $admin = user::where('email', $check_token->email)->update([



          'Email_status'    =>1,



           



        ]);







             $user=user::where('email', $check_token->email)->first();







          Auth::loginUsingId($user->id);



      DB::table('password_resets')->where('email',$check_token->email)->delete();











               



 







    return  redirect('Checkout');











               }



          }







     public function M_V_get_Login()



     {



     	return view('forentend.USERS.M_V_Login');



     }







     public function M_V_post_Login(Request $request)



            {



            	 $data=$this->Validate(request(),[



             



            'email' => ['required', 'string', 'email', 'max:255',],



            



            'password' => ['required', 'string', 'min:6'],







		     ],[],[



		      



            'email' =>    'email' ,



            'password' => 'password',











		     ]);







            	 







            	if ( $user=User::where('email',$request->email)->first()) 



            	{







                  $password=$user->password;











            		 if ($user->active == 0) 



            	  	{







               $code=rand(1111,9999);







           //   $basic  = new \Nexmo\Client\Credentials\Basic('d19105ae', '9ZbeMsTFn7Few7bB');



             // $client = new \Nexmo\Client($basic);







			//	$message = $client->message()->send([



				//    'to' => '201276708020'/*$data['phone']*/,



				  // 'from' => 'surf',



				   // 'text' => 'your code verfing is '.$code,



			//	]);



         







     	      	$user->code=$code;



     	      	$user->save();







            	  	    $data['email']=$request->email;



                      $data['phone']=$request->phone;



                      $data['code']=$code;



                       session()->flash('success','code send to you sucessfully');



                return view('forentend.USERS.verify',compact('data'));







            	  	}



            	  	else



            	  	{







            	  	      $remeber=Request('Remember')==1? true:false ;







                      



     



            if (auth::guard('cc')->attempt( ['email'=>Request('email'),'password'=>Request('password') ],$remeber) )



                {







            $checck=numberAcessWebsite::orderBy('id','desc')->first();







               



                 if (empty($checck))



                  {



                     $lastDate=date('Y-m-d');



                   }



                   else



                   {



                      $lastDate=$checck->dateCheck;



                   }



              



                 















                    $todaydate =date('Y-m-d');







                 if ($lastDate ==  $todaydate) 



                 {



                     $maxValue=DB::table('numberAcessWebsite')->select('*')->max('numberAcess');



          



              $pulsMAxValue=$maxValue + 1;



              $ldate = date('Y-m-d');



            $numberAcessWebsite = numberAcessWebsite::create([



                    'numberAcess'=>$pulsMAxValue,



                    'dateCheck'=> $ldate,







               ]);







             



                           return redirect('Checkout');



                 }







                 else



                 {



                   $numberAcessWebsite=numberAcessWebsite::get();







                foreach ($numberAcessWebsite as $key )



                 {



                  $key->delete();



                }











                      $maxValue=DB::table('numberAcessWebsite')->select('*')->max('numberAcess');







                      if (empty($maxValue))



                       {



                        $maxValue = 0;



                      }



          



              $pulsMAxValue=$maxValue + 1;



              $ldate = date('Y-m-d');



            $numberAcessWebsite = numberAcessWebsite::create([



                    'numberAcess'=>$pulsMAxValue,



                    'dateCheck'=> $ldate,



                         ]);



             



                    return redirect('Checkout');







                 }



 







  







           



                



                 }



                 else 



                 {



                    session()->flash('danger','invalid   password');



              return redirect('M_V_get_Login');



                  



                 }     



                     



            	}



            }



            	else



            	{



                session()->flash('danger','this mail is not valid');



              return redirect('M_V_get_Login');



                  



            	}



            	 



            	  	



            	



            	  



            	   







            }







            public function V_L_R_home()



            {



            	return view ('M_V_L_R.V_L_R_home');



            }







             public function user_logout_fun()



            {



            $cart = collect(session()->get('cart'));







        $destination = \Auth::logout();







        if (!config('cart.destroy_on_logout')) {



            $cart->each(function ($rows, $identifier) {



                session()->put('cart.' . $identifier, $rows);



            });



        }







        return redirect()->to($destination);



                              



            }







          public function  request_new_code(Request $request)



               {











                      



                      $email=$request->new_email;



                      $phone=$request->new_phone;



                       if ($user=User::where('email',$request->new_email)->first() )



              {



                $user->code=null;



                $user->save();











            







              }











               $code=rand(1111,9999);



              







            //  $basic  = new \Nexmo\Client\Credentials\Basic('d19105ae', '9ZbeMsTFn7Few7bB');



              //$client = new \Nexmo\Client($basic);







                //$message = $client->message()->send([



                  //  'to' => '201276708020'/*$data['phone']*/,



                    // 'from' => 'surf',



                    //'text' => 'your code verfing is '.$code,



                //]);



            















                 $user->code=$code ;



                $user->save();







                    $email=$request->new_email;



                      $phone=$request->new_phone;







                      $data['email']=$email;



                      $data['phone']=$phone;



                      $data['code']=$code;







       



  $token=app('auth.password.broker')->createToken($user);



                      $data=DB::table('password_resets')->insert([



                         'email'=>$user->email,



                         'token'=>$token,



                         'created_at'=>Carbon::now(),



                              ]







                      );



                      







                      



              Mail::to($user->email)->send(new Email_verfiy(['user'=>$user,'token'=>$token,'code'=>$code]));



          







                  session()->flash('success',trans('admin.CodeSendToYouSucessfully'));



              return view('forentend.USERS.verify',compact('user'));











               }











                 public function forgot_password()



            {



                  return view('forentend.USERS.forgot_pass',compact('data'));



                 



            }







            public function reset_pass(Request $request)



            { 



                if ($user=User::where('email',$request->email)->first())



                 {







                  $token=app('auth.password.broker')->createToken($user);



                      $data=DB::table('password_resets')->insert([



                         'email'=>$user->email,



                         'token'=>$token,



                         'created_at'=>Carbon::now(),



                              ]







                      );











              Mail::to($request->email)->send(new user_pasword_rest(['user'=>$user,'token'=>$token]));







              



                 session()->flash('success',trans('admin.linkwassensuccesfully'));



                  return view('forentend.USERS.forgot_pass');



            



                      



                 }



                 else



                 {



                       session()->flash('danger','this mail is not valid');



              return redirect('user_forgot_password');



                  



                 }               



    



            }







                       public function user_reset_pass_add_new_get ($token)



                       {



 



                          $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();



    if (!empty($check_token)) {



    



           return view('forentend.USERS.user_reset_pass_add_new',compact('check_token'));







    } else {



      return redirect('user_forgot_password');



    }



                         







                       }







                       public function admin_reset_pass_add_new_post($token)



                       {











                          



    $this->validate(request(), [



        'password'              => 'required',



       



      ], [], [



        'password'              => 'Password',



      



      ]);







    $check_token = DB::table('password_resets')->where('token', $token)->where('created_at', '>', Carbon::now()->subHours(2))->first();



    if (!empty($check_token)) {



      $admin = user::where('email', $check_token->email)->update([



          'email'    => $check_token->email,



          'password' => bcrypt(request('password'))



        ]);



      DB::table('password_resets')->where('email', request('email'))->delete();







      session()->flash('success',trans('admin.passwordhasbeenmodfiy'));  



      return redirect('/');



    } else {



          session()->flash('danger',trans('admin.nitvlidmail'));



      return redirect('user_forgot_password');



    }



                       }



                       public function sendsms($PhoneNumber,$SMSText)

                       {

                           $PhoneNumber=$PhoneNumber;

                    $SMSText=$SMSText.''.' هو رمز تحقق  علي  ماركت ';



                $data='AccountId=101009811&Password=Vodafone.1&SenderName=Aly Market&ReceiverMSISDN='.$PhoneNumber.'&SMSText='.$SMSText.'';

                    $key='B5596515FC8C4FA9BA5D34B41E2D2D62';



                     $hashed = hash_hmac("sha256", $data,  $key); 



                     $hashed= strtoupper($hashed);



      



                $url='https://e3len.vodafone.com.eg/web2sms/sms/submit/';



                $xml='<?xml version="1.0" encoding="UTF-8"?>

<SubmitSMSRequest xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:="http://www.edafa.com/web2sms/sms/model/" xsi:schemaLocation="http://www.edafa.com/web2sms/sms/model/SMSAPI.xsd " xsi:type="SubmitSMSRequest">

<AccountId>101009811</AccountId>

<Password>Vodafone.1</Password>

<SecureHash>'.$hashed.'</SecureHash>

<SMSList>

    <SenderName>Aly Market</SenderName>

    <ReceiverMSISDN>'.$PhoneNumber.'</ReceiverMSISDN>

    <SMSText>'.$SMSText.'</SMSText>

</SMSList>

</SubmitSMSRequest>';

 

     $client = new \GuzzleHttp\Client();

        

$create = $client->request('POST', $url,

[

  'headers'=> [

'Content-type'=> 'application/xml; charset=UTF8',

 'Accept' => 'application/xml',

],

'body' => $xml

]);



 

$body = $create->getBody();

                           return 1;



 

                       }











	



    



}



