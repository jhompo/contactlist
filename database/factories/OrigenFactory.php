<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrigenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre"       => $this->faker->randomElement(['Landing Page', 'Anuncio', 'Whatsapp']),
            "descripcion"  => $this->faker->sentence(30),
        ];
    }
}
