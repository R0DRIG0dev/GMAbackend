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
        Schema::create('premiaciones', function (Blueprint $table) {
            $table->bigIncrements('premiacion_id');
            $table->bigInteger('premiacion_festival')->unsigned();
            $table->bigInteger('premiacion_categoria')->unsigned();
            $table->bigInteger('premiacion_ganador')->unsigned()->nullable();
        
            $table->foreign('premiacion_festival')->references('festival_id')->on('festivales');  
            $table->foreign('premiacion_categoria')->references('categoria_id')->on('categorias');  
            $table->foreign('premiacion_ganador')->references('corto_id')->on('cortos');      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premiaciones');
    }
};
