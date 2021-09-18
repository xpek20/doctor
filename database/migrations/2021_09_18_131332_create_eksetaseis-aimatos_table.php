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
            $table->string('siskevasia');
            $table->decimal('quantity');
            $table->date('hmeromhnia-liksis');
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
        Schema::dropIfExists('eksetaseis-aimatos');
    }
}
