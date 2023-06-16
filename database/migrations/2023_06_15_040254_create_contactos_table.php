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
        Schema::create('contactos', function (Blueprint $table) {
            $table->bigIncrements('contacto_id');
            $table->bigInteger('contacto_redes')->unsigned();
            $table->bigInteger('contacto_usuario')->unsigned();
            $table->string('contacto_valor',100);
        
            $table->foreign('contacto_redes')->references('redsocial_id')->on('redes_sociales');  
            $table->foreign('contacto_usuario')->references('usuario_id')->on('usuarios');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
