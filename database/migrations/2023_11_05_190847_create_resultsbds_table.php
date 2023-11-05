<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsbdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultbds', function (Blueprint $table) {
            $table->id();
            $table->string('name_equip');
            $table->string('l_equipo');
            $table->string('l_bd');
            $table->string('validation_bd');
            $table->string('name_equip');
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
        Schema::dropIfExists('resultsbd');
    }
}
