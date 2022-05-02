<?php
namespace App\Http\Controllers;

use App\DataTables\attributesDatatable;
use App\Http\Controllers\Controller;
use App\Models\attributes;
use Illuminate\Http\Request;
use Storage;

class attributesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(attributesDatatable $trade)
   {
      return $trade->render('Admin.attributes.index', ['title' => trans('admin.attributes')]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view('Admin.attributes.create', ['title' => trans('admin.add')]);
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

      attributes::create($data);
      session()->flash('success', trans('admin.record_added'));
      return redirect('admin/attributes');
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
      $attributes = attributes::find($id);
      $title = trans('admin.edit');
      return view('Admin.attributes.edit', compact('attributes', 'title'));
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

      attributes::where('id', $id)->update($data);
      session()->flash('success', trans('admin.updated_record'));
      return redirect('admin/attributes');
       
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $attributes = attributes::find($id);
      $attributes->delete();
      session()->flash('success', trans('admin.deleted_record'));
      return redirect('admin/attributes');
   }

   public function multi_delete()
   {
      if (is_array(request('item'))) {
         foreach (request('item') as $id) {
            $malls = attributes::find($id);
            $malls->delete();
         }
      } else {
         $malls = attributes::find(request('item'));
         $malls->delete();
      }
      session()->flash('success', trans('admin.deleted_record'));
      return redirect('admin/attributes');
       
   }
}
