<?php

namespace App\Http\Controllers\forentend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
   
   public function index()
       {
      
          return view('forentend4.contact.contact');
       }
}
