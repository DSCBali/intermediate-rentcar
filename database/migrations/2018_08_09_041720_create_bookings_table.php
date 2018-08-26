<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('booking_code')->unique();
            $table->date('order_date');
            $table->date('rental_date');
            $table->date('return_date');
            $table->integer('price');
            $table->enum('status',['PAID','PROCESS']);
            $table->integer('fine');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('car_id');
            $table->unsignedInteger('client_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('restrict');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
