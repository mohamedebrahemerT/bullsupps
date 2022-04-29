<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\RawMaterialsdatatables;
use App\RawMaterials;
  use Hash;
  use up;
  use Storage;

class RawMaterialssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RawMaterialsdatatables $dataTable)
    {
         return $dataTable->render('Admin.RawMaterials.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $RawMaterials=RawMaterials::create(['photo'=>'']);
 

             return redirect('admin/RawMaterials/'.$RawMaterials->id.'/edit'); 
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
                'RawMaterials_name_en' => ['required', 'string', 'max:1000'],
                'RawMaterials_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'RawMaterials_name_en'=>trans('admin.RawMaterials_name_en'),
            'RawMaterials_name_ar'=>trans('admin.RawMaterials_name_arr'),
         
             
            


            ]);
                   
      

         RawMaterials::create($data);

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
            $title=trans('Admin.RawMaterials update');
          $RawMaterials=RawMaterials::find($id);

       return view('Admin.RawMaterials.update',compact('title','RawMaterials'));
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
                

                'RawMaterials_name_en' => ['required', 'string', 'max:1000'],
                'RawMaterials_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'RawMaterials_name_en'=>trans('admin.RawMaterials_name_en'),
            'RawMaterials_name_ar'=>trans('admin.RawMaterials_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         RawMaterials::where('id',$id)->update($data);

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
             $RawMaterials=RawMaterials::find($id);
               Storage::delete($RawMaterials->photo);
         RawMaterials::find($id)->delete();
           session()->flash('success',trans('admin.deleteRawMaterials'));
       

         return redirect('admin/RawMaterials');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $RawMaterials=RawMaterials::find($id);
               Storage::delete($RawMaterials->photo);
                $RawMaterials->delete(); 
               }
            
          

        }
        else
        {
                    $RawMaterials=RawMaterials::find($id);
               Storage::delete($RawMaterials->photo);
                $RawMaterials->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/RawMaterials');

         
    }


      public function update_img_dropzon_RawMaterials($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "RawMaterials".$id,

                     ]

                  ); 

                    $settings = RawMaterials::find($id);  
      RawMaterials::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_RawMaterials($id)
               {
                    $RawMaterials = RawMaterials::find($id);

                   
                        Storage::delete( $RawMaterials->photo);
                           $RawMaterials->photo=null;
                        $RawMaterials->save();

                        return Response('كلو تمام');

               }
}


