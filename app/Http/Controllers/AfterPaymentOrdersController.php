<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\AfterPaymentOrdersdatatables;

use App\AfterPaymentOrders;

  use Hash;

  use up;

  use Storage;



class AfterPaymentOrdersController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(AfterPaymentOrdersdatatables $dataTable)

    {

         return $dataTable->render('Admin.AfterPaymentOrders.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $AfterPaymentOrders=AfterPaymentOrders::create(['photo'=>'']);

 



             return redirect('admin/AfterPaymentOrders/'.$AfterPaymentOrders->id.'/edit'); 

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

                'AfterPaymentOrders_name_en' => ['required', 'string', 'max:1000'],

                'AfterPaymentOrders_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'AfterPaymentOrders_name_en'=>trans('admin.AfterPaymentOrders_name_en'),

            'AfterPaymentOrders_name_ar'=>trans('admin.AfterPaymentOrders_name_arr'),

         

             

            





            ]);

                   

      



         AfterPaymentOrders::create($data);



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

            $title=trans('admin.AfterPaymentOrders update');

          $AfterPaymentOrders=AfterPaymentOrders::find($id);



       return view('Admin.AfterPaymentOrders.update',compact('title','AfterPaymentOrders'));

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

                



                'AfterPaymentOrders_name_en' => ['required', 'string', 'max:1000'],

                'AfterPaymentOrders_name_ar' => ['required', 'string', 'max:1000'],

             

                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     

            

            ],[],[

            'AfterPaymentOrders_name_en'=>trans('admin.AfterPaymentOrders_name_en'),

            'AfterPaymentOrders_name_ar'=>trans('admin.AfterPaymentOrders_name_arr'),

           

             

             'title_name_en'=>trans('admin.title_name_en'),

            'title_name_ar'=>trans('admin.title_name_arr'),

            

             

            





            ]);

                   

      



         AfterPaymentOrders::where('id',$id)->update($data);



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

             $AfterPaymentOrders=AfterPaymentOrders::find($id);

               Storage::delete($AfterPaymentOrders->photo);

         AfterPaymentOrders::find($id)->delete();

           session()->flash('success',trans('admin.deleteAfterPaymentOrders'));

       



         return redirect('admin/AfterPaymentOrders');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $AfterPaymentOrders=AfterPaymentOrders::find($id);

               Storage::delete($AfterPaymentOrders->photo);

                $AfterPaymentOrders->delete(); 

               }

            

          



        }

        else

        {

                    $AfterPaymentOrders=AfterPaymentOrders::find($id);

               Storage::delete($AfterPaymentOrders->photo);

                $AfterPaymentOrders->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/AfterPaymentOrders');



         

    }





      public function update_img_dropzon_AfterPaymentOrders($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "AfterPaymentOrders".$id,



                     ]



                  ); 



                    $settings = AfterPaymentOrders::find($id);  

      AfterPaymentOrders::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_AfterPaymentOrders($id)

               {

                    $AfterPaymentOrders = AfterPaymentOrders::find($id);



                   

                        Storage::delete( $AfterPaymentOrders->photo);

                           $AfterPaymentOrders->photo=null;

                        $AfterPaymentOrders->save();



                        return Response('كلو تمام');



               }

}





