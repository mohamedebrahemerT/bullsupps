<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\BannerTopENdatatables;

use App\BannerTopEN;

use App\Maincategories;
use App\filess;



  use Hash;

  use up;

  use Storage;



class BannerTopENController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(BannerTopENdatatables $dataTable)

    {

         return $dataTable->render('Admin.BannerTopEN.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $BannerTopEN=BannerTopEN::create(['photo'=>'']);

 



             return redirect('admin/BannerTopEN/'.$BannerTopEN->id.'/edit'); 

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

                'BannerTopEN_name_en' => ['required', 'string', 'max:1000'],

                'BannerTopEN_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'BannerTopEN_name_en'=>trans('admin.BannerTopEN_name_en'),

            'BannerTopEN_name_ar'=>trans('admin.BannerTopEN_name_arr'),

         

             

            





            ]);

                   

      



         BannerTopEN::create($data);



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

            $title=trans('admin.BannerTopEN update');

          $BannerTopEN=BannerTopEN::find($id);



       return view('Admin.BannerTopEN.update',compact('title','BannerTopEN'));

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

                  
 

         BannerTopEN::where('id',$id)->update($data);



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

             $BannerTopEN=BannerTopEN::find($id);

               Storage::delete($BannerTopEN->photo);

         BannerTopEN::find($id)->delete();

           session()->flash('success',trans('admin.deleteBannerTopEN'));

       



         return redirect('admin/BannerTopEN');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $BannerTopEN=BannerTopEN::find($id);

               Storage::delete($BannerTopEN->photo);

                $BannerTopEN->delete(); 

               }

            

          



        }

        else

        {

                    $BannerTopEN=BannerTopEN::find($id);

               Storage::delete($BannerTopEN->photo);

                $BannerTopEN->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/BannerTopEN');



         

    }





      public function update_img_dropzon_BannerTopEN($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "BannerTopEN".$id,



                     ]



                  ); 



                    $settings = BannerTopEN::find($id);  

      BannerTopEN::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_BannerTopEN($id)

               {

                    $BannerTopEN = BannerTopEN::find($id);



                   

                        Storage::delete( $BannerTopEN->photo);

                           $BannerTopEN->photo=null;

                        $BannerTopEN->save();



                        return Response('كلو تمام');



               }

               



                public function BannerTopEN($id)
   {

           if (request()->has('file'))
            {
               $file     =request()->file('file');
               $size     =$file->getSize();
               $mum_type =$file->getMimeType();
               $name     =$file->getClientOriginalName();
               $hashName =$file->hashName();

                 $file->store("BannerTopEN".$id);

              

                $add=filess::create([
                'name'        => $name,
                'size'        => $size ,
                'file'        => $hashName ,
                'path'        => 'BannerTopEN'.$id ,
                'full_file'   => 'BannerTopEN'.$id.'/'.$hashName ,
                'mum_type'    => $mum_type,
                'file_type'   => 'BannerTopEN', 
                'relation_id' => $id,

               ]);

              $fid=$add->id;
              return 'hotel tamam';

            return Response(['status'=>true,'id'=>$fid],200);

          }
      
   }


    public function BannerTopEN_delete_img()
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





