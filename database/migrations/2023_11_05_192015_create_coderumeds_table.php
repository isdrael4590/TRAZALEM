<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoderumedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coderumeds', function (Blueprint $table) {
            $table->id();
            $table->string('product_code');
            $table->string('name');
            $table->string('category');
            $table->string('area');
            $table->string('detalls');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coderumeds');
    }
}
