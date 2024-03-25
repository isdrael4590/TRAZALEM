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
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('testbowie_id')->constrained()->cascadeOnDelete();
            $table->string('machine_name')->nullable();
            $table->string('lote_machine')->nullable();
            $table->string('temp_machine')->nullable();
            $table->string('lote_bd')->nullable();
            $table->string('date_done_bd')->nullable();
            $table->string('validation_bd')->nullable();
            $table->string('temp_ambiente')->nullable();
            $table->string('observation')->nullable();

            $table->string('operator')->nullable();
       
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
