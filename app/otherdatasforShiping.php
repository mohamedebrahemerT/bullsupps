<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otherdatasforShiping extends Model
{
        	protected $table='otherdatasforshiping';
    protected $fillable = ['id','city_id', 'input_key','input_value','price'];
}



	

