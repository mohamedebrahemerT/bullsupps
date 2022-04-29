<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model
{
       protected $table="search_histories";
   protected $fillable=[
       "id",
       "sreachKayword_name_ar",
       "sreachKayword_name_en",
       "product_id",
       "department_id",
     
     
   ];


}
