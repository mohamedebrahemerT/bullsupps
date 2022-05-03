<?php
 namespace App;
use Illuminate\Database\Eloquent\Model;
class BannerTopFactory extends Model

{

   protected $table="bannertopfactory";

   protected $fillable=[

       "id",
  'BannerTopFactory_name_en',
  'yearPrize',

  'BannerTopFactory_name_ar',
  'photo',



   ];


            public function filesss() 
            {
      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','BannerTopFactory');
           }

     







}

