<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\OrderProductdatatables;
use App\OrderProduct;
  use Hash;
  use up;
  use Storage;

class OrderProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrderProductdatatables $dataTable)
    {
         return $dataTable->render('Admin.OrderProduct.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $OrderProduct=OrderProduct::create(['photo'=>'']);
 

             return redirect('admin/OrderProduct/'.$OrderProduct->id.'/edit'); 
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
                'OrderProduct_name_en' => ['required', 'string', 'max:1000'],
                'OrderProduct_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'OrderProduct_name_en'=>trans('admin.OrderProduct_name_en'),
            'OrderProduct_name_ar'=>trans('admin.OrderProduct_name_arr'),
         
             
            


            ]);
                   
      

         OrderProduct::create($data);

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
            $title=trans('admin.OrderProduct update');
          $OrderProduct=OrderProduct::find($id);

       return view('Admin.OrderProduct.update',compact('title','OrderProduct'));
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
                

                'OrderProduct_name_en' => ['required', 'string', 'max:1000'],
                'OrderProduct_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'OrderProduct_name_en'=>trans('admin.OrderProduct_name_en'),
            'OrderProduct_name_ar'=>trans('admin.OrderProduct_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         OrderProduct::where('id',$id)->update($data);

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
             $OrderProduct=OrderProduct::find($id);
               Storage::delete($OrderProduct->photo);
         OrderProduct::find($id)->delete();
           session()->flash('success',trans('admin.deleteOrderProduct'));
       

         return redirect('admin/OrderProduct');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $OrderProduct=OrderProduct::find($id);
               Storage::delete($OrderProduct->photo);
                $OrderProduct->delete(); 
               }
            
          

        }
        else
        {
                    $OrderProduct=OrderProduct::find($id);
               Storage::delete($OrderProduct->photo);
                $OrderProduct->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/OrderProduct');

         
    }


      public function update_img_dropzon_OrderProduct($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "OrderProduct".$id,

                     ]

                  ); 

                    $settings = OrderProduct::find($id);  
      OrderProduct::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_OrderProduct($id)
               {
                    $OrderProduct = OrderProduct::find($id);

                   
                        Storage::delete( $OrderProduct->photo);
                           $OrderProduct->photo=null;
                        $OrderProduct->save();

                        return Response('كلو تمام');

               }
}


