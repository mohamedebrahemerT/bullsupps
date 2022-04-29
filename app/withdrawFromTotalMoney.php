<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class withdrawFromTotalMoney extends Model
{
   protected $table    = 'withdrawFromTotalMoney';
   protected $fillable = [
   	  'id',
     'TheAmountToBeWithdrawn',
'TheGoalOfWithdrawingMoney',
'day',
'dateOfTheAmountToBeWithdrawn',
'Accountant_id',
'name'
      
   ];


    public function Accountant_idd() 
      {
        return $this->hasOne('App\admin', 'id', 'Accountant_id');
       }
 
}


 

