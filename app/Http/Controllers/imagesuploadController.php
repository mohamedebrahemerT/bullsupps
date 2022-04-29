<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\otherData;
use App\OtherDatasٍSiZes;


class imagesuploadController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function imagesUpload()

    {

        return view('imagesUpload');

    }


    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function imagesUploadPost(Request $request)

    {

    

                   $id=Request('id');


                  // return Request();

 if (request()->has('input_key') && request()->has('input_value')) 

               {



            $i=0;



             $c=otherData::where('product_id',$id);

             $c->delete();



        foreach (request('input_key') as $input_key )

                 {  

                      $input_value=request('input_value')[$i];
                      $colorprice=request('colorprice')[$i];
                      $qty=request('qty')[$i];
                  


 

                      


                       $image = request('colorphoto')[$i];
      $new_name = rand() . '.' . $image->getClientOriginalExtension();
               $colorphoto=   $image->move(public_path().'/images/', $new_name); 
      

          otherData::create([

                'product_id'  =>$id,

                'input_key'   =>$input_key,

                'input_value' =>$input_value,
                
                'colorphoto' =>$colorphoto,
                'colorprice' =>$colorprice,
                'qty' =>$qty,
             
                



                     ]);
    $i++;

                   

                }

                      
                   session()->flash('success', trans('admin.record_added'));

        return redirect('admin/productes/'.$id.'/edit');

 

               }

               else
               {

             $c=otherData::where('product_id',$id);

             $c->delete();
        return redirect('admin/productes/'.$id.'/edit');

               }

      /*  request()->validate([

            'uploadFile' => 'required',

        ]);


        foreach ($request->file('uploadFile') as $key => $value) {

            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();

            $value->move(public_path('images'), $imageName);

        }


        return response()->json(['success'=>'Images Uploaded Successfully.']);  */

    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     public function product_adtional_info_sizes(Request $request)

    {
          
    

                   $id=Request('id');


                  // return Request();

 if (request()->has('sizeNAme') && request()->has('sizePrice')) 

               {



            $i=0;



             $c=OtherDatasٍSiZes::where('product_id',$id);

             $c->delete();



        foreach (request('sizeNAme') as $sizeNAme )

                 {  

                      $sizePrice=request('sizePrice')[$i];
              
                      $qty=request('qty')[$i];
                      $color=request('color')[$i];

 

          OtherDatasٍSiZes::create([

                'product_id'  =>$id,

                'sizeNAme'   =>$sizeNAme,

                'sizePrice' =>$sizePrice,
           
             
                'qty' =>$qty,
                'color' =>$color,
                



                     ]);
    $i++;

                   

                }

                      
                   session()->flash('success', trans('admin.record_added'));

        return redirect('admin/productes/'.$id.'/edit');

 

               }

               else
               {

             $c=OtherDatasٍSiZes::where('product_id',$id);

             $c->delete();
        return redirect('admin/productes/'.$id.'/edit');

               }

      /*  request()->validate([

            'uploadFile' => 'required',

        ]);


        foreach ($request->file('uploadFile') as $key => $value) {

            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();

            $value->move(public_path('images'), $imageName);

        }


        return response()->json(['success'=>'Images Uploaded Successfully.']);  */

    }

}