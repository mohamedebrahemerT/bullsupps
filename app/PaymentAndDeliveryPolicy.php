<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentAndDeliveryPolicy extends Model
{
   protected $table="PaymentAndDeliveryPolicy";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 
	'PaymentAndDeliveryPolicy_name_en',
	'PaymentAndDeliveryPolicy_name_ar',
 
	'photo',

   ];

   	 



}
