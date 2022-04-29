<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class whoistarget extends Model {
    protected $table    = 'whoistarget';
    protected $fillable = [
       
                'id',
                'relation_id',
                'department_id',
                'product_id',
                'admin_id',
                'file_type'
    ];

    
     

}
