<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Healthyoption extends Model
{
   protected $table="Healthyoption";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 

	'Healthyoption_name_en',
	'Healthyoption_name_ar',
 
	'photo',

   ];

   	 



}
