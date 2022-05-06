<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
 

             $table->string('Name');
             $table->text('address')->nullable();
             $table->text('Mobile')->nullable();
             $table->enum('Primary', 
                [
                     '0',
                      '1',
                 ])->default('0');
             

                  $table->integer('user_id')->unsigned()->nullable();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  

               $table->enum('type', ['Home', 'Work', 'other']);
              
           $table->text('additional_info')->nullable();

            

      
            $table->integer('city_id')->unsigned()->nullable();
             $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade'); 

            $table->string('street')->nullable();
            $table->string('flat')->nullable();
            $table->string('floor')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
          
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
}
