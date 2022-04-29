<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\countriesdatatables;
use App\countries;
  use Hash;
  use up;
  use Storage;

class countriess extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(countriesdatatables $dataTable)
    {
         return $dataTable->render('Admin.countries.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              

          $data= $this->validate(request(),[
               'countries_name_ar' => ['required', 'string', 'max:255'],
                'countries_name_en' => ['required', 'string', 'max:255'],
                'currency' => ['required', 'string', 'max:255'],
                 'mob' => ['required', 'string', 'max:255'],
                 'code' => ['required', 'string', 'max:255'],
                 'logo' => 'required|image|mimes:jpg,png,gif,jpeg',
                 
                   
         
            
            ],[],[
          'countries_name_ar'=>trans('admin.countries_name_ar'),
            'countries_name_en'=>trans('admin.countries_name_en'),
            'currency'=>trans('admin.currency'),
            'mob'=>trans('admin.mob'),
            'code'=>trans('admin.code'),
            'logo'=>trans('admin.logo'),
            


            ]);
                   
                  
              $data['logo']  = up::upload(
                     [
                        "file"=>"logo",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "countries",

                     ]

                  );

                  
        
       

         countries::create($data);

             session()->flash('success',trans('admin.dataaddsuccessfully'));
       

         return redirect('admin/counteries');
        return request();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $title=trans('admin.countries');
        $countries=countries::find($id);

       return view('Admin.countries.update',compact('title','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
           
                  

          $data= $this->validate(request(),[
               'countries_name_ar' => ['required', 'string', 'max:255'],
                'countries_name_en' => ['required', 'string', 'max:255'],
                 'mob' => ['required', 'string', 'max:255'],
                 'code' => ['required', 'string', 'max:255'],
                 'logo' => 'image|mimes:jpg,png,gif,jpeg',
                 'currency' => ['required', 'string', 'max:255'],

         
         
            
            ],[],[
          'countries_name_ar'=>trans('admin.countries_name_ar'),
            'countries_name_en'=>trans('admin.countries_name_en'),
            'mob'=>trans('admin.mob'),
            'code'=>trans('admin.code'),
            'logo'=>trans('admin.logo'),
            'currency'=>trans('admin.currency'),


            ]);
                   
                   if (request()->hasfile('logo')) {
                    
                
                  
              $data['logo']  = up::upload(
                     [
                        "file"=>"logo",
                        "upload_type"=> "single",
                        "delte_file"=>countries::find($id)->logo,
                        "path" => "countries",

                     ]

                  );

                 }

  

         countries::where('id',$id)->update($data);

             session()->flash('success',trans('admin.dataaddsuccessfully'));
       

         return redirect('admin/counteries');
        return request();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $countries=countries::find($id);
               Storage::delete($countries->logo);
         countries::find($id)->delete();
           session()->flash('success',trans('admin.deletecountries'));
       

         return redirect('admin/counteries');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $countries=countries::find($id);
               Storage::delete($countries->logo);
                $countries->delete(); 
               }
            
          

        }
        else
        {
                    $countries=countries::find($id);
               Storage::delete($countries->logo);
                $countries->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/counteries');

         
    }
}


