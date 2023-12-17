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
        Schema::create('coderumed_activity_logs', function (Blueprint $table) {
            $table->id();
            $table->string('coderumed_id')->nullable();
            $table->string('name_coderumed')->nullable();
            $table->string('area')->nullable();
            $table->string('category')->nullable();
            $table->string('detalls')->nullable();
            $table->string('modify_coderumed')->nullable();
            $table->string('operator')->nullable();
            $table->string('date_time_coderumed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('coderumed_activity_logs');
    }
};
