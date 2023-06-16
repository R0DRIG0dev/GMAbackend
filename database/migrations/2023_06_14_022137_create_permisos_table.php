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
        Schema::create('permisos', function (Blueprint $table) {
            $table->bigIncrements('permiso_id');
            $table->bigInteger('permiso_accion')->unsigned();
            $table->bigInteger('permiso_rol')->unsigned();
            $table->enum('permiso_activo',['0','1'])->default('0');

            $table->foreign('permiso_rol')->references('rol_id')->on('roles');
            $table->foreign('permiso_accion')->references('accion_id')->on('acciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
