<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use up;
use App\colorName_photoColor_size;
use App\colorName_photoColor_model;
use App\product;

class AjaxUploadController extends Controller
{
    function index()
    {
     return view('ajax_upload');
    }

    function action(Request $request)
    {

     
         

     $validation = Validator::make($request->all(), [
      'color_photo' => 'sometimes|nullable',
          'video'  => 'mimes:mp4,mov,ogg,qt | max:20000'
      
     ]);


                  $id=request('id');

   


 
  

     if($validation->passes())
     {

                  if (request()->has('color_photo'))

                   {


                    
                foreach($request->file('color_photo') as $image)
            {
                        
                 $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name); 
             


               
             
               
            }



                     
                  
                  }
    


//////////////////////////////////////////////

                  if (request()->has('video'))

                   {

  $video = $request->file('video');
      $videoName = rand() . '.' . $video->getClientOriginalExtension();
       $video->move(public_path('videos'), $videoName);
       $videoName= $videoName;

       $product=product::where('id',$id)->first();
       $product->video=$videoName;
       $product->VideoExst=1;
       $product->save();

     }

     if (request()->has('color_photoOld'))
                   {

                    $color_photo=request('color_photoOld');
                  }
     
       if (request()->has('sizeType') && request()->has('price_size')) 
               {

 
            $i=0;

             $c=colorName_photoColor_size::where('product_id',$id);
             $c->delete();



  $sizeType=request('sizeType');
  $price_size=request('price_size');

foreach($sizeType as $key => $value) 
     {         
    if(empty($value)) 
        unset($sizeType[$key]); 
    }

            foreach($price_size as $key => $value) 
             {         
            if(empty($value)) 
                unset($price_size[$key]); 
            }


                   $BKsizeType=[];
                  foreach ($sizeType as $BK) 
                   {
                     array_push($BKsizeType, $BK);
                   }

                     $BKprice_size=[];
                  foreach ($price_size as $BK) 
                   {
                     array_push($BKprice_size, $BK);
                   }


                
                 
                  

                $color_photoBK=[];
                 $knouwCoubtTOpushcolor_photo=count($BKprice_size);


                     foreach($request->file('color_photo') as $image)
            {

                         $name=$image->getClientOriginalName();
                           $color_photo= $name;

              
                      for ($i=1; $i  <=  $knouwCoubtTOpushcolor_photo ; $i++) 
                      { 
                       array_push($color_photoBK, $color_photo);

                       $knouwCoubtTOpushcolor_photo=$knouwCoubtTOpushcolor_photo-1;
                             
                      }                 
                        
               


            
             
               
            }


              $BKcolor_name=[];
                $knouwCoubtTOpushColorname=count(request('color_name'));
        if (request()->has('color_name'))

         {
                   
               
                    foreach(request('color_name') as $color_name)
            {

                      for ($i=1; $i  <=  $knouwCoubtTOpushColorname   ; $i++) 
                         {   
                       array_push($BKcolor_name, $color_name);
                         }  

                     $knouwCoubtTOpushColorname=$knouwCoubtTOpushColorname-1;
            }




        }

                
                   
               if (count($BKcolor_name) ==1 )
                {

                    for ($i=0; $i <= count($BKsizeType) -1; $i++) { 
               
               
                
                   //   $price_size=request('price_size')[$i];
           colorName_photoColor_size::create([
                 'product_id'  =>$id,
                'color_name'=>$BKcolor_name[0],
                'color_photo'=>$color_photoBK[0],
                'sizeType'   =>$BKsizeType[$i],
                'price_size' =>$BKprice_size[$i],


                     ]);
            
                   
                }
                 
                }

                
              /*  return $BKsizeType;
                  return  $BKprice_size;
                    return $BKcolor_name;
                    return  $color_photoBK;  */
         if (count($BKcolor_name) ==2 and  count($color_photoBK)==2 and count($BKsizeType) <12)
                {

                    for ($i=0; $i <= count($BKsizeType) -1; $i++) { 
               
               
                
                   //   $price_size=request('price_size')[$i];
           colorName_photoColor_size::create([
                 'product_id'  =>$id,
                'color_name'=>$BKcolor_name[0],
                'color_photo'=>$color_photoBK[0],
                'sizeType'   =>$BKsizeType[$i],
                'price_size' =>$BKprice_size[$i],


                     ]);
            
                   
                }
                 
                }

                  
            

                   
 

             

                  return 'done';
             
               }


                //////////////////////////////////////////////

    
       if (request()->has('modelType') && request()->has('price_Models')) 
               {

            $i=0;

             $c=colorName_photoColor_model::where('product_id',$id);
             $c->delete();



        foreach (request('modelType') as $modelType )
                 {  
                   //   $price_Models=request('price_Models')[$i];
          colorName_photoColor_model::create([
                'product_id'  =>$id,
                 'color_name'=>request('color_name'),
                'color_photo'=>request('color_photo'),
                'modelType'   =>$modelType,
                'price_Models' =>request('price_Models')[$i]

                     ]);
            $i=$i+1;

                   
                }


             
               }


               /////////////////////////////////////////////









      return response()->json([
       'message'   => 'Image Upload Successfully',
       'uploaded_image' => '<img src="http://localhost/dashboard/old/alymarket3/public/images/'.$new_name.'" class="img-thumbnail" width="50" height="50"/>',
       'class_name'  => 'alert-success'
      ]);
     }
     else
     {
      return response()->json([
       'message'   => $validation->errors()->all(),
       'uploaded_image' => '',
       'class_name'  => 'alert-danger'
      ]);
     }
    }
}
