<?php
 namespace App;
use Illuminate\Database\Eloquent\Model;
class photoes extends Model

{

   protected $table="photoes";

   protected $fillable=[

       "id",
  'photoes_name_en',
  'yearPrize',

  'photoes_name_ar',
  'photo',



   ];


            public function filesss() 
            {
      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','HomeSlider');
           }
                public function other_data_R_Add_color_for_slider()
     {
    return $this->hasMany('App\otherDataColorForSlider', 'photoes_id', 'id');
    }
     


     




}

