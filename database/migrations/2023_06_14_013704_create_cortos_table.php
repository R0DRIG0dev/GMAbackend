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
        Schema::create('cortos', function (Blueprint $table) {
            $table->bigIncrements('corto_id');
            $table->string('corto_nombre',100);
            $table->string('corto_descripcion',255);
            $table->string('corto_ubicacion',255);
            $table->dateTime('corto_fecha_subida')->default(date("Y-m-d H:i:s"));
            $table->Integer('corto_anio_creacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cortos');
    }
};
