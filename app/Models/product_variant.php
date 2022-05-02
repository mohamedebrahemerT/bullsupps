<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_variant extends Model
{
    use HasFactory;
 protected $table="product_variants";

   protected $fillable=[

       'product_id',
'attribute_id',
'attribute_value_id',
'value_ar',
'value_en',

   ];






}
