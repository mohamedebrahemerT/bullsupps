<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ImportExcelController extends Controller
{
    function index()
    {
     $data = DB::table('SendSms')->get();
     return view('import_excel', compact('data'));
    }



    function import(Request $request)
    {
     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

     $path = $request->file('select_file')->getRealPath();

         $data = Excel::load($path)->get();

         

         DB::table('SendSms')->delete();

 

     if($data->count() > 0)
     {

      foreach($data->toArray() as $key => $value)
      {


              $insert_data[] = array(
               'number'  => $value['number'],
               'SendSms_name_ar'  =>'test'
           
               
              );
       
      }

      if(!empty($insert_data))
      {
       DB::table('SendSms')->insert($insert_data);
      }
     }
     return back()->with('success',trans('admin.datainsertsusfully'));
    }
}

