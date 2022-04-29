<?php
namespace App\Http\Controllers;
use App\DataTables\ModelsDatatable;
use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Http\Request;
use Storage;
use up;
use App\otherDataForSize;
use App\otherDataForModels;




class ModelsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ModelsDatatable $trade) {
        return $trade->render('Admin.Models.index', ['title' => trans('admin.Models')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
             

             ///  return view('Admin.admins.create'); 

          $Models=Models::create(['photo'=>'']);
 

             return redirect('admin/Models/'.$Models->id.'/edit'); 

        return view('Admin.Models.create',compact('Models'));
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
        Models::create($data);
        session()->flash('success', trans('admin.record_added'));
        return redirect('admin/Models');
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
        $Models = Models::find($id);
        $title    = trans('admin.edit');
        return view('Admin.Models.create', compact('Models', 'title'));
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

             $c=otherDataForModels::where('Modelst_id',$id);
             $c->delete();

        foreach (request('input_key') as $input_key )
                 { 


                      $input_value=request('input_value')[$i];
          otherDataForModels::create([
                'Modelst_id'  =>$id,
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

         


      

        Models::where('id', $id)->update($data);
        session()->flash('success', trans('admin.updated_record'));
        return redirect('admin/Models');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $Models = Models::find($id);
        Storage::delete($Models->logo);
        $Models->delete();
        session()->flash('success', trans('admin.deleted_record'));
        return redirect('admin/Models');
    }

    public function multi_delete() {
        if (is_array(request('item'))) {
            foreach (request('item') as $id) {
                $Models = Models::find($id);
                Storage::delete($Models->logo);
                $Models->delete();
            }
        } else {
            $Models = Models::find(request('item'));
            Storage::delete($Models->logo);
            $Models->delete();
        }
        session()->flash('success', trans('admin.deleted_record'));
        return redirect('admin/Models');
    }
}
