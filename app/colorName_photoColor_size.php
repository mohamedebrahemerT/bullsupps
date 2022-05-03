<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colorName_photoColor_size extends Model
{
        	protected $table='colorname_photocolor_size';
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



	

 





