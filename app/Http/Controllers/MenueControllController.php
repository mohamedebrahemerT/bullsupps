<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\MenueControlldatatables;
use App\MenueControll;
  use Hash;
  use up;
  use Storage;

class MenueControllController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MenueControlldatatables $dataTable)
    {
         return $dataTable->render('Admin.MenueControll.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $MenueControll=MenueControll::create(['photo'=>'']);
 

             return redirect('admin/MenueControll/'.$MenueControll->id.'/edit'); 
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
                'MenueControll_name_en' => ['required', 'string', 'max:1000'],
                'MenueControll_name_ar' => ['required', 'string', 'max:1000'],
               
            
            ],[],[
            'MenueControll_name_en'=>trans('admin.MenueControll_name_en'),
            'MenueControll_name_ar'=>trans('admin.MenueControll_name_arr'),
         
             
            


            ]);
                   
      

         MenueControll::create($data);

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
            $title=trans('admin.MenueControll update');
          $MenueControll=MenueControll::find($id);

       return view('Admin.MenueControll.update',compact('title','MenueControll'));
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

               'admin_name_ar' => ['required', 'string', 'max:1000'],
               'settings_name_ar' => ['required', 'string', 'max:1000'],
               'admins_name_ar' => ['required', 'string', 'max:1000'],
               'user_name_ar' => ['required', 'string', 'max:1000'],
               'vendor_name_ar' => ['required', 'string', 'max:1000'],
               'company_name_ar' => ['required', 'string', 'max:1000'],
               'imported_name_ar' => ['required', 'string', 'max:1000'],
               'Factory_name_ar' => ['required', 'string', 'max:1000'],
               'Handicraft_name_ar' => ['required', 'string', 'max:1000'],
               'users_name_ar' => ['required', 'string', 'max:1000'],
               'WhoWeAre_name_ar' => ['required', 'string', 'max:1000'],
               'VisionMission_name_ar' => ['required', 'string', 'max:1000'],
               'Objectives_name_ar' => ['required', 'string', 'max:1000'],
               'newes_name_ar' => ['required', 'string', 'max:1000'],
               'counteries_name_ar' => ['required', 'string', 'max:1000'],
               'cities_name_ar' => ['required', 'string', 'max:1000'],
               'states_name_ar' => ['required', 'string', 'max:1000'],
               'departments_name_ar' => ['required', 'string', 'max:1000'],
               'trademarks_name_ar' => ['required', 'string', 'max:1000'],
               'manufacturers_name_ar' => ['required', 'string', 'max:1000'],
               'shipping_name_ar' => ['required', 'string', 'max:1000'],
               'malls_name_ar' => ['required', 'string', 'max:1000'],
               'colors_name_ar' => ['required', 'string', 'max:1000'],
               'sizes_name_ar' => ['required', 'string', 'max:1000'],
               'weight_name_ar' => ['required', 'string', 'max:1000'],
               'productes_name_ar' => ['required', 'string', 'max:1000'],
               'Coupons_name_ar' => ['required', 'string', 'max:1000'],
               'Marketers_name_ar' => ['required', 'string', 'max:1000'],
               'Jobs_name_ar' => ['required', 'string', 'max:1000'],
               'publicPayment_name_ar' => ['required', 'string', 'max:1000'],
              // 'MyAcount_name_ar' => ['required', 'string', 'max:1000'],



                'admin_name_en' => ['required', 'string', 'max:1000'],
               'settings_name_en' => ['required', 'string', 'max:1000'],
               'admins_name_en' => ['required', 'string', 'max:1000'],
               'user_name_en' => ['required', 'string', 'max:1000'],
               'vendor_name_en' => ['required', 'string', 'max:1000'],
               'company_name_en' => ['required', 'string', 'max:1000'],
               'imported_name_en' => ['required', 'string', 'max:1000'],
               'Factory_name_en' => ['required', 'string', 'max:1000'],
               'Handicraft_name_en' => ['required', 'string', 'max:1000'],
               'users_name_en' => ['required', 'string', 'max:1000'],
               'WhoWeAre_name_en' => ['required', 'string', 'max:1000'],
               'VisionMission_name_en' => ['required', 'string', 'max:1000'],
               'Objectives_name_en' => ['required', 'string', 'max:1000'],
               'newes_name_en' => ['required', 'string', 'max:1000'],
               'counteries_name_en' => ['required', 'string', 'max:1000'],
               'cities_name_en' => ['required', 'string', 'max:1000'],
               'states_name_en' => ['required', 'string', 'max:1000'],
               'departments_name_en' => ['required', 'string', 'max:1000'],
               'trademarks_name_en' => ['required', 'string', 'max:1000'],
               'manufacturers_name_en' => ['required', 'string', 'max:1000'],
               'shipping_name_en' => ['required', 'string', 'max:1000'],
               'malls_name_en' => ['required', 'string', 'max:1000'],
               'colors_name_en' => ['required', 'string', 'max:1000'],
               'sizes_name_en' => ['required', 'string', 'max:1000'],
               'weight_name_en' => ['required', 'string', 'max:1000'],
               'productes_name_en' => ['required', 'string', 'max:1000'],
               'Coupons_name_en' => ['required', 'string', 'max:1000'],
               'Marketers_name_en' => ['required', 'string', 'max:1000'],
               'Jobs_name_en' => ['required', 'string', 'max:1000'],
               'publicPayment_name_en' => ['required', 'string', 'max:1000'],
              // 'MyAcount_name_en' => ['required', 'string', 'max:1000'],
               
                 
            
            ],[],[
            'admin_name_ar'=>trans('admin.admin_name_ar'),
            'settings_name_ar'=>trans('admin.settings_name_ar'),
            'admins_name_ar'=>trans('admin.admins_name_ar'),
            'user_name_ar'=>trans('admin.user_name_ar'),
            'vendor_name_ar'=>trans('admin.vendor_name_ar'),
            'company_name_ar'=>trans('admin.company_name_ar'),
            'imported_name_ar'=>trans('admin.imported_name_ar'),
            'Factory_name_ar'=>trans('admin.Factory_name_ar'),
            'Handicraft_name_ar'=>trans('admin.Handicraft_name_ar'),
            'users_name_ar'=>trans('admin.users_name_ar'),
            'WhoWeAre_name_ar'=>trans('admin.WhoWeAre_name_ar'),
            'VisionMission_name_ar'=>trans('admin.VisionMission_name_ar'),
            'Objectives_name_ar'=>trans('admin.Objectives_name_ar'),
            'newes_name_ar'=>trans('admin.newes_name_ar'),
            'counteries_name_ar'=>trans('admin.counteries_name_ar'),
            'cities_name_ar'=>trans('admin.cities_name_ar'),
            'states_name_ar'=>trans('admin.states_name_ar'),
            'departments_name_ar'=>trans('admin.departments_name_ar'),
            'trademarks_name_ar'=>trans('admin.trademarks_name_ar'),
            'manufacturers_name_ar'=>trans('admin.manufacturers_name_ar'),
            'shipping_name_ar'=>trans('admin.shipping_name_ar'),
            'malls_name_ar'=>trans('admin.malls_name_ar'),
            'colors_name_ar'=>trans('admin.colors_name_ar'),
            'sizes_name_ar'=>trans('admin.sizes_name_ar'),
            'weight_name_ar'=>trans('admin.weight_name_ar'),
            'productes_name_ar'=>trans('admin.productes_name_ar'),
            'Coupons_name_ar'=>trans('admin.Coupons_name_ar'),
            'Marketers_name_ar'=>trans('admin.Marketers_name_ar'),
            'Jobs_name_ar'=>trans('admin.Jobs_name_ar'),
            'publicPayment_name_ar'=>trans('admin.publicPayment_name_ar'),
           // 'MyAcount_name_ar'=>trans('admin.MyAcount_name_ar'),



              'admin_name_en'=>trans('admin.admin_name_en'),
            'settings_name_en'=>trans('admin.settings_name_en'),
            'admins_name_en'=>trans('admin.admins_name_en'),
            'user_name_en'=>trans('admin.user_name_en'),
            'vendor_name_en'=>trans('admin.vendor_name_en'),
            'company_name_en'=>trans('admin.company_name_en'),
            'imported_name_en'=>trans('admin.imported_name_en'),
            'Factory_name_en'=>trans('admin.Factory_name_en'),
            'Handicraft_name_en'=>trans('admin.Handicraft_name_en'),
            'users_name_en'=>trans('admin.users_name_en'),
            'WhoWeAre_name_en'=>trans('admin.WhoWeAre_name_en'),
            'VisionMission_name_en'=>trans('admin.VisionMission_name_en'),
            'Objectives_name_en'=>trans('admin.Objectives_name_en'),
            'newes_name_en'=>trans('admin.newes_name_en'),
            'counteries_name_en'=>trans('admin.counteries_name_en'),
            'cities_name_en'=>trans('admin.cities_name_en'),
            'states_name_en'=>trans('admin.states_name_en'),
            'departments_name_en'=>trans('admin.departments_name_en'),
            'trademarks_name_en'=>trans('admin.trademarks_name_en'),
            'manufacturers_name_en'=>trans('admin.manufacturers_name_en'),
            'shipping_name_en'=>trans('admin.shipping_name_en'),
            'malls_name_en'=>trans('admin.malls_name_en'),
            'colors_name_en'=>trans('admin.colors_name_en'),
            'sizes_name_en'=>trans('admin.sizes_name_en'),
            'weight_name_en'=>trans('admin.weight_name_en'),
            'productes_name_en'=>trans('admin.productes_name_en'),
            'Coupons_name_en'=>trans('admin.Coupons_name_en'),
            'Marketers_name_en'=>trans('admin.Marketers_name_en'),
            'Jobs_name_en'=>trans('admin.Jobs_name_en'),
            'publicPayment_name_en'=>trans('admin.publicPayment_name_en'),
            //'MyAcount_name_en'=>trans('admin.MyAcount_name_en'),
           
            
     

            ]);
                   
               $data['admin_id']=auth()->guard('admin')->user()->id;
      

         MenueControll::where('id',$id)->update($data);

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
             $MenueControll=MenueControll::find($id);
               Storage::delete($MenueControll->photo);
         MenueControll::find($id)->delete();
           session()->flash('success',trans('admin.deleteMenueControll'));
       

         return redirect('admin/MenueControll');
    }

       public function  destoryall(Request $request)
    {
        if (is_array(request('item'))) 
        {
               foreach (request('item') as $id  ) 
               {

                     $MenueControll=MenueControll::find($id);
               Storage::delete($MenueControll->photo);
                $MenueControll->delete(); 
               }
            
          

        }
        else
        {
                    $MenueControll=MenueControll::find($id);
               Storage::delete($MenueControll->photo);
                $MenueControll->delete(); 
        
        }
           session()->flash('success',trans('admin.deleteadminrecored'));
       

         return redirect('admin/MenueControll');

         
    }


      public function update_img_dropzon_MenueControll($id)
               {

                if (request()->has('file')) {

                    $data['photo']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "MenueControll".$id,

                     ]

                  ); 

                    $settings = MenueControll::find($id);  
      MenueControll::where('id', $id)->update($data);

          return $data['photo'];
                    
                }

             
                
               }


               public function delete_img_dropzon_MenueControll($id)
               {
                    $MenueControll = MenueControll::find($id);

                   
                        Storage::delete( $MenueControll->photo);
                           $MenueControll->photo=null;
                        $MenueControll->save();

                        return Response('كلو تمام');

               }
}


