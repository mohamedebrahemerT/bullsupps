<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{
    protected $table    = 'cats';

   protected $fillable = [

   	  'id',

		'info',
 

   ];
}
