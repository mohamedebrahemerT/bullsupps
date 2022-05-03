<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class numberAcessWebsite extends Model
{
   protected $table    = 'numberacesswebsite';
   protected $fillable = [
      'id',
      'numberAcess',
      'dateCheck',
      
   ];
 
}


 

