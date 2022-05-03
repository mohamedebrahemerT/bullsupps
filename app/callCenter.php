<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class callCenter extends Model

{

   protected $table    = 'callcenter';

   protected $fillable = [

   	  'id',

		'name',

		'phone',

		'day',

		'dateOfcome',

   ];

 

}





 



