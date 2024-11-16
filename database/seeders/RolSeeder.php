<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Sequence;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles::factory()
        //     ->count(20) // se crean 20 roles
        //     ->hasUsuarios(10) // para cada uno de esos 20 roles habra 10 usuarios
        //     ->create();
        // Roles::factory()
        //     ->count(30)
        //     ->hasUsuarios(5)
        //     ->create();
        // Roles::factory()
        //     ->count(10)
        //     ->hasUsuarios(1)
        //     ->create();

        $losDosTiposDeRoles = Roles::factory()
                ->count(2)
                ->state(new Sequence(
                    ['rol_nombre' => 'administrador'],
                    ['rol_nombre' => 'artista'],
                ))
                ->hasUsuarios(10)
                ->create();

    }
}
