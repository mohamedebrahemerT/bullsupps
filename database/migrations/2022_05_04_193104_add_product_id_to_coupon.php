<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductIdToCoupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coupon', function (Blueprint $table) {
            //

              $table->integer('department_id')->unsigned()->nullable();
             $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');  

                     $table->integer('product_id')->unsigned()->nullable();
             $table->foreign('product_id')->references('id')->on('productes')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coupon', function (Blueprint $table) {
            //
        });
    }
}
