<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\AdvantagesOfPipesdatatables;
use App\AdvantagesOfPipes;
  use Hash;
  use up;
  use Storage;

class AdvantagesOfPipessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AdvantagesOfPipesdatatables $dataTable)
    {
         return $dataTable->render('Admin.AdvantagesOfPipes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $AdvantagesOfPipes=AdvantagesOfPipes::create(['photo'=>'']);
 

             return redirect('admin/AdvantagesOfPipes/'.$AdvantagesOfPipes->id.'/edit'); 
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
                'AdvantagesOfPipes_name_en' => ['required', 'string', 'max:1000'],
                'AdvantagesOfPipes_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'AdvantagesOfPipes_name_en'=>trans('admin.AdvantagesOfPipes_name_en'),
            'AdvantagesOfPipes_name_ar'=>trans('admin.AdvantagesOfPipes_name_arr'),
         
             
            


            ]);
                   
      

         AdvantagesOfPipes::create($data);

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
            $title=trans('admin.AdvantagesOfPipes update');
          $AdvantagesOfPipes=AdvantagesOfPipes::find($id);

       return view('Admin.AdvantagesOfPipes.update',compact('title','AdvantagesOfPipes'));
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

         // return  request();
         
        $data= $this->validate(request(),[    

               'title_name_en' => ['required', 'string', 'max:1000'],
                'title_name_ar' => ['required', 'string', 'max:1000'],
                

                'AdvantagesOfPipes_name_en' => ['required', 'string', 'max:1000'],
                'AdvantagesOfPipes_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'AdvantagesOfPipes_name_en'=>trans('admin.AdvantagesOfPipes_name_en'),
            'AdvantagesOfPipes_name_ar'=>trans('admin.AdvantagesOfPipes_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         AdvantagesOfPipes::where('id',$id)->update($data);

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
             $AdvantagesOfPipes=AdvantagesOfPipes::find($id);
               Storage::delete($AdvantagesOfPipes->photo);
         AdvantagesOfPipes::find($id)->delete();
           session()->flash('success',trans('admin.deleteAdvantagesOfPipes'));
       

         return redirect('admin/AdvantagesOfPipes');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $AdvantagesOfPipes=AdvantagesOfPipes::find($id);
               Storage::delete($AdvantagesOfPipes->photo);
                $AdvantagesOfPipes->delete(); 
               }
            
          

        }
        else
        {
                    $AdvantagesOfPipes=AdvantagesOfPipes::find($id);
               Storage::delete($AdvantagesOfPipes->photo);
                $AdvantagesOfPipes->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/AdvantagesOfPipes');

         
    }


      public function update_img_dropzon_AdvantagesOfPipes($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "AdvantagesOfPipes".$id,

                     ]

                  ); 

                    $settings = AdvantagesOfPipes::find($id);  
      AdvantagesOfPipes::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_AdvantagesOfPipes($id)
               {
                    $AdvantagesOfPipes = AdvantagesOfPipes::find($id);

                   
                        Storage::delete( $AdvantagesOfPipes->photo);
                           $AdvantagesOfPipes->photo=null;
                        $AdvantagesOfPipes->save();

                        return Response('كلو تمام');

               }
}


