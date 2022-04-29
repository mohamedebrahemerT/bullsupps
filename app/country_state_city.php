<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country_state_city extends Model
{                        
	 protected $table="country_state_city";
   protected $fillable=[
       "id",
        "country",
		"state",
    "city",
   ];
   

   


}
