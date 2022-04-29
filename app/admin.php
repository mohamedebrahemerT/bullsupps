<?php

namespace App;
use App\admin;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    
    protected $fillable = 
    [
      'id',
              'name',
            'country_id',
            'city_id',
            'stat_id',
            'phone',
            'Whatsappnumber',
            'TheNameOftheStore',
            'NationalID',
            'email',
            'RetypeTheEmailAddress',
            'password',
            'password2',
            
            'postcode',
            'confirmpassword',
            'BusinessRegistrationNumber',
            'VatinformationFie',
            'CommercailRegistrationNo',
            'TaxCard',
            'Acopyofthetaxcard2',
            'Acopyofthetaxcard',
            'LegelNameCompanyName',
            'Companyphonenumber',
            'bankNameList',
            'bankCode',
            'SWIFT',
            'IBAN',
            'AcountName',
            'AcountNumber',
            'WhoWeAre',
            'VisionMission',
            'Objectives',
            'level',
            'TypeOfSale',
              'Sliderpremsion',
'Storepremsion',

        'righttochat',
'righttoAddDepartment','level','percentage','password2',
'RentValue','moneyStatuspercentage',
'Status',
'norighttochat',
'AcountCode',
'surfID',
'whoPayTax',
'avatar',
'Address1',
'desc_name_ar',
'desc_name_en',

//////////////////////////////

'firstname',
'lastname',
 
'telephone',
'company',
'website',
'tax',
'payment',
'cheque',
'paypal',
'bank_name',
'bank_branch_number',
'bank_swift_code',
'bank_account_name',
'bank_account_number',
'password',
'VodafoneCash',

    ];

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

         public function filesss() 
         {
      return $this->hasMany('App\filess', 'relation_id', 'id')->where('file_type','admin');
    }

    
}
