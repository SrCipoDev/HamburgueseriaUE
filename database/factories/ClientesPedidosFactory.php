<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\clientespedidos>
 */
class clientespedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pedidoIds = range(1, 50); // Genera un array de 1 a 50

        return [
            'fechahora_compra' => $this->faker->dateTime(),
            'id_cliente' => $this->faker->numberBetween(1, 50),
            'id_pedido' => $this->faker->unique()->randomElement($pedidoIds), 
        ];
    }
}

