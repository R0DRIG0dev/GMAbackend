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
        Schema::create('festivales', function (Blueprint $table) {
            $table->bigIncrements('festival_id');
            $table->string('festival_nombre',50);
            $table->Integer('festival_anio');
            $table->string('festival_descripcion',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('festivales');
    }
};
