<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class OrderShareWithAllVendor extends Model

{

   protected $table="OrderShareWithAllVendor";

   protected $fillable=[

       "id",

     'order_id',

	'admin_id',
  'affiliateID'

 

   ];





     function order_idd()

   {

   	         return $this->hasOne('App\Order','id','order_id');

   }



     function admin_idd()

   {

   	         return $this->hasOne('App\admin','id','admin_id');

   }



   	 







}

