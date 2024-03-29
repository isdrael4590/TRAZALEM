<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('permissions_name')->nullable();
            $table->timestamps();
        });

        DB::table('roles_permissions')->insert(
        [
            ['permissions_name' => 'Jefe de servicio'],
            ['permissions_name' => 'Líder de servicio'],
            ['permissions_name' => 'Responsable de Turno'],
            ['permissions_name' => 'Operario de Turno'],
            ['permissions_name' => 'Servicio Técnico'],


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
}
