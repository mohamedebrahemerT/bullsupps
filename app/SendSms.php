<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SendSms extends Model
{
   protected $table="SendSms";
   protected $fillable=[
       "id",
     'number',
	'SendSms_name_en',
	'SendSms_name_ar',
 

   ];

   	 



}
