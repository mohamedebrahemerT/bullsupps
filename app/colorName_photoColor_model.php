<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colorName_photoColor_model extends Model
{
        	protected $table='colorname_photocolor_model';
    protected $fillable = [
    	'id',
    	'product_id', 
    	'color_name',
    	'color_photo',
    	'modelType',
    	'price_Models',
    ];
}



	

 





