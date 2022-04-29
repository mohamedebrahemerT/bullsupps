<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\photoesFactorydatatables;

use App\photoesFactory;

use App\Maincategories;
use App\filess;



  use Hash;

  use up;

  use Storage;



class photoesFactorysController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(photoesFactorydatatables $dataTable)

    {

         return $dataTable->render('Admin.photoesFactory.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $photoesFactory=photoesFactory::create(['photo'=>'']);

 



             return redirect('admin/photoesFactory/'.$photoesFactory->id.'/edit'); 

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

                'photoesFactory_name_en' => ['required', 'string', 'max:1000'],

                'photoesFactory_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'photoesFactory_name_en'=>trans('admin.photoesFactory_name_en'),

            'photoesFactory_name_ar'=>trans('admin.photoesFactory_name_arr'),

         

             

            





            ]);

                   

      



         photoesFactory::create($data);



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

            $title=trans('Admin.photoesFactory update');

          $photoesFactory=photoesFactory::find($id);



       return view('Admin.photoesFactory.update',compact('title','photoesFactory'));

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

                  
 

         photoesFactory::where('id',$id)->update($data);



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

             $photoesFactory=photoesFactory::find($id);

               Storage::delete($photoesFactory->photo);

         photoesFactory::find($id)->delete();

           session()->flash('success',trans('admin.deletephotoesFactory'));

       



         return redirect('admin/photoesFactory');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $photoesFactory=photoesFactory::find($id);

               Storage::delete($photoesFactory->photo);

                $photoesFactory->delete(); 

               }

            

          



        }

        else

        {

                    $photoesFactory=photoesFactory::find($id);

               Storage::delete($photoesFactory->photo);

                $photoesFactory->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/photoesFactory');



         

    }





      public function update_img_dropzon_photoesFactory($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "photoesFactory".$id,



                     ]



                  ); 



                    $settings = photoesFactory::find($id);  

      photoesFactory::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_photoesFactory($id)

               {

                    $photoesFactory = photoesFactory::find($id);



                   

                        Storage::delete( $photoesFactory->photo);

                           $photoesFactory->photo=null;

                        $photoesFactory->save();



                        return Response('كلو تمام');



               }


                public function HomeSliderFactory($id)
   {

           if (request()->has('file'))
            {
               $file     =request()->file('file');
               $size     =$file->getSize();
               $mum_type =$file->getMimeType();
               $name     =$file->getClientOriginalName();
               $hashName =$file->hashName();

                 $file->store("HomeSliderFactory".$id);

              

                $add=filess::create([
                'name'        => $name,
                'size'        => $size ,
                'file'        => $hashName ,
                'path'        => 'HomeSliderFactory'.$id ,
                'full_file'   => 'HomeSliderFactory'.$id.'/'.$hashName ,
                'mum_type'    => $mum_type,
                'file_type'   => 'HomeSliderFactory', 
                'relation_id' => $id,

               ]);

              $fid=$add->id;
              return 'hotel tamam';

            return Response(['status'=>true,'id'=>$fid],200);

          }
      
   }


    public function HomeSliderFactory_delete_img()
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





