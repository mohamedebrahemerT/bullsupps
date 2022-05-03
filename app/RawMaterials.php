<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMaterials extends Model
{
   protected $table="rawmaterials";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 

	'RawMaterials_name_en',
	'RawMaterials_name_ar',
 
	'photo',

   ];

   	 



}
