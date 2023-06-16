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
        Schema::create('creditos', function (Blueprint $table) {
            $table->bigIncrements('credito_id');
            $table->bigInteger('credito_corto')->unsigned();
            $table->bigInteger('credito_area')->unsigned();
            $table->bigInteger('credito_usuario')->unsigned()->nullable();
            $table->string('credito_no_usuario',50)->nullable();
        
            $table->foreign('credito_usuario')->references('usuario_id')->on('usuarios');  
            $table->foreign('credito_area')->references('area_id')->on('areas');  
            $table->foreign('credito_corto')->references('corto_id')->on('cortos'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creditos');
    }
};
