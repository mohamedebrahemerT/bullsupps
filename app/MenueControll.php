<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenueControll extends Model
{
   protected $table="menuecontroll";
   protected $fillable=[
       "id",
     'admin_name_ar',
     'settings_name_ar',
     'admins_name_ar',
     'user_name_ar',
     'vendor_name_ar',
     'company_name_ar',
     'imported_name_ar',
     'Factory_name_ar',
     'Handicraft_name_ar',
     'users_name_ar',
     'WhoWeAre_name_ar',
     'VisionMission_name_ar',
     'Objectives_name_ar',
     'newes_name_ar',
     'counteries_name_ar',
     'cities_name_ar',
     'states_name_ar',
     'departments_name_ar',
     'trademarks_name_ar',
     'manufacturers_name_ar',
     'shipping_name_ar',
     'malls_name_ar',
     'colors_name_ar',
     'sizes_name_ar',
     'weight_name_ar',
     'productes_name_ar',
     'Coupons_name_ar',
     'Marketers_name_ar',
     'Jobs_name_ar',
     'publicPayment_name_ar',
     'MyAcount_name_ar',



      'admin_name_en',
     'settings_name_en',
     'admins_name_en',
     'user_name_en',
     'vendor_name_en',
     'company_name_en',
     'imported_name_en',
     'Factory_name_en',
     'Handicraft_name_en',
     'users_name_en',
     'WhoWeAre_name_en',
     'VisionMission_name_en',
     'Objectives_name_en',
     'newes_name_en',
     'counteries_name_en',
     'cities_name_en',
     'states_name_en',
     'departments_name_en',
     'trademarks_name_en',
     'manufacturers_name_en',
     'shipping_name_en',
     'malls_name_en',
     'colors_name_en',
     'sizes_name_en',
     'weight_name_en',
     'productes_name_en',
     'Coupons_name_en',
     'Marketers_name_en',
     'Jobs_name_en',
     'publicPayment_name_en',
     'MyAcount_name_en',

     'admin_id'
 

   ];

   	 
 public function admin_idd() {
        return $this->hasOne('App\admin', 'id', 'admin_id');
               }


}
