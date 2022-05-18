<?php

namespace App\Http\Controllers;



use App\DataTables\productesDatatable;

use App\Http\Controllers\Controller;

use App\Product;

use Illuminate\Http\Request;

use Storage;

use up;

use App\filess;

use App\sizes;

use App\weight;

use App\otherData;
use App\Models\attributes;
use App\Models\product_variant;
use App\Models\attribute_values;

 use ImageResize;





class productesController extends Controller

{

   /**

    * Display a listing of the resource.

    *

    * @return \Illuminate\Http\Response

    */

   public function index(productesDatatable $trade)

   {

  
      return $trade->render('Admin.productes.index', ['title' => trans('admin.productes')]);

   }



   /**

    * Show the form for creating a new resource.

    *

    * @return \Illuminate\Http\Response

    */

   public function create()

   {



          $productes=Product::create(['title_name_ar'=>'']);

 



             return redirect('admin/productes/'.$productes->id.'/edit');   

           

     // return view('admin.productes.create', ['title' => trans('admin.add')]);

   }



   /**

    * Store a newly created resource in storage.

    *

    * @param  \Illuminate\Http\Request  $request

    * @return \Illuminate\Http\Response

    */

   public function store()

   {



   

      $data = $this->validate(request(),

         [

            'title' => 'required',

            



         ], [], [

            'title' => trans('admin.title'),

           

         ]);



      Product::create($data);

      session()->flash('success', trans('admin.record_added'));

      return redirect('admin/productes');

   }



   /**

    * Display the specified resource.

    *

    * @param  int  $id

    * @return \Illuminate\Http\Response

    */

   public function show($id)

   {

      //

   }



   /**

    * Show the form for editing the specified resource.

    *

    * @param  int  $id

    * @return \Illuminate\Http\Response

    */

   public function edit($id)

   {



   

      $productes = Product::find($id);

          

    return view('Admin.productes.create',['productes'=>$productes]);

     

   }



   /**

    * Update the specified resource in storage.

    *

    * @param  \Illuminate\Http\Request  $request

    * @param  int  $id

    * @return \Illuminate\Http\Response



    */





       public function DELET_PRODUCT ($id)

          {

               



                  $DELET_PRODUCT=Product::where('id',$id);

             $DELET_PRODUCT->delete();



              return Response(['status'=>true,'message'=>trans('admin.datadeleted'),'DELET_PRODUCT'=>$DELET_PRODUCT],200);



               

            }



   public function update_img_dropzon_product($id ,Request $request) 

               {



                if (request()->has('file'))

                 {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "productes".$id,



                     ]



                  ); 



               $image                   =       $request->file('file');
        $input['productzoomphoto']      =       time().'.'.$image->extension();

        $destinationPath         =    "productes".$id."/zoom";

            if (!file_exists($destinationPath))
             {
            mkdir($destinationPath, 666, true);
            }



        $img                     =       ImageResize::make($image->path());


    


        // --------- [ Resize Image ] ---------------

        $img->resize(810, 810, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['productzoomphoto']);
               

          $data['productzoomphoto']=$destinationPath.'/'.$input['productzoomphoto'];
                    $productes = Product::find($id);  

      Product::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }



               
   public function update_imgofferphoto_dropzon_product($id)

               {



                if (request()->has('file'))

                 {



                    $data['offerphoto']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "productes".$id,



                     ]



                  ); 



                    $productes = Product::find($id);  

      Product::where('id', $id)->update($data);



          return $data['offerphoto'];

                    

                }



             

                

               }




               public function delete_img_dropzon_product($id)

               {

                    $productes = Product::find($id);



                   

                        Storage::delete( $productes->photo);

                           $productes->photo=null;


                           if (file_exists($productes->productzoomphoto))
             {

               unlink($productes->productzoomphoto);
             
            }
                           $productes->productzoomphoto=null;
            

                        $productes->save();



                        return Response('كلو تمام');



               }

   
