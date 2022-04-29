<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';

    protected $fillable = ['order_id', 'product_id','admin_id','price', 'quantity','Serial','Subtotal'];



 

      public function product_idd() 
              {
        return $this->hasOne('App\Product', 'id', 'product_id');
               }

}
