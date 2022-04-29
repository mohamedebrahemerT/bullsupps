<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\tbl_employeeDatatable;
use App\tbl_employee;
use App\filess;
use App\Firstmeasure;

  use Hash;
  use up;
  use Storage;
use Carbon\Carbon;
use Carbon\DistributionProcess;
use DB;





class tbl_employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(tbl_employeeDatatable $dataTable)
    {
         return $dataTable->render('Admin.tbl_employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         

         $tbl_employee=tbl_employee::create(['photo'=>'']);
        

             return redirect('admin/tbl_employee/'.$tbl_employee->id.'/edit'); 
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
                'tbl_employee_name_en' => ['required', 'string', 'max:1000'],
                'tbl_employee_name_es' => ['required', 'string', 'max:1000'],
                'tbl_employee_name_fr' => ['required', 'string', 'max:1000'],
                'tbl_employee_name_it' => ['required', 'string', 'max:1000'],
                'tbl_employee_name_ru' => ['required', 'string', 'max:1000'],
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'tbl_employee_name_en'=>trans('admin.tbl_employee_name_en'),
            'tbl_employee_name_es'=>trans('admin.tbl_employee_name_es'),
            'tbl_employee_name_fr'=>trans('admin.tbl_employee_name_fr'),
            'tbl_employee_name_it'=>trans('admin.tbl_employee_name_it'),
            'tbl_employee_name_ru'=>trans('admin.tbl_employee_name_ru'),
             
            


            ]);
                   
      

         tbl_employee::create($data);

                return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tbl_employee_id,$id)
    {            
             
         
           $jioner_id=$tbl_employee_id;
            $tbl_employee_id=$id;
          
      return view('Admin.Firstmeasure.create',compact('title','jioner_id','tbl_employee_id'));
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $title=trans('admin.tbl_employee update');
          $tbl_employee=tbl_employee::find($id);

       return view('Admin.tbl_employee.create',compact('title','tbl_employee'));
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
  
      'Name'=> ['required', 'string', 'max:1000'],
      'NetSalarry'=> ['required', 'string', 'max:1000'],
      'Day'=> ['required', 'string', 'max:1000'],
      'DateOfatten'=> ['required', 'string', 'max:1000'],
      'Status'=> ['required', 'string', 'max:1000'],
      
                
            ],[],[

    'Name'=>trans('admin.Name'),
    'NetSalarry'=>trans('admin.NetSalarry'),
    'Day'=>trans('admin.Day'),
    'DateOfatten'=>trans('admin.DateOfatten'),
    'Status'=>trans('admin.Status'),
     
            ]);

                 $DateOfatten=request('DateOfatten'); 

            $data['DateOfatten']=date('Y-m-d', strtotime($DateOfatten));
                   
                     
                  
                tbl_employee::where('id',$id)->update($data);

                return Response(['status'=>true,'message'=>trans('admin.tbl_employeehasbeenadd'),'data'=>$data],200);

  
 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $tbl_employee=tbl_employee::find($id);
               Storage::delete($tbl_employee->photo);
         tbl_employee::find($id)->delete();
           session()->flash('success',trans('admin.deletetbl_employee'));
       

         return redirect('admin/tbl_employee');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $tbl_employee=tbl_employee::find($id);
               Storage::delete($tbl_employee->photo);
                $tbl_employee->delete(); 
               }
            
          

        }
        else
        {
                    $tbl_employee=tbl_employee::find($id);
               Storage::delete($tbl_employee->photo);
                $tbl_employee->delete(); 
        
        }
           session()->flash('success',trans('admin.tbl_employeedeletall'));
       

         return redirect('admin/tbl_employee');

         
    }


      public function update_img_dropzon_tbl_employee($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "tbl_employee".$id,

                     ]

                  ); 

                    $settings = tbl_employee::find($id);  
      tbl_employee::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_tbl_employee($id)
               {
                    $tbl_employee = tbl_employee::find($id);

                   
                        Storage::delete( $tbl_employee->photo);
                           $tbl_employee->photo=null;
                        $tbl_employee->save();

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

                 $file->store("tbl_employee".$id);

              

                   $add=filess::create([
                'name'        => $name,
                'size'        => $size ,
                'file'        => $hashName ,
                'path'        => 'tbl_employee'.$id ,
                'full_file'   => 'tbl_employee'.$id.'/'.$hashName ,
                'mum_type'    => $mum_type,
                'file_type'   => 'tbl_employee', 
                'relation_id' => $id,

               ]);

              $fid=$add->id;
              return 'tbl_employee tamam';

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

                $tbl_employee=tbl_employee::where('id',$id)->first();
                $tbl_employee->confirmcome=1;

                $tbl_employee->save();

                session()->flash('success', trans('admin.confirmcomedatee'));
      return redirect('admin/tbl_employee');


               
            }


            public function showSalry($id,tbl_employeeDatatable $dataTable)
            {

                $tbl_employee=tbl_employee::where('id',$id)->first();
                 
                   $NetSalarry=$tbl_employee->NetSalarry;

                    $daycost=$NetSalarry/30;

                 $NumberOFateendays=tbl_employee::where('id',$id)->
                                            where('Status','حاضر')->count();


                          $monthllySalary=$NumberOFateendays*$daycost;
                        if ($monthllySalary ==0)
                         {

                          
                             session()->flash('success', trans('admin.thishavezerosalry'));
    return $dataTable->render('Admin.tbl_employee.index',compact('monthllySalary'));
                          
                        }

     

    return $dataTable->render('Admin.tbl_employee.index',compact('monthllySalary'));
                 

              
            }
}


