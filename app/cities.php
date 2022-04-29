<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class cities extends Model
{
   protected $table="cities";
   protected $fillable=[
       "id",
        "cities_name_ar",
		"cities_name_en",
		"country_id",
		 'city_id',
     'ShippingRate',

   ];

   function country_id()
   {
   	         return $this->hasOne('App\countries','id','country_id');
   }

   public function other_data_R() {
    return $this->hasMany('App\otherdatasforShiping', 'city_id', 'id');
  }

}
