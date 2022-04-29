<?php
namespace App\Http\Controllers;

use App\DataTables\NeedAproveproductesDatatable;
use App\Http\Controllers\Controller;
use App\product;
use Illuminate\Http\Request;
use Storage;
use up;
use App\filess;
use App\sizes;
use App\weight;
use App\otherData;
 


class NeedAproveproductes extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index(NeedAproveproductesDatatable $trade)
   {
      return $trade->render('admin.productes.index', ['title' => trans('admin.productes')]);
   }

    
}
