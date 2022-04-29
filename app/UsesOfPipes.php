<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsesOfPipes extends Model
{
   protected $table="UsesOfPipes";
   protected $fillable=[
       "id",
     'title_name_en',
	'title_name_ar',
 

	'UsesOfPipes_name_en',
	'UsesOfPipes_name_ar',
 
	'photo',

   ];

   	 



}
