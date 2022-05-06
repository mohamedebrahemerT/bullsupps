<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class TakeAtendes extends Model

{

   protected $table    = 'TakeAtendes';

   protected $fillable = [

       	  'id',

          'program_id',

    		'user_id',

    		'place_id',

    		'groupdate',

    	 

    		'date',

    		'groupday',

        'status',

        'PeriodicProgram_id',

        'thenameofprogram',

        'name',

        'FileNo',

	 



   ];

              public function user_idd() 

                      {

        return $this->hasOne('App\user', 'id', 'user_id');

                        } 





               public function program_idd() 

                      {

        return $this->hasOne('App\product', 'id', 'program_id');

                              } 

                   

                    public function place_idd() 

                      {

        return $this->hasOne('App\TradeMark', 'id', 'place_id');

                              } 

 

 

}         



          





 



              