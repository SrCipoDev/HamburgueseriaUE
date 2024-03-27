<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedidos>
 */
class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_cliente' => $this->faker->firstName(),
            'apellidos_cliente' => $this->faker->lastName(),
            'telefono_cliente' => $this->faker->numerify('############'),
            'direccion_cliente' => $this->faker->streetAddress(),
            'correo_electronico' => $this->faker->unique()->email()
        ];
    }
}
