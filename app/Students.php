<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
	protected $table='Students';
    protected $fillable = ['first_name', 'last_name'];
}