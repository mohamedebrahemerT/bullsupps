<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
   protected $table="countries";
   protected $fillable=[
       "id",
        "countries_name_ar",
		"countries_name_en",
		'currency',
		"mob",
		"code",
		"logo",

   ];

   	public function malls_c() {
		return $this->hasMany('App\Mall', 'country_id', 'id');
	}



}
