<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVelonesSiriggesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('velones-sirigges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('velona');
            $table->integer('quantity');
            $table->integer('used')->nullable();
            $table->integer('remaining')->virtualAs('quantity - used')->nullable();
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
        Schema::dropIfExists('velones-sirigges');
    }
}
