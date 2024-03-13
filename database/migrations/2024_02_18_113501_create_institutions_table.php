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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('company_name');
            $table->string('short_name');
            $table->string('company_area');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('state_province')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('imageInstitucion');
            $table->timestamps();
        });

        /*
        DB::table('institutions')->insert(
            [
                ['user_id' => '1'],
                ['company_name' => 'ALVAREZ LARREA EQUIPOS MEDICOS ALEM CIA. LTDA.'],
                ['short_name' => 'ALEM CIA. LTDA.'],
                ['company_area' => 'Venta de equipos médicos'],
                ['address' => 'Gaspar de Carvajal y San gabriel'],
                ['country' => 'Ecuador'],
                ['city' => 'Quito'],
                ['state_province' => 'PICHINCHA'],
                ['postal_code' => '171717.'],
                ['contact_person' => 'Fernando Jacome'],
                ['email' => 'fjacome@alem.com.ec'],
                ['phone_number' => '099999999'],
                ['mobile_number' => '099999999.'],
                ['imageInstitucion' => ''],
              
    
    
            ]);*/

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
};
