<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
   protected $table    = 'models';
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

   public function otherDataForModels_R()
    {
    return $this->hasMany('App\otherDataForModels', 'Modelst_id', 'id');
    }


}


 

