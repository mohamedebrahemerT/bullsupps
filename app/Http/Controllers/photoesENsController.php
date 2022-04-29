<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\photoesENdatatables;

use App\photoesEN;

use App\Maincategories;
use App\filess;
use App\otherDataColorForSliderEN;



  use Hash;

  use up;

  use Storage;



class photoesENsController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(photoesENdatatables $dataTable)

    {

         return $dataTable->render('Admin.photoesEN.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $photoesEN=photoesEN::create(['photo'=>'']);

 



             return redirect('admin/photoesEN/'.$photoesEN->id.'/edit'); 

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

                'photoesEN_name_en' => ['required', 'string', 'max:1000'],

                'photoesEN_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'photoesEN_name_en'=>trans('admin.photoesEN_name_en'),

            'photoesEN_name_ar'=>trans('admin.photoesEN_name_arr'),

         

             

            





            ]);

                   

      



         photoesEN::create($data);



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

            $title=trans('Admin.photoesEN update');

          $photoesEN=photoesEN::find($id);



       return view('Admin.photoesEN.update',compact('title','photoesEN'));

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

 

                'yearPrize' => 'sometimes|nullable',
 

            ],[],[

            'yearPrize'=>trans('admin.yearPrize'),
 



            ]);

    


        if (request()->has('input_key')) 
               {

            $i=0;

             $c=otherDataColorForSliderEN::where('photoes_id',$id);
             $c->delete();

        foreach (request('input_key') as $input_key )
                 {  
                     
          otherDataColorForSliderEN::create([
                'photoes_id'  =>$id,
                'input_key'   =>$input_key,
                'input_value' =>'',

                     ]);
                   
                }
              }


                  
 

         photoesEN::where('id',$id)->update($data);



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

             $photoesEN=photoesEN::find($id);

               Storage::delete($photoesEN->photo);

         photoesEN::find($id)->delete();

           session()->flash('success',trans('admin.deletephotoesEN'));

       



         return redirect('admin/photoesEN');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $photoesEN=photoesEN::find($id);

               Storage::delete($photoesEN->photo);

                $photoesEN->delete(); 

               }

            

          



        }

        else

        {

                    $photoesEN=photoesEN::find($id);

               Storage::delete($photoesEN->photo);

                $photoesEN->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/photoesEN');



         

    }





      public function update_img_dropzon_photoesEN($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "photoesEN".$id,



                     ]



                  ); 



                    $settings = photoesEN::find($id);  

      photoesEN::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_photoesEN($id)

               {

                    $photoesEN = photoesEN::find($id);



                   

                        Storage::delete( $photoesEN->photo);

                           $photoesEN->photo=null;

                        $photoesEN->save();



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

                 $file->store("HomeSliderEN".$id);

              

                $add=filess::create([
                'name'        => $name,
                'size'        => $size ,
                'file'        => $hashName ,
                'path'        => 'HomeSliderEN'.$id ,
                'full_file'   => 'HomeSliderEN'.$id.'/'.$hashName ,
                'mum_type'    => $mum_type,
                'file_type'   => 'HomeSliderEN', 
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





