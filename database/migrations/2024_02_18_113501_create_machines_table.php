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
        Schema::create('machines', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('machine_id');
            $table->string('machine_model');
            $table->string('serial');
            $table->string('capacity');
            $table->string('manufacture_name');
            $table->string('manufacture_country')->nullable();
            $table->string('supplier')->nullable();
            $table->string('field_engineer')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('website_url')->nullable();
            $table->string('machine_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('machines');
    }
};
