<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('onoma_sizigou')->nullable();
            $table->string('patronimo_astheni')->nullable();
            $table->string('patronimo_sizigou')->nullable();
            $table->date('birthday_astheni')->nullable();
            $table->date('birthday_sizigou')->nullable();
            $table->string('arithmos_taftotitas_astheni')->nullable();
            $table->string('arithmos_taftotitas_sizigou')->nullable();
            $table->string('epaggelma_astheni')->nullable();
            $table->string('epaggelma_sizigou')->nullable();
            $table->string('topos_gennisis')->nullable();
            $table->date('imeromhnia_eisodou')->nullable();
            $table->string('diagnwsh_eisodou')->nullable();
            $table->date('imeromhnia_eksodou')->nullable();
            $table->string('thesi')->nullable();
            $table->string('dwmatio')->nullable();
            $table->string('prostheta')->nullable();
            $table->string('asfaleia')->nullable();
            $table->string('doctor')->nullable();
            $table->bigInteger('mobile');
            $table->string('address');
            $table->integer('appointment_id')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
