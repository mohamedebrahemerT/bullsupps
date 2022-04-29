<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Coupon extends Model

{

   protected $table    = 'Coupon';

   protected $fillable = [

   	  'id',

      'value',
      'prcentage',
      'status',
      'type',
      'product_id',
      'department_id',



      

   ];



              public function discount($total)

    {

        if ($this->type == 'fixed') {

            return $this->value;

        } elseif ($this->type == 'percent') {

            return round(($this->prcentage / 100) * $total);

        } else {

            return 0;

        }

    }

 

}



 





 



