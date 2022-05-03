<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class statDistrebutionToZones extends Model

{

   protected $table="statdistrebutiontozones";

   protected $fillable=[

       "id",

     'zone_id',
     'city_id',
 



   ];

   public function zone_idd() {

        return $this->hasOne('App\zones', 'id', 'zone_id');

    }

       public function city_idd() {

        return $this->hasOne('App\cities', 'id', 'city_id');

    }








}

