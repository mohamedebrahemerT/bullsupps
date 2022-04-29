<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\SellerAccountdatatables;
use App\SellerAccount;
  use Hash;
  use up;
  use Storage;

class SellerAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SellerAccountdatatables $dataTable)
    {
         return $dataTable->render('Admin.SellerAccount.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $SellerAccount=SellerAccount::create(['photo'=>'']);
 

             return redirect('admin/SellerAccount/'.$SellerAccount->id.'/edit'); 
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
                'SellerAccount_name_en' => ['required', 'string', 'max:1000'],
                'SellerAccount_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'SellerAccount_name_en'=>trans('admin.SellerAccount_name_en'),
            'SellerAccount_name_ar'=>trans('admin.SellerAccount_name_arr'),
         
             
            


            ]);
                   
      

         SellerAccount::create($data);

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
            $title=trans('admin.SellerAccount update');
          $SellerAccount=SellerAccount::find($id);

       return view('Admin.SellerAccount.update',compact('title','SellerAccount'));
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
                

                'SellerAccount_name_en' => ['required', 'string', 'max:1000'],
                'SellerAccount_name_ar' => ['required', 'string', 'max:1000'],
             
                 'photo' => 'image|mimes:jpg,png,gif,jpeg',     
            
            ],[],[
            'SellerAccount_name_en'=>trans('admin.SellerAccount_name_en'),
            'SellerAccount_name_ar'=>trans('admin.SellerAccount_name_arr'),
           
             
             'title_name_en'=>trans('admin.title_name_en'),
            'title_name_ar'=>trans('admin.title_name_arr'),
            
             
            


            ]);
                   
      

         SellerAccount::where('id',$id)->update($data);

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
             $SellerAccount=SellerAccount::find($id);
               Storage::delete($SellerAccount->photo);
         SellerAccount::find($id)->delete();
           session()->flash('success',trans('admin.deleteSellerAccount'));
       

         return redirect('admin/SellerAccount');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $SellerAccount=SellerAccount::find($id);
               Storage::delete($SellerAccount->photo);
                $SellerAccount->delete(); 
               }
            
          

        }
        else
        {
                    $SellerAccount=SellerAccount::find($id);
               Storage::delete($SellerAccount->photo);
                $SellerAccount->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/SellerAccount');

         
    }


      public function update_img_dropzon_SellerAccount($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "SellerAccount".$id,

                     ]

                  ); 

                    $settings = SellerAccount::find($id);  
      SellerAccount::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_SellerAccount($id)
               {
                    $SellerAccount = SellerAccount::find($id);

                   
                        Storage::delete( $SellerAccount->photo);
                           $SellerAccount->photo=null;
                        $SellerAccount->save();

                        return Response('كلو تمام');

               }
}


