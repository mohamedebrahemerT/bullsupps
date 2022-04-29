<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colorName_photoColor_size extends Model
{
        	protected $table='colorName_photoColor_size';
    protected $fillable = [
    	'id',
    	'product_id', 
    	'color_photo',
    	'color_name',
    	'sizeType',
        'price_size',
    	'price_color',
    ];
}



	

 





