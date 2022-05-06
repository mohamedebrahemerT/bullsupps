<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id',
        'name', 
        'provider_name',
'provider_id',
        'email',
         'password',
         'level',
          'phone',
          'code',
          'active',
          'Email_status',
           'admin_status',
           'righttochat',
           'righttoAddDepartment',
           'avatar',
           'country_id',
'city_id',
'stat_id',

'country_id2',
'city_id2',
'stat_id2',

'shapingplace',
'lastname',
'MoreDetailsAboutYourAddress',
'MoreDetailsAboutYourAddress2',
'dname'
    ];

    


    public function other_data_R() {
        return $this->hasMany('App\useruploadpdf', 'email', 'email');
    }

     public function cccc() {
        return $this->hasMany('App\posts', 'user_id', 'id');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function messages()
{
  return $this->hasMany(Message::class);
}

}
