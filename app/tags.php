<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
   protected $table="tags";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 

	'tags_name_en',
	'tags_name_ar',
 
	'photo',

   ];

   	 



}
