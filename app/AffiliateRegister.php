<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffiliateRegister extends Model
{
   protected $table="affiliateregister";
   protected $fillable=[
"id",
'firstname',
'lastname',
'email',
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

   ];

   	 



}
