<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\Jobsdatatables;
use App\Jobs;
  use Hash;
  use up;
  use Storage;

class JobssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Jobsdatatables $dataTable)
    {
         return $dataTable->render('Admin.Jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $Jobs=Jobs::create(['photo'=>'']);
 

             return redirect('admin/Jobs/'.$Jobs->id.'/edit'); 
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
                'Jobs_name_en' => ['required', 'string', 'max:1000'],
                'Jobs_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'Jobs_name_en'=>trans('admin.Jobs_name_en'),
            'Jobs_name_ar'=>trans('admin.Jobs_name_arr'),
         
             
            


            ]);
                   
      

         Jobs::create($data);

                return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);
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
            $title=trans('admin.Jobs update');
          $Jobs=Jobs::find($id);

       return view('Admin.Jobs.update',compact('title','Jobs'));
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

               'title_name_en' => ['required', 'string', 'max:1000'],
                'title_name_ar' => ['required', 'string', 'max:1000'],
                

                'Jobs_name_en' => ['required', 'string', 'max:1000'],
                'Jobs_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'Jobs_name_en'=>trans('admin.Jobs_name_en'),
            'Jobs_name_ar'=>trans('admin.Jobs_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         Jobs::where('id',$id)->update($data);

                return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfully'),'data'=>$data],200);

  
 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $Jobs=Jobs::find($id);
               Storage::delete($Jobs->photo);
         Jobs::find($id)->delete();
           session()->flash('success',trans('admin.deleteJobs'));
       

         return redirect('admin/Jobs');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $Jobs=Jobs::find($id);
               Storage::delete($Jobs->photo);
                $Jobs->delete(); 
               }
            
          

        }
        else
        {
                    $Jobs=Jobs::find($id);
               Storage::delete($Jobs->photo);
                $Jobs->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/Jobs');

         
    }


      public function update_img_dropzon_Jobs($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "Jobs".$id,

                     ]

                  ); 

                    $settings = Jobs::find($id);  
      Jobs::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_Jobs($id)
               {
                    $Jobs = Jobs::find($id);

                   
                        Storage::delete( $Jobs->photo);
                           $Jobs->photo=null;
                        $Jobs->save();

                        return Response('كلو تمام');

               }
}


