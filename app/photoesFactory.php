<?php
 namespace App;
use Illuminate\Database\Eloquent\Model;
class photoesFactory extends Model

{

   protected $table="photoesfactory";

   protected $fillable=[

       "id",
  'photoesFactory_name_en',
  'yearPrize',

  'photoesFactory_name_ar',
  'photo',



   ];


            public function filesss() 
            {
      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','HomeSliderFactory');
           }

     







}

