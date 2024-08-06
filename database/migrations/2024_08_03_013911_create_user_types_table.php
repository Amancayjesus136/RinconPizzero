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
        Schema::create('user_types', function (Blueprint $table) {
            $table->id('id_user_type');
            $table->string('name_user_type');
            $table->text('description_user_type')->nullable();
            $table->integer('status_user_type');
            $table->timestamps();
        });

        DB::table('user_types')->insert([
            ['name_user_type' => 'Usuario supervisor', 'description_user_type' => 'Este tipo de usuario podrá acceder al sistema principal.', 'status_user_type' => 1],
            ['name_user_type' => 'Usuario regular', 'description_user_type' => 'Este tipo de usuario accede al sistema de suscriptores.', 'status_user_type' => 1],
            ['name_user_type' => 'Usuario invitado', 'description_user_type' => 'Este tipo de usuario no tendrá acceso de nada.', 'status_user_type' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_types');
    }
};
