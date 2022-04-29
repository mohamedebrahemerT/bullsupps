<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\citiesdatatables;
use App\cities;
use App\otherdatasforShiping;
    
  use Hash;
  use up;
  use Storage;

class affiliateInadminController extends Controller
{

    public function affiliateData()
    {
        return   view('Admin.affiliate.affiliate');
               
    }

}


