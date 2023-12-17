<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsBdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results_bds', function (Blueprint $table) {
            $table->id();
            $table->string('name_equip');
            $table->string('l_equipo');
            $table->string('l_bd');
            $table->string('validation_bd');
            $table->string('operator');
            $table->string('Observacion_bd');
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
        Schema::dropIfExists('results_bds');
    }
}
