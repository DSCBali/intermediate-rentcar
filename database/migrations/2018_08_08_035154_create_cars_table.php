<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->year('year');
            $table->string('license_plat',12);
            $table->integer('price');
            $table->enum('type',['MANUAL','MATIC']);
            $table->unsignedInteger('brand_id');
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('car_brands')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
