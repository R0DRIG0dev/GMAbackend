<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Cortos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CortoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Cortos::class;

    public function definition(): array
    {
        return [
            'corto_nombre' => fake()->sentence(),
            'corto_descripcion' => fake()->paragraph(),
            'corto_ubicacion' => fake()->url(),
            'corto_fecha_subida' => now(),
            'corto_anio_creacion' => fake()->year('-10 years')
        ];
    }
}
