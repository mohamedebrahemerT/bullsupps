<?php
namespace App\Http\Controllers;
use App\DataTables\ManuFactskDatatable;
use App\Http\Controllers\Controller;
use App\Manufacturers;
use Illuminate\Http\Request;
use Storage;
use up;

class ManufacturersController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(ManuFactskDatatable $trade) {
		return $trade->render('Admin.manufacturers.index', ['title' => trans('admin.manufacturers')]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('Admin.manufacturers.create', ['title' => trans('admin.add')]);
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
				'name_ar'      => 'required',
				'name_en'      => 'required',
				'mobile'       => 'required|numeric',
				'email'        => 'required|email',
				'address'      => 'sometimes|nullable',
				'facebook'     => 'sometimes|nullable|url',
				'twitter'      => 'sometimes|nullable|url',
				'website'      => 'sometimes|nullable|url',
				'contact_name' => 'sometimes|nullable|string',
				'lat'          => 'sometimes|nullable',
				'lng'          => 'sometimes|nullable',
				'icon'         => 'sometimes|nullable|'.v_image(),
			], [], [
				'name_ar'      => trans('admin.name_ar'),
				'name_en'      => trans('admin.name_en'),
				'mobile'       => trans('admin.mobile'),
				'email'        => trans('admin.email'),
				'address'      => trans('admin.address'),
				'facebook'     => trans('admin.facebook'),
				'twitter'      => trans('admin.twitter'),
				'website'      => trans('admin.website'),
				'contact_name' => trans('admin.contact_name'),
				'lat'          => trans('admin.lat'),
				'lng'          => trans('admin.lng'),
				'icon'         => trans('admin.icon'),
			]);

		if (request()->hasFile('icon')) {
                  $data['icon']  = up::upload(
                     [
                        "file"=>"icon",
                        "upload_type"=> "single",
                        "delte_file"=>'',
                        "path" => "manufacturers",

                        

                     ]

                  ); 
		}

		Manufacturers::create($data);
		session()->flash('success', trans('admin.record_added'));
		return redirect('admin/manufacturers');
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
		$manufact = Manufacturers::find($id);
		$title    = trans('admin.edit');
		return view('Admin.manufacturers.edit', compact('manufact', 'title'));
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
				'name_ar'      => 'required',
				'name_en'      => 'required',
				'mobile'       => 'required|numeric',
				'email'        => 'required|email',
				'address'      => 'sometimes|nullable',
				'facebook'     => 'sometimes|nullable|url',
				'twitter'      => 'sometimes|nullable|url',
				'website'      => 'sometimes|nullable|url',
				'contact_name' => 'sometimes|nullable|string',
				'lat'          => 'sometimes|nullable',
				'lng'          => 'sometimes|nullable',
				'icon'         => 'sometimes|nullable|'.v_image(),
			], [], [
				'name_ar'      => trans('admin.name_ar'),
				'name_en'      => trans('admin.name_en'),
				'address'      => trans('admin.address'),
				'mobile'       => trans('admin.mobile'),
				'email'        => trans('admin.email'),
				'facebook'     => trans('admin.facebook'),
				'twitter'      => trans('admin.twitter'),
				'website'      => trans('admin.website'),
				'contact_name' => trans('admin.contact_name'),
				'lat'          => trans('admin.lat'),
				'lng'          => trans('admin.lng'),
				'icon'         => trans('admin.icon'),
			]);

		if (request()->hasFile('icon')) {
                  $data['icon']  = up::upload(
                     [
                        "file"=>"icon",
                        "upload_type"=> "single",
                           "delte_file"=> Manufacturers::find($id)->icon,
                        "path" => "manufacturers",

                        

                     ]

                  ); 
		}

		Manufacturers::where('id', $id)->update($data);
		session()->flash('success', trans('admin.updated_record'));
			return redirect('admin/manufacturers');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$manufacturers = Manufacturers::find($id);
		Storage::delete($manufacturers->logo);
		$manufacturers->delete();
		session()->flash('success', trans('admin.deleted_record'));
		return redirect('admin/manufacturers');
	}

	public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				$manufacturers = Manufacturers::find($id);
				Storage::delete($manufacturers->logo);
				$manufacturers->delete();
			}
		} else {
			$manufacturers = Manufacturers::find(request('item'));
			Storage::delete($manufacturers->logo);
			$manufacturers->delete();
		}
		session()->flash('success', trans('admin.deleted_record'));
		return redirect('admin/manufacturers');
	}
}
