<?php







namespace App\Http\Controllers;







use Illuminate\Http\Request;



use App\DataTables\Departmentbannersdatatables;



use App\Departmentbanners;



use App\Maincategories;

use App\filess;

use App\otherDataDepartmentbanners;







  use Hash;



  use up;



  use Storage;







class DepartmentbannerssController extends Controller



{



    /**



     * Display a listing of the resource.



     *



     * @return \Illuminate\Http\Response



     */



    public function index(Departmentbannersdatatables $dataTable)



    {



         return $dataTable->render('Admin.Departmentbanners.index');



    }







    /**



     * Show the form for creating a new resource.



     *



     * @return \Illuminate\Http\Response



     */



    public function create()



    {



         $Departmentbanners=Departmentbanners::create(['photo'=>'']);



 







             return redirect('admin/Departmentbanners/'.$Departmentbanners->id.'/edit'); 



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



                'Departmentbanners_name_en' => ['required', 'string', 'max:1000'],



                'Departmentbanners_name_ar' => ['required', 'string', 'max:1000'],



               



            



            ],[],[



            'Departmentbanners_name_en'=>trans('admin.Departmentbanners_name_en'),



            'Departmentbanners_name_ar'=>trans('admin.Departmentbanners_name_arr'),



         



             



            











            ]);



                   



      







         Departmentbanners::create($data);







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



            $title=trans('Admin.Departmentbanners update');



          $Departmentbanners=Departmentbanners::find($id);







       return view('Admin.Departmentbanners.update',compact('title','Departmentbanners'));



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



 



                'catname' => 'sometimes|nullable',

 



            ],[],[



            'catname'=>trans('admin.catname'),

 







            ]);



                  

                

 if (request()->has('input_key')) 

               {



            $i=0;



             $c=otherDataDepartmentbanners::where('Departmentbanners_id',$id);

             $c->delete();



        foreach (request('input_key') as $input_key )

                 {  

                  if (Request()->has('input_value'))
                   {

                      $image = request('input_value')[$i];
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
               $input_value=   $image->move(public_path().'/images/', $new_name);

      $new_name = 'images/'.$new_name;

                     

          otherDataDepartmentbanners::create([

                'Departmentbanners_id'  =>$id,

                'input_key'   =>$input_key,

                'input_value' =>$new_name,

                 ]);
                     
                  }

                          else
                          {
 
               $input_value= ''; 
                     

          otherDataDepartmentbanners::create([

                'Departmentbanners_id'  =>$id,

                'input_key'   =>$input_key,

                'input_value' =>$input_value,



                     ]);
                          }

    $i++;
                   

                }

              }


         Departmentbanners::where('id',$id)->update($data);


          session()->flash('success', trans('admin.record_added'));

               otherDataDepartmentbanners::get();


        return redirect('admin/Departmentbanners/'.$id.'/edit');





    }







    /**



     * Remove the specified resource from storage.



     *



     * @param  int  $id



     * @return \Illuminate\Http\Response



     */



    public function destroy($id)



    {



             $Departmentbanners=Departmentbanners::find($id);



               Storage::delete($Departmentbanners->photo);



         Departmentbanners::find($id)->delete();



           session()->flash('success',trans('admin.deleteDepartmentbanners'));



       







         return redirect('admin/Departmentbanners');



    }







       public function  destoryall(Request $request)



    {



        if (is_array(request('item'))) 



        {



               foreach (request('item') as $id  ) 



               {







                     $Departmentbanners=Departmentbanners::find($id);



               Storage::delete($Departmentbanners->photo);



                $Departmentbanners->delete(); 



               }



            



          







        }



        else



        {



                    $Departmentbanners=Departmentbanners::find($id);



               Storage::delete($Departmentbanners->photo);



                $Departmentbanners->delete(); 



        



        }



           session()->flash('success',trans('admin.deleteadminrecored'));



       







         return redirect('admin/Departmentbanners');







         



    }











      public function update_img_dropzon_Departmentbanners($id)



               {







                if (request()->has('file')) {







                    $data['photo']  = up::upload(



                     [



                        "file"=>"file",



                        "upload_type"=> "single",



                        "delte_file"=> "",



                        "path" => "Departmentbanners".$id,







                     ]







                  ); 







                    $settings = Departmentbanners::find($id);  



      Departmentbanners::where('id', $id)->update($data);







          return $data['photo'];



                    



                }







             



                



               }











               public function delete_img_dropzon_Departmentbanners($id)



               {



                    $Departmentbanners = Departmentbanners::find($id);







                   



                        Storage::delete( $Departmentbanners->photo);



                           $Departmentbanners->photo=null;



                        $Departmentbanners->save();







                        return Response('كلو تمام');







               }





                public function HomeSlider($id)

   {



           if (request()->has('file'))

            {

               $file     =request()->file('file');

               $size     =$file->getSize();

               $mum_type =$file->getMimeType();

               $name     =$file->getClientOriginalName();

               $hashName =$file->hashName();



                 $file->store("HomeSlider".$id);



              



                $add=filess::create([

                'name'        => $name,

                'size'        => $size ,

                'file'        => $hashName ,

                'path'        => 'HomeSlider'.$id ,

                'full_file'   => 'HomeSlider'.$id.'/'.$hashName ,

                'mum_type'    => $mum_type,

                'file_type'   => 'HomeSlider', 

                'relation_id' => $id,



               ]);



              $fid=$add->id;

              return 'hotel tamam';



            return Response(['status'=>true,'id'=>$fid],200);



          }

      

   }





    public function HomeSlider_delete_img()

            {

       



           

             if (request()->has('id')) 

             {

              // return  up::delete_image(request('id'));

               $fid=request('id');

               $file=filess::find($fid);

                       if (!empty($file)) 

                       {

                          Storage::delete($file->full_file);

                        $file->delete();

  

                       }

             }



             return Response(['status'=>true,'id'=>$fid],200);



            }



}











