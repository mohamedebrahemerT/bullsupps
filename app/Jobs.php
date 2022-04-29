<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
   protected $table="Jobs";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 

	'Jobs_name_en',
	'Jobs_name_ar',
 
	'photo',

   ];

   	 



}
