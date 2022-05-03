<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publicPayment extends Model
{
   protected $table="publicpayment";
   protected $fillable=[
       "id",
     'percentage',
	'RentValue',
 
'TypeOfRent',
'start_at',
'end_at',
	'admin_id',
	 
   ];

   	 
     public function admin_idd() {
        return $this->hasOne('App\admin', 'id', 'admin_id');
               }



}
