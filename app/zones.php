<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class zones extends Model

{
  
   protected $table="zones";
   protected $fillable=[
   "id",
  'title_name_en',
	'title_name_ar',
	'price',

   ];


   public function statDistrebutionToZonesfun() 
    {

		return $this->hasMany('App\statDistrebutionToZones', 'zone_id', 'id');

	}
   	 







}

