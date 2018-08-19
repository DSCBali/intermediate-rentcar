<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->integer('nik');
            $table->string('name', 100);
            $table->date('date_of_birth');
            $table->string('phone', 30);
            $table->text('alamat');
            $table->string('gender', 20);
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
        Schema::dropIfExists('clients');
    }
}
