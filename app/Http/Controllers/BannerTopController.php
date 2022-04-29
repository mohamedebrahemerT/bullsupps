<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\BannerTopdatatables;

use App\BannerTop;

use App\Maincategories;
use App\filess;
use App\whoistarget;



  use Hash;

  use up;

  use Storage;



class BannerTopController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(BannerTopdatatables $dataTable)

    {

         return $dataTable->render('Admin.BannerTop.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $BannerTop=BannerTop::create(['photo'=>'']);

 



             return redirect('admin/BannerTop/'.$BannerTop->id.'/edit'); 

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

                'BannerTop_name_en' => ['required', 'string', 'max:1000'],

                'BannerTop_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'BannerTop_name_en'=>trans('admin.BannerTop_name_en'),

            'BannerTop_name_ar'=>trans('admin.BannerTop_name_arr'),

         

             

            





            ]);

                   

      



         BannerTop::create($data);



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

            $title=trans('admin.BannerTop update');

          $BannerTop=BannerTop::find($id);



       return view('Admin.BannerTop.update',compact('title','BannerTop'));

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


 if (request()->has('department_id')) 
               {

      

          

        foreach (request('department_id') as $department_id )
                 {  

                 
                       
                   $i=0;

             $c=whoistarget::where('relation_id',$id)->where('file_type','BannerTop')->get();
           foreach ($c as  $value) 
           {
                       $value->delete();
           }


            foreach (request('department_id') as $department_id )
                 {  
                   
                  whoistarget::create([
                'relation_id'  =>$id,
                'department_id'   =>$department_id,
                'file_type'=>'BannerTop',


                     ]);   
                }



               }
                  }


                  ////////////////////////////////////////////////////////
                  if (request()->has('product_id')) 
               {

      

          

        foreach (request('product_id') as $product_id )
                 {  

                 
                       
                   $i=0;

             $c=whoistarget::where('relation_id',$id)->where('file_type','BannerTop')->get();
           foreach ($c as  $value) 
           {
                       $value->delete();
           }


            foreach (request('product_id') as $product_id )
                 {  
                   
                  whoistarget::create([
                'relation_id'  =>$id,
                'product_id'   =>$product_id,
                'file_type'=>'BannerTop',


                     ]);   
                }



               }
                  }
                  ///////////////////////////////////////////////////////


                  ////////////////////////////////////////////////////////
                  if (request()->has('admin_id')) 
               {

      

          

        foreach (request('admin_id') as $admin_id )
                 {  

                 
                       
                   $i=0;

             $c=whoistarget::where('relation_id',$id)->where('file_type','BannerTop')->get();
           foreach ($c as  $value) 
           {
                       $value->delete();
           }


            foreach (request('admin_id') as $admin_id )
                 {  
                   
                  whoistarget::create([
                'relation_id'  =>$id,
                'admin_id'   =>$admin_id,
                'file_type'=>'BannerTop',


                     ]);   
                }



               }
                  }
                  ///////////////////////////////////////////////////////
 

         BannerTop::where('id',$id)->update($data);



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

             $BannerTop=BannerTop::find($id);

               Storage::delete($BannerTop->photo);

         BannerTop::find($id)->delete();

           session()->flash('success',trans('admin.deleteBannerTop'));

       



         return redirect('admin/BannerTop');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $BannerTop=BannerTop::find($id);

               Storage::delete($BannerTop->photo);

                $BannerTop->delete(); 

               }

            

          



        }

        else

        {

                    $BannerTop=BannerTop::find($id);

               Storage::delete($BannerTop->photo);

                $BannerTop->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/BannerTop');



         

    }





      public function update_img_dropzon_BannerTop($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "BannerTop".$id,



                     ]



                  ); 



                    $settings = BannerTop::find($id);  

      BannerTop::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_BannerTop($id)

               {

                    $BannerTop = BannerTop::find($id);



                   

                        Storage::delete( $BannerTop->photo);

                           $BannerTop->photo=null;

                        $BannerTop->save();



                        return Response('كلو تمام');



               }

               



                public function BannerTop($id)
   {

           if (request()->has('file'))
            {
               $file     =request()->file('file');
               $size     =$file->getSize();
               $mum_type =$file->getMimeType();
               $name     =$file->getClientOriginalName();
               $hashName =$file->hashName();

                 $file->store("BannerTop".$id);

              

                $add=filess::create([
                'name'        => $name,
                'size'        => $size ,
                'file'        => $hashName ,
                'path'        => 'BannerTop'.$id ,
                'full_file'   => 'BannerTop'.$id.'/'.$hashName ,
                'mum_type'    => $mum_type,
                'file_type'   => 'BannerTop', 
                'relation_id' => $id,

               ]);

              $fid=$add->id;
              return 'hotel tamam';

            return Response(['status'=>true,'id'=>$fid],200);

          }
      
   }


    public function BannerTop_delete_img()
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





