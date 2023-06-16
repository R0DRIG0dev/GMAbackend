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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('usuario_id');
            $table->string('usuario_nombre',50);
            $table->bigInteger('usuario_rol')->unsigned();
            $table->string('usuario_descripcion',255);
            $table->string('usuario_nombre_creditos',50);
            $table->string('usuario_foto_ubicacion',255);
            $table->string('usuario_contrasenia',255);
            $table->string('usuario_email',50);

            $table->foreign('usuario_rol')->references('rol_id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
