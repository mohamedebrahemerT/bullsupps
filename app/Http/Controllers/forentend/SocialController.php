<?php

namespace App\Http\Controllers\forentend;

use App\Http\Controllers\Controller;

 use Illuminate\Http\Request;



 use Validator,Redirect,Response,File;



 use Socialite;



 use App\user;



 use Hash;



 class SocialController extends Controller



 {



 public function redirect($provider)



 {



     return Socialite::driver($provider)->redirect();



 }



 public function callback($provider)



 {

           

   $getInfo = Socialite::driver($provider)->user(); 
 
      $email=$getInfo->email;

 $user = user::where('email', $email)->first();

 if ($user)
  {
    
   
   auth()->login($user); 



            //session()->flash('success',trans('admin.dataCretedsucsufully'));

 

return redirect('/');

 }



   $user = $this->createUser($getInfo,$provider); 



   auth()->login($user); 



          //  session()->flash('success',trans('admin.dataCretedsucsufully'));





return redirect('/');




 

 }



 function createUser($getInfo,$provider){



 $user = user::where('provider_id', $getInfo->id)->first();





  



 if (!$user) {



      $user = User::create([



         'name'     => $getInfo->name,



         'email'    => $getInfo->email,



         'provider' => $provider,



         'provider_id' => $getInfo->id,



              'password'    => $data['password']=Hash::make(123456789),



 'level' =>'user',



         'active' =>1,



         'Email_status' =>1,



         'surfID' =>1,



         'admin_status'=>1,

         'city_id'=>1,
         'shapingplace'=>'address1',


         



     ]);



   }



   return $user;



 }



 }