<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\settings;
    use Storage; 
    use up;

class setting extends Controller
{
    
     public function index()
     {
        return view('Admin.setting.settings');
     } 

          public function setting_store(Request $request)
     {

           
   






             $data= $this->validate(request(),[
             'namear' =>'sometimes|nullable',
             'nameaen' => 'sometimes|nullable',
             'email' => 'sometimes|nullable',
           'siteflag_ar' => 'sometimes|nullable',
             'sitesdiscreption' => 'sometimes|nullable',
             'sitemeta' => 'sometimes|nullable',
             'language' => 'sometimes|nullable',
             'status' => 'sometimes|nullable',

             'facebooklink' => 'sometimes|nullable',
             'twitterlink' => 'sometimes|nullable',
             'gmaillink' => 'sometimes|nullable',
             'linkedinlink' => 'sometimes|nullable',
             'instgramlink' => 'sometimes|nullable',
             'maplink' => 'sometimes|nullable',
             
             
             'mapLink' => 'sometimes|nullable',
             'phone' => ['required', 'string', 'max:255'],
             'address_ar' => 'sometimes|nullable',
             'address_en' => 'sometimes|nullable',
             'profile' => 'sometimes|nullable',
               ],[],[
              'namear'=>trans('admin.nameofsitearbic'),
              'nameaen'=>trans('admin.nameofsiteenglish'),
              'email'=>trans('admin.email'),
              'siteflag'=>trans('admin.siteflag'),
              'siteflag_ar'=>trans('admin.siteflag_ar'),
              'sitesymol'=>trans('admin.sitesymol'),
              'sitesdiscreption'=>trans('admin.sitesdiscreption'),
              'sitemeta'=>trans('admin.sitemeta'),
              'language'=>trans('admin.language'),
              'status'=>trans('admin.status'),
              'maintenance'=>trans('admin.maintenance'),
              
              'facebooklink'=>trans('admin.facebooklink'),
              'twitterlink'=>trans('admin.twitterlink'),
              'gmaillink'=>trans('admin.gmaillink'),
              'linkedinlink'=>trans('admin.linkedinlink'),
              'instgramlink'=>trans('admin.instgramlink'),
              'maplink'=>trans('admin.maplink'),
               
               
            'phone'=>trans('admin.mapLink'),
            'address_en'=>trans('admin.address_en'),
              'address_ar'=>trans('admin.address_ar'),
              'profile'=>trans('admin.profile'),
            


                ]);  
 
 
           
             
                 if (request('siteflag')) {
                     // code...
                     $data['siteflag']  = up::upload(
                     [
                        "file"=>"siteflag",
                        "upload_type"=> "single",
                        "delte_file"=> settings()->siteflag,
                        "path" => "settings",

                        

                     ]

                  ); 
                 }

                  if (request('siteflag_ar')) {
                     
                   $data['siteflag_ar']  = up::upload(
                     [
                        "file"=>"siteflag_ar",
                        "upload_type"=> "single",
                        "delte_file"=> settings()->siteflag_ar,
                        "path" => "settings",

                        

                     ]

                  ); 
                 }


                  if (request('sitesymol')) {
                      // code...
                        $data['sitesymol']  = up::upload(
                     [
                        "file"=>"sitesymol",
                        "upload_type"=> "single",
                        "path" => "settings",
                        "delte_file"=>settings()->sitesymol,
                      

                     ]

                  ); 
                  }

                 

                if (request('profile')) {
                        $data['profile']  = up::upload(
                     [
                        "file"=>"profile",
                        "upload_type"=> "single",
                        "path" => "settings",
                        "delte_file"=>settings()->profile,
                      

                     ]

                  ); 
                   }


                     
                  

               settings::orderBy('id','desc')->update($data);
             session()->flash('success',trans('admin.dataaddsuccessfully'));
       

        return redirect('admin/settings');

         
     } 


}
