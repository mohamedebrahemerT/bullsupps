<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_sample extends Model
{
    	protected $table='tbl_sample';
    protected $fillable = ['first_name', 'last_name'];
}
