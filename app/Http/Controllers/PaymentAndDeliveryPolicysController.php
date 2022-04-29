<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\PaymentAndDeliveryPolicydatatables;

use App\PaymentAndDeliveryPolicy;

  use Hash;

  use up;

  use Storage;



class PaymentAndDeliveryPolicysController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(PaymentAndDeliveryPolicydatatables $dataTable)

    {

         return $dataTable->render('Admin.PaymentAndDeliveryPolicy.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $PaymentAndDeliveryPolicy=PaymentAndDeliveryPolicy::create(['photo'=>'']);

 



             return redirect('admin/PaymentAndDeliveryPolicy/'.$PaymentAndDeliveryPolicy->id.'/edit'); 

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

                'PaymentAndDeliveryPolicy_name_en' => ['required', 'string', 'max:1000'],

                'PaymentAndDeliveryPolicy_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'PaymentAndDeliveryPolicy_name_en'=>trans('admin.PaymentAndDeliveryPolicy_name_en'),

            'PaymentAndDeliveryPolicy_name_ar'=>trans('admin.PaymentAndDeliveryPolicy_name_arr'),

         

             

            





            ]);

                   

      



         PaymentAndDeliveryPolicy::create($data);



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

            $title=trans('admin.PaymentAndDeliveryPolicy update');

          $PaymentAndDeliveryPolicy=PaymentAndDeliveryPolicy::find($id);



       return view('Admin.PaymentAndDeliveryPolicy.update',compact('title','PaymentAndDeliveryPolicy'));

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

                



                'PaymentAndDeliveryPolicy_name_en' => ['required', 'string'],

                'PaymentAndDeliveryPolicy_name_ar' => ['required', 'string'],

             

                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     

            

            ],[],[

            'PaymentAndDeliveryPolicy_name_en'=>trans('admin.PaymentAndDeliveryPolicy_name_en'),

            'PaymentAndDeliveryPolicy_name_ar'=>trans('admin.PaymentAndDeliveryPolicy_name_arr'),

           

             

             'title_name_en'=>trans('admin.title_name_en'),

            'title_name_ar'=>trans('admin.title_name_arr'),

            

             

            





            ]);

                   

      



         PaymentAndDeliveryPolicy::where('id',$id)->update($data);



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

             $PaymentAndDeliveryPolicy=PaymentAndDeliveryPolicy::find($id);

               Storage::delete($PaymentAndDeliveryPolicy->photo);

         PaymentAndDeliveryPolicy::find($id)->delete();

           session()->flash('success',trans('admin.deletePaymentAndDeliveryPolicy'));

       



         return redirect('admin/PaymentAndDeliveryPolicy');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $PaymentAndDeliveryPolicy=PaymentAndDeliveryPolicy::find($id);

               Storage::delete($PaymentAndDeliveryPolicy->photo);

                $PaymentAndDeliveryPolicy->delete(); 

               }

            

          



        }

        else

        {

                    $PaymentAndDeliveryPolicy=PaymentAndDeliveryPolicy::find($id);

               Storage::delete($PaymentAndDeliveryPolicy->photo);

                $PaymentAndDeliveryPolicy->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/PaymentAndDeliveryPolicy');



         

    }





      public function update_img_dropzon_PaymentAndDeliveryPolicy($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "PaymentAndDeliveryPolicy".$id,



                     ]



                  ); 



                    $settings = PaymentAndDeliveryPolicy::find($id);  

      PaymentAndDeliveryPolicy::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_PaymentAndDeliveryPolicy($id)

               {

                    $PaymentAndDeliveryPolicy = PaymentAndDeliveryPolicy::find($id);



                   

                        Storage::delete( $PaymentAndDeliveryPolicy->photo);

                           $PaymentAndDeliveryPolicy->photo=null;

                        $PaymentAndDeliveryPolicy->save();



                        return Response('كلو تمام');



               }

}





