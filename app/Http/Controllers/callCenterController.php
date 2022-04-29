<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\callCenterDatatable;

use App\callCenter;

use App\filess;

use App\Firstmeasure;



  use Hash;

  use up;

  use Storage;

use Carbon\Carbon;

use Carbon\DistributionProcess;

use DB;











class callCenterController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(callCenterDatatable $dataTable)

    {

         return $dataTable->render('Admin.callCenter.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         



         $callCenter=callCenter::create(['photo'=>'']);

        



             return redirect('admin/callCenter/'.$callCenter->id.'/edit'); 

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

                'callCenter_name_en' => ['required', 'string', 'max:1000'],

                'callCenter_name_es' => ['required', 'string', 'max:1000'],

                'callCenter_name_fr' => ['required', 'string', 'max:1000'],

                'callCenter_name_it' => ['required', 'string', 'max:1000'],

                'callCenter_name_ru' => ['required', 'string', 'max:1000'],

                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     

            

            ],[],[

            'callCenter_name_en'=>trans('admin.callCenter_name_en'),

            'callCenter_name_es'=>trans('admin.callCenter_name_es'),

            'callCenter_name_fr'=>trans('admin.callCenter_name_fr'),

            'callCenter_name_it'=>trans('admin.callCenter_name_it'),

            'callCenter_name_ru'=>trans('admin.callCenter_name_ru'),

             

            





            ]);

                   

      



         callCenter::create($data);



                return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($callCenter_id,$id)

    {            

             

         

           $jioner_id=$callCenter_id;

            $callCenter_id=$id;

          

      return view('Admin.Firstmeasure.create',compact('title','jioner_id','callCenter_id'));

            

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

            $title=trans('admin.callCenter update');

          $callCenter=callCenter::find($id);



       return view('Admin.callCenter.create',compact('title','callCenter'));

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

  

      'name'=> ['required', 'string', 'max:1000'],

      'phone'=> ['required', 'string', 'max:1000'],

      'day'=> ['required', 'string', 'max:1000'],

      'dateOfcome'=> ['required', 'string', 'max:1000'],

      

                

            ],[],[



    'name'=>trans('admin.name'),

    'phone'=>trans('admin.phone'),

    'day'=>trans('admin.day'),

    'dateOfcome'=>trans('admin.dateOfcome'),

     

            ]);



                 $dateOfcome=request('dateOfcome'); 



            $data['dateOfcome']=date('Y-m-d', strtotime($dateOfcome));

                   

           $data['TodayDate']=date('m/d/Y');



         callCenter::where('id',$id)->update($data);



                return Response(['status'=>true,'message'=>trans('admin.callCenterhasbeenadd'),'data'=>$data],200);



  

 

        

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

             $callCenter=callCenter::find($id);

               Storage::delete($callCenter->photo);

         callCenter::find($id)->delete();

           session()->flash('success',trans('admin.deletecallCenter'));

       



         return redirect('admin/callCenter');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $callCenter=callCenter::find($id);

               Storage::delete($callCenter->photo);

                $callCenter->delete(); 

               }

            

          



        }

        else

        {

                    $callCenter=callCenter::find($id);

               Storage::delete($callCenter->photo);

                $callCenter->delete(); 

        

        }

           session()->flash('success',trans('admin.callCenterdeletall'));

       



         return redirect('admin/callCenter');



         

    }





      public function update_img_dropzon_callCenter($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "callCenter".$id,



                     ]



                  ); 



                    $settings = callCenter::find($id);  

      callCenter::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_callCenter($id)

               {

                    $callCenter = callCenter::find($id);



                   

                        Storage::delete( $callCenter->photo);

                           $callCenter->photo=null;

                        $callCenter->save();



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



                 $file->store("callCenter".$id);



              



                   $add=filess::create([

                'name'        => $name,

                'size'        => $size ,

                'file'        => $hashName ,

                'path'        => 'callCenter'.$id ,

                'full_file'   => 'callCenter'.$id.'/'.$hashName ,

                'mum_type'    => $mum_type,

                'file_type'   => 'callCenter', 

                'relation_id' => $id,



               ]);



              $fid=$add->id;

              return 'callCenter tamam';



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



          public  function  getprice()

            {

               

               if (request()->ajax()) 

                 {



                    if (request()->has('country_id'))

                     {

              



           $select=request()->has('select')?request('select'):'';          



  $output=Form::select('city_id',cities::where('country_id',request('country_id'))->pluck('cities_name_en','id'),$select,['class'=>'form-control city_id',"placeholder"=>"........"] );





              return   $output ;



                  }  



                  else

                  {

                

                   $select=request()->has('select')?request('select'):'';          



 return Form::select('stat_id',states::where('city_id',request('city_id'))->pluck('states_name_en','id'),$select,['class'=>'form-control',"placeholder"=>"........"] );



                 



                  }









                    }

           

                    

            }



            public function confirmcomedate()

            {

               $id=request('id');



                $callCenter=callCenter::where('id',$id)->first();

                $callCenter->confirmcome=1;



                $callCenter->save();



                session()->flash('success', trans('admin.confirmcomedatee'));

      return redirect('admin/callCenter');





               

            }

          public function callCenterSearchAll()
          {
                        $data= $this->validate(request(),[ 

        
              'start_at'=>['required', 'string', 'max:1000'],
              'end_at'=>['required', 'string', 'max:1000'],
            
            ],[],[
            'start_at'=>trans('admin.start_at'),
            'end_at'=>trans('admin.end_at'),
         
                          
            ]);
 

      $start_at=request('start_at');

       $data['start_at']=date('Y/m/d', strtotime($start_at));
      $end_at=request('end_at');


     

     

           $callCenter=callCenter::
              where('TodayDate','>',$start_at)->
              where('TodayDate','<',$end_at)
              ->get();


                  $cheeck=callCenter::
              where('TodayDate','>',$start_at)->
              where('TodayDate','<',$end_at)
              ->count();


                 if ($cheeck ==0)
              {
                $v='لا يوجد بيانات لهذا التاريخ ';
                return view('Admin.callCenter.callCenterSearchAll',compact(
            'callCenter',
          
            'start_at',
            'end_at',
            'v',
            'cheeck'
            
        ));
                
             }

          return view('Admin.callCenter.callCenterSearchAll',compact('callCenter','cheeck','start_at','end_at'));

              
          
          }

          public function callCenterSearchsingleprint($searchID)
          {

                   $callCenter=callCenter::find($searchID);

             return view('Admin.callCenter.callCenterSearchsingleprint',compact('callCenter'));
                   
          }

}





