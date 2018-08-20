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
            $table->integer('booking_code')->unique;
            $table->date('order_date');
            $table->date('rental_date');
            $table->date('return_date');
            $table->integer('price');
            $table->enum('status',['PAID', 'PROCESS']);
            $table->integer('fine');
            $table->integer('employees_id')->unsigned();
            $table->integer('car_id')->unsigned();
            $table->integer('client_id')->unsigned();
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
        Schema::dropIfExists('bookings');
    }
}
