<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sendcontact extends Model
{
   protected $table    = 'Sendcontact';
   protected $fillable = [
   	  'id',
'name',
'email',
'phone',
'CompanyName',
'subject',
'message',
'Date1',
'Time1',
'Doctor_name',
'Doctor_id',
'level',
'DecotorReservation'
      
   ];
 
}


 

