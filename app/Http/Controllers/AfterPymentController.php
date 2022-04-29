<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\AfterPymentdatatables;

use App\AfterPyment;

  use Hash;

  use up;

  use Storage;



class AfterPymentController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(AfterPymentdatatables $dataTable)

    {

         return $dataTable->render('Admin.AfterPyment.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $AfterPyment=AfterPyment::create(['photo'=>'']);

 



             return redirect('admin/AfterPyment/'.$AfterPyment->id.'/edit'); 

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

                'AfterPyment_name_en' => ['required', 'string', 'max:1000'],

                'AfterPyment_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'AfterPyment_name_en'=>trans('admin.AfterPyment_name_en'),

            'AfterPyment_name_ar'=>trans('admin.AfterPyment_name_arr'),

         

             

            





            ]);

                   

      



         AfterPyment::create($data);



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

            $title=trans('admin.AfterPyment update');

          $AfterPyment=AfterPyment::find($id);



       return view('Admin.AfterPyment.update',compact('title','AfterPyment'));

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

                



                'AfterPyment_name_en' => ['required', 'string', 'max:1000'],

                'AfterPyment_name_ar' => ['required', 'string', 'max:1000'],

             

                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     

            

            ],[],[

            'AfterPyment_name_en'=>trans('admin.AfterPyment_name_en'),

            'AfterPyment_name_ar'=>trans('admin.AfterPyment_name_arr'),

           

             

             'title_name_en'=>trans('admin.title_name_en'),

            'title_name_ar'=>trans('admin.title_name_arr'),

            

             

            





            ]);

                   

      



         AfterPyment::where('id',$id)->update($data);



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

             $AfterPyment=AfterPyment::find($id);

               Storage::delete($AfterPyment->photo);

         AfterPyment::find($id)->delete();

           session()->flash('success',trans('admin.deleteAfterPyment'));

       



         return redirect('admin/AfterPyment');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $AfterPyment=AfterPyment::find($id);

               Storage::delete($AfterPyment->photo);

                $AfterPyment->delete(); 

               }

            

          



        }

        else

        {

                    $AfterPyment=AfterPyment::find($id);

               Storage::delete($AfterPyment->photo);

                $AfterPyment->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/AfterPyment');



         

    }





      public function update_img_dropzon_AfterPyment($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "AfterPyment".$id,



                     ]



                  ); 



                    $settings = AfterPyment::find($id);  

      AfterPyment::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_AfterPyment($id)

               {

                    $AfterPyment = AfterPyment::find($id);



                   

                        Storage::delete( $AfterPyment->photo);

                           $AfterPyment->photo=null;

                        $AfterPyment->save();



                        return Response('كلو تمام');



               }

}





