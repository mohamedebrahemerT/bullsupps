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
           'siteflag' => 'sometimes|nullable',
           'siteflag_ar' => 'sometimes|nullable',
            'sitesymol' => 'sometimes|nullable',
             'sitesdiscreption' => 'sometimes|nullable',
             'sitemeta' => 'sometimes|nullable',
             'language' => 'sometimes|nullable',
             'status' => 'sometimes|nullable',

             'facebookLink' => 'sometimes|nullable',
             'TwitterLink' => 'sometimes|nullable',
             'GmailLink' => 'sometimes|nullable',
             'LinkedinLink' => 'sometimes|nullable',
             'instagramLink' => 'sometimes|nullable',
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
              
              'facebookLink'=>trans('admin.facebookLink'),
              'TwitterLink'=>trans('admin.TwitterLink'),
              'GmailLink'=>trans('admin.GmailLink'),
              'LinkedinLink'=>trans('admin.LinkedinLink'),
              'instagramLink'=>trans('admin.instagramLink'),
            'mapLink'=>trans('admin.mapLink'),
            'phone'=>trans('admin.mapLink'),
            'address_en'=>trans('admin.address_en'),
              'address_ar'=>trans('admin.address_ar'),
              'profile'=>trans('admin.profile'),
            


                ]);  
 
 
              /*   $data= $this->validate(request(),
               ['siteflag' => 'required| image|mimes:jpg,png,gif,jpeg|max:2048',
            'sitesymol' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048'],
           
             
            
        [],[
            'siteflag'=>trans('admin.siteflag'),
            'sitesymol'=>trans('admin.sitesymol'),
            
            ]);
         */
                 //return request();
             
             
                  $data['siteflag']  = up::upload(
                     [
                        "file"=>"siteflag",
                        "upload_type"=> "single",
                        "delte_file"=> settings()->siteflag,
                        "path" => "settings",

                        

                     ]

                  ); 

                   $data['siteflag_ar']  = up::upload(
                     [
                        "file"=>"siteflag_ar",
                        "upload_type"=> "single",
                        "delte_file"=> settings()->siteflag_ar,
                        "path" => "settings",

                        

                     ]

                  ); 

                  

                     $data['sitesymol']  = up::upload(
                     [
                        "file"=>"sitesymol",
                        "upload_type"=> "single",
                        "path" => "settings",
                        "delte_file"=>settings()->sitesymol,
                      

                     ]

                  ); 

                      $data['profile']  = up::upload(
                     [
                        "file"=>"profile",
                        "upload_type"=> "single",
                        "path" => "settings",
                        "delte_file"=>settings()->profile,
                      

                     ]

                  ); 


                     
                  /*
 
                 if (request()->has('siteflag') ) 
                 {
                    if (!empty(settings()->siteflag))
                     {
                        Storage::delete(settings()->siteflag);
                     }
                   $data['siteflag']=request()->file('siteflag')->store('settings');

                      
                  
                 }
                 if (request()->hasfile('sitesymol'))
                  {
                    if (!empty(settings()->sitesymol))
                     {
                        Storage::delete(settings()->sitesymol);
                     }
                     $data['sitesymol']=request()->file('sitesymol')->store('settings');
                     
                 
                     
                 }
                 */

             // $data=request()->except('_token','_method');  

               settings::orderBy('id','desc')->update($data);
             session()->flash('success',trans('admin.dataaddsuccessfully'));
       

        return redirect('admin/settings');

        //return Request();*/
     } 


}
