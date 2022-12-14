<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre"       => $this->faker->randomElement(['Cliente', 'Intermedio', 'Otro']),
            "descripcion"  => $this->faker->sentence(30),
        ];
    }
}
