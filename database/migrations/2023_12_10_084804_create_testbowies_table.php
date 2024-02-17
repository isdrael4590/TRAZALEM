<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
            Schema::create('testbowies', function (Blueprint $table) {
                $table->id()->autoIncrement();
                $table->foreignId('user_id')->constrained()->cascadeOnDelete();
                $table->string('machine_id');
                $table->string('lote_machine');
                $table->string('temp_machine');
                $table->string('lote_bd');
                $table->string('date_done_bd');
                $table->string('validation_bd')->nullable();
                $table->string('temp_ambiente');
                $table->string('operator')->nullable();;
                $table->string('observation')->nullable();;
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('testbowies');
    }
};
