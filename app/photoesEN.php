<?php
 namespace App;
use Illuminate\Database\Eloquent\Model;
class photoesEN extends Model

{

   protected $table="photoesen";

   protected $fillable=[

       "id",
  'photoesEN_name_en',
  'yearPrize',

  'photoesEN_name_ar',
  'photo',



   ];


            public function filesss() 
            {
      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','HomeSliderEN');
           }

     

 public function other_data_R_Add_color_for_sliderEN()
      {
    return $this->hasMany('App\otherDataColorForSliderEN', 'photoesEN_id', 'id');
      }
     





}

