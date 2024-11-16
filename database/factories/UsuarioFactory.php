<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Usuarios;
use App\Models\Roles;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Usuarios::class;

    public function definition(): array
    {
        return [
            'usuario_nombre' => $this->faker->name(),
            'usuario_descripcion' => $this->faker->text(),
            'usuario_nombre_creditos' => $this->faker->userName(),
            'usuario_foto_ubicacion' => $this->faker->url(),
            'usuario_contrasenia' => $this->faker->password(),
            'usuario_email' => $this->faker->freeEmail(),
            'usuario_rol' => Roles::factory()
        ];
    }
}
