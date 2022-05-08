<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

              $table->integer('product_id')->unsigned()->nullable();
             $table->foreign('product_id')->references('id')->on('productes')->onDelete('cascade');    
                  $table->integer('user_id')->unsigned()->nullable();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
 
            $table->decimal('rating', 1, 1)->nullable();
             $table->string('review');
             $table->string('name');
             $table->string('email');
            
 
 
 


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
        Schema::dropIfExists('reviews');
    }
}
