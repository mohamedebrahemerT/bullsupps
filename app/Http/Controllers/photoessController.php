<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\photoesdatatables;

use App\photoes;

use App\Maincategories;
use App\filess;
use App\otherDataColorForSlider;



  use Hash;

  use up;

  use Storage;



class photoessController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(photoesdatatables $dataTable)

    {

         return $dataTable->render('Admin.photoes.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $photoes=photoes::create(['photo'=>'']);

 



             return redirect('admin/photoes/'.$photoes->id.'/edit'); 

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

                'photoes_name_en' => ['required', 'string', 'max:1000'],

                'photoes_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'photoes_name_en'=>trans('admin.photoes_name_en'),

            'photoes_name_ar'=>trans('admin.photoes_name_arr'),

         

             

            





            ]);

                   

      



         photoes::create($data);



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

            $title=trans('Admin.photoes update');

          $photoes=photoes::find($id);



       return view('Admin.photoes.update',compact('title','photoes'));

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

             $c=otherDataColorForSlider::where('photoes_id',$id);
             $c->delete();

        foreach (request('input_key') as $input_key )
                 {  
                     
          otherDataColorForSlider::create([
                'photoes_id'  =>$id,
                'input_key'   =>$input_key,
                'input_value' =>'',

                     ]);
                   
                }
              }

                    

         photoes::where('id',$id)->update($data);



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

             $photoes=photoes::find($id);

               Storage::delete($photoes->photo);

         photoes::find($id)->delete();

           session()->flash('success',trans('admin.deletephotoes'));

       



         return redirect('admin/photoes');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $photoes=photoes::find($id);

               Storage::delete($photoes->photo);

                $photoes->delete(); 

               }

            

          



        }

        else

        {

                    $photoes=photoes::find($id);

               Storage::delete($photoes->photo);

                $photoes->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/photoes');



         

    }





      public function update_img_dropzon_photoes($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "photoes".$id,



                     ]



                  ); 



                    $settings = photoes::find($id);  

      photoes::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_photoes($id)

               {

                    $photoes = photoes::find($id);



                   

                        Storage::delete( $photoes->photo);

                           $photoes->photo=null;

                        $photoes->save();



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





