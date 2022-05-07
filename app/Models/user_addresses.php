<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_addresses extends Model
{
    use HasFactory;

     protected $fillable = 
     [
       'Name',
'address',
'Mobile',
'Primary',
'user_id',
'type',
'additional_info',
'city_id',
'street',
'flat',
'floor',
'lat',
'lng',
'gift',
'FirstName',
'LastName',
'RecipientName',
'RecipientMobileNumber',

    ];


    public function city() {
        return $this->hasOne(\App\Models\City::class, 'id', 'city_id');
    }
}
