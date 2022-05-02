<?php
namespace App\Http\Controllers;

use App\DataTables\attribute_valuesDatatable;
use App\Http\Controllers\Controller;
use App\Models\attribute_values;
use Illuminate\Http\Request;
use Storage;

class attribute_valuesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(attribute_valuesDatatable $trade)
   {
      return $trade->render('Admin.attribute_values.index', ['title' => trans('admin.attribute_values')]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('Admin.attribute_values.create', ['title' => trans('admin.add')]);
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
            'value_ar' => 'required',
            'value_en' => 'required',
            'attribute_id' => 'required',
            
         ], [], [
            'value_ar' => trans('admin.value_ar'),
            'value_en' => trans('admin.value_en'),
            'attribute_id' => trans('admin.attribute'),
          
         ]);

      attribute_values::create($data);
      session()->flash('success', trans('admin.record_added'));
      return redirect('admin/attribute_values');
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
      $attribute_values = attribute_values::find($id);
      $title = trans('admin.edit');
      return view('Admin.attribute_values.edit', compact('attribute_values', 'title'));
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
            'value_ar' => 'required',
            'value_en' => 'required',
            'attribute_id' => 'required',
            
         ], [], [
            'value_ar' => trans('admin.value_ar'),
            'value_en' => trans('admin.value_en'),
            'attribute_id' => trans('admin.attribute'),
          
         ]);

      attribute_values::where('id', $id)->update($data);
      session()->flash('success', trans('admin.updated_record'));
      return redirect('admin/attribute_values');
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $attribute_values = attribute_values::find($id);
      $attribute_values->delete();
      session()->flash('success', trans('admin.deleted_record'));
      return redirect('admin/attribute_values');
   }

   public function multi_delete()
   {
      if (is_array(request('item'))) {
         foreach (request('item') as $id) {
            $malls = attribute_values::find($id);
            $malls->delete();
         }
      } else {
         $malls = attribute_values::find(request('item'));
         $malls->delete();
      }
      session()->flash('success', trans('admin.deleted_record'));
      return redirect('admin/attribute_values');
       
   }
}
