<?php
namespace App\Http\Controllers;
use App\DataTables\sizesDatatable;
use App\Http\Controllers\Controller;
use App\sizes;
use Illuminate\Http\Request;
use Storage;
use up;
use App\otherDataForSize;




class sizesController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(sizesDatatable $trade) {
        return $trade->render('Admin.sizes.index', ['title' => trans('admin.sizes')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
             

             ///  return view('Admin.admins.create'); 

          $sizes=sizes::create(['photo'=>'']);
 

             return redirect('admin/sizes/'.$sizes->id.'/edit'); 

        return view('Admin.sizes.create',compact('sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {

        $data = $this->validate(request(),
            [
                'name_ar' => 'required',
                'name_en' => 'required',
            
                'is_public'     => 'sometimes|required|in:yes,no',
                
            ], [], [
                'name_ar' => trans('admin.name_ar'),
                'name_en' => trans('admin.name_en'),
          
                'is_public'     => trans('admin.is_public'),
                
            ]);


           if (Request('country_id')== null and Request()->has('alreadyexist')==null)
                {
                    $data['department_id']=13;
                }

  else if ( Request('country_id') !== null and   Request('city_id')==null and  Request('parent')==null)
        {
          $data['department_id']= Request('country_id');
       }
       else if (Request('country_id') !== null and   Request('city_id') !==null and Request('parent')==null) 
       {
       $data['department_id']= Request('city_id');
       }
       elseif (Request('country_id') !== null and   Request('city_id') !==null and Request('parent') !==null) 
       {

         $data['department_id']= Request('parent');
            
       }

       elseif (Request()->has('alreadyexist'))
       {
           $data['department_id']=Request('alreadyexist');
                
       }

             return $data['department_id'];
           
        sizes::create($data);
        
        session()->flash('success', trans('admin.record_added'));

        return redirect('admin/sizes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $sizes = sizes::find($id);
        $title    = trans('admin.edit');
        return view('Admin.sizes.create', compact('sizes', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id) {

          
          
         $data = $this->validate(request(),
            [
                'name_ar' => 'required',
                'name_en' => 'required',
               
                'is_public'     => 'sometimes|required|in:yes,no',
                
            ], [], [
                'name_ar' => trans('admin.name_ar'),
                'name_en' => trans('admin.name_en'),
               
                'is_public'     => trans('admin.is_public'),
                
            ]);

            

 
                  

          if (request()->has('input_key')) 
               {

               


            $i=0;

             $c=otherDataForSize::where('sizest_id',$id);
             $c->delete();

        foreach (request('input_key') as $input_key )
                 { 


                      $input_value=request('input_value')[$i];
          otherDataForSize::create([
                'sizest_id'  =>$id,
                'input_key'   =>$input_key,
                'input_value' =>$input_value,

                     ]);
                   
                }


                
               }



           if (Request('country_id')== null and Request()->has('alreadyexist')==null)
                {
                    $data['department_id']=13;
                }

  else if ( Request('country_id') !== null and   Request('city_id')==null and  Request('parent')==null)
        {
          $data['department_id']= Request('country_id');
       }
       else if (Request('country_id') !== null and   Request('city_id') !==null and Request('parent')==null) 
       {
       $data['department_id']= Request('city_id');
       }
       elseif (Request('country_id') !== null and   Request('city_id') !==null and Request('parent') !==null) 
       {

         $data['department_id']= Request('parent');
            
       }

       elseif (Request()->has('alreadyexist'))
       {
           $data['department_id']=Request('alreadyexist');
                
       }

         


      

        sizes::where('id', $id)->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect('admin/sizes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $sizes = sizes::find($id);
        Storage::delete($sizes->logo);
        $sizes->delete();
        session()->flash('success', trans('admin.deleted_record'));
        return redirect('admin/sizes');
    }

    public function multi_delete() {
        if (is_array(request('item'))) {
            foreach (request('item') as $id) {
                $sizes = sizes::find($id);
                Storage::delete($sizes->logo);
                $sizes->delete();
            }
        } else {
            $sizes = sizes::find(request('item'));
            Storage::delete($sizes->logo);
            $sizes->delete();
        }
        session()->flash('success', trans('admin.deleted_record'));
        return redirect('admin/sizes');
    }
}
