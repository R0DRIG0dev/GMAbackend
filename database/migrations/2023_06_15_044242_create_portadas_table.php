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
        Schema::create('portadas', function (Blueprint $table) {
            $table->bigIncrements('portada_id');
            $table->bigInteger('portada_corto')->unsigned();
            $table->bigInteger('portada_ilustracion')->unsigned();
            $table->bigInteger('portada_coleccion')->unsigned()->nullable();
            $table->enum('portada_elegida',['0','1'])->default('0');
        
            $table->foreign('portada_coleccion')->references('coleccion_id')->on('colecciones');  
            $table->foreign('portada_ilustracion')->references('ilustracion_id')->on('ilustraciones');  
            $table->foreign('portada_corto')->references('corto_id')->on('cortos'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portadas');
    }
};
