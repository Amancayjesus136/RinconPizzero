<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id('id_position');
            $table->string('name_position');
            $table->text('description_position')->nullable();
            $table->integer('status_position');
            $table->timestamps();
        });

        DB::table('positions')->insert([
            ['name_position' => 'Desarrollador de software', 'description_position' => 'Este puesto solo lo tendrá el administrador para poder controlar las configuraciones del sistema.', 'status_position' => 1],
            ['name_position' => 'Dueño', 'description_position' => 'Este puesto solo se podrá analizar cuentas, ingresos, etc. También se podrán generar reportes, crear empleados, modificar carta, asignar permisos y otros.', 'status_position' => 1],
            ['name_position' => 'Socio', 'description_position' => 'Este puesto solo se podrá analizar y generar reportes en general.', 'status_position' => 1],
            ['name_position' => 'Empleado', 'description_position' => 'Este puesto solo se podrá visualizar, generar, modificar y desactivar o activar ventas.', 'status_position' => 1],
            ['name_position' => 'Suscriptor', 'description_position' => 'Este puesto solo podrá recibir promociones de la carta.', 'status_position' => 1],
            ['name_position' => 'Invitado', 'description_position' => 'Este puesto solo está de invitado.', 'status_position' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
