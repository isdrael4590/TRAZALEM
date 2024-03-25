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


        Schema::create('generator_details', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\generator::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(\App\Models\coderumed::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('name_coderumed');
            $table->string('code_coderumed');
            $table->string('ref_qr');
            $table->string('package_wrap');
            $table->string('type_program');
            $table->date('datatime_expiration');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generator_details');
    }
};
