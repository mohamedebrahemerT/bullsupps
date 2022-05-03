<?php

 namespace App;

use Illuminate\Database\Eloquent\Model;

class Departmentbanners extends Model



{



   protected $table="departmentbanners";



   protected $fillable=[



       "id",

  'Departmentbanners_name_en',

  'catname',



  'Departmentbanners_name_ar',

  'photo',







   ];





            public function filesss() 

            {

      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','Departmentbanners');

           }

                public function other_data_otherDataDepartmentbanners()

     {

    return $this->hasMany('App\otherDataDepartmentbanners', 'Departmentbanners_id', 'id');

    }

     





     









}



