<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WarrantyQuality extends Model
{
   protected $table="WarrantyQuality";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 

	'WarrantyQuality_name_en',
	'WarrantyQuality_name_ar',
 
	'photo',

   ];

   	 



}
