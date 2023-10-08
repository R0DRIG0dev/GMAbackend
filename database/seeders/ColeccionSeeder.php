<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colecciones')->insert([
            'coleccion_nombre' => 'top'
        ]);
        DB::table('colecciones')->insert([
            'coleccion_nombre' => 'stop motion'
        ]);
        DB::table('colecciones')->insert([
            'coleccion_nombre' => 'mano alzada'
        ]);
        DB::table('colecciones')->insert([
            'coleccion_nombre' => 'evoluación'
        ]);
        DB::table('colecciones')->insert([
            'coleccion_nombre' => 'cortos mas cortos'
        ]);  
        DB::table('colecciones')->insert([
            'coleccion_nombre' => '3d'
        ]);
        DB::table('colecciones')->insert([
            'coleccion_nombre' => '+18'
        ]);         
    }
}
