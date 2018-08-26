<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['DP','REPAYMENT']);
            $table->integer('amount');
            $table->date('date');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('booking_id');
            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
