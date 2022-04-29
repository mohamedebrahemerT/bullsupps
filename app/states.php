<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class states extends Model
{
   protected $table="states";
   protected $fillable=[
       "id",
        "states_name_ar",
		"states_name_en",
    "city_id",
		"country_id",
		 

   ];

    function city_id()
   {
             return $this->hasOne('App\cities','id','city_id');
   }


   function country_id()
   {
   	         return $this->hasOne('App\countries','id','country_id');
   }


}







