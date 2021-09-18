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
            $table->decimal('quantity');
            $table->decimal('used')->nullable();
            $table->decimal('remaining')->virtualAs('quantity - used')->nullable();
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
