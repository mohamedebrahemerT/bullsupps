<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfterPaymentOrders extends Model {
	protected $table    = 'afterpaymentorders';
	protected $fillable = [
			'id',
			'user_id',
			'name',
			'address',
			'phone',
			'order_date',
	];

		   public function user_idc() {
        return $this->hasOne('App\user', 'id', 'user_id');
    }

      public function order_idc() 
      {
      return $this->hasMany('App\AfterPaymentorder_product', 'order_id', 'id');
    }


}



