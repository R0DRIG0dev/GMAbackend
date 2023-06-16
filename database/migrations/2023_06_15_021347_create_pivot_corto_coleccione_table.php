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
        Schema::create('cortoColeccion', function (Blueprint $table) {
            $table->bigIncrements('cortcol_id');
            $table->bigInteger('cortcol_coleccion')->unsigned();
            $table->bigInteger('cortcol_corto')->unsigned();
        
            $table->foreign('cortcol_coleccion')->references('coleccion_id')->on('colecciones');  
            $table->foreign('cortcol_corto')->references('corto_id')->on('cortos');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cortoColeccion');
    }
};
