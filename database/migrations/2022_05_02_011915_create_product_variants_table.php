<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();

                     $table->integer('product_id')->unsigned()->nullable();
             $table->foreign('product_id')->references('id')->on('productes')->onDelete('cascade');    

               $table->bigInteger('attribute_id')->unsigned()->nullable();
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

               $table->bigInteger('attribute_value_id')->unsigned()->nullable();
            $table->foreign('attribute_value_id')->references('id')->on('attribute_values')->onDelete('cascade');


          


              $table->string('value_ar');
            $table->string('value_en');

 

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
        Schema::dropIfExists('product_variants');
    }
}
