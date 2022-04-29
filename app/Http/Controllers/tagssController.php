<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\tagsdatatables;
use App\tags;
  use Hash;
  use up;
  use Storage;

class tagssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(tagsdatatables $dataTable)
    {
         return $dataTable->render('Admin.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $tags=tags::create(['photo'=>'']);
 

             return redirect('admin/tags/'.$tags->id.'/edit'); 
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
                'tags_name_en' => ['required', 'string', 'max:1000'],
                'tags_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'tags_name_en'=>trans('admin.tags_name_en'),
            'tags_name_ar'=>trans('admin.tags_name_arr'),
         
             
            


            ]);
                   
      

         tags::create($data);

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
            $title=trans('admin.tags update');
          $tags=tags::find($id);

       return view('Admin.tags.update',compact('title','tags'));
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
                

                'tags_name_en' => ['required', 'string', 'max:1000'],
                'tags_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'tags_name_en'=>trans('admin.tags_name_en'),
            'tags_name_ar'=>trans('admin.tags_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         tags::where('id',$id)->update($data);

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
             $tags=tags::find($id);
               Storage::delete($tags->photo);
         tags::find($id)->delete();
           session()->flash('success',trans('admin.deletetags'));
       

         return redirect('admin/tags');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $tags=tags::find($id);
               Storage::delete($tags->photo);
                $tags->delete(); 
               }
            
          

        }
        else
        {
                    $tags=tags::find($id);
               Storage::delete($tags->photo);
                $tags->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/tags');

         
    }


      public function update_img_dropzon_tags($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "tags".$id,

                     ]

                  ); 

                    $settings = tags::find($id);  
      tags::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_tags($id)
               {
                    $tags = tags::find($id);

                   
                        Storage::delete( $tags->photo);
                           $tags->photo=null;
                        $tags->save();

                        return Response('كلو تمام');

               }
}


