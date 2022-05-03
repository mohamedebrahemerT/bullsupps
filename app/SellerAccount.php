<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellerAccount extends Model
{
   protected $table="selleraccount";
   protected $fillable=[
       'TelephoneNumber',
'FirstAndLastName',
'TheNameOftheStore',
'TheOtherEmailThatNominatedyou',
'EmailAddress',
'RetypeTheEmailAddress',
'password',
'City',
'Country',
'postcode',
'personIncharge',
'BusinessRegistrationNumber',
'VatinformationFie',
'TaxCard',
'CommercailRegistrationNo',
'sellerVat',
'LegelNameCompanyName',
'NationalID',
'Address1',
'Address2',
'floorNumber',
'bankNameList',
'bank',
'bankCode',
'SWIFT',
'IBAN',
'ContractStates',
'AcountName',
'AcountNumber',
  
 
	'photo',

   ];

   	 



}
