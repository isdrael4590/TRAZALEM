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
            Schema::create('receptionrumeds', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->cascadeOnDelete();
                $table->foreignIdFor(\App\Models\coderumed::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();
                $table->string('code_coderumed');
                $table->string('name_coderumed');
                $table->string('date_reception');
                $table->string('operator');
                $table->string('delivery_staff')->nullable();
                $table->string('type_dirt');
                $table->string('state_rumed')->nullable();;
                $table->string('observation')->nullable();;
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('receptionrumeds');
    }
};
