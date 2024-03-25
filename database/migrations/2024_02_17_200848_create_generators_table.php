<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      

        Schema::create('generators', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\machine::class)
            ->nullable()
            ->constrained()
            ->nullOnDelete();
            $table->string('reference');
            $table->date('date');
            $table->string('machine_name');
            $table->integer('lote_machine')->default(0);
            $table->string('lote_biologic');
            $table->integer('temp_machine');
            $table->string('type_program');
            $table->integer('temp_ambiente');
            $table->date('datatime_expiration');
            $table->string('operator');
            $table->tinyInteger('status')->comment('0-En curso /1-Validado /2-Rechazado/3-Falla');
            $table->string('observation');
           
            $table->uuid();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('generatorqrs');
    }
};
