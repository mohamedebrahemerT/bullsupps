<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Coupon;
 
 use File;
 



use DataTables;

class CouponsController extends Controller
{
      function index()
    {
     return view('Admin.Coupons.Coupons');
     //http://127.0.0:8000/ajaxdata
    }

    function getdata()
    {
        
          


     $newes = Coupon::select('id', 'value', 'prcentage','status');
     return Datatables::of($newes)
 
            ->addColumn('action', function($student){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$student->id.'"><i class="glyphicon glyphicon-edit"></i> '.trans('admin.edit').'</a><a href="#" class="btn btn-xs btn-danger delete" id="'.$student->id.'"><i class="glyphicon glyphicon-remove"></i>'.trans('admin.delete').' </a>';
            })
            ->addColumn('checkbox', '<input type="checkbox" name="student_checkbox[]" class="student_checkbox" value="{{$id}}" />') 
            ->rawColumns(['checkbox','action','image'])
            ->make(true);
    }

    function postdata(Request $request)
    {
        
        $validation = Validator::make($request->all(), [
            'value' => 'required',
            'prcentage'  => 'required',
            'status'  => 'required',
           

        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }
        else
        {
             $uploaded='';
                    $inserted  =trans('admin.insert');
            if($request->get('button_action') == $inserted)
            {
                         
                $student = new Coupon([
                    'value'    =>  $request->get('value'),
                    'prcentage'     =>  $request->get('prcentage'),
                    'status'     =>  $request->get('status'),
                    'product_id'     =>  $request->get('product_id'),
                    'department_id'     =>  $request->get('department_id'),
                ]);
                $student->save();
                $success_output = '<div class="alert alert-success"> '.trans('admin.DataInserted').'</div>';
            }


                  $update=trans('admin.update');
            if($request->get('button_action') == $update)
            {

               $student = Coupon::find($request->get('student_id'));
                $student->value = $request->get('value');
                $student->prcentage = $request->get('prcentage');
                $student->status = $request->get('status');

                $student->department_id = $request->get('department_id');
                $student->product_id = $request->get('product_id');
                $student->save();
                $success_output = '<div class="alert alert-success">'.trans('admin.DataUpdated').'</div>';
            }

        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    function fetchdata(Request $request)
    {
        
        $id = $request->input('id');
        $student = Coupon::find($id);
        $output = array(
            'value'    =>  $student->value,
            'prcentage'     =>  $student->prcentage,
            'status'     =>  $student->status,
            
        );
        echo json_encode($output);
    }

    function removedata(Request $request)
    {
        $student = Coupon::find($request->input('id'));
        if($student->delete())
        {
            echo ' تم تحديث البيانات';
        }
    }

    function massremove(Request $request)
    {
        $student_id_array = $request->input('id');
        $student = Coupon::whereIn('id', $student_id_array);
        if($student->delete())
        {
            echo ' تم حذف البيانات ';
        }
    }
}
