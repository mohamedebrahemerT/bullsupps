<?php
 namespace App;
use Illuminate\Database\Eloquent\Model;
class BannerTopEN extends Model

{

   protected $table="BannerTopEN";

   protected $fillable=[

       "id",
  'BannerTopEN_name_en',
  'yearPrize',

  'BannerTopEN_name_ar',
  'photo',



   ];


            public function filesss() 
            {
      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','BannerTopEN');
           }

     







}

