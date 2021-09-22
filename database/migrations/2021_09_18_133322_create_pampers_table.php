<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePampersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pampers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('isogeio')->nullable();
            $table->integer('quantity');
            $table->decimal('timh')->nullable();
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
        Schema::dropIfExists('pampers');
    }
}
