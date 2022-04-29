<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sizes extends Model
{
   protected $table    = 'sizes';
   protected $fillable = [
   	  'id',
      'name_ar',
      'name_en',
      'department_id',
      'is_public',
   ];

public function department_id()
  {
  return $this->hasOne('App\Department','id','department_id');
  }

   public function otherDataForSize_R()
    {
    return $this->hasMany('App\otherDataForSize', 'sizest_id', 'id');
    }


}


 

