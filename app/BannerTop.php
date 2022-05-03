<?php
 namespace App;
use Illuminate\Database\Eloquent\Model;
class BannerTop extends Model

{

   protected $table="BannerTop";

   protected $fillable=[

       "id",
  'BannerTop_name_en',
  'yearPrize',

  'BannerTop_name_ar',
  'photo',



   ];


            public function filesss() 
            {
      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','BannerTop');
           }


  public function department_idd() 
            {
      return $this->hasMany('App\whoistarget', 'department_id', 'id')->where('file_type','BannerTop');
           }

     







}

