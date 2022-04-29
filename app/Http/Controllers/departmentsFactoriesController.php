<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\departmentsFactories;
use Illuminate\Http\Request;
use Storage;
use App\DataTables\departmentsFactoriesdatatables;
 
    use up;



class departmentsFactoriesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
 
	 public function index(departmentsFactoriesdatatables $dataTable)
    {
         return $dataTable->render('Admin.departmentsFactories.index');
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() 
	{
              $departmentsFactories=departmentsFactories::create(['photo'=>'']);
 

             return redirect('admin/departmentsFactories/'.$departmentsFactories->id.'/edit'); 

		//return view('Admin.departmentsFactories.create', ['title' => trans('admin.add')]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $r, $id) {

       //  return Request();
		  

		$data = $this->validate(request(),
			[
				'dep_name_ar' => 'required',
				'dep_name_en' => 'sometimes|nullable',
			
				'icon'        => 'sometimes|nullable|required| image|mimes:jpg,png,gif,jpeg|max:2048',
				'description' => 'sometimes|nullable',
				'keyword'     => 'sometimes|nullable',

			], [], [
				'dep_name_ar' => trans('admin.dep_name_ar'),
				'dep_name_en' => trans('admin.dep_name_en'),
			
				'icon'        => trans('admin.icon'),
				'description' => trans('admin.description'),
				'keyword'     => trans('admin.keyword'),
			]);

		if (request()->hasFile('icon')) {


                  $data['icon']  = up::upload(
                     [
                        "file"=>"icon",
                        "upload_type"=> "single",
                        "delte_file"=>'',
                        "path" => "departmentsFactories",

                        

                     ]

                  ); 

		 
		}

		   if (Request('country_id')== null)
		    {
		    	$data['parent']=null;

		   	     departmentsFactories::where('id',$id)->update($data);
		session()->flash('success', trans('admin.record_added'));
	   return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);
		   }

  else if ( Request('country_id') !== null and   Request('city_id')==null and  Request('parent')==null)
		    {
		    	$data['parent']= Request('country_id');
		    	 departmentsFactories::where('id',$id)->update($data);

		session()->flash('success', trans('admin.record_added'));
	   return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);
		   	 
		   
		   }
		   else if (Request('country_id') !== null and   Request('city_id') !==null and Request('parent')==null) 
		   {
		  

		   $data['parent']= Request('city_id');
		    	 departmentsFactories::where('id',$id)->update($data);

		session()->flash('success', trans('admin.record_added'));
	   return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);
		   }
		   elseif (Request('country_id') !== null and   Request('city_id') !==null and Request('parent') !==null) 
		   {

		     $data['parent']= Request('parent');
		    	 departmentsFactories::where('id',$id)->update($data);

		session()->flash('success', trans('admin.record_added'));
	   return Response(['status'=>true,'message'=>trans('admin.dataaddsuccessfully'),'data'=>$data],200);
		   }

	/*	departmentsFactories::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect('admin/departmentsFactories');  */
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
	public function edit($id) 
	{
		$departmentsFactories = departmentsFactories::find($id);
		$title      = trans('admin.edit');
	  return view('Admin.departmentsFactories.create2',compact('departmentsFactories'));
		  
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
				'dep_name_ar' => 'required',
				'dep_name_en' => 'required',
				'parent'      => 'sometimes|nullable|numeric',
				'icon'        => 'sometimes|nullable',
				'description' => 'sometimes|nullable',
				'keyword'     => 'sometimes|nullable',

			], [], [
				'dep_name_ar' => trans('admin.dep_name_ar'),
				'dep_name_en' => trans('admin.dep_name_en'),
				'parent'      => trans('admin.parent'),
				'icon'        => trans('admin.icon'),
				'description' => trans('admin.description'),
				'keyword'     => trans('admin.keyword'),
			]);

		if (request()->hasFile('icon')) {
                  $data['icon']  = up::upload(
                     [
                        "file"=>"icon",
                        "upload_type"=> "single",
                        "delte_file"=>'',
                        "path" => "departmentsFactories",
                     ]
                  ); 
		}

		departmentsFactories::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
		return redirect('admin/departmentsFactories');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public static function delete_parent($id) {
		$departmentsFactories_parent = departmentsFactories::where('parent', $id)->get();
		foreach ($departmentsFactories_parent as $sub) {
			self::delete_parent($sub->id);
			if (!empty($sub->icon)) {
				Storage::has($sub->icon)?Storage::delete($sub->icon):'';
			}
			$subdepartmentsFactories = departmentsFactories::find($sub->id);
			if (!empty($subdepartmentsFactories)) {
				$subdepartmentsFactories->delete();
			}
		}
		$dep = departmentsFactories::find($id);

		if (!empty($dep->icon)) {
			Storage::has($dep->icon)?Storage::delete($dep->icon):'';
		}
		$dep = departmentsFactories::find($id);
		
		$dep->delete();
	}
	public function destroy($id) {
		self::delete_parent($id);
		session()->flash('success', trans('admin.deleted_record'));
		return redirect('admin/departmentsFactories');
	}


       public function  destoryall(Request $request)

    {

        if (is_array(request('item'))) 

        {

               foreach (request('item') as $id  ) 

               {



                     $departmentsFactories=departmentsFactories::find($id);

               Storage::delete($departmentsFactories->photo);

                $departmentsFactories->delete(); 

               }

            

          



        }

        else

        {

                    $AfterPyment=AfterPyment::find($id);

               Storage::delete($AfterPyment->photo);

                $AfterPyment->delete(); 

        

        }

           session()->flash('success','تم  حذف  القسم  بنجاح ');

       



         return redirect('admin/departmentsFactories');



         

    }



    ////////////////////////////////////////////////

 


      public function update_img_dropzon_departmentsFactories($id)
               {

                if (request()->has('file')) {

                    $data['icon']  = up::upload(
                     [
                        "file"=>"file",
                        "upload_type"=> "single",
                        "delte_file"=> "",
                        "path" => "departmentsFactories".$id,

                     ]

                  ); 

                    $settings = departmentsFactories::find($id);  
      departmentsFactories::where('id', $id)->update($data);

          return $data['icon'];
                    
                }

             
                
               }


               public function delete_img_dropzon_departmentsFactories($id)
               {
                    $departmentsFactories = departmentsFactories::find($id);

                   
                        Storage::delete( $departmentsFactories->photo);
                           $departmentsFactories->icon=null;
                        $departmentsFactories->save();

                        return Response('كلو تمام');

               }

}