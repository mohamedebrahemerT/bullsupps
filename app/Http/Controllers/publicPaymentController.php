<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\publicPaymentdatatables;
use App\publicPayment;
  use Hash;
  use up;
  use Storage;

class publicPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(publicPaymentdatatables $dataTable)
    {
         return $dataTable->render('Admin.publicPayment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $publicPayment=publicPayment::create(['photo'=>'']);
 

             return redirect('admin/publicPayment/'.$publicPayment->id.'/edit'); 
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
                'percentage' => ['required'],
                'RentValue' => ['required'],
               
            
            ],[],[
            'percentage'=>trans('admin.percentage'),
            'RentValue'=>trans('admin.RentValue'),
         
             
            


            ]);
                   
      
               $data['admin_id']=auth()->guard('admin')->user()->id;

         publicPayment::create($data);

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
            $title=trans('Admin.publicPayment update');
          $publicPayment=publicPayment::find($id);

       return view('Admin.publicPayment.update',compact('title','publicPayment'));
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

               'percentage' => ['required', 'string', 'max:1000'],
                'RentValue' => ['required', 'string', 'max:1000'],
                'TypeOfRent' => ['required', 'string', 'max:1000'],
                'start_at' => ['required', 'string', 'max:1000'],
                'end_at' => ['required', 'string', 'max:1000'],

            ],[],[
            'percentage'=>trans('admin.percentage'),
            'RentValue'=>trans('admin.RentValue'),
            'TypeOfRent'=>trans('admin.TypeOfRent'),
            'start_at'=>trans('admin.start_at'),
            'end_at'=>trans('admin.end_at'),

            ]);
                   
               $data['admin_id']=auth()->guard('admin')->user()->id;
      

         publicPayment::where('id',$id)->update($data);

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
             $publicPayment=publicPayment::find($id);
               Storage::delete($publicPayment->photo);
         publicPayment::find($id)->delete();
           session()->flash('success',trans('admin.deletepublicPayment'));
       

         return redirect('admin/publicPayment');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $publicPayment=publicPayment::find($id);
               Storage::delete($publicPayment->photo);
                $publicPayment->delete(); 
               }
            
          

        }
        else
        {
                    $publicPayment=publicPayment::find($id);
               Storage::delete($publicPayment->photo);
                $publicPayment->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/publicPayment');

         
    }


      public function update_img_dropzon_publicPayment($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "publicPayment".$id,

                     ]

                  ); 

                    $settings = publicPayment::find($id);  
      publicPayment::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_publicPayment($id)
               {
                    $publicPayment = publicPayment::find($id);

                   
                        Storage::delete( $publicPayment->photo);
                           $publicPayment->photo=null;
                        $publicPayment->save();

                        return Response('كلو تمام');

               }
}


