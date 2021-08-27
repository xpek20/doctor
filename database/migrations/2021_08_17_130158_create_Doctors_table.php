<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Doctors', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('onomateponimo')->unique();
            $table->string('email')->unique();
            $table->integer('kinito')->unique();
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
        Schema::dropIfExists('Doctors');
    }
}
