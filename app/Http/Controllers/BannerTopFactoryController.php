<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\BannerTopFactorydatatables;

use App\BannerTopFactory;

use App\Maincategories;
use App\filess;



  use Hash;

  use up;

  use Storage;



class BannerTopFactoryController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(BannerTopFactorydatatables $dataTable)

    {

         return $dataTable->render('Admin.BannerTopFactory.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $BannerTopFactory=BannerTopFactory::create(['photo'=>'']);

 



             return redirect('admin/BannerTopFactory/'.$BannerTopFactory->id.'/edit'); 

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

                'BannerTopFactory_name_en' => ['required', 'string', 'max:1000'],

                'BannerTopFactory_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'BannerTopFactory_name_en'=>trans('admin.BannerTopFactory_name_en'),

            'BannerTopFactory_name_ar'=>trans('admin.BannerTopFactory_name_arr'),

         

             

            





            ]);

                   

      



         BannerTopFactory::create($data);



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

            $title=trans('admin.BannerTopFactory update');

          $BannerTopFactory=BannerTopFactory::find($id);



       return view('Admin.BannerTopFactory.update',compact('title','BannerTopFactory'));

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

 

                'yearPrize' => ['required', 'string', 'max:1000'],
 

            ],[],[

            'yearPrize'=>trans('admin.yearPrize'),
 



            ]);

                  
 

         BannerTopFactory::where('id',$id)->update($data);



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

             $BannerTopFactory=BannerTopFactory::find($id);

               Storage::delete($BannerTopFactory->photo);

         BannerTopFactory::find($id)->delete();

           session()->flash('success',trans('admin.deleteBannerTopFactory'));

       



         return redirect('admin/BannerTopFactory');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $BannerTopFactory=BannerTopFactory::find($id);

               Storage::delete($BannerTopFactory->photo);

                $BannerTopFactory->delete(); 

               }

            

          



        }

        else

        {

                    $BannerTopFactory=BannerTopFactory::find($id);

               Storage::delete($BannerTopFactory->photo);

                $BannerTopFactory->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/BannerTopFactory');



         

    }





      public function update_img_dropzon_BannerTopFactory($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "BannerTopFactory".$id,



                     ]



                  ); 



                    $settings = BannerTopFactory::find($id);  

      BannerTopFactory::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_BannerTopFactory($id)

               {

                    $BannerTopFactory = BannerTopFactory::find($id);



                   

                        Storage::delete( $BannerTopFactory->photo);

                           $BannerTopFactory->photo=null;

                        $BannerTopFactory->save();



                        return Response('كلو تمام');



               }

               



                public function BannerTopFactory($id)
   {

           if (request()->has('file'))
            {
               $file     =request()->file('file');
               $size     =$file->getSize();
               $mum_type =$file->getMimeType();
               $name     =$file->getClientOriginalName();
               $hashName =$file->hashName();

                 $file->store("BannerTopFactory".$id);

              

                $add=filess::create([
                'name'        => $name,
                'size'        => $size ,
                'file'        => $hashName ,
                'path'        => 'BannerTopFactory'.$id ,
                'full_file'   => 'BannerTopFactory'.$id.'/'.$hashName ,
                'mum_type'    => $mum_type,
                'file_type'   => 'BannerTopFactory', 
                'relation_id' => $id,

               ]);

              $fid=$add->id;
              return 'hotel tamam';

            return Response(['status'=>true,'id'=>$fid],200);

          }
      
   }


    public function BannerTopFactory_delete_img()
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





