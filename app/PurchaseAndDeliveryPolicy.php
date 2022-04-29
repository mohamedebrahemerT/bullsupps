<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseAndDeliveryPolicy extends Model
{
   protected $table="PurchaseAndDeliveryPolicy";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 

	'PurchaseAndDeliveryPolicy_name_en',
	'PurchaseAndDeliveryPolicy_name_ar',
 
	'photo',

   ];

   	 



}
