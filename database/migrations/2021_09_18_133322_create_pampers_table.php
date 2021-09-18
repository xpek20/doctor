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
            $table->decimal('quantity');
            $table->decimal('timh');
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
        Schema::dropIfExists('pampers');
    }
}
