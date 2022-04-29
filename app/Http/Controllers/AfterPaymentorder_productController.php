<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\AfterPaymentorder_productdatatables;

use App\AfterPaymentorder_product;

  use Hash;

  use up;

  use Storage;



class AfterPaymentorder_productController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(AfterPaymentorder_productdatatables $dataTable)

    {

         return $dataTable->render('Admin.AfterPaymentorder_product.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $AfterPaymentorder_product=AfterPaymentorder_product::create(['photo'=>'']);

 



             return redirect('admin/AfterPaymentorder_product/'.$AfterPaymentorder_product->id.'/edit'); 

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

                'AfterPaymentorder_product_name_en' => ['required', 'string', 'max:1000'],

                'AfterPaymentorder_product_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'AfterPaymentorder_product_name_en'=>trans('admin.AfterPaymentorder_product_name_en'),

            'AfterPaymentorder_product_name_ar'=>trans('admin.AfterPaymentorder_product_name_arr'),

         

             

            





            ]);

                   

      



         AfterPaymentorder_product::create($data);



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

            $title=trans('admin.AfterPaymentorder_product update');

          $AfterPaymentorder_product=AfterPaymentorder_product::find($id);



       return view('Admin.AfterPaymentorder_product.update',compact('title','AfterPaymentorder_product'));

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

                



                'AfterPaymentorder_product_name_en' => ['required', 'string', 'max:1000'],

                'AfterPaymentorder_product_name_ar' => ['required', 'string', 'max:1000'],

             

                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     

            

            ],[],[

            'AfterPaymentorder_product_name_en'=>trans('admin.AfterPaymentorder_product_name_en'),

            'AfterPaymentorder_product_name_ar'=>trans('admin.AfterPaymentorder_product_name_arr'),

           

             

             'title_name_en'=>trans('admin.title_name_en'),

            'title_name_ar'=>trans('admin.title_name_arr'),

            

             

            





            ]);

                   

      



         AfterPaymentorder_product::where('id',$id)->update($data);



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

             $AfterPaymentorder_product=AfterPaymentorder_product::find($id);

               Storage::delete($AfterPaymentorder_product->photo);

         AfterPaymentorder_product::find($id)->delete();

           session()->flash('success',trans('admin.deleteAfterPaymentorder_product'));

       



         return redirect('admin/AfterPaymentorder_product');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $AfterPaymentorder_product=AfterPaymentorder_product::find($id);

               Storage::delete($AfterPaymentorder_product->photo);

                $AfterPaymentorder_product->delete(); 

               }

            

          



        }

        else

        {

                    $AfterPaymentorder_product=AfterPaymentorder_product::find($id);

               Storage::delete($AfterPaymentorder_product->photo);

                $AfterPaymentorder_product->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/AfterPaymentorder_product');



         

    }





      public function update_img_dropzon_AfterPaymentorder_product($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "AfterPaymentorder_product".$id,



                     ]



                  ); 



                    $settings = AfterPaymentorder_product::find($id);  

      AfterPaymentorder_product::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_AfterPaymentorder_product($id)

               {

                    $AfterPaymentorder_product = AfterPaymentorder_product::find($id);



                   

                        Storage::delete( $AfterPaymentorder_product->photo);

                           $AfterPaymentorder_product->photo=null;

                        $AfterPaymentorder_product->save();



                        return Response('كلو تمام');



               }

}





