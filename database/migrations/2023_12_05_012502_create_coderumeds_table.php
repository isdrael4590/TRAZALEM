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
        Schema::create('coderumeds', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Id del usuario
            $table->string('coderumed_id');
            $table->string('name_coderumed');
            $table->string('join_date_coderumed');
            $table->string('category')->nullable();
            $table->string('area')->nullable();
            $table->string('detalls')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('coderumeds');
    }
};
