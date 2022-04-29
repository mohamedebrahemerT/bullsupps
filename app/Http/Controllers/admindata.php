<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
  use App\admin;
  use App\filess;
use Hash;
use up;
use Storage;
use DB;
 

class admindata extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(UsersDataTable $dataTable)
{
    return $dataTable->render('Admin.admins.index');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  


           ///  return view('Admin.admins.create'); 

          $admin=admin::create(['photo'=>'']);
 

             return redirect('admin/admins/'.$admin->id.'/edit'); 
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
               'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:6'],
             'level' => ['required', 'string', 'max:255'],

               'righttochat' =>'sometimes|nullable',
             'righttoAddDepartment' => 'sometimes|nullable',
             'percentage' => 'sometimes|nullable',
             'RentValue' =>'sometimes|nullable',
            
            ],[],[
            'name'=>trans('admin.adminname'),
            'email'=>trans('admin.adminemail'),
            'password'=>trans('admin.adminpassword'),
            'righttochat'=>trans('admin.righttochat'),
               'level'=>trans('admin.level'),
            'righttoAddDepartment'=>trans('admin.righttoAddDepartment1'),
            'percentage'=>trans('admin.adminpassword'),
            'RentValue'=>trans('admin.adminpassword'),
                  


            ]);
                  
             
     
            
        $data['password']=Hash::make($data['password']);
        $data['password2']=Request('password');
       

         admin::create($data);

             session()->flash('success',trans('admin.dataaddsuccessfully'));
       

         return redirect('admin/admins');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
       return view('Admin.affiliate.affiliateshowForadmin',compact('id'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    
        $title=trans('admin.update');
        $admin=admin::find($id);
       $filess=filess::where('file_type','admin')->

                                where('relation_id',$id)->inrandomOrder()->get();
      
       return view('Admin.admins.update2',compact('title','admin','filess'));
    }



/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function accept($id)
{

 
     $admin=admin::where('id',$id)->first();
   $admin->Status=1;
   $admin->save();

   session()->flash('success',' تم  التحقق  بنجاح ');

         return redirect('admin/admins?level=affiliate');


  
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
               'name' => ['required', 'string', 'max:255'],
             //  'email' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255'],
         

                
            
            ],[],[
          'name'=>trans('admin.adminname'),
            'email'=>trans('admin.adminemail'),
           



            ]);
                
           
                  
          

       

         admin::where('id',$id)->update($data);

             
                return Response(['status'=>true,'message'=>trans('admin.doneopration'),'data'=>$data],200);
 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // echo $id;
       admin::find($id)->delete();
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/admins');
    }

     public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) {
            
            admin::destroy(request('item'));

        }
        else
        {
               admin::find(request('item'))->delete();
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/admins');

         
    }


   public function update_img_dropzon_admin($id)
               {

                if (request()->has('file'))
                 {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "admin".$id,

                     ]

                  ); 

                    $productes = admin::find($id);  
      admin::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }

               public function delete_img_dropzon_admin($id)
               {
                    $productes = admin::find($id);

                   
                        Storage::delete( $productes->photo);
                           $productes->photo=null;
                        $productes->save();

                        return Response('كلو تمام');

               }
   

   public function malti_upload_admin($id)
   {

           if (request()->has('file'))
            {
               $file     =request()->file('file');
               $size     =$file->getSize();
               $mum_type =$file->getMimeType();
               $name     =$file->getClientOriginalName();
               $hashName =$file->hashName();

                 $file->store("admin".$id);

              

                   $add=filess::create([
                'name'        => $name,
                'size'        => $size ,
                'file'        => $hashName ,
                'path'        => 'admin'.$id ,
                'full_file'   => 'admin'.$id.'/'.$hashName ,
                'mum_type'    => $mum_type,
                'file_type'   => 'admin', 
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

            public function chatpremesion()
            {
              $id=Request('id');

        $admin=admin::find($id);

                $admin->righttochat=1;
         
              $admin->save();
                return  $admin;
                  
            }

           



}
