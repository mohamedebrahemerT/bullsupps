<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\DataTables\withdrawFromTotalMoneyDatatable;

use App\withdrawFromTotalMoney;

use App\filess;

use App\Firstmeasure;
use App\Separatesafe;
use App\OrderShareWithAllVendor;
use App\Order;




  use Hash;

  use up;

  use Storage;

use Carbon\Carbon;

use Carbon\DistributionProcess;

use DB;



class withdrawFromTotalMoneyController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function agree($id)
    {
          $withdrawFromTotalMoney= withdrawFromTotalMoney::where('id',$id)->first();

          $withdrawFromTotalMoney->status=1;

          $withdrawFromTotalMoney->save();

          $Accountant_id= $withdrawFromTotalMoney->Accountant_id;

           $Withdrawable=OrderShareWithAllVendor::where('affiliateID',15)
                                                  ->where('status','Received')->get();

            $Balance=0;
                   foreach ($Withdrawable    as  $value) 

                   {
                          $orderID=$value->order_id;

                         $billing_total= Order::where('id',$orderID)->first()->billing_total;

                         $Balance=$billing_total+$Balance;


                   }

         $Balance;

         if ( $withdrawFromTotalMoney->TheAmountToBeWithdrawn  > $Balance)
          {

             session()->flash('success','خطأ...عدم توفر رصيد كافي للسحب');


          return redirect('admin/withdrawFromTotalMoney');
          
         }

             session()->flash('success','تمت الموافقه  علي العملية بنجاح ');


          return redirect('admin/withdrawFromTotalMoney');

    }

    public function index(withdrawFromTotalMoneyDatatable $dataTable)

    {

         return $dataTable->render('Admin.withdrawFromTotalMoney.index');

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         



         $withdrawFromTotalMoney=withdrawFromTotalMoney::create(['photo'=>'']);

        



             return redirect('admin/withdrawFromTotalMoney/'.$withdrawFromTotalMoney->id.'/edit'); 

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

                'withdrawFromTotalMoney_name_en' => ['required', 'string', 'max:1000'],

                'withdrawFromTotalMoney_name_es' => ['required', 'string', 'max:1000'],

                'withdrawFromTotalMoney_name_fr' => ['required', 'string', 'max:1000'],

                'withdrawFromTotalMoney_name_it' => ['required', 'string', 'max:1000'],

                'withdrawFromTotalMoney_name_ru' => ['required', 'string', 'max:1000'],

                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     

            

            ],[],[

            'withdrawFromTotalMoney_name_en'=>trans('admin.withdrawFromTotalMoney_name_en'),

            'withdrawFromTotalMoney_name_es'=>trans('admin.withdrawFromTotalMoney_name_es'),

            'withdrawFromTotalMoney_name_fr'=>trans('admin.withdrawFromTotalMoney_name_fr'),

            'withdrawFromTotalMoney_name_it'=>trans('admin.withdrawFromTotalMoney_name_it'),

            'withdrawFromTotalMoney_name_ru'=>trans('admin.withdrawFromTotalMoney_name_ru'),

             

            





            ]);

                   

      



         withdrawFromTotalMoney::create($data);



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

            $title=trans('admin.withdrawFromTotalMoney update');

          $withdrawFromTotalMoney=withdrawFromTotalMoney::find($id);



       return view('Admin.withdrawFromTotalMoney.create',compact('title','withdrawFromTotalMoney'));

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
      'TheAmountToBeWithdrawn'=> ['required', 'integer', 'max:1000'],
      'TheGoalOfWithdrawingMoney'=> 'sometimes|nullable',
      'day'=> ['required', 'string', 'max:1000'],    

            ],[],[

    'TheAmountToBeWithdrawn'=>trans('admin.TheAmountToBeWithdrawn'),
    'TheGoalOfWithdrawingMoney'=>trans('admin.TheGoalOfWithdrawingMoney'),
    'day'=>trans('admin.day'),

 

            ]);


                        $TheAmountToBeWithdrawn=request('TheAmountToBeWithdrawn');


                     /*   $Separatesafe=Separatesafe::orderBy('id','desc')->first();
                        $data['Separatesafe_id']=$Separatesafe->id;

                        $Store=$Separatesafe->Remaining;

                      $substractionprocess=$Store-$TheAmountToBeWithdrawn;

                           $Separatesafe->Remaining=$substractionprocess;
                           $Separatesafe->Totallwithdrow =$Separatesafe->Totallwithdrow  +  $TheAmountToBeWithdrawn;
                           $Separatesafe->save();  */
                              
            $dateOfTheAmountToBeWithdrawn=date('m/d/Y');   

           $data['dateOfTheAmountToBeWithdrawn']=$dateOfTheAmountToBeWithdrawn;


          $maxWithdrawable= Withdrawable(auth()->guard('admin')->user()->id);


          if (   $data['TheAmountToBeWithdrawn'] > $maxWithdrawable  ) 
          {

                return Response(['status'=>false,'message'=>'خطا ....المبلغ المطلوب اكبر من المتوفر في حسابك ....المبلغ المتاح للسحب هو'.$maxWithdrawable,'data'=>$data],200);

              
              
          }


           $data['Accountant_id']=auth()->guard('admin')->user()->id;


           $data['name']=auth()->guard('admin')->user()->name;

           withdrawFromTotalMoney::where('id',$id)->update($data);


                return Response(['status'=>true,'message'=>trans('admin.withdrawFromTotalMoneyhasbeenadd'),'data'=>$data],200);





    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

             $withdrawFromTotalMoney=withdrawFromTotalMoney::find($id);

               Storage::delete($withdrawFromTotalMoney->photo);

         withdrawFromTotalMoney::find($id)->delete();

           session()->flash('success',trans('admin.deletewithdrawFromTotalMoney'));

       



         return redirect('admin/withdrawFromTotalMoney');

    }



       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $withdrawFromTotalMoney=withdrawFromTotalMoney::find($id);

               Storage::delete($withdrawFromTotalMoney->photo);

                $withdrawFromTotalMoney->delete(); 

               }

            

          



        }

        else

        {

                    $withdrawFromTotalMoney=withdrawFromTotalMoney::find($id);

               Storage::delete($withdrawFromTotalMoney->photo);

                $withdrawFromTotalMoney->delete(); 

        

        }

           session()->flash('success',trans('admin.withdrawFromTotalMoneydeletall'));

       



         return redirect('admin/withdrawFromTotalMoney');



         

    }





      public function update_img_dropzon_withdrawFromTotalMoney($id)

               {



                if (request()->has('file')) {



                    $data['photo']  = up::upload(

                     [

                        "file"=>"file",

                        "upload_type"=> "single",

                        "delte_file"=> "",

                        "path" => "withdrawFromTotalMoney".$id,



                     ]



                  ); 



                    $settings = withdrawFromTotalMoney::find($id);  

      withdrawFromTotalMoney::where('id', $id)->update($data);



          return $data['photo'];

                    

                }



             

                

               }





               public function delete_img_dropzon_withdrawFromTotalMoney($id)

               {

                    $withdrawFromTotalMoney = withdrawFromTotalMoney::find($id);



                   

                        Storage::delete( $withdrawFromTotalMoney->photo);

                           $withdrawFromTotalMoney->photo=null;

                        $withdrawFromTotalMoney->save();



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



                 $file->store("withdrawFromTotalMoney".$id);



              



                   $add=filess::create([

                'name'        => $name,

                'size'        => $size ,

                'file'        => $hashName ,

                'path'        => 'withdrawFromTotalMoney'.$id ,

                'full_file'   => 'withdrawFromTotalMoney'.$id.'/'.$hashName ,

                'mum_type'    => $mum_type,

                'file_type'   => 'withdrawFromTotalMoney', 

                'relation_id' => $id,



               ]);



              $fid=$add->id;

              return 'withdrawFromTotalMoney tamam';



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



                $withdrawFromTotalMoney=withdrawFromTotalMoney::where('id',$id)->first();

                $withdrawFromTotalMoney->confirmcome=1;



                $withdrawFromTotalMoney->save();



                session()->flash('success', trans('admin.confirmcomedatee'));

      return redirect('admin/withdrawFromTotalMoney');





               

            }

}





