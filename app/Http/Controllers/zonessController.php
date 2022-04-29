<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\zonesdatatables;

use App\zones;
use App\statDistrebutionToZones;

  use Hash;

  use up;

  use Storage;



class zonessController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(zonesdatatables $dataTable)

    {

         return $dataTable->render('Admin.zones.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         $zones=zones::create(['photo'=>'']);
             return redirect('admin/zones/'.$zones->id.'/edit'); 

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

                'zones_name_en' => ['required', 'string', 'max:1000'],

                'zones_name_ar' => ['required', 'string', 'max:1000'],

               

            

            ],[],[

            'zones_name_en'=>trans('admin.zones_name_en'),

            'zones_name_ar'=>trans('admin.zones_name_arr'),

         

             

            





            ]);

                   

      



         zones::create($data);



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

            $title=trans('admin.zones update');

          $zones=zones::find($id);



       return view('Admin.zones.update',compact('title','zones'));

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
                'price' => ['required', 'string', 'max:1000'],
            ],[],[

             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            'price'=>trans('admin.price'),
            ]);

            

 if (request()->has('city_id')) 

               {



            $i=0;



             $c=statDistrebutionToZones::where('zone_id',$id);

             $c->delete();



        foreach (request('city_id') as $city_id )

                 {  

                       

          statDistrebutionToZones::create([

                'zone_id'  =>$id,

                'city_id'   =>$city_id,
 



                     ]);

                   

                }


    $i++;

 

               }

                 

                   
 


         zones::where('id',$id)->update($data);



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

             $zones=zones::find($id);

               Storage::delete($zones->photo);

         zones::find($id)->delete();

           session()->flash('success',trans('admin.deletezones'));

       



         return redirect('admin/zones');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $zones=zones::find($id);

               Storage::delete($zones->photo);

                $zones->delete(); 

               }

            

          



        }

        else

        {

                    $zones=zones::find($id);

               Storage::delete($zones->photo);

                $zones->delete(); 

        

        }

           session()->flash('success',trans('admin.deleteadminrecored'));

       



         return redirect('admin/zones');



         

    }





      public function update_img_dropzon_zones($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "zones".$id,



                     ]



                  ); 



                    $settings = zones::find($id);  

      zones::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_zones($id)

               {

                    $zones = zones::find($id);



                   

                        Storage::delete( $zones->photo);

                           $zones->photo=null;

                        $zones->save();



                        return Response('كلو تمام');



               }

}





