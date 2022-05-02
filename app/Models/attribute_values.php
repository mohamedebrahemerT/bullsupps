<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attribute_values extends Model
{
    use HasFactory;

     protected $table="attribute_values";

   protected $fillable=[

       "id",

  'attribute_id',
'value_ar',
'value_en',

   ];



}
