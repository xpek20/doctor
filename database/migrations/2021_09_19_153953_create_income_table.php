<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('entry_date')->nullable();
            $table->decimal('amount', 15, 10)->nullable();
            $table->decimal('amount_b', 15, 10)->nullable();
            $table->string('description')->nullable();
            $table->string('income_category_id')->nullable();
            $table->string('image')->nullable();
            $table->integer('final_amount')->virtualAs('amount + amount_b')->nullable();
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
        Schema::dropIfExists('income');
    }
}
