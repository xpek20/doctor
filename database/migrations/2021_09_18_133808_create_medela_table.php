<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medela', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('kwdikos');
            $table->string('siskevasia');
            $table->integer('quantity');
            $table->integer('isogeio')->nullable();
            $table->integer('orofos')->nullable();
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
        Schema::dropIfExists('medela');
    }
}
