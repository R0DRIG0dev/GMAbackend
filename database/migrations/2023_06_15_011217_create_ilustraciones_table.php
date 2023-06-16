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
        Schema::create('ilustraciones', function (Blueprint $table) {
            $table->bigIncrements('ilustracion_id');
            $table->string('ilustracion_nombre',50);
            $table->dateTime('ilustracion_fecha_subida')->default(date("Y-m-d H:i:s"));
            $table->string('ilustracion_ubicacion',255);
            $table->bigInteger('ilustracion_usuario')->unsigned();

            $table->foreign('ilustracion_usuario')->references('usuario_id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ilustraciones');
    }
};
