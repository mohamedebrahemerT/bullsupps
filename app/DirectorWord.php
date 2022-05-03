<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectorWord extends Model
{
   protected $table="directorword";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 

	'DirectorWord_name_en',
	'DirectorWord_name_ar',
 
	'photo',

   ];

   	 



}
