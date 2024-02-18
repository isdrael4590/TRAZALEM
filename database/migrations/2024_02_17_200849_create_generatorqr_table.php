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
      

        Schema::create('generatorqr', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('ref_qr');
            $table->string('qr_info');
            $table->string('coderumed_id');
            $table->string('name_coderumed');
            $table->string('machine_id');
            $table->string('lote_machine');
            $table->string('lote_biologic');
            $table->string('temp_machine');
            $table->string('type_program');
            $table->string('package_type');
            $table->string('datatime_cycle');
            $table->string('validation_biologic');
            $table->string('temp_ambiente');
            $table->string('datatime_expiration');
            $table->string('operator');
            $table->string('observation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('generatorqr');
    }
};
