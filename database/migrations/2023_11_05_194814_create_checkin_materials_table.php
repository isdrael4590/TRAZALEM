<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckinMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkin_materials', function (Blueprint $table) {
            $table->id();
            $table->string('ref_checkin');
            $table->string('qr_info');
            $table->string('code_rumed');
            $table->string('description_rumed');
            $table->string('datatime_cicle');
            $table->string('temperature_machine');
            $table->string('type_program');
            $table->string('biologic');
            $table->string('id_machine');
            $table->string('biologic_lote');
            $table->string('operator');
            $table->string('datatime_expiration');
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
        Schema::dropIfExists('checkin_materials');
    }
}
