<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\PurchaseAndDeliveryPolicydatatables;

use App\PurchaseAndDeliveryPolicy;

  use Hash;

  use up;

  use Storage;



class PurchaseAndDeliveryPolicysController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(PurchaseAndDeliveryPolicydatatables $dataTable)

    {

         return $dataTable->render('Admin.PurchaseAndDeliveryPolicy.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $PurchaseAndDeliveryPolicy=PurchaseAndDeliveryPolicy::create(['photo'=>'']);

 



             return redirect('admin/PurchaseAndDeliveryPolicy/'.$PurchaseAndDeliveryPolicy->id.'/edit'); 

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

                'PurchaseAndDeliveryPolicy_name_en' => ['required', 'string', 'max:1000'],

                'PurchaseAndDeliveryPolicy_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'PurchaseAndDeliveryPolicy_name_en'=>trans('admin.PurchaseAndDeliveryPolicy_name_en'),

            'PurchaseAndDeliveryPolicy_name_ar'=>trans('admin.PurchaseAndDeliveryPolicy_name_arr'),

         

             

            





            ]);

                   

      



         PurchaseAndDeliveryPolicy::create($data);



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

            $title=trans('admin.PurchaseAndDeliveryPolicy update');

          $PurchaseAndDeliveryPolicy=PurchaseAndDeliveryPolicy::find($id);



       return view('Admin.PurchaseAndDeliveryPolicy.update',compact('title','PurchaseAndDeliveryPolicy'));

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

                



                'PurchaseAndDeliveryPolicy_name_en' => ['required', 'string' ],

                'PurchaseAndDeliveryPolicy_name_ar' => ['required', 'string' ],

             

                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     

            

            ],[],[

            'PurchaseAndDeliveryPolicy_name_en'=>trans('admin.PurchaseAndDeliveryPolicy_name_en'),

            'PurchaseAndDeliveryPolicy_name_ar'=>trans('admin.PurchaseAndDeliveryPolicy_name_arr'),

           

             

             'title_name_en'=>trans('admin.title_name_en'),

            'title_name_ar'=>trans('admin.title_name_arr'),

            

             

            





            ]);

                   

      



         PurchaseAndDeliveryPolicy::where('id',$id)->update($data);



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

             $PurchaseAndDeliveryPolicy=PurchaseAndDeliveryPolicy::find($id);

               Storage::delete($PurchaseAndDeliveryPolicy->photo);

         PurchaseAndDeliveryPolicy::find($id)->delete();

           session()->flash('success',trans('admin.deletePurchaseAndDeliveryPolicy'));

       



         return redirect('admin/PurchaseAndDeliveryPolicy');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $PurchaseAndDeliveryPolicy=PurchaseAndDeliveryPolicy::find($id);

               Storage::delete($PurchaseAndDeliveryPolicy->photo);

                $PurchaseAndDeliveryPolicy->delete(); 

               }

            

          



        }

        else

        {

                    $PurchaseAndDeliveryPolicy=PurchaseAndDeliveryPolicy::find($id);

               Storage::delete($PurchaseAndDeliveryPolicy->photo);

                $PurchaseAndDeliveryPolicy->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/PurchaseAndDeliveryPolicy');



         

    }





      public function update_img_dropzon_PurchaseAndDeliveryPolicy($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "PurchaseAndDeliveryPolicy".$id,



                     ]



                  ); 



                    $settings = PurchaseAndDeliveryPolicy::find($id);  

      PurchaseAndDeliveryPolicy::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_PurchaseAndDeliveryPolicy($id)

               {

                    $PurchaseAndDeliveryPolicy = PurchaseAndDeliveryPolicy::find($id);



                   

                        Storage::delete( $PurchaseAndDeliveryPolicy->photo);

                           $PurchaseAndDeliveryPolicy->photo=null;

                        $PurchaseAndDeliveryPolicy->save();



                        return Response('كلو تمام');



               }

}





