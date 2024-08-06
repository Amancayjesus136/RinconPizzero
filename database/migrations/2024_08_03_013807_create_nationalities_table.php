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
        Schema::create('nationalities', function (Blueprint $table) {
            $table->id('id_nationality');
            $table->string('name_national');
            $table->integer('status_nationality');
            $table->timestamps();
        });

        DB::table('nationalities')->insert([
            ['name_national' => 'Peruano', 'status_nationality' => 1],
            ['name_national' => 'Venezolano', 'status_nationality' => 1],
            ['name_national' => 'Argentino', 'status_nationality' => 1],
            ['name_national' => 'Chileno', 'status_nationality' => 1],
            ['name_national' => 'Ecuatoriano', 'status_nationality' => 1],
            ['name_national' => 'Colombiano', 'status_nationality' => 1],
            ['name_national' => 'Boliviano', 'status_nationality' => 1],
            ['name_national' => 'Uruguayo', 'status_nationality' => 1],
            ['name_national' => 'Paraguayo', 'status_nationality' => 1],
            ['name_national' => 'Brasileño', 'status_nationality' => 1],
            ['name_national' => 'Otros', 'status_nationality' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nationalities');
    }
};
