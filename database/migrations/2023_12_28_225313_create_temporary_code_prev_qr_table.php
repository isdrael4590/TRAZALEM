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
        Schema::create('temporary_code_prev_qr', function (Blueprint $table) {
            $table->id();
            $table->string('coderumed_id');
            $table->string('name_coderumed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('temporary_code_prev_qr');
    }
};
