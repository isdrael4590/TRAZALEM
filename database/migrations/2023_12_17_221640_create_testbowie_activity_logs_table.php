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
        Schema::create('testbowie_activity_logs', function (Blueprint $table) {
            $table->id();
            $table->string('machine_id')->nullable();
            $table->string('lote_machine')->nullable();
            $table->string('lote_bd')->nullable();
            $table->string('validation_bd')->nullable();
            $table->string('observation')->nullable();
            $table->string('modify_testbowie')->nullable();
            $table->string('operator')->nullable();
            $table->string('date_time_testbowie')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testbowie_activity_logs');
    }
};
