<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\DirectorWorddatatables;
use App\DirectorWord;
  use Hash;
  use up;
  use Storage;

class DirectorWordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DirectorWorddatatables $dataTable)
    {
         return $dataTable->render('Admin.DirectorWord.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $DirectorWord=DirectorWord::create(['photo'=>'']);
 

             return redirect('admin/DirectorWord/'.$DirectorWord->id.'/edit'); 
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
                'DirectorWord_name_en' => ['required', 'string', 'max:1000'],
                'DirectorWord_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'DirectorWord_name_en'=>trans('admin.DirectorWord_name_en'),
            'DirectorWord_name_ar'=>trans('admin.DirectorWord_name_arr'),
         
             
            


            ]);
                   
      

         DirectorWord::create($data);

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
            $title=trans('admin.DirectorWord update');
          $DirectorWord=DirectorWord::find($id);

       return view('Admin.DirectorWord.update',compact('title','DirectorWord'));
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
                

                'DirectorWord_name_en' => ['required', 'string', 'max:1000'],
                'DirectorWord_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'DirectorWord_name_en'=>trans('admin.DirectorWord_name_en'),
            'DirectorWord_name_ar'=>trans('admin.DirectorWord_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         DirectorWord::where('id',$id)->update($data);

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
             $DirectorWord=DirectorWord::find($id);
               Storage::delete($DirectorWord->photo);
         DirectorWord::find($id)->delete();
           session()->flash('success',trans('admin.deleteDirectorWord'));
       

         return redirect('admin/DirectorWord');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $DirectorWord=DirectorWord::find($id);
               Storage::delete($DirectorWord->photo);
                $DirectorWord->delete(); 
               }
            
          

        }
        else
        {
                    $DirectorWord=DirectorWord::find($id);
               Storage::delete($DirectorWord->photo);
                $DirectorWord->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/DirectorWord');

         
    }


      public function update_img_dropzon_DirectorWord($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "DirectorWord".$id,

                     ]

                  ); 

                    $settings = DirectorWord::find($id);  
      DirectorWord::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_DirectorWord($id)
               {
                    $DirectorWord = DirectorWord::find($id);

                   
                        Storage::delete( $DirectorWord->photo);
                           $DirectorWord->photo=null;
                        $DirectorWord->save();

                        return Response('كلو تمام');

               }
}


