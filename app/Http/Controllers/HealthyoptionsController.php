<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\Healthyoptiondatatables;
use App\Healthyoption;
  use Hash;
  use up;
  use Storage;

class HealthyoptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Healthyoptiondatatables $dataTable)
    {
         return $dataTable->render('Admin.Healthyoption.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $Healthyoption=Healthyoption::create(['photo'=>'']);
 

             return redirect('admin/Healthyoption/'.$Healthyoption->id.'/edit'); 
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
                'Healthyoption_name_en' => ['required', 'string', 'max:1000'],
                'Healthyoption_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'Healthyoption_name_en'=>trans('admin.Healthyoption_name_en'),
            'Healthyoption_name_ar'=>trans('admin.Healthyoption_name_arr'),
         
             
            


            ]);
                   
      

         Healthyoption::create($data);

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
            $title=trans('admin.Healthyoption update');
          $Healthyoption=Healthyoption::find($id);

       return view('Admin.Healthyoption.update',compact('title','Healthyoption'));
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
                

                'Healthyoption_name_en' => ['required', 'string', 'max:1000'],
                'Healthyoption_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'Healthyoption_name_en'=>trans('admin.Healthyoption_name_en'),
            'Healthyoption_name_ar'=>trans('admin.Healthyoption_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         Healthyoption::where('id',$id)->update($data);

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
             $Healthyoption=Healthyoption::find($id);
               Storage::delete($Healthyoption->photo);
         Healthyoption::find($id)->delete();
           session()->flash('success',trans('admin.deleteHealthyoption'));
       

         return redirect('admin/Healthyoption');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $Healthyoption=Healthyoption::find($id);
               Storage::delete($Healthyoption->photo);
                $Healthyoption->delete(); 
               }
            
          

        }
        else
        {
                    $Healthyoption=Healthyoption::find($id);
               Storage::delete($Healthyoption->photo);
                $Healthyoption->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/Healthyoption');

         
    }


      public function update_img_dropzon_Healthyoption($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "Healthyoption".$id,

                     ]

                  ); 

                    $settings = Healthyoption::find($id);  
      Healthyoption::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_Healthyoption($id)
               {
                    $Healthyoption = Healthyoption::find($id);

                   
                        Storage::delete( $Healthyoption->photo);
                           $Healthyoption->photo=null;
                        $Healthyoption->save();

                        return Response('كلو تمام');

               }
}


