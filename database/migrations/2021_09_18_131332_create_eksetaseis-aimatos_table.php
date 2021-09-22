<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEksetaseisAimatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eksetaseis-aimatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('perigrafi');
            $table->integer('quantity');
            $table->string('hmeromhnia-liksis')->nullable();
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
        Schema::dropIfExists('eksetaseis-aimatos');
    }
}
