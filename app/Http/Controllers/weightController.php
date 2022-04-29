<?php
namespace App\Http\Controllers;

use App\DataTables\weightDatatable;
use App\Http\Controllers\Controller;
use App\weight;
use Illuminate\Http\Request;
use Storage;

class weightController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(weightDatatable $trade)
   {
      return $trade->render('Admin.weight.index', ['title' => trans('admin.weight')]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('Admin.weight.create', ['title' => trans('admin.add')]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store()
   {

      $data = $this->validate(request(),
         [
            'name_ar' => 'required',
            'name_en' => 'required',

         ], [], [
            'name_ar' => trans('admin.name_ar'),
            'name_en' => trans('admin.name_en'),
         ]);

      weight::create($data);
      session()->flash('success', trans('admin.record_added'));
      return redirect('admin/weight');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
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
      $weight = weight::find($id);
      $title = trans('admin.edit');
      return view('Admin.weight.edit', compact('weight', 'title'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $r, $id)
   {

      $data = $this->validate(request(),
         [
            'name_ar' => 'required',
            'name_en' => 'required',
         ], [], [
            'name_ar' => trans('admin.name_ar'),
            'name_en' => trans('admin.name_en'),
         ]);

      weight::where('id', $id)->update($data);
      session()->flash('success', trans('admin.updated_record'));
      return redirect('admin/weight');
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $weight = weight::find($id);
      $weight->delete();
      session()->flash('success', trans('admin.deleted_record'));
      return redirect('admin/weight');
   }

   public function multi_delete()
   {
      if (is_array(request('item'))) {
         foreach (request('item') as $id) {
            $malls = weight::find($id);
            $malls->delete();
         }
      } else {
         $malls = weight::find(request('item'));
         $malls->delete();
      }
      session()->flash('success', trans('admin.deleted_record'));
      return redirect('admin/weight');
       
   }
}