public function delete_imgofferphoto_dropzon_product($id)

               {

                    $productes = Product::find($id);



                   

                        Storage::delete( $productes->offerphoto);

                           $productes->offerphoto=null;

                        $productes->save();



                        return Response('كلو تمام');



               }


   public function upload_img($id)

   {
              

     
           if (request()->has('file'))

            {

               $file     =request()->file('file');

               $size     =$file->getSize();

               $mum_type =$file->getMimeType();

               $name     =$file->getClientOriginalName();

               $hashName =$file->hashName();



                 $file->store("productes".$id);


                 ///////////////////////////////////////////////
   $image                   =       $request->file('file');
        $input['zoomaftereid']      =       time().'.'.$image->extension();

        $destinationPath         =    "productes".$id."/zoomaftereid";

            if (!file_exists($destinationPath))
             {
            mkdir($destinationPath, 666, true);
            }



        $img                     =       ImageResize::make($image->path());


    


        // --------- [ Resize Image ] ---------------

        $img->resize(810, 810, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['zoomaftereid']);
               

          $zoomaftereid=$destinationPath.'/'.$input['zoomaftereid'];
                   



      


                 //////////////////////////////////////////////



              



                   $add=filess::create([

                'name'        => $zoomaftereid,

                'size'        => $size ,

                'file'        => $hashName ,

                'path'        => 'productes'.$id ,

                'full_file'   => 'productes'.$id.'/'.$hashName ,

                'mum_type'    => $mum_type,

                'file_type'   => 'productes', 

                'relation_id' => $id,



               ]);



              $fid=$add->id;

              return 'hotel tamam';



            return Response(['status'=>true,'id'=>$fid],200);



          }

      

   }



   public function delete_img()

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



               public function load_dep_v_size_weight()

            {



              if (request()->ajax() && request()->has('id') )

               {

               $id=request('id');



              // return get_parent($id);

               $array1=explode(',',get_parent($id));

               

                       $r=[$id];

              // return $array1;

              $Dip_list=array_diff($array1,$r);



          $sizes=sizes::where('is_public','yes')

          ->whereIn('department_id',$Dip_list)

          ->orWhere('department_id',$id)

          ->pluck('name_'.session('lang'),'id');





        //  $size_2=sizes::;

          // $sizes=array_merge(json_decode($size_1,true) ,json_decode($size_2,true));

    

            $weight=weight::pluck('name_'.session('lang'),'id');

    return view('Admin.productes.ajax',[

        'sizes'=>$sizes,

        'weight'=>$weight,

         'productcc'=>Product::find(request('product_id'))

         ])->render();





   

                //$id=request('id');

                 //return '<h1>'.$id.'</h1>';

              }

              

            }

              public function call_attributes()

            {



              if (request()->ajax() && request()->has('attribute_ids') )

               {

                $attribute_ids=request('attribute_ids');

 
$attributes=attributes::whereIn('id',$attribute_ids)->get();

    return view('Admin.productes.ajax_attributes',[
        'attributes'=>$attributes,
         ])->render();
 

              }

              

            }



   public function update($id)

   {  
               
       
        
         $productes = Product::find($id);   



           

      

    $data = $this->validate(request(),

           [

              'title_name_ar'          => 'required',
              'title_name_en'          => 'required',

          

              'department_id'  => 'required|numeric',

              'trad_id'        => 'sometimes|nullable|numeric',

              'manuf_id'       => 'sometimes|nullable|numeric',

              'color_id'       => 'sometimes|nullable|numeric',

              'size_id'        => 'sometimes|nullable|numeric',

              'currency_id'    => 'sometimes|nullable|numeric',

              'price'          => 'sometimes|nullable',

              'stock'          => 'sometimes|nullable',

              'start_at'       => 'sometimes|nullable',

              'end_at'         => 'sometimes|nullable',

              'start_offer_at' => 'sometimes|nullable',

              'end_offer_at'   => 'sometimes|nullable',

              'price_offer'    =>'sometimes|nullable',

              'weight'         => 'sometimes|nullable',

              'weight_id'      => 'sometimes|nullable',

              'status'         =>'sometimes|nullable', 

              'reason'         =>'sometimes|nullable', 

              'commistion'   =>  'sometimes|nullable', 

              'size'          => 'sometimes|nullable',

         ], [], [



              'title'           =>  trans('admin.title'),
              'title_name_en'           =>  trans('admin.title_name_en'),

              'content'         =>  trans('admin.content'),

              'department_id'   =>  trans('admin.department_id'),

              'trad_id'         =>  trans('admin.trad_id'),

              'manuf_id'        =>  trans('admin.manuf_id'),

              'color_id'        =>  trans('admin.color_id'),

              'size_id'         =>  trans('admin.currency_id'),

              'currency_id'     =>  trans('admin.title'),

              'price'           =>  trans('admin.price'),

              'stock'           =>  trans('admin.stock'),

              'start_at'        =>  trans('admin.start_at'),

              'end_at'          =>  trans('admin.end_at'),

              'start_offer_at'  =>  trans('admin.start_offer_at'),

              'end_offer_at'    =>  trans('admin.end_offer_at'),

              'price_offer'     =>  trans('admin.price_offer'),

              'weight'          =>  trans('admin.weight'),

              'weight_id'       =>  trans('admin.weight_id'),

              'status'          =>  trans('admin.status'),

              'reason'          =>  trans('admin.reason'),

              'size'          => trans('admin.sizes'),

              'commistion'          => trans('admin.commistion'),

              



         ]);


    if (request()->has('attribute_value_id') ) 

               {


 
             $product_variant=product_variant::where('product_id',$id);

             $product_variant->delete();



 foreach (request('attribute_value_id') as $key => $attribute_value_id )

                 {  

    $attribute_value=attribute_values::where('id',$attribute_value_id)->first();

           $attribute_id=$attribute_value->attribute_id;
           $value_ar=$attribute_value->value_ar;
           $value_en=$attribute_value->value_en;
  

          product_variant::create([

                'product_id'  =>$id,
                'attribute_id'=> $attribute_id,
                'attribute_value_id'   =>$attribute_value_id,
                'value_ar'   =>$value_ar,
                'value_en'   =>$value_en,
 

                     ]);

                   

                }
 

               }

    

 if (request()->has('input_key') && request()->has('input_value')) 

               {



            $i=0;



             $c=otherData::where('product_id',$id);

             $c->delete();



        foreach (request('input_key') as $input_key )

                 {  

                      $input_value=request('input_value')[$i];

          otherData::create([

                'product_id'  =>$id,

                'input_key'   =>$input_key,

                'input_value' =>$input_value,



                     ]);

                   

                }


    $i++;

 

               }

              

                $data['admin_id']=auth()->guard('admin')->user()->id;


                if (request('vat'))
                 {
                             
                     $price_vat=request('price')* 0.15;
                     $price_offer_vat=request('price_offer')* 0.15;

                     $data['price']=request('price')  + $price_vat;
                     $data['price_offer']=request('price_offer') + $price_offer_vat;

                     $data['vat']=1;
                     $data['vat_value']=$price_vat;

                      
                }
  

      Product::where('id', $id)->update($data);

     

          return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfully'),'data'=>$data],200);

      

       

   }



   /**

    * Remove the specified resource from storage.

    *

    * @param  int  $id

    * @return \Illuminate\Http\Response

    */



 public function productesCEDT($id)
{


       
         $productes = Product::find($id);   

       $productes->content_name_ar=request('content_name_ar');
       $productes->content_name_en=request('content_name_en');
   
        $productes->save();
         return Response(['status'=>true,'message'=>trans('admin.dataaupdatedsuccessfully'),'data'=>'data'],200);


}



   public function destroy($id)

   {

       $product = Product::find($id);

      $product->delete();

      session()->flash('success', trans('admin.datadeleted'));

      return redirect('admin/productes');

   }



   public function multi_delete()

   {

      if (is_array(request('item'))) {

         foreach (request('item') as $id) {

            $malls = Product::find($id);

            $malls->delete();

         }

      } else {

         $malls = Product::find(request('item'));

         $malls->delete();

      }

      session()->flash('success', trans('admin.datadeleted'));

      return redirect('admin/productes');

       

   }

}

